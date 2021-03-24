<?php
$conn = mysqli_connect("localhost", "root", "", "tubeswad100");

if(!$conn){
    echo "<script>alert('Failed Connect into Database');</script>";
}

?>