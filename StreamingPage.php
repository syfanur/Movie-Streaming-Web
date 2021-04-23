<?php
$conn = mysqli_connect("localhost", "root", "", "tubeswad100");
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT*FROM streaming WHERE id = '$id'");
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome to WAD100</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all" />
<link href="css/single.css" rel='stylesheet' type='text/css' />
<link href="css/medile.css" rel='stylesheet' type='text/css' />

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
</head>


<body style="background-color:Gainsboro">

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

<?php
while ($select = mysqli_fetch_assoc($result)){ ?>


<div class="general-agileits-w3l">
    <div class="w3l-medile-movies-grids">
 
<!-- Keterangan -->    
    <div class="container" >
    <div class="agileits-single-top">
        <ol class="breadcrumb" style="background-color:Lavender">
        <li><a href="Homepage.php">Home</a></li>
        <li><a href="#">Streaming Page</a></li>
        <li><?= $select["judul"] ?></li>
        </ol>
    </div>
    </div>
    
<!-- Keterangan  -->
    
<br>

<!-- Movie -->

<h4 class="latest-text" style="margin-left:110px;"><?= $select["judul"] ?> </h4>
    <div class="container">
	<div class="col-sm-8 single-left">
        <iframe  width="1150px" height="400px" src="<?= $select["video"] ?>" 
        frameborder="0" allow="accelerometer;  encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div> 
</div>  
    
    
	
					
    <div class = "container">

    <div class="col-md-12 single-right" style="background-color:Lavender">
    <h3>Sinopsis</h3>
	<div class="single-grid-right">
	
		<div class="col-md-12 single-right-grid-left" >
        <p> <?= $select["sinopsis"] ?> </p>
        <br>
        <br>
		</div>
        							
    </div>
    	
    </div>


    <div class="col-md-12 single-right" style="background-color:Lavender">
	<h3>Movie Details</h3>
        
    <div class="single-grid-right">
		<div class="single-right-grids">
		<div class="col-md-2 single-right-grid-left">
        <img src="<?= $select["poster"] ?>" width="120px;" height="170px"/>
        <p> &emsp;</p> <p> &emsp;</p>
		</div>
        
        <div class="col-md-9 single-right-grid-right" >
		<table> 
            <tr>
            <td> Genre </td>
            <td> &emsp; : &emsp; <?= $select["genre"] ?> </td>
            </tr>

            <tr>
            <td> Actors </td>
            <td> &emsp; : &emsp; <?= $select["actors"] ?> </td>
            </tr>

            <tr>
            <td> Director </td>
            <td> &emsp; : &emsp; <?= $select["director"] ?> </td>
            </tr>

            <tr>
            <td> Country </td>
            <td> &emsp; : &emsp; <?= $select["country"] ?> </td>
            </tr>

            <tr>
            <td> Release Date </td>
            <td> &emsp; : &emsp;  <?= $select["release_date"] ?> </td>
            </tr>

            <tr>
            <td> Ratings </td>
            <td> &emsp; : &emsp;  <?= $select["ratings"] ?> </td>
            </tr>

        
            </table>
		</div>
							
		</div>
</div>
</div>
</div>


    

<br><br><br>
    
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