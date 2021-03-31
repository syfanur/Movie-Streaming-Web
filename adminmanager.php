<?php
$conn = mysqli_connect("localhost", "root", "", "tubeswad100");
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT*FROM registrasi WHERE id = '$id'");
$select = mysqli_fetch_assoc($result)
?>

<!DOCTYPE html>
<html>
<head>

<title> Edit Admin </title>
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
            <a href="Homepage.php"><h1 style="color: red; font-size: 70px;">WAD<span style="font-size:50px; color:white;">100</span></h1></a>
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
         <br>
        <h1 style="text-align: center;">Edit Admin dengan NIP <?= $select["nip"] ?></h1>
        <br> <br>
        <table align= "center">
            <form method="POST" action="function_editadmin.php">
                <input type="hidden" name="id" value="<?php echo $select['id'] ?>">
                <tr>
                    <td style="width: 100px; height: 50px">Nama</td>
                    <td><input type="text" name="nama" id="nama" value="<?php echo $select['nama'] ?>" style="width: 250px; height: 25px"/></td>
                </tr>
                <tr>
                    <td style="height: 50px">NIP</td>
                    <td><input type="text" name="nip" id="nip" value="<?php echo $select['nip'] ?>"style="width: 250px; height: 25px"/></td>
                </tr>
                <tr>
                    <td style="height: 50px">E-mail</td>
                    <td style="height: 50px"><input type="text" name="email" value="<?php echo $select['email']?>" style="width: 250px; height: 25px"/></td>
                </tr>
                <tr>
                    <td style="height: 50px">Username</td>
                    <td style="height: 50px"><input type="text" name="username" id="username" value="<?php echo $select['username']?>" style="width: 250px; height: 25px"/></td>
                </tr>
                </tr>
                    <td colspan="2"><input type="submit" name="submit" value="SUBMIT" class="submit"/></td>
                </tr>
                </form>
            </table>
            <br> <br> <br>
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