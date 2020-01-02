<?php

  print_r($_COOKIE);

  // Error counter.
  $errors=[];

  // User data gather.
  $user=[
    'email'=>!empty($_POST['email']) ? $_POST['email'] : '',
    'password'=>!empty($_POST['password']) ? $_POST['password'] : ''
  ];
  $rememberMe=!empty($_POST['rememberMe']) ? $_POST['rememberMe'] : 'off';

  if ($_COOKIE) {
    $user['email']=!empty($_COOKIE['user'])?$_COOKIE['user']:'';
  }

  if ($_POST) {

    // PASSWORD HASHING
    $user['password']=password_hash($user['password'],PASSWORD_DEFAULT);
    // USERS GET
    $users=json_decode(file_get_contents("./assets/data-source/users.json"), true);

    // Validations
    if (empty($_POST['email'])) {
      $errors[]= "El email esta vacio.";
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errors[]="El email no tiene el formato correcto.";
      $user['email']='';
    }
    if (empty($_POST['password'])) {
      $errors[]='La contrasena esta vacia.';
    }

    // CHECK USER EXISTANCE
    foreach ($users as $key => $value) {
      if ($_POST["email"] == $value["email"]) {
        if (password_verify($_POST['password'],$value['password']) && empty($errors)) {
          // SUCCESS !!!!
          if ($rememberMe=='on') {
            setcookie('user', $_POST['email'], time()+60);
          }
          session_start();
          $_SESSION=$value;
          header('Location: welcome');
          exit();
        }
      }
    }
    $errors[] = "El email no está registrado o la contrasena es incorrecta.";
    $user['email']='';
  }
 ?>

 <?php foreach ($errors as $error): ?>
   <!-- USER ALERTS -->
   <div class="alert alert-danger mb-2 text-center" role="alert" style="width:50%;margin:auto">
     <?php echo $error ?>
   </div>
 <?php endforeach; ?>

<div class="jumbotron bg-image-collar z-depth-5" style="margin: 5vh 10vw">
   <div class="row">
     <!-- Default form login -->
       <form class="text-center bg-white border border-light p-5 mb-4 col-xl-6 offset-xl-3 col-lg-12 justify-content-center z-depth-1-half" method="POST">

           <p class="h4 mb-4">Log In</p>

           <!-- Email -->
           <div class="md-form">
             <input type="email" id="email" class="form-control" name="email" value="<?=$user['email']?>">
             <label for="email">E-mail</label>
           </div>

           <!-- Password -->
           <div class="md-form">
             <input type="password" id="password" class="form-control" name='password'>
             <label for="password">Contraseña</label>
           </div>

           <div class="d-flex justify-content-around">
               <div>
                   <!-- Remember me -->
                   <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="rememberMe" name="rememberMe">
                       <label class="custom-control-label" for="rememberMe">Recordar usuario</label>
                   </div>
               </div>
           </div>

           <!-- Sign in button -->
           <button class="btn bg-verde btn-block my-4 text-white" type="submit" style="width:80%;margin:auto">Enviar</button>

           <p>
             <!-- Forgot password -->
             <a href="forgottenPassword">¿Olvidaste tu contaseña?</a>
           </p>
           <!-- Register -->
           <p>¿No sos miembro?
               <a href="signup">Registrate</a>
           </p>

       </form>
     <!-- Default form login -->
   </div>
</div>
