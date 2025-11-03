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
                        <a onclick="expedition('table')" class="expedition me-md-3 me-sm-2 me-0" data-filter=".delivery-filter">
                            <button type="button" class="swiper-slide ">
                                <i class="fa-solid fa-border-all"></i>
                                <span> Ordenar en mesa </span>
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
                                <span>Para recoger</span>
                            </button>
                        </a>
                        <a class="expedition me-md-3 me-sm-2 me-0" data-filter=".delivery-filter">
                            <button type="button" class="swiper-slide bg-danger text-white"
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapseFiltros" 
                                aria-expanded="false" 
                                aria-controls="collapseFiltros"
                                id="btnFiltros">
                                <i class="bi bi-funnel-fill"></i>
                                <span>Filtar busqueda</span> <i class="bi bi-chevron-down"></i>
                            </button>
                        </a>
                    </nav>
                </div>

                <form method="GET" action="https://demo.food-bank.xyz/search?cuisines%5B0%5D=bangladeshi&amp;expedition=all" id="myForm">
                    <input type="hidden" class="form-control" id="lat" name="lat" value="">
                    <input type="hidden" class="form-control" id="long" name="long" value="">
                    <input type="hidden" id="expedition" name="expedition" value="all ">
                    <!-- acordeon de filtros -->
                    <div class="collapse mt-3" id="collapseFiltros">
                            <div class="row">
                            <div class="col-12 col-sm-3">
                                <div class="form-group filter-search">
                                    <input type="text" name="query" id="comida" placeholder="Buscar por Comida" value="">
                                    <button type="submit" class="lni lni-search-alt"></button>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3">
                                <div class="form-group filter-search">
                                    <input type="text" name="query" id="comida" placeholder="Buscar por Foodic" value="">
                                    <button type="submit" class="lni lni-search-alt"></button>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3">
                                <div class="form-group filter-search">
                                    <input type="text" name="query" id="comida" placeholder="Buscar por ubicación" value="">
                                    <button type="submit" class="lni lni-search-alt"></button>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3">
                                <div class="filter-select">
                                    <div class="dropdown">
                                        <button class="custonDropdown d-flex justify-content-center" 
                                                type="button" 
                                                id="precioDropdown" 
                                                data-bs-toggle="dropdown" 
                                                aria-expanded="false">
                                            Precio
                                        </button>
                                        
                                        <ul class="dropdown-menu w-100 p-3" aria-labelledby="precioDropdown" style="min-width: 250px;">
                                            <div class="mb-3">
                                                <label for="rangePrecio" class="form-label">Rango Máximo de Precio:</label>
                                                
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">$</span>
                                                    <input type="text" 
                                                        class="form-control" 
                                                        id="inputPrecio" 
                                                        value="10.000" 
                                                        readonly> 
                                                </div>
                                                
                                                <input type="range" 
                                                    class="form-range" 
                                                    id="rangePrecio" 
                                                    min="1"        max="10"       step="1"       value="10">    <small class="text-muted">Desliza para seleccionar el precio.</small>
                                            </div>
                                            
                                            <div class="d-flex justify-content-between mt-3">
                                                <button type="button" class="btn btn-outline-secondary btn-sm panel-cancel">Cancelar</button>
                                                <button type="button" class="btn btn-primary btn-sm panel-apply">Aplicar</button>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- 12 -->
                            <div class="col-12 col-sm-4">
                                <label class="text-center">Puntuación</label>
                               <div class="star-rating-interactive d-flex justify-content-center gap-2">
                                    <input type="radio" id="rating-5" name="star-rating" value="5" />
                                    <label for="rating-5" title="5 estrellas">
                                        <i class="bi bi-star-fill"></i>
                                    </label>
                                    
                                    <input type="radio" id="rating-4" name="star-rating" value="4" />
                                    <label for="rating-4" title="4 estrellas">
                                        <i class="bi bi-star-fill"></i>
                                    </label>
                                    
                                    <input type="radio" id="rating-3" name="star-rating" value="3" />
                                    <label for="rating-3" title="3 estrellas">
                                        <i class="bi bi-star-fill"></i>
                                    </label>
                                    
                                    <input type="radio" id="rating-2" name="star-rating" value="2" />
                                    <label for="rating-2" title="2 estrellas">
                                        <i class="bi bi-star-fill"></i>
                                    </label>
                                    
                                    <input type="radio" id="rating-1" name="star-rating" value="1" />
                                    <label for="rating-1" title="1 estrella">
                                        <i class="bi bi-star-fill"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3">
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
                            <div class="col-12 col-sm-3">
                                <div class="dropdown">
                                    <button class="custonDropdown d-flex justify-content-center" type="button" id="distanciaDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        Categorías
                                    </button>
                                    <ul class="dropdown-menu w-100 p-3" aria-labelledby="distanciaDropdown" style="min-width: 250px;">
                                        <div class="mb-3">
                                            <label class="form-label">Buscar categoría</label>
                                            <input type="text" class="form-control mb-2" id="categoriaSearch" placeholder="Buscar...">
                                        </div>
                                        <div class="mb-3" style="max-height: 200px; overflow-y: auto;">
                                            <label class="form-label">Selecciona una o varias categorías</label>
                                            <div id="categorias-list">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="categories[]" value="comida_rapida" id="cat1">
                                                    <label class="form-check-label" for="cat1">Comida rápida</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="categories[]" value="pizzeria" id="cat2">
                                                    <label class="form-check-label" for="cat2">Pizzería</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="categories[]" value="cafeteria" id="cat3">
                                                    <label class="form-check-label" for="cat3">Cafetería</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="categories[]" value="bar" id="cat4">
                                                    <label class="form-check-label" for="cat4">Bar</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="categories[]" value="parrilla" id="cat5">
                                                    <label class="form-check-label" for="cat5">Parrilla</label>
                                                </div>
                                                <!-- Agrega más categorías según sea necesario -->
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-outline-secondary btn-sm panel-cancel">Cancelar</button>
                                            <button type="button" class="btn btn-primary btn-sm panel-apply">Aplicar</button>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-2">
                                <div class="filter-button">
                                    <button type="button">
                                        <a class="clearBtn d-block" href="#limpiar" class="text-danger">
                                            <span>Limpiar</span>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="auth-divide cursor-pointer" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#collapseFiltros" 
                            aria-expanded="false" 
                            aria-controls="collapseFiltros"
                            id="btnFiltros">
                            <span> 
                                Cerrar Filtros
                                <i class="bi bi-chevron-up"></i> 
                            </span>
                        </div>
                    </div>
                </form>
            </div>

            <div class="filter-header d-flex align-items-center justify-content-start">
                <h3>Mostrando 50 resultados en <span class="span">Pitalito</span></h3>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="restaurant/sultans-dine.html" class="restaurant-card">
                        <figure class="figure position-relative">
                            <span style="position: absolute; top: 10px; left: 10px; background: rgba(255,255,255,0.9); color: #1F1F39; padding: 4px 12px; border-radius: 6px; font-weight: 500; font-size: 13px; z-index: 2;">
                                <i class="bi bi-bookmarks"></i> Desayunos y Almuerzos
                            </span>
                            <img class="bestSellingRestaurantsImage" src="storage/1/conversions/sultans-dine-image.jpg" alt="restaurant">
                        </figure>
                        <div class="content">
                            <h4>La Carbonera 
                                <sup style="font-size:14px;" class="text-success">
                                    <i class="bi bi-patch-check-fill"></i>
                                </sup>
                            </h4>
                            <div class="ratings">
                                <p>
                                    <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                    <span>3</span>
                                </p>
                                <p><span>&middot;</span></p>
                                <p>
                                    <span>
                                        <i class="bi bi-chat-square"></i>
                                        <span>25</span>
                                        &middot;
                                    </span>
                                </p>
                                <p class="off">
                                    Cerrado ahora
                                </p>
                            </div>
                            <div class="location">
                                <i class="bi bi-geo-alt" style="color: #1F1F39;"></i>
                                <span>B. Trinidad &middot; Cra 4 #1-23 </span>
                            </div>
                            <div class="location">
                                <i class="bi bi-geo-alt" style="color: #1F1F39;"></i>
                                <span>A 4km &middot; A 10 Min </span>
                            </div>
                            <p class="" style="font-weight: 300; color: #1F1F39; text-transform: none;">
                                Restaurante especializado en carnes a la parrilla. Ambiente familiar y acogedor.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="restaurant/mr-beast-burger.html" class="restaurant-card">
                        <figure class="figure position-relative">
                            <span style="position: absolute; top: 10px; left: 10px; background: rgba(255,255,255,0.9); color: #1F1F39; padding: 4px 12px; border-radius: 6px; font-weight: 500; font-size: 13px; z-index: 2;">
                                <i class="bi bi-bookmarks"></i> 
                                Comidas Rápidas
                            </span>
                            <img class="bestSellingRestaurantsImage" src="storage/2/conversions/mr-beast-burger-image.jpg" alt="restaurant">
                        </figure>
                        <div class="content">
                            <h4>
                                La Mejor Burguer
                                <sup style="font-size:14px;" class="text-success">
                                    <i class="bi bi-patch-check-fill"></i>
                                </sup>
                            </h4>
                            <div class="ratings">
                                <p>
                                    <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                    <span>5</span>
                                </p>
                                <p><span>&middot;</span></p>
                                <p>
                                    <span>
                                        <i class="bi bi-chat-square"></i>
                                        <span>50</span>
                                        &middot;
                                    </span>
                                </p>
                                <p class="on">
                                    Abierto ahora
                                </p>
                            </div>
                            <div class="location">
                                <i class="bi bi-geo-alt" style="color: #1F1F39;" ></i>
                                <span>B. Aguablanca &middot; Cra 1 #5-30</span>
                            </div>
                            <p class="" style="font-weight: 300; color: #1F1F39; text-transform: none;">
                                Restaurante especializado en carnes a la parrilla. Ambiente familiar y acogedor.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="restaurant/starbucks.html" class="restaurant-card">
                        <figure class="figure position-relative">
                            <span style="position: absolute; top: 10px; left: 10px; background: rgba(255,255,255,0.9); color: #1F1F39; padding: 4px 12px; border-radius: 6px; font-weight: 500; font-size: 13px; z-index: 2;">
                                <i class="bi bi-bookmarks"></i> 
                                Jugos y Meriendas
                            </span>
                            <img class="bestSellingRestaurantsImage" src="storage/3/conversions/starbucks-image.jpg" alt="restaurant">
                        </figure>
                        <div class="content">
                            <h4>
                                Tio Rico Jugueria
                                <sup style="font-size:14px;" class="text-success">
                                    <i class="bi bi-patch-check-fill"></i>
                                </sup>
                            </h4>
                            <div class="ratings">
                                <p>
                                    <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                    <span>4</span>
                                </p>
                                <p><span>&middot;</span></p>
                                <p>
                                    <span>
                                        <i class="bi bi-chat-square"></i>
                                        <span>25</span>
                                        &middot;
                                    </span>
                                </p>
                                <p class="on"> abierto ahora </p>
                            </div>
                            <div class="location">
                                <i class="bi bi-geo-alt" style="color: #1F1F39;" ></i>
                                <span>B. Solarte &middot; Cra 3sur #12-26</span>
                            </div>
                            <p class="" style="font-weight: 300; color: #1F1F39; text-transform: none;">
                                Restaurante especializado en carnes a la parrilla. Ambiente familiar y acogedor.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="restaurant/mcdonalds.html" class="restaurant-card">
                            <figure class="figure position-relative">
                            <span style="position: absolute; top: 10px; left: 10px; background: rgba(255,255,255,0.9); color: #1F1F39; padding: 4px 12px; border-radius: 6px; font-weight: 500; font-size: 13px; z-index: 2;">
                                <i class="bi bi-bookmarks"></i> 
                                Pollo Frito
                            </span>
                                <img class="bestSellingRestaurantsImage" src="storage/4/conversions/frisby.jpg" alt="restaurant">
                            </figure>
                            <div class="content">
                                <h4>
                                    Frisby
                                    <sup style="font-size:14px;" class="text-success">
                                        <i class="bi bi-patch-check-fill"></i>
                                    </sup>
                                </h4>
                                <div class="ratings">
                                    <p>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <span>4</span>
                                    </p>
                                    <p><span>&middot;</span></p>
                                    <p>
                                        <span>
                                            <i class="bi bi-chat-square"></i>
                                            <span>40</span>
                                            &middot;
                                        </span>
                                    </p>
                                    <p class="off">
                                        Cerrado ahora
                                    </p>
                                </div>
                                <div class="location">
                                    <i class="bi bi-geo-alt" style="color: #1F1F39;" ></i>
                                    <span>Centro comercial San antonio</span>
                                </div>
                                <p class="" style="font-weight: 300; color: #1F1F39; text-transform: none;">
                                    Restaurante especializado en carnes a la parrilla. Ambiente familiar y acogedor.
                                </p>
                            </div>
                        </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="restaurant/burger-king.html" class="restaurant-card">
                            <figure class="figure position-relative">
                                <span style="position: absolute; top: 10px; left: 10px; background: rgba(255,255,255,0.9); color: #1F1F39; padding: 4px 12px; border-radius: 6px; font-weight: 500; font-size: 13px; z-index: 2;">
                                    <i class="bi bi-bookmarks"></i> 
                                    Arroz Especial
                                </span>
                                <img class="bestSellingRestaurantsImage" src="storage/5/conversions/chino.jpg" alt="restaurant">
                            </figure>
                            <div class="content">
                                <h4>
                                    Como Arroz Nogales
                                    <sup style="font-size:14px;" class="text-success">
                                        <i class="bi bi-patch-check-fill"></i>
                                    </sup>
                                </h4>
                                <div class="ratings">
                                    <p>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <span>3</span>
                                    </p>
                                    <p><span>&middot;</span></p>
                                    <p>
                                        <span>
                                            <i class="bi bi-chat-square"></i>
                                            <span>25</span>
                                            &middot;
                                        </span>
                                    </p>
                                    <p class="off">
                                        Cerrado ahora
                                    </p>
                                </div>
                                <div class="location">
                                    <i class="bi bi-geo-alt" style="color: #1F1F39;" ></i>
                                    <span>B. Nogales &middot; Cra 5 Este #1-10</span>
                                </div>
                                <p class="" style="font-weight: 300; color: #1F1F39; text-transform: none;">
                                    Restaurante especializado en carnes a la parrilla. Ambiente familiar y acogedor.
                                </p>
                            </div>
                        </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="restaurant/gustosa-pasta.html" class="restaurant-card">
                            <figure class="figure position-relative">
                                <span style="position: absolute; top: 10px; left: 10px; background: rgba(255,255,255,0.9); color: #1F1F39; padding: 4px 12px; border-radius: 6px; font-weight: 500; font-size: 13px; z-index: 2;">
                                    <i class="bi bi-bookmarks"></i> 
                                    Restaurante Americano
                                </span>
                                <img class="bestSellingRestaurantsImage" src="storage/6/conversions/gustosa-pasta-image.jpg" alt="restaurant">
                            </figure>
                            <div class="content">
                                <h4>
                                    Ruta 66
                                    <sup style="font-size:14px;" class="text-success">
                                        <i class="bi bi-patch-check-fill"></i>
                                    </sup>
                                </h4>
                                <div class="ratings">
                                    <p>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <span>5</span>
                                    </p>
                                    <p><span>&middot;</span></p>
                                    <p>
                                        <span>
                                            <i class="bi bi-chat-square"></i>
                                            <span>32</span>
                                            &middot;
                                        </span>
                                    </p>
                                    <p class="on">
                                        Abierto ahora
                                    </p>
                                </div>
                                <div class="location">
                                    <i class="bi bi-geo-alt" style="color: #1F1F39;" ></i>
                                    <span>B. Quinche &middot; Cl. 4 #1 A 46</span>
                                </div>
                                <p class="" style="font-weight: 300; color: #1F1F39; text-transform: none;">
                                    Restaurante especializado en carnes a la parrilla. Ambiente familiar y acogedor.
                                </p>
                            </div>
                        </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="restaurant/wham-bam-burrito.html" class="restaurant-card">
                            <figure class="figure position-relative">
                                <span style="position: absolute; top: 10px; left: 10px; background: rgba(255,255,255,0.9); color: #1F1F39; padding: 4px 12px; border-radius: 6px; font-weight: 500; font-size: 13px; z-index: 2;">
                                    <i class="bi bi-bookmarks"></i> 
                                    Gastro Bar
                                </span>
                                <img class="bestSellingRestaurantsImage" src="storage/7/conversions/wham-bam-burrito-image.jpg" alt="restaurant">
                            </figure>
                            <div class="content">
                                <h4>
                                    Como caido del cielo
                                    <sup style="font-size:14px;" class="text-success">
                                        <i class="bi bi-patch-check-fill"></i>
                                    </sup>
                                </h4>
                                <div class="ratings">
                                    <p>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <span>3</span>
                                    </p>
                                    <p><span>&middot;</span></p>
                                    <p>
                                        <span>
                                            <i class="bi bi-chat-square"></i>
                                            <span>25</span>
                                            &middot;
                                        </span>
                                    </p>
                                    <p class="off">
                                        Cerrado ahora
                                    </p>
                                </div>
                                <div class="location">
                                    <i class="bi bi-geo-alt" style="color: #1F1F39;" ></i>
                                    <span>Via al terminal &middot; Cra. 4 #27-185</span>
                                </div>
                                <p class="" style="font-weight: 300; color: #1F1F39; text-transform: none;">
                                    Restaurante especializado en carnes a la parrilla. Ambiente familiar y acogedor.
                                </p>
                            </div>
                        </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a href="restaurant/the-salad-god.html" class="restaurant-card">
                            <figure class="figure position-relative">
                                <span style="position: absolute; top: 10px; left: 10px; background: rgba(255,255,255,0.9); color: #1F1F39; padding: 4px 12px; border-radius: 6px; font-weight: 500; font-size: 13px; z-index: 2;">
                                    <i class="bi bi-bookmarks"></i> 
                                    Desayunos y Almuerzos
                                </span>
                                <img class="bestSellingRestaurantsImage" src="storage/8/conversions/almuerzo.jpg" alt="restaurant">
                            </figure>
                            <div class="content">
                                <h4>
                                    La Sazon Hogareña
                                    <sup style="font-size:14px;" class="text-success">
                                        <i class="bi bi-patch-check-fill"></i>
                                    </sup>
                                </h4>
                                <div class="ratings">
                                    <p>
                                        <i class="fa-solid fa-star" style="color: #fda708cb; font-size: 14px;"></i>
                                        <span>3</span>
                                    </p>
                                    <p><span>&middot;</span></p>
                                    <p>
                                        <span>
                                            <i class="bi bi-chat-square"></i>
                                            <span>25</span>
                                            &middot;
                                        </span> 
                                    </p>
                                    <p class="on">
                                        Abierto ahora
                                    </p>
                                </div>
                                <div class="location">
                                    <i class="bi bi-geo-alt" style="color: #1F1F39;" ></i>
                                    <span>Centro &middot; Cl. 10 #3-34</span>
                                </div>
                                <p class="" style="font-weight: 300; color: #1F1F39; text-transform: none;">
                                    Restaurante especializado en carnes a la parrilla. Ambiente familiar y acogedor.
                                </p>
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
 
