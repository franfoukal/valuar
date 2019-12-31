<?php 
if($_POST){
    $carrito = './assets/data-source/cart.json';
    $carritoFile = file_get_contents($carrito);
    $carritoDecode = json_decode($carritoFile, true);
    
    $products = "./assets/data-source/products.json";
    $productsFile = file_get_contents($products, true);
    $productsDecode = json_decode($productsFile, true);
    
    foreach ($productsDecode as $key => $valor){

        // Es lo mismo que el product-add
        // Solo que acá toma valores del form en la pagina del producto

        if ($valor["id"] == $_POST["product-id"]){   
            $valor["size"] = $_POST["size"];
            $valor["units"] = $_POST["cantidad"];

            // Sobreescribimos el array para que se muestre 
            // unicamente el item a comprar

            $carritoEncode = json_encode(array($valor));
            file_put_contents($carrito, $carritoEncode);
            
        }
    }
}
header("location: cart");
?>