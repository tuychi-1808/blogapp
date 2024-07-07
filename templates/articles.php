<?php include_once 'header.php'?>>
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
				<?php include_once 'menu.php'?>>
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
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Created At</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($row = $result->fetch_assoc()):?>
                    <tr>
                        <th scope="row"><?=$row['id']?></th>
                        <th><img src="/images/<?=$row['img']?>" width="100px" height="100px"/></th>
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


<?php include_once 'footer.php'?>>
</body>
</html>