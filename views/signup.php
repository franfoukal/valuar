<?php

  if ($_SESSION) {
    header('Location: welcome');
    exit();
  }

  // Error counter.
  $errors=[];

  // User data gather.
  $user=[
    'name'=>!empty($_POST['name']) ? $_POST['name'] : '',
    'surname'=>!empty($_POST['surname']) ? $_POST['surname'] : '',
    'email'=>!empty($_POST['email']) ? $_POST['email'] : '',
    'password'=>!empty($_POST['password']) ? $_POST['password'] : '',
    'phone'=>!empty($_POST['phone']) ? $_POST['phone'] : '',
  ];
  $passwordConfirm=!empty($_POST['passwordConfirm']) ? $_POST['passwordConfirm'] : '';
  $rememberMe=!empty($_POST['rememberMe']) ? $_POST['rememberMe'] : 'off';

  if ($_POST) {

    // PASSWORD HASHING
    $user['password']=password_hash($user['password'],PASSWORD_DEFAULT);
    // USERS GET
    $users=json_decode(file_get_contents("./assets/data-source/users.json"), true);

    // Validations
    if (empty($_POST['name'])) {
      $errors[]="El nombre esta vacio.";
    }
    if (empty($_POST['surname'])) {
      $errors[]="El apellido esta vacio.";
    }
    if (empty($_POST['email'])) {
      $errors[]= "El email esta vacio.";
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errors[]="El email no tiene el formato correcto.";
      $user['email']='';
    }
    foreach ($users as $key => $value) {
      if ($_POST["email"] == $value["email"]) {
        $errors[] = "El email ya está registrado";
      }
    }
    if (strlen($_POST['password'])<8) {
      $errors[]= "La contraseña tiene que tener como minimo 8 caracteres.";
    }
    if (!preg_match('/[a-zA-Z]/', $_POST['password'])) {
      $errors[]="La contrasena no contiene ninguna letra.";
    }
    if (!preg_match('/\d/', $_POST['password'])) {
      $errors[]="La contrasena no contiene ningun digito.";
    }
    if (!preg_match('/[^a-zA-Z\d]/', $_POST['password'])) {
      $errors[]="La contrasena no contiene ningun caracter especial.";
    }
    if ($_POST['password']!=$_POST['passwordConfirm']) {
      $errors[]= "Las contraseñas no son iguales.";
    }

    // PROFILE IMG
    if ($_FILES) {
      if ($_FILES['profile']['error']!=0) {
        $errors[]="Hubo un error al subir la imagen";
      }else {
        $ext=pathinfo($_FILES['profile']['name'],PATHINFO_EXTENSION);
        if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
          $errors[]="La imagen debe ser png, jpg o jpeg.";
        }
      }

    }

    // USER CREATION & SUCCESS !!!!
    if (empty($errors)) {
      $users[]=$user;
      file_put_contents("./assets/data-source/users.json", json_encode($users));
      if ($_FILES) {
        move_uploaded_file($_FILES['profile']['tmp_name'], "./assets/img/profiles/".$user['email'].".".$ext);
      }
      if ($rememberMe=='on') {
        setcookie('user', $_POST['email'], time()+60);
      }
      session_start();
      $_SESSION=$user;
      header('Location: welcome');
      exit();
    }
  }
 ?>

 <?php foreach ($errors as $error): ?>
   <!-- USER ALERTS -->
   <div class="alert alert-danger mb-2 text-center" role="alert" style="width:50%;margin:auto">
     <?php echo $error ?>
   </div>
 <?php endforeach; ?>

<!-- CONTENT -->
<div class="jumbotron z-depth-5 bg-image-collar">
   <div class="row mx-0 form-padding">
     <!-- Sign Up form -->
       <form class="form-margin text-center rounded my-5 bg-crema border border-light p-5 col-xl-6 offset-lg-3 col-lg-6 justify-content-center z-depth-1-half" method="post" enctype="multipart/form-data">

           <p class="h2 mb-4">Registrate</p>

           <div class="form-row">
            <div class="col">
                <!-- First name -->
                <div class="md-form">
                    <input type="text" id="name" name="name" class="form-control" value="<?=$user["name"]?>">
                    <label for="name">Nombre</label>
                </div>
            </div>
            <div class="col">
                <!-- Last name -->
                <div class="md-form">
                    <input type="text" id="surname" name="surname" class="form-control" value="<?=$user["surname"]?>">
                    <label for="surname">Apellido</label>
                </div>
            </div>
        </div>

        <!-- E-mail -->
         <div class="md-form mt-0">
             <input type="email" id="email" class="form-control" name="email" value="<?=$user["email"]?> ">
             <label for="email">E-mail</label>
         </div>

         <!-- Password -->
         <div class="md-form">
             <input type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock" name="password">
             <label for="password">Contraseña</label>

         </div>
         <div class="md-form">
             <input type="password" id="passwordConfirm" class="form-control" aria-describedby="passwordHelpBlock" name="passwordConfirm">
             <label for="passwordConfirm">Confirmar contraseña</label>
             <small id="passwordHelpBlock" class="form-text text-muted mb-4">
                 Mínimo 8 caracteres, 1 número y 1 caracter especial.
             </small>
         </div>

         <!-- Phone number -->
         <div class="md-form">
             <input type="number" id="phone" class="form-control" aria-describedby="phoneHelpBlock" name="phone" value="<?=$user["phone"]?>">
             <label for="phone">Número de teléfono</label>
             <small id="phoneHelpBlock" class="form-text text-muted mb-4">
                 Opcional
             </small>
         </div>

         <!-- PROFILE IMG INPUT -->
         <div class="file-field">
           <span>Subir foto de perfil</span>
          <div class="d-flex justify-content-center">
            <div class="btn bg-transparent btn-rounded float-left">
              <input type="file" name="profile">
            </div>
          </div>
          <small class="form-text text-muted mb-4">
              Opcional
          </small>
        </div>

         <!-- Sign up button -->
         <button class="btn bg-verde btn-block my-4 text-white" type="submit" style="width:80%;margin:auto">Registrate</button>

         <!-- Remember me -->
         <div class="custom-control custom-checkbox mb-4">
           <input type="checkbox" class="custom-control-input" id="rememberMe" name="rememberMe">
           <label class="custom-control-label" for="rememberMe">Recordar usuario</label>
         </div>

         <!-- Terms of service -->
         <p>
           Al clickear
             <em>Registrate</em> aceptas nuestros
             <a href="FAQ" target="_blank">términos de servicio</a>
         </p>
       </form>
     <!-- Sign Up form -->
   </div>
</div>
