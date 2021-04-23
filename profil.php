<?php
include_once('connect.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM registrasi WHERE id = '$id'";
        $insert = mysqli_query($conn, $query);
        $data= mysqli_fetch_assoc($insert);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body{
    margin: 0;
    padding: 0;
}
#profil{
    max-width: 500px;
    margin:100px auto;
    background: #f9f9f9;
    box-shadow: 0 0 10px #aaa;
}
#profil h3{
    text-align: center;
    padding: 25px 10px;
    background-color: #2b2f3e;
    color: #b0b0bc;
}
fieldset{
    margin: 0;
    border: none;
}
form{
    padding: 0;
    margin: 0;
    padding: 15px;
}
input[type='text'],
input[type="email"], input[type='password']{
    width: 80%;
    padding: 1em;
    margin-top: 1.2em;
    color: #888;
}
input[type="submit"]{
    width: 100%;
    padding: 1.4em;
    margin: 1.5em 0;
    color: #888;
    background-color:#00cdb1 ;
    border:none;
    color:#eee;
    border-bottom: 4px solid transparent;
}
input[type="submit"]:hover{
    opacity: 0.8;
    border-color: #00adb1;
}
form p{
    text-align: center;
    color: #888;
    width: 30px;
    margin: 10px auto 0;
    background: #f9f9f9;
    position: relative;
    bottom: 20px;
}
.border-p{
    border-top: 1px solid #888;
    margin: 10px 10px;
}
button{
    background-color: #3b5998;
    width: 100%;
    padding: 1.4em;
    margin-bottom: 1em;
    color: #888; ;
    border:none;
    color:#eee;
    border-bottom: 4px solid transparent;
}
button:hover{
    opacity: 0.9;
    border-color: #3b3998;
} </style>
</head>
<body style="background : url('https://img1.goodfon.com/wallpaper/nbig/f/a6/material-design-color-3786.jpg'); background-size : cover;">

<div class="atas">
    <header style="background : url('https://img2.thejournal.ie/article/3310059/river?version=3310094&width=1340'); background-position-y: 80%;">
    <div class="menu">
		<ul>
			<li><a href="homepage.html">HOME</a></li>
			<li><a href="Kategori.html">KATEGORI</a></li>
			<li><a href="profil.php">PROFILE</a></li>
		</ul>
    </div>   

    <div class="judul">
            <span style="color:red; font-size:47pt">&ensp;WAD</span>
            <span style="color: white; font-size:43px;">100</span>
    </div>
    </header>

    <div id="profil">
        <h3>MY PROFILE</h3>
        <fieldset>
        <form action = update.php method="POST">
                <label>ID </label> <br>
                <input type="text" name="id" placeholder="ID" value="<?=$id?>" readonly> <br><br>
                <label>Nama Lengkap</label> <br>
                <input type="text" name="namalengkap" placeholder="Nama Lengkap" value="<?=$data['nama']?>"> <br><br>
                <label>Email</label> <br>
                <input type="email" name="Email" placeholder="Email" value="<?=$data['email']?>"> <br><br>
                <label>Username</label> <br>
                <input type="text" name="uname" placeholder="Username" value="<?=$data['uname']?>"><br><br>
                <label>Password</label> <br>
                <input type="password" name="pass" placeholder="Password" value="<?=$data['pass']?>"><br><br>
                <input type="submit" name="submit" value="Update">
                <div class="border-p"></div>
            </form>
        </fieldset>
    </div>
</body>
</html>