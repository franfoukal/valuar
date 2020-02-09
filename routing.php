<?php

include("backend/core/router/Router.php");
include("backend/core/router/CRUDRouter.php");
include_once("backend/classes/User.php");
include_once("backend/classes/Product.php");
include_once("backend/core/ViewReturn.php");


/*  ===================================
*   RUTAS PARA LOS OBJETOS 
*   Tienen CRUD incorporado 
*   ===================================
*/
$router = new Router('/valuar'); //el directorio base /api/xxxx

$router->all('/v2/user(?:/)?([0-9]+)?', function($id=null){ //con la expresión regular se pueden captar variables
    CRUDRouter::route(new User(), $id); //la id que capta es la de la regex
});

$router->all('/v2/product(?:/)?([0-9]+)?', function ($id = null) { //con la expresión regular se pueden captar variables
    CRUDRouter::route(new Product(), $id); //la id que capta es la de la regex
});

/*  ===================================
*   RUTAS PARA DEMAS ACCIONES 
*   
*   ===================================
*/

$router->post('/login', function () {
    $user = new User();
    $user->login();
});

$router->get('/', function(){
    ViewReturn::setView("home");
    include_once("views/template.php");
});
$router->get('/home', function () {
    ViewReturn::setView("home");
    include_once("views/template.php");
});
$router->get('/product/([0-9]+)?', function ($id=null) {
    ViewReturn::setView("product", ['id' => $id]);
    include_once("views/template.php");
});
$router->get('/cart', function () {
    ViewReturn::setView("shopping-cart");
    include_once("views/template.php");
});

$router->get('/product-list', function(){
    ViewReturn::setView("product-list");
    include_once("views/template.php");
});


$router->add('/.*', function () {

    // header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    echo '<h1>404 - El sitio solicitado no existe</h1>';
    http_response_code(404);
});


$router->route();

?>
