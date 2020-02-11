<?php

if ($_SESSION) {
  session_destroy();
}else {
  session_start();
}

header("location:home");

?>
