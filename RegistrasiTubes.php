<?php
$conn = mysqli_connect("localhost", "root", "", "tubeswad100");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome to WAD100</title>

<style>
		*{ 
			background-color: black; 
			color: white;
			font: calibri; 
		}

		.divparent {
			width: 1500xpx;
			height:295px;
			}

		.imgleft {
			float: left;
			width: 50%;
			height: 900px;
			}

		.descright {
			float: right;
			width: 45%;
			margin-left: 5%;
			}
			
		.button{
			text-align: right;
			cursor: pointer;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-right: 30px;
			padding-left: 30px;
			}
	</style>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/medile.css" rel='stylesheet' type='text/css' />
<link href="css/single.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all" />

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

</head>
	
<body style="background-color: black;">
<!-- header -->
<div class="header" style="background : url('https://img2.thejournal.ie/article/3310059/river?version=3310094&width=1340'); background-position-y: 80%;">
	<div class="container">
		<div style="float:left;">
			<a href="Homepage.php"><h1 style="color: red; font-size: 70px;">WAD<span style="font-size:50px; color:white;">100</span></h1></a>
		</div>
	</div>
</div> <br>

<div class="divparent">
		<img class="imgleft" src="images/wad.jpg">
		<div class="descright">
			<h1 style="font-size: 40pt"> <b> WELCOME TO WAD100 </b> </h1> 
			<p style="font-size: 18pt"> Don't have an account? </p>
			<p style="font-size: 18pt"> Let's register! </p> 
				<br>
				<form action="prosesregister.php" method="post">
					<label for="nama"> <b> Nama : </b> </label> <br> 
					<input type="text" name="nama" id="nama" style="padding-left: 170px; padding-right: 170px; padding-top: 28px; padding-bottom: 28px; background-color: black"> <br> <br> 

					<label> <b> NIP: </b> </label> <br> 
					<input type="text" name="nip" style="padding-left: 170px; padding-right: 170px; padding-top: 28px; padding-bottom: 28px; background-color: black"> <br> <br> 

					<label for="email"> <b> Email : </b> </label> <br> 
					<input type="text" name="email" id="email" style="padding-left: 170px; padding-right: 170px; padding-top: 28px; padding-bottom: 28px; background-color: black"> <br> <br>

					<label for="username"> <b> Username : </b> </label> <br> 
					<input type="text" name="username" id="username" style="padding-left: 170px; padding-right: 170px; padding-top: 28px; padding-bottom: 28px; background-color: black"> <br> <br> 

					<label> <b> Password : </b> </label> <br> 
					<input type="password" name="password" style="padding-left: 170px; padding-right: 170px; padding-top: 28px; padding-bottom: 28px; background-color: black"> <br> <br> <br>

					<button class="button" type="submit"> Register </button>
				</form>
					</div>
		</div>		

<!-- footer -->
<div class="footer">
		<div class="container">
		<br> <br><br> <br><br><br> <br><br> <br><br><br> <br><br> <br><br><br> <br><br> <br><br>
                        <div style="text-align:center;"> <br> <br><br> <br><br><br>
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