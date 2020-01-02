<?php

  // Error counter.
  $errors=[];
  $success=false;

  // User data gather.
  $email=!empty($_POST['email']) ? $_POST['email'] : '';

  if ($_POST) {

    // USERS GET
    $users=json_decode(file_get_contents("./assets/data-source/users.json"), true);

    // Validations
    if (empty($_POST['email'])) {
      $errors[]= "El email esta vacio.";
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errors[]="El email no tiene el formato correcto.";
      $email='';
    }

    // EMAIL SEARCH
    foreach ($users as $key => $value) {
      if ($email == $value['email']) {
        $success=true;
      }
    }

    if ($success==false) {
      $errors[]='El email no existe.';
      $email='';
    }
  }
 ?>

 <?php foreach ($errors as $error): ?>
   <!-- USER ALERTS -->
   <div class="alert alert-danger mb-2 text-center" role="alert" style="width:50%;margin:auto">
     <?php echo $error ?>
   </div>
 <?php endforeach; ?>

 <?php if ($success==true): ?>
    <div class="alert alert-success text-center" role="alert" style="width:50%;margin:auto">
      "Te hemos un enviado un correo a tu casilla para que hagas el recupero de tu contrasena." <br>
      <!-- LOGIN -->
      <p>¿Volver a login?<br>
        <a href="login">Login</a>
      </p>
    </div>
 <?php endif; ?>


<div class="jumbotron bg-image-collar z-depth-5" style="margin: 5vh 10vw">
   <div class="row">
     <!-- Default form login -->
       <form class="text-center bg-white border border-light p-5 mb-4 col-xl-6 offset-xl-3 col-lg-12 justify-content-center z-depth-1-half" method="POST">

           <p class="h4 mb-4">Olvide mi contrasena</p>

           <p class="mb-4">Ingresa tu email para recuperar la contrasena.</p>

           <!-- Email -->
           <div class="md-form">
             <input type="email" id="email" class="form-control" name="email" value="<?=$email?>">
             <label for="email">E-mail</label>
           </div>

           <!-- Sign in button -->
           <button class="btn bg-verde btn-block my-4 text-white" type="submit" style="width:80%;margin:auto">ENVIAR</button>

           <!-- LOGIN -->
           <p>¿Volver a login?
             <a href="login">Login</a>
           </p>
           <!-- Register -->
           <p>¿No sos miembro?
               <a href="signup">Registrate</a>
           </p>

       </form>
     <!-- Default form login -->
   </div>
</div>
