<?php
$conn = mysqli_connect("localhost","root","","tubeswad100");

$id=$_GET['id'];

$sql="DELETE FROM registrasi WHERE id='$id'";
$delete = mysqli_query($conn, $sql); 

if($delete){
	echo "<script>alert('User Deleted');</script>";
}else{
	echo "<script>alert('Delete Failed')</script>";
}

header("location:account.php");
?>