<?php
    $file = "assets/data-source/products.json";
    $conn = file_get_contents($file);
    $products = json_decode($conn, true);
?>

<main class="">
    <section class="services pb-5" id="services">
        <h2 class="title bg-noche crema py-4">Elegí Valuar</h2>
        <div class="svc-wrapper row mx-5">
            <div class="service noche col-12 col-md-4 waves-effect waves-light">
                <i class="fas fa-shield-alt"></i>
                <h3>GARANTÍA</h3>
                <p>¡No te preocupes!. Te ofrecemos garantía de 6 meses para asegurar la excelencia del producto.</p>
            </div>
            <div class="service noche col-12 col-md-4 waves-effect waves-light">
                <i class="fas fa-credit-card"></i>
                <h3>PAGOS</h3>
                <p>¡Pagá con todos los medios, en cuotas y seguro! Aprovecha ofertas sin interés.</p>
            </div>
            <div class="service noche col-12 col-md-4 waves-effect waves-light">
                <i class="fas fa-truck-loading"></i>
                <h3>ENVÍOS</h3>
                <p>¡Enviamos a todo el país! Así de facíl hasta la puerta de tu casa.</p>
            </div>
        </div>
    </section>
    <section class="categories py-5 container-fluid bg-crema bd-piel z-depth-1-half">
        <h2 class="title noche py-4 text-center"> Categorías</h2>
        <div class="container">
            <div class="row">

                <article class=" col-12 col-md-5 col-lg-3">
                    <div class="category z-depth-1-half mr-2 zoom">
                        <img src="assets/img/ctg/anillos-mod.png" alt="" class="img-fluid ctg-img">
                        <span class="ctg-prompt bg-noche dark">Anillos</span>
                    </div>
                </article>

                <article class=" col-12 col-md-5 col-lg-3">
                    <div class="category z-depth-1-half mr-2 zoom">
                        <img src="assets/img/ctg/collar-mod.png" alt="" class="img-fluid ctg-img">
                        <span class="ctg-prompt bg-crema light">Collares</span>
                    </div>
                </article>

                <article class=" col-12 col-md-5 col-lg-3">
                    <div class="category z-depth-1-half mr-2 zoom">
                        <img src="assets/img/ctg/pulsera-mod.png" alt="" class="img-fluid ctg-img">
                        <span class="ctg-prompt bg-noche dark">Pulseras</span>
                    </div>
                </article>

                <article class="col-12 col-md-5 col-lg-3">
                    <div class="category z-depth-1-half mr-2 zoom">
                        <img src="assets/img/ctg/aro-mod.png" alt="" class="img-fluid ctg-img zoom">
                        <span class="ctg-prompt bg-crema light">
                            <span>Aros</span>
                        </span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="complement"></section>

    <section class="best-sellers container">
        <div class="row zoom-child">
        <?php
        /*
        *   VER ESTO
        *   Para renderizar dinamicamente desde un JSON
        *   leer el archivo, almacenarlo en array, usar foreach que el
        *   value sea igual de nombre que el que se usa en el componente
        *   (VER single-product.php)
        *   El $i es para cortar la renderizacion con x productos
        */
        foreach ($products as $i => $product) {
            if($i == 4){
                break;
            }
            require "components/single-product.php";
        }

        ?>
        </div>

    </section>

    <section class="complement"></section>

</main>