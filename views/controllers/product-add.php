<?php

function checkIfRepeat(){

if($_POST){
        $carrito = './assets/data-source/cart.json';
        $carritoFile = file_get_contents($carrito);
        $carritoDecode = json_decode($carritoFile, true);
        
        $products = "./assets/data-source/products.json";
        $productsFile = file_get_contents($products, true);
        $productsDecode = json_decode($productsFile, true);

        /*
        *   Cuando se agrega un producto que ya existe, 
        *   o suma una unidad, o no hace nada (ver linea comentada) 
        */
        foreach ($carritoDecode as $cartP) {
            if($cartP["id"] == $_POST["product-id"]){
                return;
            }
        }

        // Pasamos el id del producto via post
        // y hacemos que haga match con el correspondiente
        // producto, luego, se añade al json del carrito.
        foreach($productsDecode as $key => $valor){
            if ($valor["id"] == $_POST["product-id"]){
                $valor["id"] = $_POST["product-id"]; //se agrega id, es importante que tada info tenga, para migrar a DB
                $valor["size"] = 13; // Valores por defecto
                $valor["units"] = 1; // 

                array_push($carritoDecode, $valor);
                $carritoEncode = json_encode($carritoDecode);
                file_put_contents($carrito, $carritoEncode);
                return;
            }

        }
    }
}

    checkIfRepeat();
    $back = $_SERVER["HTTP_REFERER"];
    header("location: $back");
?>