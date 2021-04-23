<?php
$conn = mysqli_connect("localhost", "root", "", "tubeswad100");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Homepage</title>

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

<br>


<br>
<h4 class="latest-text w3_latest_text">Search Result</h4>
</div>

<div class = "container">
<?php
//search code
//error_reporting(0);
if($_REQUEST['submit']){
$name = $_POST['name'];

if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM streaming WHERE judul LIKE '%$name%'";
	$result = mysqli_query($conn, $sele);
	
	if($mak = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
      ?>
    
    <div class="col-md-2 w3l-movie-gride-agile">
    <a href="StreamingPage.php?id=<?=$row['id']?>"><img src="<?= $row['poster'] ?>" width="180px;" height="250px" />
    </a>
            
    <div class="mid-1">
    <div class="w3l-movie-text">
    <h6><a href="StreamingPage.php"><?= $row['judul'] ?></a></h6>							
    </div>
                                            
    <div class="w3l-movie-text">
    <p><?= $row['tahun'] ?></p>
    </div>   
    
    </div>
    </div>


    <?php
	}
}else{
echo'<h2> Search Result</h2>';

print ($make);
}
mysqli_free_result($result);
mysqli_close($conn);
}
}

?>
</div>

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