<?php
    session_start();
    require_once 'backend/vendor/autoload.php';
    include("routing.php");
    include_once("backend/core/ViewReturn.php");
    $config = include_once("backend/utils/config.php");
?>