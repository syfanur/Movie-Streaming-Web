<?php
include "connect.php" ;
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$email = $_POST['email'];
    $feedback = $_POST['feedback'];

	$query = "INSERT into feedback (nama, email, feedback) values ('$nama', '$email', '$feedback') ";
        $insert = mysqli_query($conn, $query);
        if($insert){
            echo "<script>alert('Feedback Terkirim !');window.location.href='Homepage.php'</script>";
         }else {
            echo "<script>alert('Gagal Mengirim Feedback !');window.location.href='Homepage.php'</script>";
        }
}



?>