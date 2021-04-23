<?php
include_once('connect.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
    
        $query = "UPDATE registrasi SET nama='$nama', email='$email', username='$uname', password='$pass' WHERE id='$id'";
        $update = mysqli_query($conn, $query);
        if($update){
            echo "<script>alert('Profile Updated !');window.location.href='home.php'</script>";
         }else {
            echo "<script>alert('Update Failed !');window.location.href='home.php'</script>";
        }
    }

?>

