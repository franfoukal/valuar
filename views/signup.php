<!-- CONTENT -->
<div class="jumbotron bg-image-collar z-depth-5" style="margin: 5vh 10vw">
   <div class="row">
     <!-- Sign Up form -->
       <form class="text-center bg-white border border-light p-5 mb-4 col-xl-6 offset-xl-3 col-lg-12 justify-content-center z-depth-1-half" action="#!">

           <p class="h4 mb-4">Registrate</p>

           <div class="form-row">
            <div class="col">
                <!-- First name -->
                <div class="md-form">
                    <input type="text" id="materialRegisterFormFirstName" class="form-control">
                    <label for="materialRegisterFormFirstName">Nombre</label>
                </div>
            </div>
            <div class="col">
                <!-- Last name -->
                <div class="md-form">
                    <input type="email" id="materialRegisterFormLastName" class="form-control">
                    <label for="materialRegisterFormLastName">Apellido</label>
                </div>
            </div>
        </div>

        <!-- E-mail -->
         <div class="md-form mt-0">
             <input type="email" id="materialRegisterFormEmail" class="form-control">
             <label for="materialRegisterFormEmail">E-mail</label>
         </div>

         <!-- Password -->
         <div class="md-form">
             <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
             <label for="materialRegisterFormPassword">Contraseña</label>

         </div>
         <div class="md-form">
             <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
             <label for="materialRegisterFormPassword">Confirmar contraseña</label>
             <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                 Mínimo 8 caracteres y 1 número.
             </small>
         </div>

         <!-- Phone number -->
         <div class="md-form">
             <input type="password" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
             <label for="materialRegisterFormPhone">Número de teléfono</label>
             <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                 Opcional
             </small>
         </div>

         <!-- Sign up button -->
         <button class="btn bg-verde btn-block my-4 text-white" type="submit" style="width:80%;margin:auto">Registrate</button>

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
