 <?php
    $file = "assets/data-source/cart.json";
    $conn = file_get_contents($file);
    $cart = json_decode($conn, true);
?>

 <main class="main-content">
     <div class="row p-0 m-0">
         <section class="item-list-cart col-12 col-md-12 col-lg-8">
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
                        $resultado += $product["price"];
                    }
                    echo "$" . $resultado;
                 ?>
             </h3>
         </section>

         <aside class="buying-options z-depth-1-half bg-crema col-12 col-md-12 col-lg-4">

             <form class="col-12 col-md-8 col-lg-10 card cart-form" action="index.html" method="post">
                 <h5 class="text-center my-4">DATOS DE COMPRA</h5>
                 <div class="credit-card noche">
                     <i class="fab fa-cc-visa"></i>
                     <i class="fab fa-cc-mastercard"></i>
                     <i class="fab fa-cc-amex"></i>
                 </div>

                 <div class="md-form">
                     <input type="number" id="cardform1" class="form-control">
                     <label for="cardform1" class="">Nº Tarjeta</label>
                 </div>
                 <div class="md-form">
                     <input type="number" pattern="^\d{1,3}$" id="cardform2" class="form-control">
                     <label for="cardform2" class="">CVV</label>
                 </div>

                 <div class="md-form">
                     <input type="text" id="cardform3" class="form-control">
                     <label for="cardform3" class="">Dirección envío</label>
                 </div>

                 <div class="md-form">
                     <input type="text" id="cardform4" class="form-control">
                     <label for="cardform4" class="">Ciudad</label>
                 </div>

                 <button type="button" name="button" class="btn right bg-verde">Siguiente</button>

             </form>
         </aside>
     </div>
 </main>