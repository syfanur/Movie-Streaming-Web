<?php 
$conn = mysqli_connect("localhost", "root", "", "tubeswad100");

if (isset($_POST['submit'])) {
	$email   = $_POST['email'];
	$pass    = $_POST['password'];

$user = mysqli_query($conn,"SELECT * FROM registrasi WHERE email='$email' && password='$pass'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
	echo "<script>alert('Login sukses !');window.location.href='interfaceadmin.php?id=$id'</script>";
}else
{
    echo "<script>alert('Login gagal !');window.location.href='RegistrasiTubes.php'</script>";
}
}
?>