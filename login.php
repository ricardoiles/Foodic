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

        <!--======= LOGIN PART START ========-->
        <section class="auth">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-7">
                        <div class="auth-content">
                            <nav class="auth-navs">
                                <a class="nav-link active" href="login.php"> Ingresar </a>
                                <a class="nav-link" href="register.php"> Crear</a>
                            </nav>
                            <div class="auth-tabs">
                                <div class="auth-header">
                                    <h3>¡Foodic bienvenido de nuevo!</h3>
                                    <p> Introduce tus datos de acceso a continuación</p>
                                </div>
                                <form method="POST" class="login" action="https://demo.food-bank.xyz/login">
                                    <input type="hidden" name="_token" value="" autocomplete="off">
                                    <input type="hidden" name="type" value="frontend">

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
                </div>
            </div>
            <img class="auth-banner" src="frontend/images/auth.jpg" alt="auth">
        </section>
        <!--======== LOGIN PART END ========-->
    </div>
<?php include 'footer.php'; ?>