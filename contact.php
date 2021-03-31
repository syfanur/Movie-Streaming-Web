<?php
$conn = mysqli_connect("localhost", "root", "", "tubeswad100");
$a = mysqli_query($conn, "SELECT*FROM streaming WHERE keterangan LIKE '%Recent%'");
$b = mysqli_query($conn, "SELECT*FROM streaming WHERE keterangan LIKE '%Top%'");
$c = mysqli_query($conn, "SELECT*FROM streaming WHERE keterangan LIKE '%Coming%'");
$d = mysqli_query($conn, "SELECT*FROM movies");
$e = mysqli_query($conn, "SELECT*FROM actor");
$f = mysqli_query($conn, "SELECT*FROM theaters");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome to WAD100</title>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all" />
<link href="css/single.css" rel='stylesheet' type='text/css' />
<link href="css/medile.css" rel='stylesheet' type='text/css' />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>


<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<!-- banner-slider -->
<link href="css/jquery.slidey.min.css" rel="stylesheet">
<!-- //banner-slider -->

<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
	

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

<br> <br>

<!-- contact -->
<div class="contact-agile">
	
			<h4 class="latest-text w3_latest_text">Contact Us</h4>
			<div class="container">
				<div class="col-md-3 location-agileinfo">
					<div class="icon-w3">
						<span class="fa fa-map mr-md-3" aria-hidden="true" style="color:white;"></span>
					</div>
					<h3>Address</h3>
					<h4>Jl. Telekomunikasi Jl. Terusan Buah Batu, Sukapura Bandung, Jawa Barat - 40257</h4>
				</div>
				<div class="col-md-3 call-agileits">
					<div class="icon-w3">
						<span class="fa fa-phone mr-md-3" aria-hidden="true" style="color:white;"></span>
					</div>
					<h3>Call</h3>
                    <h4>(022) 7565931</h4>
                    <h4>(022) 7565932</h4>
                    <h4>(022) 7565933</h4>
                    <h4>(022) 7565934</h4>
				</div>
				<div class="col-md-3 mail-wthree">
					<div class="icon-w3">
						<span class="fa fa-envelope mr-md-3" aria-hidden="true" style="color:white;"></span>
					</div>
					<h3>Email</h3>
					<h4><a href="mailto:syfanur31@gmail.com">syfanur31@gmail.com</a></h4>
                    <h4><a href="mailto:ideliamuthia@gmail.com">ideliamuthia@gmail.com</a></h4>
                    <h4><a href="mailto:deladela@gmail.com">deladela@gmail.com</a></h4>
                    <h4><a href="mailto:khansaa@gmail.com">khansaaa@gmail.com</a></h4>
				</div>
				<div class="col-md-3 social-w3l">
					<div class="icon-w3">
						<span class="fa fa-user mr-md-3" aria-hidden="true" style="color:white;"></span>
					</div>
					<h3>Social Media</h3>
					<ul>
						<li><a href="https://web.facebook.com/telkomuniversity/?_rdc=1&_rdr"><i class="fab fa-facebook fa-2x text-white mr-md-5" aria-hidden="true"></i><span class="text">Facebook</span></a></li>
						<li class="twt"><a href="https://twitter.com/TelUniversity?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter fa-2x text-white mr-md-5" aria-hidden="true"></i><span class="text">Twitter</span></a></li>
						<li class="ggp"><a href="https://www.instagram.com/telkomuniversity/?hl=en"><i class="fab fa-instagram fa-2x text-white mr-md-5 " aria-hidden="true"></i><span class="text">Google+</span></a></li>	
					</ul>
				</div>
                <div class="clearfix"></div>
            </div>
                <h4 class="latest-text w3_latest_text">FEEDBACK</h4>
                <div class="container">
				<form action="create.php" method="POST">
					<input type="text" name="nama" placeholder="NAME" required="">
					<input type="text" name="email" placeholder="EMAIL" required="">
					<textarea  name="feedback" placeholder="YOUR MESSAGE" required=""></textarea>
					<input type="submit" name="submit" value="SEND MESSAGE">
				</form>
			</div>
		</div>
	<br><br><br>



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


<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>

</body>
</html>