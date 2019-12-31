 <?php
    $file = "assets/data-source/cart.json";
    $conn = file_get_contents($file);
    $cart = json_decode($conn, true);
    ?>

 <main class="main-content">
     <div class="row p-0 m-0">
         <section class="item-list-cart col-12 col-md-8 col-lg-8">
             <h1 class="cart-title">Tu carrito</h1>
             <ul class="clearlist">
                 <?php
                    foreach ($cart as $i => $product) {
                        require "components/single-product-cart.php";
                    }
                    ?>
             </ul>

             <h3 class="total-price">Total:
                 <?php
                    $resultado = 0;
                    foreach ($cart as $key => $product) {
                        $resultado += $product["price"] * $product["units"];
                    }
                    echo "$" . $resultado;
                    ?>
             </h3>
         </section>

         <aside class="summary-section z-depth-1-half bg-crema col-12 col-md-4 col-lg-4">

             <div class="container">
                    <div class="row summary">
                        <h5 class="summary-title ">RESUMEN DE COMPRA</h5>
                        <div class="credit-card col-10">
                            <i class="cc-icon fab fa-cc-visa fa-inverse"></i>
                        </div>
        
                        <button type="button" name="button" class="btn right bg-verde summary-btn">Finalizar compra</button>
                    </div>
             </div>
         </aside>
     </div>
 </main>