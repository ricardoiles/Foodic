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
                                <span>হোম ডেলিভারি</span>
                            </button>
                        </a>
                        <a onclick="expedition('pickup')" class="expedition me-md-3 me-sm-2 me-0" data-filter=".delivery-filter">
                            <button type="button" class="swiper-slide  ">
                                <i class="fa-solid fa-burger"></i>
                                <span>টেক অয় </span>
                            </button>
                        </a>
                        <a onclick="expedition('table')" class="expedition me-md-3 me-sm-2 me-0" data-filter=".delivery-filter">
                            <button type="button" class="swiper-slide ">
                                <i class="fa-solid fa-border-all"></i>
                                <span> টেবিল অর্ডার </span>
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
                            <input type="text" name="query" id="search" placeholder="রেস্তোরাঁ অনুসন্ধান করুন।" value="">
                        </div>

                        <div class="filter-search location">
                            <a href="javascript:void(0)">
                                <button type="submit" class="lni lni-search-alt" onclick="getLocation()"></button>
                            </a>
                            <div id="autocomplete-container">
                                <input id="autocomplete-input" type="text" placeholder="অবস্থান অনুসারে অনুসন্ধান করুন">
                            </div>
                        </div>

                        <div class="filter-select">
                            <div class="dropdownParent">
                                <span class="custonDropdown d-flex justify-content-center">
                                    Cuisines
                                </span>
                                <ul class="cDrop">
                                    <div class="row checkNew">
                                                                                    <div class="col-xl-6">
                                                <div class="form-group">
                                                                                                        <input id="check-5" type="checkbox" multiple="" name="cuisines[]" value="pizza">
                                                    <label for="check-5">Pizza</label>
                                                </div>
                                            </div>
                                                                                    <div class="col-xl-6">
                                                <div class="form-group">
                                                                                                        <input id="check-4" type="checkbox" multiple="" name="cuisines[]" value="mexican">
                                                    <label for="check-4">Mexican</label>
                                                </div>
                                            </div>
                                                                                    <div class="col-xl-6">
                                                <div class="form-group">
                                                                                                        <input id="check-7" type="checkbox" multiple="" name="cuisines[]" value="dessert">
                                                    <label for="check-7">Dessert</label>
                                                </div>
                                            </div>
                                                                                    <div class="col-xl-6">
                                                <div class="form-group">
                                                                                                        <input id="check-8" type="checkbox" multiple="" name="cuisines[]" value="chicken">
                                                    <label for="check-8">Chicken</label>
                                                </div>
                                            </div>
                                                                                    <div class="col-xl-6">
                                                <div class="form-group">
                                                                                                        <input id="check-6" type="checkbox" multiple="" name="cuisines[]" value="burger">
                                                    <label for="check-6">Burger</label>
                                                </div>
                                            </div>
                                                                                    <div class="col-xl-6">
                                                <div class="form-group">
                                                                                                        <input id="check-1" type="checkbox" multiple="" name="cuisines[]" value="bangladeshi" checked="">
                                                    <label for="check-1">Bangladeshi</label>
                                                </div>
                                            </div>
                                                                                    <div class="col-xl-6">
                                                <div class="form-group">
                                                                                                        <input id="check-3" type="checkbox" multiple="" name="cuisines[]" value="asian">
                                                    <label for="check-3">Asian</label>
                                                </div>
                                            </div>
                                                                                    <div class="col-xl-6">
                                                <div class="form-group">
                                                                                                        <input id="check-2" type="checkbox" multiple="" name="cuisines[]" value="american">
                                                    <label for="check-2">American</label>
                                                </div>
                                            </div>
                                                                            </div>

                                    <!-- Buttons -->
                                    <div class="panel-buttons">
                                        <button class="panel-cancel">বাতিল করুন</button>
                                        <button class="panel-apply">প্রয়োগ করুন</button>
                                    </div>

                                </ul>
                            </div>
                        </div>
                        <div class="filter-select">
                            <span class="custonDropdown d-flex justify-content-center">
                                দূরত্ব রেডিয়াস
                            </span>
                            <ul class=" cDrop">
                                <div class="row radiousTxt">
                                    <p> নির্বাচিত গন্তব্যের চারপাশে ব্যাসার্ধ </p>

                                    <div class="kilo">
                                        <output id="relationship-status-output" class="relationship">100</output>
                                        <span>কিমি </span>
                                    </div>
                                    <input type="range" id="relationship-status-slider" class="relationship-status-slider" min="1" max="100" step="1" name="distance" value="100">
                                </div>

                                <!-- Buttons -->
                                <div class="panel-buttons">
                                    <button class="panel-cancel">বাতিল করুন </button>
                                    <button class="panel-apply">প্রয়োগ করুন</button>
                                </div>
                            </ul>
                        </div>

                        <div class="filter-button">
                            <button type="button">
                                <a class="clearBtn d-block" href="search-8.html" class="text-danger">
                                    <span>পরিষ্কার করুন</span>
                                </a>
                            </button>
                        </div>
                    </div>
                </form>

            </div>

            <div class="filter-header d-flex align-items-center justify-content-start">
                <h3> 3 ফলাফল পাওয়া গেছে</h3>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="restaurant/sultans-dine.html" class="restaurant-card">
            <figure class="figure">
                <img class="bestSellingRestaurantsImage" src="storage/1/conversions/sultans-dine-image.jpg" alt="sultans-dine">
            </figure>
            <div class="content">
                <h4> Sultan’s Dine </h4>
                <div class="ratings">

                                        <svg class="active" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.97191 1.37497C6.4383 0.599986 7.56186 0.599985 8.02825 1.37497L9.15178 3.24189C9.31933 3.5203 9.59263 3.71886 9.90919 3.79218L12.0319 4.28381C12.9131 4.48789 13.2603 5.55646 12.6674 6.23951L11.239 7.88495C11.026 8.13034 10.9216 8.45162 10.9497 8.77535L11.1381 10.9461C11.2163 11.8472 10.3073 12.5076 9.47449 12.1548L7.46819 11.3048C7.16899 11.1781 6.83117 11.1781 6.53197 11.3048L4.52568 12.1548C3.69283 12.5076 2.78386 11.8472 2.86206 10.9461L3.05045 8.77535C3.07855 8.45162 2.97416 8.13034 2.76115 7.88495L1.33279 6.23951C0.739863 5.55646 1.08706 4.48789 1.96824 4.28381L4.09097 3.79218C4.40753 3.71886 4.68083 3.5203 4.84838 3.24189L5.97191 1.37497Z" stroke-width="1.5"></path>
                        </svg>
                                                            <svg class="active" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.97191 1.37497C6.4383 0.599986 7.56186 0.599985 8.02825 1.37497L9.15178 3.24189C9.31933 3.5203 9.59263 3.71886 9.90919 3.79218L12.0319 4.28381C12.9131 4.48789 13.2603 5.55646 12.6674 6.23951L11.239 7.88495C11.026 8.13034 10.9216 8.45162 10.9497 8.77535L11.1381 10.9461C11.2163 11.8472 10.3073 12.5076 9.47449 12.1548L7.46819 11.3048C7.16899 11.1781 6.83117 11.1781 6.53197 11.3048L4.52568 12.1548C3.69283 12.5076 2.78386 11.8472 2.86206 10.9461L3.05045 8.77535C3.07855 8.45162 2.97416 8.13034 2.76115 7.88495L1.33279 6.23951C0.739863 5.55646 1.08706 4.48789 1.96824 4.28381L4.09097 3.79218C4.40753 3.71886 4.68083 3.5203 4.84838 3.24189L5.97191 1.37497Z" stroke-width="1.5"></path>
                        </svg>
                                                            <svg class="active" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.97191 1.37497C6.4383 0.599986 7.56186 0.599985 8.02825 1.37497L9.15178 3.24189C9.31933 3.5203 9.59263 3.71886 9.90919 3.79218L12.0319 4.28381C12.9131 4.48789 13.2603 5.55646 12.6674 6.23951L11.239 7.88495C11.026 8.13034 10.9216 8.45162 10.9497 8.77535L11.1381 10.9461C11.2163 11.8472 10.3073 12.5076 9.47449 12.1548L7.46819 11.3048C7.16899 11.1781 6.83117 11.1781 6.53197 11.3048L4.52568 12.1548C3.69283 12.5076 2.78386 11.8472 2.86206 10.9461L3.05045 8.77535C3.07855 8.45162 2.97416 8.13034 2.76115 7.88495L1.33279 6.23951C0.739863 5.55646 1.08706 4.48789 1.96824 4.28381L4.09097 3.79218C4.40753 3.71886 4.68083 3.5203 4.84838 3.24189L5.97191 1.37497Z" stroke-width="1.5"></path>
                        </svg>
                                                            <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.97191 1.37497C6.4383 0.599986 7.56186 0.599985 8.02825 1.37497L9.15178 3.24189C9.31933 3.5203 9.59263 3.71886 9.90919 3.79218L12.0319 4.28381C12.9131 4.48789 13.2603 5.55646 12.6674 6.23951L11.239 7.88495C11.026 8.13034 10.9216 8.45162 10.9497 8.77535L11.1381 10.9461C11.2163 11.8472 10.3073 12.5076 9.47449 12.1548L7.46819 11.3048C7.16899 11.1781 6.83117 11.1781 6.53197 11.3048L4.52568 12.1548C3.69283 12.5076 2.78386 11.8472 2.86206 10.9461L3.05045 8.77535C3.07855 8.45162 2.97416 8.13034 2.76115 7.88495L1.33279 6.23951C0.739863 5.55646 1.08706 4.48789 1.96824 4.28381L4.09097 3.79218C4.40753 3.71886 4.68083 3.5203 4.84838 3.24189L5.97191 1.37497Z" stroke-width="1.5"></path>
                        </svg>
                                                            <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.97191 1.37497C6.4383 0.599986 7.56186 0.599985 8.02825 1.37497L9.15178 3.24189C9.31933 3.5203 9.59263 3.71886 9.90919 3.79218L12.0319 4.28381C12.9131 4.48789 13.2603 5.55646 12.6674 6.23951L11.239 7.88495C11.026 8.13034 10.9216 8.45162 10.9497 8.77535L11.1381 10.9461C11.2163 11.8472 10.3073 12.5076 9.47449 12.1548L7.46819 11.3048C7.16899 11.1781 6.83117 11.1781 6.53197 11.3048L4.52568 12.1548C3.69283 12.5076 2.78386 11.8472 2.86206 10.9461L3.05045 8.77535C3.07855 8.45162 2.97416 8.13034 2.76115 7.88495L1.33279 6.23951C0.739863 5.55646 1.08706 4.48789 1.96824 4.28381L4.09097 3.79218C4.40753 3.71886 4.68083 3.5203 4.84838 3.24189L5.97191 1.37497Z" stroke-width="1.5"></path>
                        </svg>
                                                            <span>(3)</span>
                </div>
                <div class="location">
                    <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.99992 8.95346C9.14867 8.95346 10.0799 8.02221 10.0799 6.87346C10.0799 5.7247 9.14867 4.79346 7.99992 4.79346C6.85117 4.79346 5.91992 5.7247 5.91992 6.87346C5.91992 8.02221 6.85117 8.95346 7.99992 8.95346Z" stroke="#1F1F39" stroke-width="1.5"></path>
                        <path d="M2.4133 5.66016C3.72664 -0.113169 12.28 -0.106502 13.5866 5.66683C14.3533 9.0535 12.2466 11.9202 10.4 13.6935C9.05997 14.9868 6.93997 14.9868 5.5933 13.6935C3.7533 11.9202 1.64664 9.04683 2.4133 5.66016Z" stroke="#1F1F39" stroke-width="1.5"></path>
                    </svg>
                    <span>250 W 72nd St, New York, United State</span>
                </div>

                                <p class="off">
                        এখন বন্ধ আছে
                    </p>
                
            </div>
        </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <a href="restaurant/mcdonalds.html" class="restaurant-card">
                <figure class="figure">
                    <img class="bestSellingRestaurantsImage" src="storage/4/conversions/mcdonalds-image.jpg" alt="mcdonalds">
                </figure>
                <div class="content">
                    <h4> McDonalds </h4>
                    <div class="ratings">

                                            <svg class="active" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.97191 1.37497C6.4383 0.599986 7.56186 0.599985 8.02825 1.37497L9.15178 3.24189C9.31933 3.5203 9.59263 3.71886 9.90919 3.79218L12.0319 4.28381C12.9131 4.48789 13.2603 5.55646 12.6674 6.23951L11.239 7.88495C11.026 8.13034 10.9216 8.45162 10.9497 8.77535L11.1381 10.9461C11.2163 11.8472 10.3073 12.5076 9.47449 12.1548L7.46819 11.3048C7.16899 11.1781 6.83117 11.1781 6.53197 11.3048L4.52568 12.1548C3.69283 12.5076 2.78386 11.8472 2.86206 10.9461L3.05045 8.77535C3.07855 8.45162 2.97416 8.13034 2.76115 7.88495L1.33279 6.23951C0.739863 5.55646 1.08706 4.48789 1.96824 4.28381L4.09097 3.79218C4.40753 3.71886 4.68083 3.5203 4.84838 3.24189L5.97191 1.37497Z" stroke-width="1.5"></path>
                            </svg>
                                                                <svg class="active" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.97191 1.37497C6.4383 0.599986 7.56186 0.599985 8.02825 1.37497L9.15178 3.24189C9.31933 3.5203 9.59263 3.71886 9.90919 3.79218L12.0319 4.28381C12.9131 4.48789 13.2603 5.55646 12.6674 6.23951L11.239 7.88495C11.026 8.13034 10.9216 8.45162 10.9497 8.77535L11.1381 10.9461C11.2163 11.8472 10.3073 12.5076 9.47449 12.1548L7.46819 11.3048C7.16899 11.1781 6.83117 11.1781 6.53197 11.3048L4.52568 12.1548C3.69283 12.5076 2.78386 11.8472 2.86206 10.9461L3.05045 8.77535C3.07855 8.45162 2.97416 8.13034 2.76115 7.88495L1.33279 6.23951C0.739863 5.55646 1.08706 4.48789 1.96824 4.28381L4.09097 3.79218C4.40753 3.71886 4.68083 3.5203 4.84838 3.24189L5.97191 1.37497Z" stroke-width="1.5"></path>
                            </svg>
                                                                <svg class="active" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.97191 1.37497C6.4383 0.599986 7.56186 0.599985 8.02825 1.37497L9.15178 3.24189C9.31933 3.5203 9.59263 3.71886 9.90919 3.79218L12.0319 4.28381C12.9131 4.48789 13.2603 5.55646 12.6674 6.23951L11.239 7.88495C11.026 8.13034 10.9216 8.45162 10.9497 8.77535L11.1381 10.9461C11.2163 11.8472 10.3073 12.5076 9.47449 12.1548L7.46819 11.3048C7.16899 11.1781 6.83117 11.1781 6.53197 11.3048L4.52568 12.1548C3.69283 12.5076 2.78386 11.8472 2.86206 10.9461L3.05045 8.77535C3.07855 8.45162 2.97416 8.13034 2.76115 7.88495L1.33279 6.23951C0.739863 5.55646 1.08706 4.48789 1.96824 4.28381L4.09097 3.79218C4.40753 3.71886 4.68083 3.5203 4.84838 3.24189L5.97191 1.37497Z" stroke-width="1.5"></path>
                            </svg>
                                                                <svg class="active" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.97191 1.37497C6.4383 0.599986 7.56186 0.599985 8.02825 1.37497L9.15178 3.24189C9.31933 3.5203 9.59263 3.71886 9.90919 3.79218L12.0319 4.28381C12.9131 4.48789 13.2603 5.55646 12.6674 6.23951L11.239 7.88495C11.026 8.13034 10.9216 8.45162 10.9497 8.77535L11.1381 10.9461C11.2163 11.8472 10.3073 12.5076 9.47449 12.1548L7.46819 11.3048C7.16899 11.1781 6.83117 11.1781 6.53197 11.3048L4.52568 12.1548C3.69283 12.5076 2.78386 11.8472 2.86206 10.9461L3.05045 8.77535C3.07855 8.45162 2.97416 8.13034 2.76115 7.88495L1.33279 6.23951C0.739863 5.55646 1.08706 4.48789 1.96824 4.28381L4.09097 3.79218C4.40753 3.71886 4.68083 3.5203 4.84838 3.24189L5.97191 1.37497Z" stroke-width="1.5"></path>
                            </svg>
                                                                <svg class="active" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.97191 1.37497C6.4383 0.599986 7.56186 0.599985 8.02825 1.37497L9.15178 3.24189C9.31933 3.5203 9.59263 3.71886 9.90919 3.79218L12.0319 4.28381C12.9131 4.48789 13.2603 5.55646 12.6674 6.23951L11.239 7.88495C11.026 8.13034 10.9216 8.45162 10.9497 8.77535L11.1381 10.9461C11.2163 11.8472 10.3073 12.5076 9.47449 12.1548L7.46819 11.3048C7.16899 11.1781 6.83117 11.1781 6.53197 11.3048L4.52568 12.1548C3.69283 12.5076 2.78386 11.8472 2.86206 10.9461L3.05045 8.77535C3.07855 8.45162 2.97416 8.13034 2.76115 7.88495L1.33279 6.23951C0.739863 5.55646 1.08706 4.48789 1.96824 4.28381L4.09097 3.79218C4.40753 3.71886 4.68083 3.5203 4.84838 3.24189L5.97191 1.37497Z" stroke-width="1.5"></path>
                            </svg>
                                                                <span>(1)</span>
                    </div>
                    <div class="location">
                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.99992 8.95346C9.14867 8.95346 10.0799 8.02221 10.0799 6.87346C10.0799 5.7247 9.14867 4.79346 7.99992 4.79346C6.85117 4.79346 5.91992 5.7247 5.91992 6.87346C5.91992 8.02221 6.85117 8.95346 7.99992 8.95346Z" stroke="#1F1F39" stroke-width="1.5"></path>
                            <path d="M2.4133 5.66016C3.72664 -0.113169 12.28 -0.106502 13.5866 5.66683C14.3533 9.0535 12.2466 11.9202 10.4 13.6935C9.05997 14.9868 6.93997 14.9868 5.5933 13.6935C3.7533 11.9202 1.64664 9.04683 2.4133 5.66016Z" stroke="#1F1F39" stroke-width="1.5"></path>
                        </svg>
                        <span>National Museum of Science and Technology, New York</span>
                    </div>

                                    <p class="on"> এখন খোলা আছে </p>
                        
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <a href="restaurant/burger-king.html" class="restaurant-card">
                <figure class="figure">
                    <img class="bestSellingRestaurantsImage" src="storage/5/conversions/burger-king-image.jpg" alt="burger-king">
                </figure>
                <div class="content">
                    <h4> Burger King </h4>
                    <div class="ratings">

                                            <svg class="active" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.97191 1.37497C6.4383 0.599986 7.56186 0.599985 8.02825 1.37497L9.15178 3.24189C9.31933 3.5203 9.59263 3.71886 9.90919 3.79218L12.0319 4.28381C12.9131 4.48789 13.2603 5.55646 12.6674 6.23951L11.239 7.88495C11.026 8.13034 10.9216 8.45162 10.9497 8.77535L11.1381 10.9461C11.2163 11.8472 10.3073 12.5076 9.47449 12.1548L7.46819 11.3048C7.16899 11.1781 6.83117 11.1781 6.53197 11.3048L4.52568 12.1548C3.69283 12.5076 2.78386 11.8472 2.86206 10.9461L3.05045 8.77535C3.07855 8.45162 2.97416 8.13034 2.76115 7.88495L1.33279 6.23951C0.739863 5.55646 1.08706 4.48789 1.96824 4.28381L4.09097 3.79218C4.40753 3.71886 4.68083 3.5203 4.84838 3.24189L5.97191 1.37497Z" stroke-width="1.5"></path>
                            </svg>
                                                                <svg class="active" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.97191 1.37497C6.4383 0.599986 7.56186 0.599985 8.02825 1.37497L9.15178 3.24189C9.31933 3.5203 9.59263 3.71886 9.90919 3.79218L12.0319 4.28381C12.9131 4.48789 13.2603 5.55646 12.6674 6.23951L11.239 7.88495C11.026 8.13034 10.9216 8.45162 10.9497 8.77535L11.1381 10.9461C11.2163 11.8472 10.3073 12.5076 9.47449 12.1548L7.46819 11.3048C7.16899 11.1781 6.83117 11.1781 6.53197 11.3048L4.52568 12.1548C3.69283 12.5076 2.78386 11.8472 2.86206 10.9461L3.05045 8.77535C3.07855 8.45162 2.97416 8.13034 2.76115 7.88495L1.33279 6.23951C0.739863 5.55646 1.08706 4.48789 1.96824 4.28381L4.09097 3.79218C4.40753 3.71886 4.68083 3.5203 4.84838 3.24189L5.97191 1.37497Z" stroke-width="1.5"></path>
                            </svg>
                                                                <svg class="active" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.97191 1.37497C6.4383 0.599986 7.56186 0.599985 8.02825 1.37497L9.15178 3.24189C9.31933 3.5203 9.59263 3.71886 9.90919 3.79218L12.0319 4.28381C12.9131 4.48789 13.2603 5.55646 12.6674 6.23951L11.239 7.88495C11.026 8.13034 10.9216 8.45162 10.9497 8.77535L11.1381 10.9461C11.2163 11.8472 10.3073 12.5076 9.47449 12.1548L7.46819 11.3048C7.16899 11.1781 6.83117 11.1781 6.53197 11.3048L4.52568 12.1548C3.69283 12.5076 2.78386 11.8472 2.86206 10.9461L3.05045 8.77535C3.07855 8.45162 2.97416 8.13034 2.76115 7.88495L1.33279 6.23951C0.739863 5.55646 1.08706 4.48789 1.96824 4.28381L4.09097 3.79218C4.40753 3.71886 4.68083 3.5203 4.84838 3.24189L5.97191 1.37497Z" stroke-width="1.5"></path>
                            </svg>
                                                                <svg class="active" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.97191 1.37497C6.4383 0.599986 7.56186 0.599985 8.02825 1.37497L9.15178 3.24189C9.31933 3.5203 9.59263 3.71886 9.90919 3.79218L12.0319 4.28381C12.9131 4.48789 13.2603 5.55646 12.6674 6.23951L11.239 7.88495C11.026 8.13034 10.9216 8.45162 10.9497 8.77535L11.1381 10.9461C11.2163 11.8472 10.3073 12.5076 9.47449 12.1548L7.46819 11.3048C7.16899 11.1781 6.83117 11.1781 6.53197 11.3048L4.52568 12.1548C3.69283 12.5076 2.78386 11.8472 2.86206 10.9461L3.05045 8.77535C3.07855 8.45162 2.97416 8.13034 2.76115 7.88495L1.33279 6.23951C0.739863 5.55646 1.08706 4.48789 1.96824 4.28381L4.09097 3.79218C4.40753 3.71886 4.68083 3.5203 4.84838 3.24189L5.97191 1.37497Z" stroke-width="1.5"></path>
                            </svg>
                                                                <svg class="active" width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.97191 1.37497C6.4383 0.599986 7.56186 0.599985 8.02825 1.37497L9.15178 3.24189C9.31933 3.5203 9.59263 3.71886 9.90919 3.79218L12.0319 4.28381C12.9131 4.48789 13.2603 5.55646 12.6674 6.23951L11.239 7.88495C11.026 8.13034 10.9216 8.45162 10.9497 8.77535L11.1381 10.9461C11.2163 11.8472 10.3073 12.5076 9.47449 12.1548L7.46819 11.3048C7.16899 11.1781 6.83117 11.1781 6.53197 11.3048L4.52568 12.1548C3.69283 12.5076 2.78386 11.8472 2.86206 10.9461L3.05045 8.77535C3.07855 8.45162 2.97416 8.13034 2.76115 7.88495L1.33279 6.23951C0.739863 5.55646 1.08706 4.48789 1.96824 4.28381L4.09097 3.79218C4.40753 3.71886 4.68083 3.5203 4.84838 3.24189L5.97191 1.37497Z" stroke-width="1.5"></path>
                            </svg>
                                                                <span>(1)</span>
                    </div>
                    <div class="location">
                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.99992 8.95346C9.14867 8.95346 10.0799 8.02221 10.0799 6.87346C10.0799 5.7247 9.14867 4.79346 7.99992 4.79346C6.85117 4.79346 5.91992 5.7247 5.91992 6.87346C5.91992 8.02221 6.85117 8.95346 7.99992 8.95346Z" stroke="#1F1F39" stroke-width="1.5"></path>
                            <path d="M2.4133 5.66016C3.72664 -0.113169 12.28 -0.106502 13.5866 5.66683C14.3533 9.0535 12.2466 11.9202 10.4 13.6935C9.05997 14.9868 6.93997 14.9868 5.5933 13.6935C3.7533 11.9202 1.64664 9.04683 2.4133 5.66016Z" stroke="#1F1F39" stroke-width="1.5"></path>
                        </svg>
                        <span>F11/A &amp; F11/B, Liberation War Museum , Dhaka 1207</span>
                    </div>

                                    <p class="on"> এখন খোলা আছে </p>
                        
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
 
