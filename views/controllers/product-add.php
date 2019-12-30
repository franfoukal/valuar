<?php

if($_POST){
        $carrito = './assets/data-source/cart.json';
        $carritoFile = file_get_contents($carrito);
        $carritoDecode = json_decode($carritoFile, true);
        
        $products = "./assets/data-source/products.json";
        $productsFile = file_get_contents($products, true);
        $productsDecode = json_decode($productsFile, true);


        foreach($productsDecode as $key => $valor){
            
            // Pasamos el id del producto via post
            // y hacemos que haga match con el correspondiente
            // producto, luego, se añade al json del carrito.

            if ($valor["id"] == $_POST["product-id"]){
                $valor["id"] = $_POST["product-id"]; //se agrega id, es importante que tada info tenga, para migrar a DB
                $valor["size"] = 13; // Valores por defecto
                $valor["units"] = 1; // 

                array_push($carritoDecode, $valor);
                $carritoEncode = json_encode($carritoDecode);
                file_put_contents($carrito, $carritoEncode);
            
            }

            // Ojo, los productos del listado tienen id
            // los del carrito no. - ver

        }
    }

    $back = $_SERVER["HTTP_REFERER"];
    header("location: $back");
?>