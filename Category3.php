<?php
$conn = mysqli_connect("localhost", "root", "", "tubeswad100");
$result = mysqli_query($conn, "SELECT*FROM streaming WHERE genre LIKE '%Fantasy%' ");
$result5 = mysqli_query($conn, "SELECT*FROM streaming WHERE genre LIKE '%Thriller%' ");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome to WAD100</title>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/medile.css" rel='stylesheet' type='text/css' />
<link href="css/single.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all" />

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

</head>
	
<body>
<!-- header -->
<div class="header" style="background : url('https://img2.thejournal.ie/article/3310059/river?version=3310094&width=1340'); background-position-y: 80%;">
	<div class="container">
		<div style="float:left;">
			<a href="Homepage.php"><h1 style="color: red; font-size: 70px;">WAD<span style="font-size:50px; color:white;">100</span></h1></a>
		</div>
		<div class="w3_search">
			<form action="search.php" method="POST">
				<input type="text" name="name" placeholder="Search" required="">
				<input type="submit" name="submit" value="Go">
			</form>
		</div>
		
		<div class="w3l_sign_in_register">
				<div class="container">
					<nav class="navbar navbar-default">
						<div class="navbar-header navbar-left">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					 
						<div class="collapse navbar-collapse navbar-right">
							<nav>
								<ul class="nav navbar-nav">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Genres <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li>
												<ul>
														<li><a href="Category.php #comedy">Comedy</a></li>
														<li><a href="Category2.php #horror">Horror</a></li>
														<li><a href="Category2.php #mystery">Mystery</a></li>
														<li><a href="Category.php #romance">Romance</a></li>
														<li><a href="Category3.php #fantasy">Fantasy</a></li>
														<li><a href="Category3.php #thriller">Thriller</a></li>
												</ul>
											
											</li>
										</ul>
									</li>

									<li><a href="contact.php">Contact</a></li>
								</ul>
							</nav>
						</div>

					</nav>	
				</div>
			</div>

		
	</div>
</div>
<!-- //header -->

<br>

<?php
while ($select = mysqli_fetch_assoc($result)){ ?>

<!-- Keterangan -->    
<div class="container">
    <div class="agileits-single-top">
        <ol class="breadcrumb">
        <li><a href="Homepage.php">Home</a></li>
        <li><a href class="Category.php">Genres</a></li>
        </ol>
    </div>
    </div>
<!-- Keterangan  -->

<!-- Category 1 -->

<h4 class="latest-text" id="fantasy" style="margin-left:110px;">Fantasy </h4>
<div class="container">
    <?php
    foreach($result as $data){
    ?>   

<div class="col-md-2 w3l-movie-gride-agile">
<a href="StreamingPage.php?id=<?=$data['id']?>"><img src="<?= $data["poster"] ?>" width="180px;" height="250px" />                                       
</a>

<div class="mid-1">
    <div class="w3l-movie-text">
    <h6><a href="StreamingPage.php?id=<?=$data['id']?>"><?= $data["judul"] ?></a></h6>							
    </div>
                                
    <div class="w3l-movie-text">
    <p><?= $data["tahun"] ?></p>
    </div>   
</div>	
</div>

    <?php }?> 
</div>
</div>
<!-- Category 1 -->


<!-- Category 2 -->

<h4 class="latest-text" id="thriller" style="margin-left:110px;">Thriller </h4>
<div class="container">

<?php
foreach($result5 as $data5){
?>   

<div class="col-md-2 w3l-movie-gride-agile">
    <a href="StreamingPage.php?id=<?=$data5['id']?>"><img src="<?= $data5["poster"] ?>" width="180px;" height="250px" />
    </a>
            
    <div class="mid-1">
    <div class="w3l-movie-text">
    <h6><a href="StreamingPage.php"><?= $data5["judul"] ?></a></h6>							
    </div>
                                            
    <div class="w3l-movie-text">
    <p><?= $data5["tahun"] ?></p>
    </div>   
    
    </div>
    </div>

<?php }?>
                                            
</div>
</div>

<!-- Category 2 -->

</div>

                              
<div class="blog-pagenat-wthree">
<ul>
<li><a class="frist" href="Category2.php">Prev</a></li>
<li><a href="Category.php">1</a></li>
<li><a href="Category2.php">2</a></li>
<li><a href="Category3.php">3</a></li>
<li><a class="last" href="#">Next</a></li>
</ul>

</div>
</div>

<?php } ?>

<!-- footer -->
<div class="footer">
		<div class="container">
		
                        <div style="text-align:center;">
						<h4 style="color:Silver;">&copy; 2019 WAD100. All rights reserved</h4>
						<a href="PROGRESSTUBES-LOGIN.php"><p style="color:Gray;">by Admin WAD100</p></a>
				</div>
			
		</div>
	</div>
<!-- //footer -->
                    
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
$(".dropdown").hover(            
    function() {
    $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
    $(this).toggleClass('open');},
    
    function() {
    $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
    $(this).toggleClass('open'); }
    );
    });

</script>

</body>
</html>