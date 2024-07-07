
<?php include_once 'header.php'?>
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
                    <header class="header" id="navbar">
                        <div class="header__bottom">
                            <div class="container">
                                <?php include_once 'menu.php'?>
                            </div>
                        </div>
                    </header>
                    <div class="main-content">
                        <img src="/images/<?=$articles['img']?>" alt="">
                       <h3><?=$articles['title']?></h3>
                        <p><?=$articles['content']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================> login section end here <================== -->

<?php include_once 'footer.php'?>>
</body>
</html>
