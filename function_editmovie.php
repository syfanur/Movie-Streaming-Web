<?php
require("connect.php");
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $title = $_POST['judul'];
        $video = $_POST['video'];
        $sinopsis = htmlspecialchars($_POST['sinopsis']);
        $poster = $_POST['poster'];
        $genre = $_POST['genre'];
        $actors = $_POST['actors'];
        $director = $_POST['director'];
        $country = $_POST['country'];
        $release_date = $_POST['release_date'];
        $ratings = $_POST['ratings'];

        $query = "UPDATE streaming SET judul='$title', video='$video', sinopsis='$sinopsis', actors='$actors', director='$director',
        country='$country', release_date='$release_date', ratings='$ratings' WHERE id='$id'";
        $update = mysqli_query($conn, $query);
        if($update){
            echo "<script>alert('Movie info updated');window.location.href='Homepage.php'</script>";
         }else {
            echo "<script>alert('Update failed');window.location.href='Homepage.php'</script>";
        }
    }

    //delete

    

?>
