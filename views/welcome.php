<?php
  if (!isset($_COOKIE['token']) || empty($_COOKIE['token'])) {
    header('location:home');
  } else{
    $user = Auth::GetData($_COOKIE['token']);
  }
?>

<div class="" style="height:50vh">
  <div class="alert alert-success text-center my-5" role="alert" style="width:50%;margin:auto">
    Bienvenido <?=$user->name?>! <br>
    Visita <a href="/valuar/profile">tu perfil</a> <br>
    Dirigite a la <a href="/valuar/home">pagina principal</a>.
  </div>
</div>
