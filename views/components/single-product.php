<?php
$product['photos'] = explode(',', $product['photos']);

?>

<div class="col-12 col-md-4 col-lg-3 product">
    <div class="card bg-white p-1 px-2">
        <div class="row">
            <div class="col-5 col-md-12">
                <div class="list-item text-center mb-3">
                    <a href=<?= '/valuar/product/' . $product['id'] ?>>
                        <img class='list-img rounded-lg' src=<?= "/valuar/" . $product['photos'][0] ?> alt="">
                    </a>
                </div>
            </div>
            <div class="col-7 col-md-12">
                <div class="list-item">
                    <div class="row">
                        <div class="col-12">
                            <a href=<?= '/valuar/product/' . $product['id'] ?>>
                                <h4 class='mb-1 noche font-weight-light'>
                                    <?= $product["name"] ?>
                                </h4>
                            </a>
                        </div>
                        <div class='col-12 mb-1 '>
                            <p class=' mb-1 text-muted font-weight-light'>Material: <?= ucfirst($product['material'])?></p>
                            <p class='h6 mb-0 text-muted font-weight-light'>Incrustación: Diamante</p>
                        </div>
                        <div class='col-12 mb-2'>
                            <h5 class='mb-0 mt-1 precio d-flex font-weight-bold'>
                                $ <?= $product["price"] ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <form action="product-add" method="post">
                    <input name="product-id" type="hidden" value="<?= $product['id'] ?>">
                    <button name="agregar" type="submit" class='btn bg-verde text-white w-100 mx-auto'>Añadir al carrito</button>
                </form>
            </div>
        </div>
    </div>
</div>