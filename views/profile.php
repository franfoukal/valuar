 <?php 
  $config =include_once('./backend/utils/config.php');
  include_once('./backend/utils/cURL.php');
 if (!isset($_COOKIE["token"])){
   header("location: /valuar/login");
 }

  $user = Auth::GetData($_COOKIE['token']);
  $products = json_decode(cURL::get($config->BASE_DIR . '/valuar/v2/product'), true);
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
              <h2 class='my-0 noche'><?=$user->name?> <?=$user->lastname?></h2>
              <div class="my-3">
                <p class='my-1'>
                  <i class="fas fa-map-marker-alt"></i>
                  Calle Falsa 123, Córdoba, X5000
                </p>
                <p>
                  <i class="fas fa-mobile-alt"></i>
                  <a href="tel:<?=$_SESSION["phone"]?>"><?=12312312?></a>
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