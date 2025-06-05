<!DOCTYPE html>
<html>
<head>
    <?php include 'head.php'; ?>
</head>
<body>
    <!-- <audio id="myAudio1">
        <source src="beep.mp3" type="audio/mpeg">
    </audio> -->
    <!-- Botón flotante con texto encima -->
    <div class="floating-btn-container">
        <span class="floating-label">Foodic Guía</span>
        <button class="btn rounded-circle shadow floating-btn flotante-orden-guiada">
            <i class="bi bi-person-raised-hand"></i>
        </button>
    </div>

    <div id="main-wrapper">
        <!--========== HEADER PART START ===========-->
        <?php include 'header.php'; ?>   
        <!--===== HEADER PART END ========-->
        
        <!--======== BANNER PART START ==========-->
        <section class="banner section-gap-90">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7 col-lg-6">

                        <h1 class="banner-title"> Toíto lo sabroso de <span class="span">Pitalito</span>, en un solo lugar</h1>

                        <p class="banner-subtitle"> Del plato a la pantalla: La guía para el buen comer, sin larga espera. </p>
                        <form method="GET" action="search-3.php">
                            <div class="main-search-input">
                                <input type="hidden" id="lat" name="lat" required="" value="">
                                <input type="hidden" id="long" name="long" required="" value="">
                                <input type="hidden" id="expedition" name="expedition" value="all">

                                <div class="banner-search main-search-input-item location">
                                    <div id="autocomplete-container" class="me-auto ms-2 w-100">
                                        <input id="autocomplete-input" type="text" 
                                        placeholder="Buscar Comida o Foodics">
                                    </div>
                                    <a href="javascript:void(0)">
                                        <span id="locationIcon" onclick="getLocation()" class="span">
                                            <i class="bi bi-geo-alt-fill"></i>
                                        </span>
                                    </a>
                                    <button class="btn-buscar-landing" type="submit">Buscar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-12 col-md-5 col-lg-6">
                        <div class="banner-image">
                            <img src="images/seeder/settings/hero2.png" alt="hero" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--======== BANNER PART END ========-->

        <!--========  FEATURE PART START ========-->
        <section class="feature">
            <div class="container">
                <span class="section-subtitle"> Cómo ordenar y consumir en el foodic </span>
                <h2 class="section-title"> En pocos clics y muy fácil  </h2>

                <div class="swiper feature-swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <i class="bi bi-shop" style="color: #EE1D48; font-size: 70px; width: 70px; height: 70px;"></i>
                            <h3> Elige el Foodic en tu zona </h3>
                            <p> Navega por muchos restaurantes y cocinas  </p>
                        </div>
                        <div class="swiper-slide">
                            <i class="bi bi-cart4" style="color: #EE1D48; font-size: 70px; width: 70px; height: 70px;"></i>
                            <h3> Escoge tu comida y paga </h3>
                            <p> Personaliza tu pedido y paga al instante </p>
                        </div>
                        <div class="swiper-slide">
                            <i class="bi bi-joystick" style="color: #EE1D48; font-size: 70px; width: 70px; height: 70px;"></i>
                            <h3> Ve al Foodic a Disfrutar </h3>
                            <p> Avisanos que vas en camino con un toque, ¡y listo!</p>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!--======== FEATURE PART END =======-->

        <!--========  APP PART START ======-->
            <section class="app section-gap-90">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="app-content">
                                <h2>Descarga la App </h2>
                                <p> Haz clic, sientate y disfruta. </p>

                                <nav>
                                    <a href="https://play.google.com/store/apps/details?id=com.inilabs.foodbank" target="_blank">
                                        <img src="frontend/images/play.png" alt="play">
                                    </a>
                                    <a href="https://play.google.com/store/apps/details?id=com.inilabs.foodbank" target="_blank">
                                        <img src="frontend/images/app.png" alt="">
                                    </a>
                                </nav>

                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="app-image">
                                <img src="images/seeder/settings/mockup.png" alt="mockup">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!--========== APP PART END =======-->

        <!--========= TOP COMIDA INICIO ========-->
        <section class="category section-gap-66">
            <div class="container">
                <h2 class="section-title borderd">
                    Top Comida En <label class="span">Pitalito</label>
                    <span class="section-subtitle"> - Del 25 De Mayo Al 31 De Mayo -</span>
                </h2>
                <span class="section-subtitle"> <i class="bi bi-collection"></i> Categorias</span>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <a href="search.html?cuisines%5B0%5D=bangladeshi&amp;expedition=all" class="category-card">
                            <img class="bestSellingCusineImage" src="storage/74/conversions/bangladeshi-image.jpg" alt="category">
                            <h4> De Mar</h4>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                            <a href="search-1.html?cuisines%5B0%5D=chicken&amp;expedition=all" class="category-card">
                                <img class="bestSellingCusineImage" src="storage/81/conversions/chicken-image.jpg" alt="category">
                                <h4> Carnes | Pollo</h4>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <a href="search-2.html?cuisines%5B0%5D=american&amp;expedition=all" class="category-card">
                                <img class="bestSellingCusineImage" src="storage/75/conversions/american-image.jpg" alt="category">
                                <h4> Vegetariana</h4>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <a href="search-3.html?cuisines%5B0%5D=asian&amp;expedition=all" class="category-card">
                                <img class="bestSellingCusineImage" src="storage/76/conversions/asian-image.jpg" alt="category">
                                <h4> China</h4>
                            </a>
                        </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                            <a href="search-4.html?cuisines%5B0%5D=mexican&amp;expedition=all" class="category-card">
                                <img class="bestSellingCusineImage" src="storage/77/conversions/mexican-image.jpg" alt="category">

                                <h4> Mexicana</h4>
                            </a>
                        </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                            <a href="search-5.html?cuisines%5B0%5D=pizza&amp;expedition=all" class="category-card">
                                <img class="bestSellingCusineImage" src="storage/78/conversions/pizza-image.jpg" alt="category">

                                <h4> Pizza</h4>
                            </a>
                        </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                            <a href="search-6.html?cuisines%5B0%5D=burger&amp;expedition=all" class="category-card">
                                <img class="bestSellingCusineImage" src="storage/79/conversions/burger-image.jpg" alt="category">

                                <h4> Hamburguesas</h4>
                            </a>
                        </div>
                                            <div class="col-6 col-md-4 col-lg-3">
                            <a href="search-7.html?cuisines%5B0%5D=dessert&amp;expedition=all" class="category-card">
                                <img class="bestSellingCusineImage" src="storage/80/conversions/dessert-image.jpg" alt="category">

                                <h4> Postres</h4>
                            </a>
                        </div>
                </div>
                <!-- ver todas las comidas de la zona -->
                <div class="text-center mt-4">
                    <a href="search.html?cuisines%5B0%5D=all&amp;expedition=all" class="btn btn-buscar-landing text-white rounded-pill">
                        Ver Todas Las Comidas
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </div>
            </div>
            
        </section>
        <!--========== TOP COMIDA FIN =========-->

        <!--=========  FOODICS + VISITADOS INICIO ========-->
        <section class="restaurant section-gap-66">
            <div class="container">
                <h2 class="section-title borderd">
                    Foodics Más Visitados En <label class="span">Pitalito</label>
                    <span class="section-subtitle"> - Del 25 De Mayo Al 31 De Mayo -</span>
                </h2>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="restaurant/sultans-dine.html" class="restaurant-card">
                            <figure class="figure position-relative">
                                <img class="bestSellingRestaurantsImage" src="storage/1/conversions/sultans-dine-image.jpg" alt="restaurant">
                            </figure>
                            <div class="content">
                                <h4>La Carbonera</h4>
                                <div class="ratings">
                                    <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                    <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                    <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                    <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                    <i class="fa-solid fa-star" style="color: #dbdbdb; font-size: 14px;"></i>
                                    <span>| &nbsp;<i class="bi bi-chat-square"></i> 25 Reseñas</span>
                                </div>
                                <div class="location">
                                    <i class="bi bi-geo-alt" style="color: #1F1F39;"></i>
                                    <span>B. Trinidad | Cra 4 #1-23</span>
                                </div>
                                <p class="off">
                                    Cerrado ahora
                                </p>
                                
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="restaurant/mr-beast-burger.html" class="restaurant-card">
                            <figure class="figure position-relative">
                                <img class="bestSellingRestaurantsImage" src="storage/2/conversions/mr-beast-burger-image.jpg" alt="restaurant">
                            </figure>
                            <div class="content">
                                <h4>La Mejor Burguer</h4>
                                <div class="ratings">
                                    <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                    <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                    <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                    <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                    <i class="fa-solid fa-star" style="color: #dbdbdb; font-size: 14px;"></i>
                                    <span>| &nbsp;<i class="bi bi-chat-square"></i> 10 Reseñas</span>
                                </div>
                                <div class="location">
                                    <i class="bi bi-geo-alt" style="color: #1F1F39;" ></i>
                                    <span>B. Aguablanca | Cra 1 #5-30</span>
                                </div>
                                <p class="on"> Abierto ahora </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="restaurant/starbucks.html" class="restaurant-card">
                                <figure class="figure position-relative">
                                    <img class="bestSellingRestaurantsImage" src="storage/3/conversions/starbucks-image.jpg" alt="restaurant">
                                </figure>
                                <div class="content">
                                    <h4>Tio Rico Jugueria</h4>
                                    <div class="ratings">
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #dbdbdb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #dbdbdb; font-size: 14px;"></i>
                                        <span>| &nbsp;<i class="bi bi-chat-square"></i> 10 Reseñas</span>
                                    </div>
                                    <div class="location">
                                        <i class="bi bi-geo-alt" style="color: #1F1F39;" ></i>
                                        <span>B. Solarte | Cra 3sur #12-26</span>
                                    </div>
                                    <p class="on"> abierto ahora </p>
                                </div>
                            </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="restaurant/mcdonalds.html" class="restaurant-card">
                                <figure class="figure position-relative">
                                    <img class="bestSellingRestaurantsImage" src="storage/4/conversions/frisby.jpg" alt="restaurant">
                                </figure>
                                <div class="content">
                                    <h4>Frisby</h4>
                                    <div class="ratings">
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #dbdbdb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #dbdbdb; font-size: 14px;"></i>
                                        <span>| &nbsp;<i class="bi bi-chat-square"></i> 32 Reseñas</span>
                                    </div>
                                    <div class="location">
                                        <i class="bi bi-geo-alt" style="color: #1F1F39;" ></i>
                                        <span>Centro comercial San antonio</span>
                                    </div>
                                    <p class="on"> abierto ahora </p>
                                </div>
                            </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="restaurant/burger-king.html" class="restaurant-card">
                                <figure class="figure position-relative">
                                    <img class="bestSellingRestaurantsImage" src="storage/5/conversions/chino.jpg" alt="restaurant">
                                </figure>
                                <div class="content">
                                    <h4>Como Arroz Nogales</h4>
                                    <div class="ratings">
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #dbdbdb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #dbdbdb; font-size: 14px;"></i>
                                        <span>| &nbsp;<i class="bi bi-chat-square"></i> 20 Reseñas</span>
                                    </div>
                                    <div class="location">
                                        <i class="bi bi-geo-alt" style="color: #1F1F39;" ></i>
                                        <span>B. Nogales | Cra 5 Este #1-10</span>
                                    </div>
                                    <p class="on"> abierto ahora </p>
                                </div>
                            </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="restaurant/gustosa-pasta.html" class="restaurant-card">
                                <figure class="figure position-relative">
                                    <img class="bestSellingRestaurantsImage" src="storage/6/conversions/gustosa-pasta-image.jpg" alt="restaurant">
                                </figure>
                                <div class="content">
                                    <h4>Ruta 66</h4>
                                    <div class="ratings">
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #dbdbdb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #dbdbdb; font-size: 14px;"></i>
                                        <span>| &nbsp;<i class="bi bi-chat-square"></i> 10 Reseñas</span>
                                    </div>
                                    <div class="location">
                                        <i class="bi bi-geo-alt" style="color: #1F1F39;" ></i>
                                        <span>B. Quinche | Cl. 4 #1 A 46</span>
                                    </div>
                                    <p class="off">
                                        cerrado ahora
                                    </p>
                                </div>
                            </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="restaurant/wham-bam-burrito.html" class="restaurant-card">
                                <figure class="figure position-relative">
                                    <img class="bestSellingRestaurantsImage" src="storage/7/conversions/wham-bam-burrito-image.jpg" alt="restaurant">
                                </figure>
                                <div class="content">
                                    <h4>Como caido del cielo Gastro bar</h4>
                                    <div class="ratings">
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #dbdbdb; font-size: 14px;"></i>
                                        <span>| &nbsp;<i class="bi bi-chat-square"></i> 10 Reseñas</span>
                                    </div>
                                    <div class="location">
                                        <i class="bi bi-geo-alt" style="color: #1F1F39;" ></i>
                                        <span>Via al terminal | Cra. 4 #27-185</span>
                                    </div>
                                    <p class="on"> abierto ahora </p>
                                </div>
                            </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="restaurant/the-salad-god.html" class="restaurant-card">
                                <figure class="figure position-relative">
                                    <img class="bestSellingRestaurantsImage" src="storage/8/conversions/almuerzo.jpg" alt="restaurant">
                                </figure>
                                <div class="content">
                                    <h4>Restaurante la Sazon Hogareña</h4>
                                    <div class="ratings">
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <i class="fa-solid fa-star" style="color: #dbdbdb; font-size: 14px;"></i>
                                        <span>| &nbsp;<i class="bi bi-chat-square"></i> 14 Reseñas</span>
                                    </div>
                                    <div class="location">
                                        <i class="bi bi-geo-alt" style="color: #1F1F39;" ></i>
                                        <span>Centro | Cl. 10 #3-34</span>
                                    </div>
                                    <p class="off">
                                        cerrado ahora
                                    </p>
                                </div>
                            </a>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="search.html?cuisines%5B0%5D=all&amp;expedition=all" class="btn btn-buscar-landing text-white rounded-pill">
                        Ver Todos Los Foodics
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </div>
            </div>
        </section>
        <!--=========  FOODICS + VISITADOS FIN ========-->

    <?php include 'footer.php'; ?>