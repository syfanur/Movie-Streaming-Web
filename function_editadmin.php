<?php
require("connect.php");
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $nip = $_POST['nip'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        
        $sql = "UPDATE registrasi SET nama='$nama',nip='$nip',email='$email',username='$username' WHERE id='$id'";
        $update = mysqli_query($conn, $sql);
        if($update){
            echo "<script>alert('Data Updated');window.location.href='account.php'</script>";
         }else {
            echo "<script>alert('Update Failed');window.location.href='adminmanager.php'</script>";
        }
    } 
?> 