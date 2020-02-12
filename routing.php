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

$router->get('/v2/product/list/(?:/)?([0-9]+)?(?:/)?([0-9]+)?', function($cant, $page=0){
    $product = new Product();
    $product->paginate($cant, $page);
});

/*  ===================================
*   RUTAS PARA DEMAS ACCIONES
*
*   ===================================
*/

// $router->post('/login', function () {
//     $user = new User(true);
//     $user->login();

// });
$router->post('/signup', function () {
    $user = new User(true);
    $user->create();
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
$router->post('/product/edit/([0-9]+)', function ($id) {
    $product = new Product(true);
    $product->update($id);
});
$router->post('/product/create', function () {
    $product = new Product(true);
    $product->create();
});
$router->get('/cart', function () {
    ViewReturn::setView("shopping-cart");
    include_once("views/template.php");
});
$router->get('/FAQ', function () {
    ViewReturn::setView("FAQ");
    include_once("views/template.php");
});
$router->get('/contact', function () {
    ViewReturn::setView("contact");
    include_once("views/template.php");
});
$router->get('/signup', function () {
    ViewReturn::setView("signup");
    include_once("views/template.php");
});
$router->all('/login', function () {
    ViewReturn::setView("login");
    include_once("views/template.php");
});
$router->post('/authorize', function(){
    $user = new User(true);
    $user->login('/valuar/welcome');
});
$router->get('/profile', function(){
    ViewReturn::setView("profile");
    include_once("views/template.php");
});

$router->get('/logout', function () {
    setcookie('token', '', -1);
    header('Location: /valuar/home');
});
$router->get('/welcome', function () {
    ViewReturn::setView("welcome");
    include_once("views/template.php");
});



$router->get('/table-test(?:/)?([0-9]+)?', function ($page = 0) {
    ViewReturn::setView("table-test", ['page' => $page]);
    include_once("views/template.php");
});
$router->get('/addProduct', function () {
    ViewReturn::setView("addProduct");
    include_once("views/template.php");
});
$router->post('/edit-product', function () {
    ViewReturn::setView("addProduct");
    include_once("views/template.php");
});

$router->get('/product-list(?:/)?([0-9]+)?', function($page=0){
    ViewReturn::setView("product-list", ['page' => $page]);
    include_once("views/template.php");
});

$router->post('/product/add-to-cart', function(){
    $_SESSION['cart'][] = $_POST['cart'];
    header("Location: /valuar/cart");
});

$router->get('/delete-cart-product/([0-9]+)', function ($id) {
    array_splice($_SESSION['cart'], $id,1);
    header("Location: /valuar/cart");
});



$router->add('/.*', function () {
    echo '<h1>404 - El sitio solicitado no existe</h1>';
    http_response_code(404);
});



$router->route();

?>
