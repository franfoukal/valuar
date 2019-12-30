<?php

/*
*   Cuando se hace click en la cruz roja del carrito
*   se modifica el archivo cart.json, el cual ya tiene los ID's al guardarse
*
*/

$file = './assets/data-source/cart.json';
$conn = file_get_contents($file);
$cart = json_decode($conn, true);

if($_GET){
        foreach ($cart as $product => $deleted) {
            if($deleted["id"] == $_GET["id"]){
                unset($cart[$product]);
                $cartEncode = json_encode($cart);
                file_put_contents($file, $cartEncode);
            }
        }
}


$back = $_SERVER["HTTP_REFERER"];
header("location: $back");

?>