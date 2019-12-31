<li class="mb-4">
    <div class="row cart-item mx-2 px-2 z-depth-1-half">

        <div class="img-wrapper-cart col-5 col-md-3 col-lg-2">
            <img src="assets/img/products/<?= $product["photos"][0] ?>" alt="" class="cart-prod-img img-fluid rounded-circle bd-piel">
        </div>

        <h4 class="prod-name col-5 col-md-2 col-lg-3"><?= $product["name"] ?></h4>
        <a href="delete-cart-product?id=<?=$product["id"]?>" class="cart-delete rojo col-2 col-md-1 col-lg-1"><i class="fas fa-times"></i></a>

        <div class="md-form form-sm talle col-4 col-md-1 col-lg-1">
            <input type="number" id="form2" class="form-control form-control-sm" value="<?= $product["size"] ?>">
            <label for="form2" class="">Talle</label>
        </div>

        <div class="md-form form-sm cant col-4 col-md-1 col-lg-1">
            <input type="number" id="form3" class="form-control form-control-sm" value="<?= $product["units"] ?>">
            <label for="form3" class="">Cantidad</label>
        </div>

        <h5 class="prod-price verde col-12 col-md-2 col-lg-2">$<?= $product["price"] ?></h5>
    </div>
</li>