<header class="<?= isHome($request) ? 'index' : '' ?>">
    <nav class="mb-1 navbar navbar-expand-md navbar-dark <?= isHome($request) ? 'transparent' : 'bg-noche' ?> home">
        <a class="navbar-brand" href="home"><img class="logo img-responsive" src="assets/img/valuar-logo23.svg" alt=""></a>
        <a type="button" class="btn bg-rojo cart" href="cart">
            <i class="fas fa-shopping-cart"></i>
            <span class="badge badge-light">4</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="product-list">
                        <i class="fas fa-ring"></i> Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="FAQ.html">
                        <i class="fas fa-cogs"></i> F.A.Q.</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="contact.html">
                        <i class="fas fa-envelope"></i> Contacto
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i> Perfil </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item waves-effect waves-light" href="login.html">Log In</a>
                        <a class="dropdown-item waves-effect waves-light" href="#">Mi cuenta</a>
                        <a class="dropdown-item waves-effect waves-light" href="#">Log out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <?php
        if(isHome($request)){
            echo '
                     <div class="jumbotron animated fadeInDown slow">
                        <div class="container">
                            <h1 class="display-3 crema text-shadow">Hey! new season is here</h1>
                            <p class="text-white">Nuevos aires, nuevas influencias, todo vertido en la nueva colección. Dedicada a los intrépidos, entrá a ver lo nuevo de esta experiencia conceptual.</p>
                            <p><a class="btn bg-verde waves-effect waves-light btn-lg mt-5" href="product-list" role="button">Descubrí más »</a></p>
                        </div>
                    </div>

                    <a href="#services" class="">
                        <i class="fas fa-angle-double-down arrow crema animated bounce"></i>
                    </a>
            ';
        }
    ?>
   
</header>