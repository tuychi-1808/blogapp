
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
                        <form action="" method="post">
                            <input type="hidden" name="act" value="profile">
                            <h4 class="content-title">Acount Details</h4>
                            <div class="form-group">
                                <label>Name*</label>
                                <input type="text" name="name" value="<?=$user['name']?>" class="my-form-control" placeholder="Enter Your Usewrname">
                            </div>
                            <div class="form-group">
                                <label>Surname*</label>
                                <input type="text" name="surname" value="<?=$user['surname']?>" class="my-form-control" placeholder="Enter Your Full Name">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="tel" name="phone" value="<?=$user['phone']?>" class="my-form-control" placeholder="Enter Your Email">
                            </div>
                            <h4 class="content-title mt-5">Profile Details</h4>
                            <div class="form-group">
                                <label>About</label>
                                <textarea type="text" name="about" required autofocus rows="3" class="my-form-control"><?=$user['about']?></textarea>
                            </div>
                            <button class="default-btn reverse" data-toggle="modal" data-target="#email-confirm"><span>Добавить данные</span></button>
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