<?php
$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);
$segments = explode('/', $path); //Separa la URL donde van los "/" y los guarda en un array. El 0 es "valuar"

// var_dump($request, $segments[2]);

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
            require __DIR__ . '/views/product.php';
            break;
        case '/valuar/product-list':
            require __DIR__ . '/views/product-list.php';
            break;
        case '/valuar/contact':
            require __DIR__ . '/views/contact.php';
            break;
        case '/valuar/login':
            require __DIR__ . '/views/login.php';
            break;
        case '/valuar/signup':
            require __DIR__ . '/views/signup.php';
            break;
        case '/valuar/FAQ':
            require __DIR__ . '/views/FAQ.php';
            break;
        case '/valuar/profile':
            require __DIR__ . '/views/profile.php';
            break;
        case '/valuar/product-add':
            require __DIR__ . '/views/controllers/product-add.php';
            break;
        case '/valuar/product-buy':
            require __DIR__ . '/views/controllers/product-buy.php';
            break;
        case '/valuar/delete-cart-product':
            require __DIR__ . '/views/controllers/delete-cart-product.php';
            break;
        case '/valuar/welcome':
            require __DIR__ . '/views/welcome.php';
            break;
        case '/valuar/forgottenPassword':
            require __DIR__ . '/views/forgottenPassword.php';
            break;
        case '/valuar/logout':
            require __DIR__ . '/views/logout.php';
            break;
        default:
            http_response_code(404);
            require __DIR__ . '/views/404.php';
            break;
    }
    
    if (!empty($segments)) {
      switch($segments[2]){
        case 'product':

      }
    }
}
?>
