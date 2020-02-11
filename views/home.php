<?php
    include_once("./backend/utils/cURL.php");
    $products = json_decode(cURL::get('http://localhost/valuar/v2/product'), true);
    
?>

<main class="bg-crema">
<section class="best-sellers container-fluid">
    <div class='container bg-crema'>
    <h1 class=' noche py-4 bg-crema '>Opciones para esta temporada:</h1>

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
                if ($i == 4) {
                    break;
                }
                require "components/single-product.php";
            }

            ?>
        </div>
        <div class="text-center">
            <a class="btn transparent bd-noche noche waves-effect waves-light mx-0 my-4 rounded" href="/valuar/product-list" role="button">Descubrí más »</a>
        </div>
    </div>
    </section>

    <section class="categories py-3 container-fluid bg-crema ">
        <div class="container">
        <h2 class=' h2 noche bg-crema pt-4 my-3'>Categorías:</h2>

            <div class="row">

                <article class=" col-12 col-md-5 col-lg-3">
                    <div class="category z-depth-1-half mr-2 zoom rounded">
                        <a href="/valuar/product-list">
                            <img src="assets/img/ctg/anillos-mod.png" alt="" class="img-fluid ctg-img">
                            <span class="ctg-prompt bg-noche dark">Anillos</span>
                        </a>
                    </div>
                </article>

                <article class=" col-12 col-md-5 col-lg-3">
                    <div class="category z-depth-1-half mr-2 zoom rounded">
                        <a href="/valuar/product-list">
                            <img src="assets/img/ctg/collar-mod.png" alt="" class="img-fluid ctg-img">
                            <span class="ctg-prompt bg-noche dark">Collares</span>
                        </a>
                    </div>
                </article>

                <article class=" col-12 col-md-5 col-lg-3">
                    <div class="category z-depth-1-half mr-2 zoom rounded">
                        <a href="/valuar/product-list">
                            <img src="assets/img/ctg/pulsera-mod.png" alt="" class="img-fluid ctg-img">
                            <span class="ctg-prompt bg-noche dark">Pulseras</span>
                        </a>
                    </div>
                </article>

                <article class="col-12 col-md-5 col-lg-3">
                    <div class="category z-depth-1-half mr-2 zoom rounded">
                        <a href="/valuar/product-list">
                            <img src="assets/img/ctg/aro-mod.png" alt="" class="img-fluid ctg-img zoom">
                            <span class="ctg-prompt bg-noche dark"> Aros</span>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    
    <section class="services py-5 bg-crema" id="services">
        <div class="svc-wrapper py-5 row mx-5">
            <div class="service noche col-12 col-md-4">
                <i class="fas fa-shield-alt"></i>
                <h3>GARANTÍA</h3>
                <p>¡No te preocupes!. Te ofrecemos garantía de 6 meses para asegurar la excelencia del producto. <a className="text-decoration-none" href="FAQ">Saber mas...</a></p>
            </div>
            <div class="service noche col-12 col-md-4">
                <i class="fas fa-credit-card"></i>
                <h3>PAGOS</h3>
                <p>¡Pagá con todos los medios, en cuotas y seguro! Aprovecha ofertas sin interés. <a className="text-decoration-none" href="FAQ">Saber mas...</a></p>
            </div>
            <div class="service noche col-12 col-md-4">
                <i class="fas fa-truck-loading"></i>
                <h3>ENVÍOS</h3>
                <p>¡Enviamos a todo el país! Así de facíl hasta la puerta de tu casa. <a className="text-decoration-none" href="FAQ">Saber mas...</a></p>
            </div>
        </div>
        <h2 class="title display-3 noche py-4 text-center">ELEGÍ VALUAR.</h2>

    </section>
    

    
</main>

