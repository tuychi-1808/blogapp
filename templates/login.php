<?php
/**@var $error **/
?>
<?php include_once 'header.php'?>

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
            <header class="header" id="navbar">
                <div class="header__bottom">
                    <div class="container">
                        <?php include_once 'menu.php'?>
                    </div>
                </div>
            </header>
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
                            <?php if (isset($error) && !empty($error)): ?>
                                <p class="f-pass alert-danger"><?php echo $error?></p>
                            <?php endif;?>
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



<?php include_once 'footer.php'?>>
</body>
</html>
