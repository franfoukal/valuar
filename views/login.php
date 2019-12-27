<?php
  if ($_POST) {
    
  }
 ?>

<div class="jumbotron bg-image-collar z-depth-5" style="margin: 5vh 10vw">
   <div class="row">
     <!-- Default form login -->
       <form class="text-center bg-white border border-light p-5 mb-4 col-xl-6 offset-xl-3 col-lg-12 justify-content-center z-depth-1-half" action="#!">

           <p class="h4 mb-4">Log In</p>

           <!-- Email -->
           <div class="md-form">
             <input type="email" id="materialLoginFormEmail" class="form-control">
             <label for="materialLoginFormEmail">E-mail</label>
           </div>

           <!-- Password -->
           <div class="md-form">
             <input type="password" id="materialLoginFormPassword" class="form-control">
             <label for="materialLoginFormPassword">Contraseña</label>
           </div>

           <div class="d-flex justify-content-around">
               <div>
                   <!-- Remember me -->
                   <div class="custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                       <label class="custom-control-label" for="defaultLoginFormRemember">Mantenerme conectado</label>
                   </div>
               </div>
           </div>

           <!-- Sign in button -->
           <button class="btn bg-verde btn-block my-4 text-white" type="submit" style="width:80%;margin:auto">Enviar</button>

           <p>
             <!-- Forgot password -->
             <a href="">¿Olvidaste tu contaseña?</a>
           </p>
           <!-- Register -->
           <p>¿No sos miembro?
               <a href="signup">Registrate</a>
           </p>

       </form>
     <!-- Default form login -->
   </div>
</div>
