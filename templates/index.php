<?php include_once 'header.php'?>
<body>
	<!-- preloader start here -->
	<!-- <div class="preloader">
         <div class="preloader-inner">
             <div class="preloader-icon">
                 <span></span>
                 <span></span>
             </div>
         </div>
     </div>-->
	<!-- preloader ending here -->

	<!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fa-solid fa-angle-up"></i></a>
    <!-- scrollToTop ending here -->


    <!-- ================> header section start here <================== -->
    <header class="header" id="navbar">
		<div class="header__bottom">
			<div class="container">
			<?php include_once 'menu.php'?>
			</div>
		</div>
    </header>
    <!-- ================> header section end here <================== -->



    <!-- ================> Page Header section start here <================== -->

    <!-- ================> Page Header section end here <================== -->

    <!-- ================> Blog section start here <================== -->
    <div class="blog padding-top padding-bottom">
		<div class="container">
			<div class="section-wrapper">
				<div class="row g-4 justify-content-center">
                    <?php while ($row = $result->fetch_assoc()):?>
					<div class="col-lg-6 col-12">
						<div class="blog__item">
							<div class="blog__inner">
								<div class="blog__thumb">
									<img src="/images/<?=$row['img']?>" alt="blog-thumb" class="w-100">
								</div>
								<div class="blog__content px-3 py-4" align="center">
									<a href="blog-single.html"><h3><?=$row['title']?></h3></a>
									<p><?=$row['content']?>></p>
									<a href="/?act=view&&id=<?=$row['id']?>" class="default-btn reverse"><span>Просмотр</span></a>
                                    <?php if ($user && $row['userId'] == $user['id']): ?>
									<a href="/?act=edit&&id=<?=$row['id']?>" class="default-btn reverse"><span>Редактировать</span></a>
                                    <?php endif;?>
								</div>
							</div>
						</div>
					</div>
                    <?php endwhile;?>
				</div>
			</div>
		</div>
	</div>
    <!-- ================> Blog section end here <================== -->



    <!-- ================> Footer section start here <================== -->
	<?php include_once 'footer.php'?>
</body>
</html>