<?php
    $file = "assets/data-source/products.json";
    $conn = file_get_contents($file);
    $products = json_decode($conn, true);
?>
<div class="container">
    <div class="card p-0 my-3">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-5">
            <div class="card-img mx-auto">
              <!--Carousel Wrapper-->
              <div id="carrusel" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#carrusel" data-slide-to="0" class="active"></li>
                  <li data-target="#carrusel" data-slide-to="1"></li>
                  <li data-target="#carrusel" data-slide-to="2"></li>
                </ol>
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                  <!--First slide-->
                  <div class="carousel-item active">
                    <img class="d-block img-fluid product-img" src="./assets/img/products/<?=$products[0]["photos"][0]?>"
                      alt="First slide">
                  </div>
                 
                  <!--Second slide-->
                  <div class="carousel-item">
                    <img class="d-block img-fluid product-img" src="./assets/img/products/<?=$products[0]["photos"][1]?>"
                      alt="Second slide">
                  </div>
                  
                  <!--Third slide-->
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./assets/img/products/<?=$products[0]["photos"][2]?>"
                      alt="Third slide">
                  </div>
                  
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carrusel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon waves-effect carrusel-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carrusel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon waves-effect carrusel-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
              </div>
              <!--/.Carousel Wrapper-->
            </div>
          </div>
          <div class="col-12 col-md-7 my-auto">
            <div class="row">
              <div class="col-12">
                <h3 class='my-1 item-title card-title'>Anillo <?=$products[0]["name"]?></h3>
                <ol class="breadcrumb font-small p-0">
                  <li class="breadcrumb-item">
                    <a class='' href="#">Joyas</a>
                  </li>
                  <li class="breadcrumb-item active">
                    <a class='' href="#">Colgantes</a>
                  </li>
                </ol>
                <p class='card-text my-1'>Lorem ipsum dolor sit amet,
                consectetur adipisicing elit.
                Id laboriosam cupiditate magnam provident
                tempore tempora facilis dicta minima nesciunt eveniet.
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h3 class='h3 amount plain-text my-3 mx-auto'>$ <span id='precio'><?=$products[0]["price"]?></span></h3>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <form action="">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-4 d-flex flex-direction-column justify-content-center">
                        <label class='my-auto' for="talle">
                          <span>Talle: </span>
                        </label>
                      </div>
                      <div class="col-8 text-center">
                      <select class='custom-select talle-select' name="talle" id="talle">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option class='disabled bg-noche piel' value="">S</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option class='disabled bg-noche piel' value="">M</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option class='disabled piel bg-noche piel' value="">L</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                      </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row my-auto">
                      <div class="col-4 d-flex flex-direction-column justify-content-center">
                        <label class='my-auto' for="cantidad">
                          <span>Cantidad: </span>
                        </label>
                      </div>
                      <div class="col-8">
                        <div class="row mx-1">
                          <div class="col-4">
                            <button class='form-control waves-effect bg-crema cantidad'>
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                          <div class="col-4">
                            <input class='cantidad disabled text-center form-control' min='1' value='1' type="number" name="cantidad" id="cantidad">
                          </div>
                          <div class="col-4">
                            <button class='form-control waves-effect bg-crema text-center cantidad'>
                              <i class="fas fa-plus"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6 my-1">
                <button class='btn btn-block bg-verde'>Comprar ahora</button>
              </div>
              <div class="col-12 col-md-6 my-1">
                <button class='btn btn-block bg-piel'>añadir a carrito</button>
              </div>
            </div>
          </div>
        </div>
        <div class='my-3 border-top'></div>
        <div class="row">
          <div class="col-12 mb-3">
            <h4>También te puede interesar...</h4>
          </div>
            <?php foreach ($products as $i => $product) {
                    if($i == 4){
                      break;
                    }
                    require "components/single-product.php";
                  } ?>
        </div>
      </div>
    </div>
  </div>