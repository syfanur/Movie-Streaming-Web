<?php
require("connect.php");
$id = $_GET['id'];
        
        $sql = "DELETE FROM registrasi WHERE id='$id'";
        $delete = mysqli_query($conn, $sql);
        if($delete){
            echo "<script>alert('Admin deleted');window.location.href='account.php'</script>";
         }else {
            echo "<script>alert('Delete admin failed');window.location.href='account.php'</script>";
        }
?>