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
                    <div class="section-header">
                        <header class="header" id="navbar">
                            <div class="header__bottom">
                                <div class="container">
                                    <?php include_once 'menu.php'?>
                                </div>
                            </div>
                        </header>
                    </div>
                    <div class="main-content">
                        <form action="" method="post">
                            <input type="hidden" class="my-form-control" name="act" value="register">
                            <h4 class="content-title">Acount Details</h4>
                      <!--      <div class="form-group">
                                <label>Username*</label>
                                <input type="text" class="my-form-control" name="name" placeholder="Enter Your Usewrname">
                            </div>-->
                            <div class="form-group">
                                <label>Email Address*</label>
                                <input type="email" class="my-form-control" name="email" placeholder="Enter Your Email">
                            </div>
                            <div class="form-group">
                                <label>Password*</label>
                                <input type="text" class="my-form-control" name="password" placeholder="Enter Your Password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password*</label>
                                <input type="text" class="my-form-control" name="password2" placeholder="Enter Your Password">
                            </div>
                         <!--   <h4 class="content-title mt-5">Profile Details</h4>
                            <div class="form-group">
                                <label>Name*</label>
                                <input type="text" class="my-form-control" placeholder="Enter Your Full Name">
                            </div>
                            <div class="form-group">
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
                            <button class="default-btn" data-toggle="modal" data-target="#email-confirm"><span>Отправить данные</span></button>
                            <a href="index.php" class="default-btn reverse"><span>Назад</span></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================> login section end here <================== -->


<?php include_once 'footer.php';?>>
</body>
</html>
