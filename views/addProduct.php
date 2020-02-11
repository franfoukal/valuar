<?php
//VALIDATIONS
include_once("./backend/utils/cURL.php");
// $config = include_once("./backend/utils/config.php");
// $products = json_decode(cURL::get($config->BASE_DIR . '/valuar/v2/product'), true);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_POST['product'] = json_decode($_POST['product'], true);
    $method = 'PUT';
} else {
    $_POST['product'] = [];
    $method = 'POST';
}

?>
<div class="container">


    <div class="w-100 text-center" style="font-size:2rem">
        <a href="/valuar/table-test/" class="h-100"><i class="fas fa-plus-square"></i>LISTADO DE PRODUCTOS</a>
        <!-- Material form subscription -->
        <div class="card jumbotron">

            <h5 class="card-header elegant-color white-text text-center py-4">
                <strong>AGREGAR PRODUCTO</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5">

                <!-- Form -->
                <form class="text-center" style="color: #757575;" action="/valuar/v2/product/<?=$_POST['product']['id']?>" method="<?=$method?>">

                    <!-- Name -->
                    <div class="md-form mt-3">
                        <input type="text" id="name" class="form-control" value="<?= !empty($_POST['product']['name']) ? $_POST['product']['name'] : '' ?>">
                        <label for="name">Name</label>
                    </div>

                    <!--Description-->
                    <div class="md-form">
                        <textarea id="description" class="form-control md-textarea" rows="3"><?= !empty($_POST['product']['description']) ? $_POST['product']['description'] : '' ?></textarea>
                        <label for="description">Description</label>
                    </div>

                    <!-- PRICE -->
                    <div class="md-form">
                        <input type="number" id="price" class="form-control" value="<?= !empty($_POST['product']['price']) ? $_POST['product']['price'] : '' ?>">
                        <label for="price">Precio $</label>
                    </div>

                    <!-- MATERIAL -->
                    <div class="md-form">
                        <input type="text" id="material" class="form-control" value="<?= !empty($_POST['product']['material']) ? $_POST['product']['material'] : '' ?>">
                        <label for="material">Material</label>
                    </div>


                    <!-- Sign up button -->
                    <button class="btn btn-elegant my-4 btn-block" type="submit">AGREGAR</button>


                </form>
                <!-- Form -->

            </div>

        </div>
        <!-- Material form subscription -->
    </div>
</div>
