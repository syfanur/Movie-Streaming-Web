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

<br>


<!-- slide -->
<?php
while ($select = mysqli_fetch_assoc($c)){ ?>
<div id="slidey" style="display:none;">
		<ul>
		<?php
    foreach($c as $data){
    ?>  
			<li><img src="<?= $data["poster"] ?>" alt=" ">
			<p class='title'><?= $data["judul"] ?></p>
			<p class='description'><?= $data["sinopsis"] ?></p></li>
			   	
			<?php }?> 
			</ul>
    </div>
    <script src="js/jquery.slidey.js"></script>
    <script src="js/jquery.dotdotdot.min.js"></script>
	   <script type="text/javascript">
			$("#slidey").slidey({
				interval: 8000,
				listCount: 4,
				autoplay: false,
				showList: true
			});
			$(".slidey-list-description").dotdotdot();
		</script>
<!-- slide -->


<!-- general -->
<div class="general">
<h4 class="latest-text w3_latest_text">Our Recommendations</h4>
	<div class="container">
	<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
		<ul id="myTab" class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#top" id="top-tab" role="tab" data-toggle="tab" aria-controls="top" aria-expanded="true">Top Movies</a></li>
		<li role="presentation"><a href="#recent" role="tab" id="recent-tab" data-toggle="tab" aria-controls="recent" aria-expanded="false">Recent Added</a></li>
		</ul>
	
		<div id="myTabContent" class="tab-content">
		<div role="tabpanel" class="tab-pane fade active in" id="top" aria-labelledby="top-tab">
		<div class="w3_agile_featured_movies">
			<?php
			foreach($b as $data2){
			?> 
		
		<div class="col-md-2 w3l-movie-gride-agile">
    		<a href="StreamingPage.php?id=<?=$data2['id']?>"><img src="<?= $data2["poster"] ?>" width="180px;" height="250px" /></a>
            
    	<div class="mid-1">
    		<div class="w3l-movie-text">
    		<h6><a href="StreamingPage.php"><?= $data2["judul"] ?></a></h6>							
    		</div>
                                            
    		<div class="w3l-movie-text">
    		<p><?= $data2["tahun"] ?></p>
    		</div> 
		</div>
								
		</div>
		<?php }?>
						
		</div>
		</div>
		
		<div role="tabpanel" class="tab-pane fade" id="recent" aria-labelledby="recent-tab">
			<?php
			foreach($a as $data2){
			?> 
			
		<div class="col-md-2 w3l-movie-gride-agile">
    	<a href="StreamingPage.php?id=<?=$data2['id']?>"><img src="<?= $data2["poster"] ?>" width="180px;" height="250px" /></a>
            
    	<div class="mid-1">
    		<div class="w3l-movie-text">
    		<h6><a href="StreamingPage.php"><?= $data2["judul"] ?></a></h6>							
    		</div>
                                            
    		<div class="w3l-movie-text">
    		<p><?= $data2["tahun"] ?></p>
    		</div> 
		</div>
								
		</div>
		<?php }?>
							
		</div>
		</div>
		</div>
		</div>
	</div>

<!-- Keterangan -->


	<div class="col-md-4 single-right" style="background-color:Gainsboro">
	<!-- Theaters -->
		<h3 style="margin-left:70px;">&emsp;In Theaters</h3>
		<br>
		<div class="col-md-8 single-right-grid-right" style="margin-left:70px;">
		<?php
		foreach($f as $data){
		?> 
		
		<a href="<?= $data["link"] ?>"><p><?= $data["judul"] ?></p></a>
		<?php }?>
		
		<h5>&emsp;</h>
		</div>
		</div>
		
		<!-- Movies -->
		<div class="col-md-4 single-right" style="background-color:Gainsboro">
		<h3>&emsp;Best Movies of 2019</h3>
		<br>
		<div class="col-md-8 single-right-grid-right">
		<?php
		foreach($d as $data){
		?> 
		
		<a href="<?= $data["link"] ?>"><p><?= $data["judul"] ?></p></a>
		<?php }?>
		
		<h5>&emsp;</h>
		</div>
		</div>

		<!-- actor -->
		<div class="col-md-4 single-right" style="background-color:Gainsboro">
		<h3>&emsp;Top Actor & Actress</h3>
		<br>
		<div class="col-md-8 single-right-grid-right">
		<?php
		foreach($e as $data){
		?> 
		
		<a href="<?= $data["link"] ?>"><p><?= $data["nama"] ?></p></a>
		<?php }?>
		
		<h5>&emsp;</h>
		</div>
		</div>
						
		</div>

		</div>
		</div>
				

	<div class="container">
	<div class="row">
			
	</div>
	</div>

</div>


		<br><br><br><br>

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