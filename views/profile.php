 <?php 
 if (!isset($_SESSION)){
   session_start();
 }
 if (!isset($_SESSION["name"])){
   header("location:login");
 }
 $file = "assets/data-source/products.json";
 $conn = file_get_contents($file);
 $products = json_decode($conn, true);

 ?>
 
 <!--Main-->
 <div class="container">
      <div class="row d-flex py-5">
        
        <!--Info del perfil-->
        <div class="col-12 col-lg-12 my-3">
          <div class="row d-flex pt-4 my-2">            
            <div class="col-12 col-md-6 col-lg-4 text-center">
            <h1>
              <i class="fas fa-user-circle img-profile noche"></i>
            </h1>
            </div>
            <div class="col-12 col-md-6 my-auto col-lg-8 profile-info">
              <h2 class='my-0 noche'><?=$_SESSION["name"]?> <?=$_SESSION["surname"]?></h2>
              <div class="my-3">
                <p class='my-1'>
                  <i class="fas fa-map-marker-alt"></i>
                  Calle Falsa 123, Córdoba, X5000
                </p>
                <p>
                  <i class="fas fa-mobile-alt"></i>
                  <a href="tel:<?=$_SESSION["phone"]?>"><?=$_SESSION["phone"]?></a>
                </p>
              </div>
            </div>          
          </div>
          <div class="row mt-4">
            <div class="col-12">
              <h4 class='mt-3'>Mis artículos deseados:</h4>
            </div>
          </div>
          <div class="row">
            <?php 
                foreach($products as $key => $product){
                    if($key == 4){
                    break;
                    }
                  require './views/components/single-product.php';
                }
              ?>
          </div>
        </div>
      </div>
    </div>