<?php session_start(); ?>

<div class="alert alert-success text-center my-5" role="alert" style="width:50%;margin:auto">
  Bienvenido <?=$_SESSION['name']?>! <br>
  Visita <a href="profile">tu perfil</a> <br>
  Dirigite a la <a href="home">pagina principal</a>.
</div>
