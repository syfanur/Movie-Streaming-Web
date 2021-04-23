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
  <a href="#" class="w3-bar-item w3-button">All Movies</a> 
  <a href="account.php" class="w3-bar-item w3-button">Account Manager</a> 
  <a href="feedback.php" class="w3-bar-item w3-button">Feedback</a> 
  <div class="w3-dropdown-hover">
    <button class="w3-button">Movies Manager
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
	<a href="uploadmovie.php" class="w3-bar-item w3-button">Add Movie</a>
      <fa href="editmovie.php" class="w3-bar-item w3-button">Edit Movie</a>
    </div>
  </div>
  <a href="Homepage.php" class="w3-bar-item w3-button">Log Out</a>  
</div>

<?php
while ($select = mysqli_fetch_assoc($result)){ ?>
<div>

<div class="w3-container" style="margin-left:12%" >
<br>
<h4 class="latest-text">IT'S OUR MOVIES</h4>
<div class="container">
    <?php
    foreach($result as $data){
    ?>   

<div class="col-md-2 w3l-movie-gride-agile">
<a href="StreamingPage.php?id=<?=$data['id']?>"><img src="<?= $data["poster"] ?>" width="180px;" height="250px" />                                       
</a>

<div class="mid-1">
    <div class="w3l-movie-text">
    <h7><a href="StreamingPage.php?id=<?=$data['id']?>"><?= $data["judul"] ?></a></h7>	
	<p><?= $data["tahun"] ?></p>						
    </div>
                                  
</div>	
</div>

    <?php }?> 
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