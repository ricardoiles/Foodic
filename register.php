<!DOCTYPE html>
<html>
<head>
    <?php include 'head.php'; ?>
</head>
<body>
    <!-- <audio id="myAudio1">
        <source src="beep.mp3" type="audio/mpeg">
    </audio> -->

    <div id="main-wrapper">
        <!--========== HEADER PART START ===========-->
        <?php include 'header.php'; ?>   
        <!--===== HEADER PART END ========-->

        <!--========= REGISTER PART START =======-->
        <section class="auth">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-7">
                        <div class="auth-content">
                            <nav class="auth-navs">
                                <a class="nav-link" href="login.php"> Ingresar </a>
                                <a class="nav-link active" href="register.php"> Crear</a>
                            </nav>
                            <div class="auth-tabs">
                                <form method="POST" class="register" action="https://demo.food-bank.xyz/register">
                                    <input type="hidden" name="_token" value="6yqkZqWWUr1EKwzGgIZezbglHENj7YQRrwovD9Q7" autocomplete="off">        
                                    <label for="address" class="form-label">¿Quién crea el foodic?</label>                    
                                    <ul class="auth-types">
                                        <li>
                                            <input type="radio" id="CustomerRegister" name="roles" value="2" checked="">
                                            <label for="CustomerRegister">Propietario</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="DeliveryRegister" name="roles" value="4">
                                            <label for="DeliveryRegister">Encargado</label>
                                        </li>
                                    </ul>

                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="first_name" class="form-label required">Nombre Foodic</label>
                                                <input name="first_name" value="" type="text" class="form-control " placeholder="John">
                                                                                    </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="last_name" class="form-label required">Slogan</label>
                                                <input name="last_name" value="" type="text" class="form-control " placeholder="Doe">
                                                                                    </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="username" class="form-label required">Nombre de usuario</label>
                                                <input id="username" name="username" value="" type="text" class="form-control " placeholder="Se sugiere automatico">
                                                                                    </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="register_email" class="form-label required">Correo electronico </label>
                                                <input name="register_email" value="" type="email" class="form-control " placeholder="johndoe@example.com">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label required">Celular </label>
                                                <input class="form-control mobilenumber  phone" type="tel" id="number" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="address" class="form-label required">Dirección</label>
                                                <input id="address" name="address" value="" type="text" class="form-control " placeholder="House#10, Section#1, Dhaka 1216, Bangladesh">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label required">Barrio </label>
                                                <input class="form-control mobilenumber  phone" type="tel" id="number" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="address" class="form-label required">Complemento dirección</label>
                                                <input id="address" name="address" value="" type="text" class="form-control " placeholder="ej: Casa, local, edificio">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="password" class="form-label required">Contraseña</label>
                                                <input name="password" id="password" class="form-control " type="password" 
                                                    placeholder="Crear contraseña">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="password2" class="form-label required">Confirmar Contraseña</label>
                                                <input name="password_confirmation" class="form-control " type="password" 
                                                    placeholder="Confirmar contraseña">
                                                </div>
                                        </div>
                                        <div class="col-12">
                                            <input type="submit" class="form-btn mt-2" name="register" value="Crear">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="auth-banner" src="frontend/images/auth.jpg" alt="auth">
        </section>
        <!--======== REGISTER PART END ======-->
    </div>
   <?php include 'footer.php'; ?>