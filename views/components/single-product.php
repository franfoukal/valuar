<div class="col-12 col-md-4 col-lg-3 product">
    <div class="card bg-white p-1">
        <div class="row">
            <div class="col-5 col-md-12">
                <div class="list-item text-center mb-3">
                    <a href="<?php echo 'product?id=' . $product["id"]?>">
                        <img class='list-img rounded-lg' src=<?php echo './assets/img/products/' . $product["photos"][0]?> alt="">
                    </a>
                </div>
            </div>
            <div class="col-7 col-md-12">
                <div class="list-item text-left">
                    <a href="product">
                        <h4 class='mb-3 noche'>
                            <?= $product["name"] ?>
                        </h4>
                    </a>
                    <h4 class='precio my-4 mb-0'>
                        $<?= $product["price"] ?>
                    </h4>
                </div>
            </div>
            <div class="col-12">
                <form action="product-add" method="post">
                    <input name="product-id" type="hidden" value="<?=$product['id']?>">
                    <button name="agregar" type="submit" class='btn bg-piel w-100 mx-auto'>Agregar al carrito</button>
                </form>
            </div>
            <div class="col-12">
                <a href="<?php echo 'product?id=' . $product["id"]?>">
                    <button class=' noche btn bg-verde w-100 mx-auto'>Comprar ahora</button>
                </a>
            </div>
        </div>
    </div>
</div>