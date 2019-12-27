<?php
$request = $_SERVER['REQUEST_URI'];        
$path = parse_url($request, PHP_URL_PATH);
$segments = explode('/', $path); //Separa la URL donde van los "/" y los guarda en un array. El 0 es "valuar"

function isHome($request){
    if($request == '/valuar/' || $request == "" || $request == "/valuar/home"){
        return true;
    } else {
        return false;
    }
}

/*  ROUTER
*   El 'case' tiene el request al view con la URI 
*   que le asignemos. En los href debemos poner solo
*   'home', 'about', 'product', etc.
*/
function router($request)
{
    
    switch ($request) {
        case '/valuar/':
            require __DIR__ . '/views/home.php';
            break;
        case '':
            require __DIR__ . '/views/home.php';    
            break;
        case '/valuar/home':
            require __DIR__ . '/views/home.php';
            break;
        case '/valuar/about':
            require __DIR__ . '/views/about.php';
            break;
        case '/valuar/sp':
            require __DIR__ . '/views/single-product-cart.php';
            break;
        case '/valuar/cart':
            require __DIR__ . '/views/shopping-cart.php';
            break;
        case '/valuar/product':
            require './views/product.php';
            break;
        case '/valuar/product-list':
            require './views/product-list.php';
            break;
        default:
            http_response_code(404);
            require __DIR__ . '/views/404.php';
            break;
    }
}
?>