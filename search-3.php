<!DOCTYPE html>
<html>
<head>
    <?php include 'head.php'; ?>
</head>
<body>
    <div id="main-wrapper">
        <!--========== HEADER PART START ===========-->
        <?php include 'header.php'; ?>
        <!--===== HEADER PART END ========-->

            <!--======= RESTAURANT PART START ========-->
    <section class="restaurant section-gap-66">
        <div class="container">
            <div class="filter-group" id="filter">
                <div class="swiper filter-swiper">
                    <nav class="swiper-wrapper d-flex flex-wrap">
                        <a onclick="expedition('all')" class="expedition me-md-3 me-sm-2 me-0" data-filter=".delivery-filter">
                            <button type="button" class="swiper-slide  active ">
                                <i class="fa-solid fa-check-double"></i>
                                <span>Todo</span>
                            </button>
                        </a>
                        <a onclick="expedition('delivery')" class="expedition me-md-3 me-sm-2 me-0" data-filter=".delivery-filter">
                            <button type="button" class="swiper-slide  ">
                                <i class="fa-solid fa-person-biking"></i>
                                <span>Entrega a domicilio</span>
                            </button>
                        </a>
                        <a onclick="expedition('pickup')" class="expedition me-md-3 me-sm-2 me-0" data-filter=".delivery-filter">
                            <button type="button" class="swiper-slide  ">
                                <i class="fa-solid fa-burger"></i>
                                <span>Para llevar</span>
                            </button>
                        </a>
                        <a onclick="expedition('table')" class="expedition me-md-3 me-sm-2 me-0" data-filter=".delivery-filter">
                            <button type="button" class="swiper-slide ">
                                <i class="fa-solid fa-border-all"></i>
                                <span> Ordenar en mesa </span>
                            </button>
                        </a>
                    </nav>
                </div>

                <form method="GET" action="https://demo.food-bank.xyz/search?cuisines%5B0%5D=bangladeshi&amp;expedition=all" id="myForm">
                    <input type="hidden" class="form-control" id="lat" name="lat" value="">
                    <input type="hidden" class="form-control" id="long" name="long" value="">
                    <input type="hidden" id="expedition" name="expedition" value="all ">
                    <div class="filter-options">

                        <div class="filter-search">
                            <button type="submit" class="lni lni-search-alt"></button>
                            <input type="text" name="query" id="search" placeholder="Buscar restaurante." value="">
                        </div>

                        <div class="filter-search location">
                            <a href="javascript:void(0)">
                                <button type="submit" class="lni lni-search-alt" onclick="getLocation()"></button>
                            </a>
                            <div id="autocomplete-container">
                                <input id="autocomplete-input" type="text" placeholder="Buscar por ubicación">
                            </div>
                        </div>

                        <div class="filter-select">
                            <div class="dropdown">
                                <button class="custonDropdown d-flex justify-content-center" type="button" id="zonaDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    Zona
                                </button>
                                <ul class="dropdown-menu w-100 p-3" aria-labelledby="zonaDropdown" style="min-width: 250px;">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-check">
                                                <input class="form-check-input" id="check-5" type="checkbox" name="cuisines[]" value="pizza">
                                                <label class="form-check-label" for="check-5">Urbana</label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-check">
                                                <input class="form-check-input" id="check-4" type="checkbox" name="cuisines[]" value="mexican">
                                                <label class="form-check-label" for="check-4">Rural</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3">
                                        <button type="button" class="btn btn-outline-secondary btn-sm panel-cancel">Cancelar</button>
                                        <button type="button" class="btn btn-primary btn-sm panel-apply">Aplicar</button>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="filter-select">
                            <span class="custonDropdown d-flex justify-content-center">
                                Distancia
                            </span>
                            <ul class=" cDrop">
                                <div class="row radiousTxt">
                                    <p>Radio alrededor del destino seleccionado</p>

                                    <div class="kilo">
                                        <output id="relationship-status-output" class="relationship">100</output>
                                        <span>km</span>
                                    </div>
                                    <input type="range" id="relationship-status-slider" class="relationship-status-slider" min="1" max="100" step="1" name="distance" value="100">
                                </div>

                                <!-- Buttons -->
                                <div class="panel-buttons">
                                    <button class="panel-cancel">Cancelar</button>
                                    <button class="panel-apply">Aplicar</button>
                                </div>
                            </ul>
                        </div>

                        <div class="filter-button">
                            <button type="button">
                                <a class="clearBtn d-block" href="#limpiar" class="text-danger">
                                    <span>Limpiar</span>
                                </a>
                            </button>
                        </div>
                    </div>
                </form>

            </div>

            <div class="filter-header d-flex align-items-center justify-content-start">
                <h3>Se han encontrado 3 resultados</h3>
            </div>

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
            </div>
        </div>
    </section>
    <!--====== RESTAURANT PART END =============-->
    
    <!--======== FOOTER PART START ========-->
    <?php include 'footer.php'; ?>
    <!--======= FOOTER PART END =========-->
 
