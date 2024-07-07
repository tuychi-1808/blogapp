<?php include_once 'header.php'?>>
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
                            <input type="hidden" name="act" value="add">
                            <h4 class="content-title">Добавить контент</h4>
                            <div class="form-group">
                                <label>Title*</label>
                                <input type="text" name="title" class="my-form-control" placeholder="Enter Your Full Name">
                            </div>
                            <h4 class="content-title mt-5">Content</h4>
                            <div class="form-group">
                                <label>About</label>
                                <textarea type="text" name="content" required autofocus rows="3" class="my-form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Photo</label>
                                <input type="file" name="file">
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
                            <?php if (isset($error) && !empty($error)): ?>
                                <p class="f-pass alert-danger"><?php echo $error?></p>
                            <?php endif;?>
                            <button class="default-btn reverse" data-toggle="modal" data-target="#email-confirm"><span>Добавить контент</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================> login section end here <================== -->

<?php include_once 'footer.php'?>
</body>
</html>