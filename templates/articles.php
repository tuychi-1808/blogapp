
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
				<nav class="navbar navbar-expand-lg">
					<a class="navbar-brand" href="#"><img src="../assets/images/logo/logo.png" alt="logo"></a>
					<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler--icon"></span>
					</button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav mainmenu">
                            <ul>
                                <li><a href="/?act=register" class="default-btn reverse"><span>Главная</span></a></li>
                                <li><a href="/?act=register" class="default-btn reverse"><span>Регистрация</span></a></li>
                                <li><a href="/?act=login" class="default-btn reverse"><span>Авторизация</span></a></li>
                                <li><a href="/?act=profile" class="default-btn reverse"><span>Profile</span></a></li>
                            </ul>
                        </div>
                    </div>
				</nav>
			</div>
		</div>
    </header>
    <!-- ================> header section end here <================== -->



    <!-- ================> Page Header section start here <================== -->

    <!-- ================> Page Header section end here <================== -->

    <!-- ================> Blog section start here <================== -->
    <div class="blog padding-top padding-bottom">
		<div class="container">
            <a href="/?act=add"><button type="button" class="btn btn-success">Add</button></a>
			<table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Created At</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($row = $result->fetch_assoc()):?>
                    <tr>
                        <th scope="row"><?=$row['id']?></th>
                        <td><?=$row['title']?></td>
                        <td><?=$row['createdAt']?></td>
                        <td>
                            <a href="/?act=edit&id=<?=$row['id']?>"><button type="button" class="btn btn-primary">Edit</button></a>
                            <a href="/?act=delete&id=<?=$row['id']?>"><button type="button" class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                <?php endwhile ?>
                </tbody>
            </table>
		</div>
	</div>
    <!-- ================> Blog section end here <================== -->



    <!-- ================> Footer section start here <================== -->
	<footer class="footer footer--style2">

		<div class="footer__bottom py-4">
			<div class="container">
				<div class="footer__content text-center">
					<p class="mb-0">All Rights Reserved &copy; <a href="index.html">Ollya</a> || Design By: CodexCoder</p>
				</div>
			</div>
		</div>
	</footer>
    <!-- ================> Footer section end here <================== -->




	<!-- All Needed JS -->
	<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
	<script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/swiper.min.js"></script>
	<!-- <script src="assets/js/all.min.js"></script> -->
	<script src="assets/js/wow.js"></script>
	<script src="assets/js/counterup.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/lightcase.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>


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