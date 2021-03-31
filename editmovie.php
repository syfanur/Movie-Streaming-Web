<?php
$conn = mysqli_connect("localhost", "root", "", "tubeswad100");
$result = mysqli_query($conn, "SELECT*FROM streaming");
?>

<!DOCTYPE html>
<html>
<head>

<title> Ini Admin </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all" />
<link href="css/single.css" rel='stylesheet' type='text/css' />
<link href="css/medile.css" rel='stylesheet' type='text/css' />

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head>

<body>

<!-- header -->
<div class="header" style="background : url('https://img2.thejournal.ie/article/3310059/river?version=3310094&width=1340'); background-position-y: 80%;">
	<div class="container">
		<div style="float:left;">
			<a href="interfaceadmin.php"><h1 style="color: red; font-size: 70px;">WAD<span style="font-size:50px; color:white;">100</span></h1></a>
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

<?php
while ($select = mysqli_fetch_assoc($result)){ ?>
<div>

<div class="container-fluid" style="margin-left: 15%;margin-top:5%">
<div class="row">
<div class="card-header d-flex align-items-center">
<h3 class="h4" style="color:black;">Movie's Details</h3>
</div>

<div class="card-body">
<div class="table-responsive">
    <table class="table"  border=1px;>
    <tr>
    <th style="color:black;">Judul</th>
    <th style="color:black;">Genre</th>
	<th style="color:black;">Actors</th>
    <th style="color:black;">Director</th>
    <th style="color:black;">Country</th>
	<th style="color:black;">Ratings</th>
	<th style="color:black;">Action</th>
    </tr>
                            
	<?php
    foreach($result as $data){
    ?>
    <tr>
    <td style="color:black;"><?= $data["judul"] ?> (<?= $data["tahun"] ?>)</td>
    <td style="color:black;"><?= $data["genre"] ?></td>
    <td style="color:black;"><?= $data["actors"] ?></td>
	<td style="color:black;"><?= $data["director"] ?></td>
	<td style="color:black;"><?= $data["country"] ?></td>
	<td style="color:black;"><?= $data["ratings"] ?></td>
	<td style="color:black;"><a href=editmovieinfo.php?id=<?=$data['id']?>> Edit&ensp; </a> | <a href=function_deletemovie.php?id=<?=$data['id']?>> &ensp;Delete </a> </td>
    </tr>
    
	<?php }?>
    </table>
    </div>
    </div>
    </div>
    </div>
	</div>
    </div>
                     
      

		<br><br><br><br>
		<?php } ?>

                    
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