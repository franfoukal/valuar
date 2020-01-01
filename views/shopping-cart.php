 <?php
    $file = "assets/data-source/cart.json";
    $conn = file_get_contents($file);
    $cart = json_decode($conn, true);


    ?>
 <main class="main-content" id="cart">
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

             <div class="summary">
                 <h5 class="summary-title">RESUMEN DE COMPRA</h5>

                 <div class="credit-card bg-noche crema">
                     <h5 class="cc-title">Tarjeta</h5>
                     <div class="cc-number" v-if="!numberEmpty">
                         <?php
                            for ($i = 0; $i < 4; $i++) {
                                echo '
                                        <span class="cc-dots">
                                            <i class="fas fa-circle"></i>
                                            <i class="fas fa-circle"></i>
                                            <i class="fas fa-circle"></i>
                                            <i class="fas fa-circle"></i>
                                        </span>
                                ';
                            }
                            ?>
                     </div>
                     <div class="cc-number" else>
                         {{cardNumberSeparated}}
                     </div>
                     <div class="nombre">
                         {{name}}
                     </div>
                 </div>

                 <div class="summary-form">
                     <div class="md-form">
                         <input type="text" id="form1" class="form-control" v-model="name">
                         <label for="form1" class="">Nombre en tarjeta</label>
                     </div>
                     <div class="md-form">
                         <input type="number" id="form2" class="form-control" v-model="cardNumber">
                         <label for="form2" class="">Nº tarjeta</label>
                     </div>
                     <div class="sub-form">
                         <div class="col-2">
                             <div class="md-form">
                                 <input type="number" id="formmes" class="form-control">
                                 <label for="formmes" class="">mm</label>
                             </div>
                         </div>
                         <div class="col-2">
                             <div class="md-form">
                                 <input type="number" id="form4" class="form-control">
                                 <label for="form4" class="">aaaa</label>
                             </div>
                         </div>

                         <div class="col-2 cvv">
                             <div class="md-form">
                                 <input type="text" id="form5" class="form-control">
                                 <label for="form5" class="">CVV</label>
                             </div>
                         </div>
                     </div>

                     <div class="md-form">
                         <input type="text" id="form6" class="form-control">
                         <label for="form6" class="">Dirección envío</label>
                     </div>
                     <div class="md-form">
                         <input type="number" id="form7" class="form-control">
                         <label for="form7" class="">Código postal</label>
                     </div>

                 </div>


                 <button type="button" name="button" class="btn bg-verde summary-btn">Finalizar compra</button>
             </div>
     </div>
     </aside>
     </div>
 </main>

 <script>
     var app = new Vue({
         el: '#cart',
         data: {
             message: 'Hello Vue!',
             names: [{
                     name: 'uno'
                 },
                 {
                     name: 'dos'
                 },
                 {
                     name: 'tres'
                 }
             ],
             name: "",
             cardNumber: ""
         },
         computed: {
             numberEmpty: function() {
                 return this.cardNumber != "";
             },
             cardNumberSeparated: function() {
                 if (!this.numberEmpty) {
                     console.log(this.cardNumber.replace(/(\d{3})(\d{3})(\d{3})/, "$1-$2-$3"));
                     return this.cardNumber;//.replace(/(\d{3})(\d{3})(\d{3})/, "$1-$2-$3");

                 } else {
                     return "";
                 }
             }
         }
     })
 </script>