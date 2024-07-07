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
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="act" value="edit">
                            <h4 class="content-title">Добавить контент</h4>
                            <div class="form-group">
                                <label>Title*</label>
                                <input type="text" name="title" value="<?=$articles['title']?>" class="my-form-control" placeholder="Enter Your Full Name">
                            </div>
                            <h4 class="content-title mt-5">Content</h4>
                            <div class="form-group">
                                <label>About</label>
                                <textarea type="text" name="content" required autofocus rows="3" class="my-form-control"><?=$articles['content']?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Photo</label>
                                <input type="file" name="file">
                            </div>
                            <button class="default-btn reverse" data-toggle="modal" data-target="#email-confirm"><span>Добавить контент</span></button>
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