<html>
<head>
	<title> Login | WAD100 </title>

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
</head>

<body>
	

	<div class="divparent">
		<img class="imgleft" src="images/wad.jpg" style="float: left;">
		<div class="descright">
			<h1 style="font-size: 40pt"> <b> WELCOME TO WAD100 </b> </h1> 
			<p style="font-size: 18pt"> Hello </p>
			<p style="font-size: 18pt"> Login Here! </p> 
				<br>


<form action="login_database.php" method="POST">
    <input type="text" name="email" placeholder="Email"style="padding-left: 170px; padding-right: 170px; padding-top: 28px; padding-bottom: 28px; background-color: black"> <br><br><br>
    <input type="password" name="password" placeholder="password" style="padding-left: 170px; padding-right: 170px; padding-top: 28px; padding-bottom: 28px; background-color: black"> <br><br><br>
    <button type="submit" name="submit" style="padding: 30px; background-color: grey; color: black; font-weight: bold; font-size: 18pt; margin-left: 150px;">Login</button>
</form>



</body>
</html>