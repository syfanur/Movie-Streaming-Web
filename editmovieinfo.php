<?php
require("connect.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT*FROM streaming WHERE id = '$id'");
$select = mysqli_fetch_assoc($result)
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Movie | WAD100</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all" />
<link href="css/single.css" rel='stylesheet' type='text/css' />
<link href="css/medile.css" rel='stylesheet' type='text/css' />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
</head>

<!-- banner-slider -->
<link href="css/jquery.slidey.min.css" rel="stylesheet">
<!-- //banner-slider -->

<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
	
</head>

<body>

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
     </div>
</div>

     <div class="uploadmovie">
         <br>
        <h1 style="text-align: center;">Update Movie: <?= $select["judul"] ?></h1>
        <br> <br>
        <table align= "center">
            <form method="POST" action="function_editadmin.php">
                <input type="hidden" name="id" value="<?php echo $select['id'] ?>">
                <tr>
                    <td style="width: 100px; height: 50px">Title</td>
                    <td><input type="text" name="judul" id="judul" value="<?php echo $select['judul'] ?>" style="width: 250px; height: 25px"/></td>
                </tr>
                <tr>
                    <td style="height: 50px">Year</td>
                    <td><input type="text" name="tahun" id="tahun" value="<?php echo $select['tahun'] ?>"style="width: 250px; height: 25px"/></td>
                </tr>
                <tr>
                    <td style="height: 50px">Link</td>
                    <td style="height: 50px"><input type="text" name="video" value="<?php echo $select['video']?>" style="width: 250px; height: 25px"/></td>
                </tr>
                <tr>
                    <td style="height: 50px">Sinopsis</td>
                    <!--
                    <td><input type="text" name="country" id="country" style="width: 250px; height: 25px"/></td>
                    -->
                    <td style="height: 50px">
                    <textarea rows="10" style="width: 100%" id="sinopsis" name="sinopsis">
                    <?php echo $select['sinopsis'] ?>
                    </textarea>
                    </td>
                </tr>
                <tr>
                    <td style="height: 50px">Poster</td>
                    <td style="height: 50px"><input type="text" name="poster" id="poster" value="<?php echo $select['video']?>" style="width: 250px; height: 25px"/></td>
                </tr>
                <tr>
                    <td style="height: 50px">Genre</td>
                    <td style="height: 50px"><input type="text" name="genre" id="genre" value="<?php echo $select['genre']?>"style="width: 250px; height: 25px"/></td>
                </tr>
                <tr>
                    <td style="height: 50px">Trailer</td>
                    <td style="height: 50px"><input type="text" name="trailer" id="trailer" value="<?php echo $select['trailer']?>" style="width: 250px; height: 25px"/></td>
                </tr>
                <tr>
                    <td style="height: 50px">Keterangan</td>
                    <td style="height: 50px"><input type="text" name="keterangan" id="keterangan" value="<?php echo $select['keterangan']?>" style="width: 250px; height: 25px"/></td>
                </tr>
                <tr>
                    <td style="height: 50px">Actors</td>
                    <td style="height: 50px"><input type="text" name="actors" id="actors" value="<?php echo $select['actors']?>" style="width: 250px; height: 25px"/></td>
                </tr>
                <tr>
                    <td style="height: 50px">Director</td>
                    <td style="height: 50px"><input type="text" name="director" id="director" value="<?php echo $select['director']?>" style="width: 250px; height: 25px"/></td>
                </tr>
                <tr>
                    <td style="height: 50px">Country</td>
                    <td style="height: 50px"><input type="text" name="country" id="country" value="<?php echo $select['country']?>" style="width: 250px; height: 25px"/></td>
                </tr>
                <tr>
                    <td style="height: 50px">Release Date</td>
                    <td style="height: 50px"><input type="date" name="release_date" id="release_date" value="<?php echo $select['release_date']?>" style="width: 250px; height: 25px"/></td>
                </tr>
                <tr>
                    <td style="height: 50px">Ratings</td>
                    <td style="height: 50px"><input type="text" name="ratings" id="ratings" value="<?php echo $select['ratings']?>" style="width: 250px; height: 25px"/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="SUBMIT" class="submit"/></td>
                </tr>
                </form>
            </table>
            <br> <br> <br>
    </div>

    <div class="footer">
		<div class="container">
		
                        <div style="text-align:center;">
						<h4 style="color:Silver;">&copy; 2019 WAD100. All rights reserved</h4>
						<a href="PROGRESSTUBES-LOGIN.php"><p style="color:Gray;">by Admin WAD100</p></a>
				</div>
			
		</div>
	</div>