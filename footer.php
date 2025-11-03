        
        <!--======== FOOTER PART START ========-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-4 col-lg-3">
                        <div class="footer-about">
                            <a href="index.htm" class="footer-logo">
                                <img src="images/seeder/settings/foodic_largepng.png" alt="logo">
                            </a>
                            <p>Síguenos en</p>
                            <nav>
                                <a href="#fbok" class=""><i class="bi bi-facebook"></i></a>
                                <a href="#insta" class=""><i class="bi bi-instagram"></i></a>
                                <a href="#equis" class=""><i class="bi bi-twitter-x"></i></a>
                                <a href="#Youtube" class=""><i class="bi bi-youtube"></i></a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-3">
                        <div class="footer-widget">
                            <h5 class="footer-title">Acerca de</h5>
                            <nav>
                                <a href="page/terms-and-condition.html"> Términos y condiciones  </a>
                                <a href="page/contact-us.html"> Contáctenos </a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-3">
                        <div class="footer-widget">
                            <h5 class="footer-title"> Servicios </h5>
                            <nav>
                                <a href="page/about-us.html">Sobre nosotros</a>
                                <a href="page/privacy-and-policy.html">Privacidad y política</a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="footer-contact">
                            <h5 class="footer-title"> Descargar App </h5>
                            <nav>
                                <a href="https://play.google.com/store/apps/details?id=com.inilabs.foodbank" target="_blank" 
                                    class="d-block mb-2">
                                    <img src="frontend/images/play.png" alt="">
                                </a>
                                <a href="https://play.google.com/store/apps/details?id=com.inilabs.foodbank" target="_blank" 
                                    class="d-block mb-2">
                                    <img src="frontend/images/app.png" alt="">
                                </a>
                            </nav>
                            <ul>
                                <li>
                                    <i class="bi bi-envelope"></i>
                                    <span> info@foodic.com </span>
                                </li>
                                <li>
                                <i class="bi bi-headset"></i>
                                    <span> +57 310 751 1059 </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>Todos los derechos reservados</p>
            </div>
        </footer>
        <!--======= FOOTER PART END =========-->
 
    </div>

    <!--====== LOGIN BOOKING MODAL START =========-->
            <div class="modal fade booking-modal" id="booking-modal" data-bs-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="booking-modal-header">
                            <button class="fa-regular fa-circle-xmark" type="button" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="auth-tabs mx-3 ">
                            <div class="auth-header">
                                <h3>Ingresa</h3>
                                <p> Introduzca sus datos de acceso a continuación </p>
                            </div>
                            <form method="POST" class="login" action="https://demo.food-bank.xyz/login">
                                <input type="hidden" name="_token" value="6yqkZqWWUr1EKwzGgIZezbglHENj7YQRrwovD9Q7" autocomplete="off">                            <input type="hidden" name="type" value="frontend">

                                <div class="form-group">
                                    <label for="email" class="form-label"> Email </label>
                                    <input id="demoemail" type="email" class="form-control  " name="email" value="" autocomplete="email" autofocus="" placeholder="Email">
                                    <small class="form-alert red"></small>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="password">Contraseña:</label>
                                    <input placeholder="Contraseña" id="demopassword" type="password" class="form-control " name="password" autocomplete="current-password">
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group form-check-group">
                                        <input type="checkbox" id="remember-me" name="check">
                                        <label for="remember-me"> Recuérdame</label>
                                    </div>

                                    <div class="col-md-6 d-flex justify-content-end">
                                        <label for="forgot password">
                                            <a class="linkTxt" href="password/reset.html" class="text-primary">Olvidaste tu contraseña?</a>
                                        </label>
                                    </div>
                                </div>

                                <input type="submit" class="form-btn" value="Ingresar">
                                <div class="auth-divide"><span>O ingresa con </span></div>
                                
                                <nav class="auth-sync">
                                    <a href="https://demo.food-bank.xyz/auth/google">
                                        <img src="frontend/images/social/google.png" alt="social">
                                        <span>Google</span>
                                    </a>
                                    
                                    <a href="https://demo.food-bank.xyz/auth/facebook">
                                        <img src="frontend/images/social/facebook.png" alt="social">
                                        <span>Facebook </span>
                                    </a>
                                </nav>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <!--====== LOGIN BOOKING MODAL PART END ==========-->


    <!--========= JS LINK PART START =====-->
    <script src="frontend/lib/jquery-3.5.0.min.js"></script>
    <script src="frontend/lib/bootstrap/bootstrap.min.js"></script>
    <script src="frontend/lib/swiper/swiper-bundle.min.js"></script>
    <script src="frontend/lib/swiper/swiper-initialize.js"></script>
    <script src="assets/modules/izitoast/dist/js/iziToast.min.js"></script>
    <!-- custom js Start -->
    <script type="application/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <!-- js del acordeon de filtros -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var btnFiltros = document.getElementById('btnFiltros');
            var collapseFiltros = document.getElementById('collapseFiltros');
            
            // Contenido HTML para el estado "ABRIR"
            const htmlAbrir = `
                <i class="bi bi-funnel-fill"></i>
                <span>Filtar busqueda</span>
                <i class="bi bi-chevron-down"></i>
            `;

            // Contenido HTML para el estado "CERRAR"
            const htmlCerrar = `
                <i class="bi bi-funnel"></i>
                <span>Cerrar filtro</span>
                <i class="bi bi-chevron-up"></i>
            `;

            // Opcional: Instanciar Collapse (no estrictamente necesario si solo usamos data-bs-toggle)
            // var bsCollapse = new bootstrap.Collapse(collapseFiltros, { toggle: false });

            // Escuchadores de eventos propios del componente Collapse de Bootstrap
            collapseFiltros.addEventListener('show.bs.collapse', function () {
                // Cuando se está abriendo, inyecta el HTML de "Cerrar filtros"
                btnFiltros.innerHTML = htmlCerrar;
            });

            collapseFiltros.addEventListener('hide.bs.collapse', function () {
                // Cuando se está cerrando, inyecta el HTML de "Abrir filtros"
                btnFiltros.innerHTML = htmlAbrir;
            });
        });
    </script>
    <!-- fin del js del acordeon de filtro -->

    <!-- js del control deslizante de  -->
     <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rangeSlider = document.getElementById('rangePrecio');
            const inputField = document.getElementById('inputPrecio');

            // 1. Definimos el array de precios que queremos mostrar
            // Índice 1 = 1.000, Índice 5 = 5.000, Índice 6 = 6.000, etc.
            const preciosMapeados = [
                0,      // Índice 0: Valor de inicio (ej. "Cualquiera" o 0)
                1000,   // Índice 1
                2000,   // Índice 2
                5000,   // Índice 3
                7000,   // Índice 4
                10000,   // Índice 5
                20000,   // Índice 6
                30000,   // Índice 7
                60000,   // Índice 8
                80000,   // Índice 9
                100000   // Índice 10 (Máximo)
                // Aquí puedes seguir añadiendo rangos no lineales si fuera necesario (ej: 20000, 50000...)
            ];
            
            // Función auxiliar para formatear el número (ej: 5000 -> 5.000)
            function formatPrice(value) {
                return new Intl.NumberFormat('es-CO').format(value); // Usa el formato de tu región
            }

            // Función principal para sincronizar el INPUT de texto con el SLIDER
            function updatePrice() {
                const index = parseInt(rangeSlider.value);
                const precio = preciosMapeados[index];
                
                // Actualiza el campo de texto con el valor formateado
                inputField.value = formatPrice(precio);
                
                // Opcional: Si necesitas almacenar el valor NUMÉRICO real en un campo oculto
                // document.getElementById('hiddenPriceValue').value = precio; 
            }

            // 2. Establecer el valor inicial (ejecutar al cargar)
            updatePrice();

            // 3. Escuchador de eventos: Cuando el slider se mueve
            rangeSlider.addEventListener('input', updatePrice);
        });
    </script>
    <!-- js del control deslizante de  -->

    <!--  -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const starRatingInputs = document.querySelectorAll('.star-rating-interactive input[name="star-rating"]');

            starRatingInputs.forEach(input => {
                input.addEventListener('change', function() {
                    const selectedRating = this.value;
                    console.log(`Usuario ha seleccionado: ${selectedRating} estrellas.`);
                    // Aquí puedes enviar este valor a tu backend
                    // Por ejemplo: sendRatingToBackend(selectedRating);
                });
            });
        });
    </script>
    <!--  -->
<script>
    console.warn('Livewire: The published Livewire assets are out of date\n See: https://livewire.laravel.com/docs/installation#publishing-livewires-frontend-assets')
</script>
<script src="vendor/livewire/livewire.js?id=c4fc8c5d" data-csrf="6yqkZqWWUr1EKwzGgIZezbglHENj7YQRrwovD9Q7" data-update-uri="/livewire/update" data-navigate-once="true"></script>
        <script src="frontend/js/script.js"></script>

</body>

</html>
