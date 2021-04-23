<?php
$conn = mysqli_connect("localhost", "root", "", "tubeswad100");
$result = mysqli_query($conn, "SELECT*FROM streaming");
?>

<!DOCTYPE html>
<html>
<head>
	<title> Movie Manager </title>

	<style>
		table, th, td, tr {
			border: 1px solid black;
			height: 30px;
			width: 500px;
			
		}
	</style>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all" />
<link href="css/single.css" rel='stylesheet' type='text/css' />
<link href="css/medile.css" rel='stylesheet' type='text/css' />

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
</head>

<body style="background-color: white">

<div class="header" style="background : url('https://img2.thejournal.ie/article/3310059/river?version=3310094&width=1340'); background-position-y: 80%;">
	<div class="container">
		<div style="float:left;">
			<a href="Homepage.html"><h1 style="color: red; font-size: 70px;">WAD<span style="font-size:50px; color:white;">100</span></h1></a>
		</div>
		<div class="w3_search">
			<form action="#" method="post">
				<input type="text" name="Search" placeholder="Search" required="">
				<input type="submit" value="Go">
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
														<li><a href="Category.html">Comedy</a></li>
														<li><a href="Category2.html">Horror</a></li>
														<li><a href="Category2.html">Mystery</a></li>
														<li><a href="Category.html">Romance</a></li>
														<li><a href="#">SciFi</a></li>
														<li><a href="#">Thriller</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="#">Contact</a></li>
								</ul>
							</nav>
						</div>

					</nav>	
				</div>
			</div>
	</div>
</div>

<body>
	<br> <br>
	<form>
		<h3 align="center"> Index Movie </h3>
		<table class="format" align="center">
			<tr>
				<td align="center" style="width: 50px;"> ID </td>
				<td align="center"> Judul </td>
				<td align="center"> Genre </td>
				<td align="center"> Actors </td>
				<td align="center"> Director </td>
				<td align="center"> Country </td>
				<td align="center"> Ratings </td>
			</tr>
<?php
	$ambil = mysqli_query($conn, "SELECT * FROM streaming");
	$a=1;
	while($row=mysqli_fetch_array($ambil)){
		echo"<tr>";
		echo"<td>";
		echo $row['id'];
		echo"</td>";
		echo"<td>";
		echo $row['judul'];
		echo"</td>";
		echo"<td>";
		echo $row['genre'];
		echo"</td>";
		echo"<td>";
		echo $row['actors'];
		echo"</td>";
		echo"<td>";
		echo $row['director'];
		echo"</td>";
		echo"<td>";
		echo $row['country'];
		echo"</td>";
		echo"<td>";
		echo $row['ratings'];
		echo"</td>";

		echo"<td>";
		echo "<a href='editmovieinfo.php?id=".$row['id']."'>Edit</a> | <a href='function_deletemovie.php?id=".$row['id']."'>Delete</a>";
		echo"</td>";
		echo"</tr>";
	}
?>
		</table>
	</form>
	<br> <br>

	<div class="footer">
    <div class="container">
        <div class="w3ls_footer_grid">
            <div class="col-md-6 w3ls_footer_grid_left">
                <div class="w3ls_footer_grid_left1">
                    <h2>Subscribe us</h2>
                    <div class="w3ls_footer_grid_left1_pos">
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="Your email..." required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 w3ls_footer_grid_right">
                    <div style="float:left;">
                            <a href="index.html"><h1 style="color: red; font-size: 70px;">WAD<span style="font-size:50px; color:white;">100</span></h1></a>
                        </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-5 w3ls_footer_grid1_left">
            <p>&copy; 2019 WAD100. All rights reserved</a></p>
        </div>
        
        <div class="clearfix"> </div>
    </div>
</div>
                    
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






	