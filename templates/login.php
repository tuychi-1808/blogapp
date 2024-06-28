<?php
/**@var $error **/
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Ollya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- site favicon -->
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- All stylesheet and icons css  -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/swiper.min.css">
    <link rel="stylesheet" href="../assets/css/lightcase.css">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>
<!-- preloader start here -->

<!-- preloader ending here -->

<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="fa-solid fa-angle-up"></i></a>
<!-- scrollToTop ending here -->


<!-- ================> login section start here <================== -->
<section class="log-reg">
    <div class="top-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-7">
                    <div class="logo">
                        <a href="index.html"><img src="../assets/images/logo/logo.png" alt="logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <div class="log-reg-inner">
                    <div class="section-header inloginp">
                        <h2 class="title">Welcome to Ollya</h2>
                    </div>
                    <div class="main-content inloginp">
                        <form action="" method="post">
                            <input type="hidden" name="act" value="login">
                            <div class="form-group">
                                <label >Your Address</label>
                                <input type="email" class="my-form-control" name="email" placeholder="Enter Your Email">
                            </div>
                            <div class="form-group">
                                <label >Password</label>
                                <input type="text" class="my-form-control" name="password" placeholder="Enter Your Password">
                            </div>
                            <p class="f-pass alert-danger"><?=$error?></p>
                            <p class="f-pass">Forgot your password? <a href="#">recover password</a></p>
                            <div class="text-center">
                                <button type="submit" class="default-btn"><span>Отправить данные</span></button>
                                <a type="submit" href="index.php" class="default-btn reverse"><span>Назад</span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================> login section end here <================== -->




<!-- All Needed JS -->
<script src="../assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="../assets/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="../assets/js/isotope.pkgd.min.js"></script>
<script src="../assets/js/swiper.min.js"></script>
<!-- <script src="assets/js/all.min.js"></script> -->
<script src="../assets/js/wow.js"></script>
<script src="../assets/js/counterup.js"></script>
<script src="../assets/js/jquery.countdown.min.js"></script>
<script src="../assets/js/lightcase.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/main.js"></script>


<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>
</html>
