<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Page Title -->
    <title>Wexim - Login</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.ico">
    <!-- Animate -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Cube Portfolio -->
    <link rel="stylesheet" href="css/cubeportfolio.min.css">
    <!-- Fancy Box -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css">
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/navigation.css">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="css/style.css">


</head>
<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '../blog/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '../blog/includes/registration_login.php') ?>

<body>

<!--Loader Start-->
<div class="loader">
    <div class="loader-inner">
        <div class="loader-blocks">
            <span class="block-1"></span>
            <span class="block-2"></span>
            <span class="block-3"></span>
            <span class="block-4"></span>
            <span class="block-5"></span>
            <span class="block-6"></span>
            <span class="block-7"></span>
            <span class="block-8"></span>
            <span class="block-9"></span>
            <span class="block-10"></span>
            <span class="block-11"></span>
            <span class="block-12"></span>
            <span class="block-13"></span>
            <span class="block-14"></span>
            <span class="block-15"></span>
            <span class="block-16"></span>
        </div>
    </div>
</div>
<!--Loader End-->

<!--login start-->
<section class="p-lg-0 login-sec">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="login-content">
                    <div class="title d-inline-block mb-4">
                        <h3 class="mb-3"><span class="gradient-text1">Helio Studio </span> - BLOG</h3>
                    </div>
                    <!--form-->
                    <form action="<?php echo BASE_URL . 'index.php'; ?>"  method="post" >
                        <input class="form-control" type="text" name="username" placeholder="Kullanıcı Adı" required="">
                        <input class="form-control" type="password" name="password" placeholder="Şifre" required="">
                        <div class="form-button">
                            <button id="submit" name="login_btn" type="submit" class="btn btn-large btn-rounded btn-gradient">Giriş Yap</button> <a href="forget-password.html">Şifremi Unuttum?</a>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block p-0">
                <!--Feature Image Half-->
                <img src="images/login-half-block.jpg" class="feature-half" alt="image">
            </div>
        </div>


    </div>
</section>
<!--adress end-->

<!-- Optional JavaScript -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.js"></script>
<!-- isotop gallery -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- cube portfolio gallery -->
<script src="js/jquery.cubeportfolio.min.js"></script>
<!-- owl carousel slider -->
<script src="js/owl.carousel.min.js"></script>
<!-- parallax Background -->
<script src="js/parallaxie.min.js"></script>
<!-- wow -->
<script src="js/wow.js"></script>
<!-- fancybox popup -->
<script src="js/jquery.fancybox.min.js"></script>
<!-- REVOLUTION JS FILES -->
<script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script src="rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script src="rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<!-- map -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyB6YJu2gWq_4ABpOPGLy0c4JKg82U7a_JM"></script>
<script src="js/map.js"></script>
<!-- custom script -->
<script src="js/script.js"></script>

</body>
</html>