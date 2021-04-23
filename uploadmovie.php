<?php
$conn = mysqli_connect("localhost", "root", "", "tubeswad100");
$result = mysqli_query($conn, "SELECT*FROM registrasi");
?>

<!DOCTYPE html>
<html>
<head>

<title> Admin's Account </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all" />
<link href="css/single.css" rel='stylesheet' type='text/css' />
<link href="css/medile.css" rel='stylesheet' type='text/css' />

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
        .header {
            background-image: url("shutterstock_384996514.jpg");
            background-position-y: 80%;
            position: absolute;
            width: 100%;
            height: 30%;
            left: 0px;
            right: 0px;
            top: 0px;
        }

        .logo {
            position: absolute;
            left: 5%;
            top: 5%;
        }

        .menubar {
            float: right;
            color: white;
            padding: 20px 20px;
            display: block;
            text-align: center;
            padding: 14px 16px;
        }

        .menubar a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;

            font-size: 17px;
        }

        .menubar a.active {
            color: white;
            text-decoration: none;
        }

        .uploadmovie {
            position: absolute;
            width: 100%;
            top: 190px;
            overflow: visible;
            background-color: black;
            color: white;
            margin: 0;
            font-family: Helvetica;
        }
        table, td, tr {
            text-align: center;
            border: 1px solid black;
            border-collapse: collapse;
            height: 50px;
        }
        .submit {
            background-color: white;
            border: none;
            border-radius: 2px;
            color: black;
            padding: 10px 20px;
            text-align: center;
        }
    </style>

</head>

<body>

<!-- header -->
<div class="header" style="background : url('https://img2.thejournal.ie/article/3310059/river?version=3310094&width=1340'); background-position-y: 80%;">
	<div class="container">
		<div style="float:left;">
			<a href="interfaceadmin.php"><h1 style="color: red; font-size: 70px; margin-left: 50px;">WAD<span style="font-size:50px; color:white;">100</span></h1></a>
		</div>
		<div class="w3_search">
			
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
						<br>
							
						</div>

					</nav>	
				</div>
			</div>

		
	</div>
</div>
<!-- //header -->

<div class="w3-sidebar w3-bar-block w3-black w3-card" style="width:13%; position:fix;">
<center><h1 style="color: red; font-size: 40px;">WAD<span style="font-size:20px; color:white;">100</span></h1></center> <br>
  <a href="interfaceadmin.php" class="w3-bar-item w3-button">All Movies</a> 
  <a href="account.php" class="w3-bar-item w3-button">Account Manager</a> 
  <a href="feedback.php" class="w3-bar-item w3-button">Feedback</a> 
  <div class="w3-dropdown-hover">
    <button class="w3-button">Movies Manager
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
	<a href="uploadmovie.php" class="w3-bar-item w3-button">Add Movie</a>
      <a href="editmovie.php" class="w3-bar-item w3-button">Edit Movie</a>
    </div>
  </div> 
   <a href="Homepage.php" class="w3-bar-item w3-button">Log Out</a>
</div>

<div class="uploadmovie">
        <h1 style="text-align: center;">Upload New Movie</h1>
        <table align= "center">
            <form method="POST" action="function_uploadmovie.php">
                <tr>
                    <td style="width: 200px; height: 25px">Title</td>
                    <td><input type="text" name="judul" id="judul" style="width: 250px; height: 25px; color:black;"/></td>
                </tr>
                <tr>
                    <td>Link</td>
                    <td><input type="text" name="video" style="width: 250px; height: 25px; color:black;"/></td>
                </tr>
                <tr>
                    <td>Sinopsis</td>
                    <!--
                    <td><input type="text" name="country" id="country" style="width: 250px; height: 25px"/></td>
                    -->
                    <td>
                    <textarea rows="5" id="sinopsis" name="sinopsis"  style="color:black; width: 100%;">
                    </textarea>
                    </td>
                </tr>
                <tr>
                    <td>Poster</td>
                    <td><input type="text" name="poster" id="poster" style="width: 250px; height: 25px; color: black;"/></td>
                </tr>
                <tr>
                    <td>Genre</td>
                    <td><input type="text" name="genre" id="genre" style="width: 250px; height: 25px; color: black;"/></td>
                </tr>
                <tr>
                    <td>Actors</td>
                    <td><input type="text" name="actors" id="actors" style="width: 250px; height: 25px; color: black;"/></td>
                </tr>
                <tr>
                    <td>Director</td>
                    <td><input type="text" name="director" id="director" style="width: 250px; height: 25px; color: black;"/></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><input type="text" name="country" id="country" style="width: 250px; height: 25px; color: black;"/></td>
                </tr>
                <tr>
                    <td>Release Date</td>
                    <td><input type="date" name="release_date" id="release_date" style="width: 250px; height: 25px; color: black;"/></td>
                </tr>
                <tr>
                    <td>Ratings</td>
                    <td><input type="text" name="ratings" id="ratings" style="width: 250px; height: 25px"/></td>
                </tr>
                    <td colspan="2"><input type="submit" name="submit" value="SUBMIT" class="submit" style="color: black;"/></td>
                </tr>
                </form>
            </table>
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