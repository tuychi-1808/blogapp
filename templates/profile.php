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
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <div class="log-reg-inner">
                    <div class="section-header">
                        <h2 class="title">Profile</h2>
                    </div>
                    <div class="main-content">
                        <form action="" method="post">
                            <input type="hidden" name="act" value="profile">
                            <h4 class="content-title">Acount Details</h4>
                            <div class="form-group">
                                <label>Name*</label>
                                <input type="text" name="name" class="my-form-control" placeholder="Enter Your Usewrname">
                            </div>
                            <div class="form-group">
                                <label>Surname*</label>
                                <input type="text" name="surname" class="my-form-control" placeholder="Enter Your Full Name">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="email" name="phone" class="my-form-control" placeholder="Enter Your Email">
                            </div>
                            <h4 class="content-title mt-5">Profile Details</h4>
                            <div class="form-group">
                                <label>About</label>
                                <textarea type="text" name="about" required autofocus rows="3" class="my-form-control"></textarea>
                            </div>
                         <!--<div class="form-group">
                                <label>Birthday*</label>
                                <input type="date" class="my-form-control">
                            </div>
                            <div class="form-group">
                                <label>I am a*</label>
                                <div class="banner__inputlist">
                                    <div class="s-input me-3">
                                        <input type="radio" name="gender1" id="males1"><label for="males1">Man</label>
                                    </div>
                                    <div class="s-input">
                                        <input type="radio" name="gender1" id="females1"><label
                                            for="females1">Woman</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Looking for a*</label>
                                <div class="banner__inputlist">
                                    <div class="s-input me-3">
                                        <input type="radio" name="gender2" id="males"><label for="males">Man</label>
                                    </div>
                                    <div class="s-input">
                                        <input type="radio" name="gender2" id="females"><label
                                            for="females">Woman</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Marial status*</label>
                                <div class="banner__inputlist">
                                    <select>
                                        <option value="Single" selected>Single</option>
                                        <option value="Marid">Marid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>City*</label>
                                <input type="text" class="my-form-control" placeholder="Enter Your City">
                            </div>-->
                            <button class="default-btn reverse" data-toggle="modal" data-target="#email-confirm"><span>Create Your Profile</span></button>
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