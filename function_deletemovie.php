<?php
require("connect.php");
$id = $_GET['id'];
        
        $sql = "DELETE FROM streaming WHERE id='$id'";
        $delete = mysqli_query($conn, $sql);
        if($delete){
            echo "<script>alert('Movie deleted');window.location.href='editmovie.php'</script>";
         }else {
            echo "<script>alert('Delete admin failed');window.location.href='editmovie.php'</script>";
        }
?>