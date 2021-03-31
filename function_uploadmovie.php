<?php
    $conn = mysqli_connect('localhost','root','','tubeswad100') or die('gagal koneksi');

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
        $upload = "INSERT INTO streaming (id,judul, video, sinopsis, poster, genre, actors, director, country, release_date, ratings) 
                VALUES ('', '$title', '$video', '$sinopsis', '$poster', '$genre', '$actors', '$director', '$country', '$release_date', '$ratings')";
                $registersuccess = mysqli_query($conn, $upload);
                if ($registersuccess) {
                    echo "<script> alert('Add movie success')</script>";     
                }
                else {
                    echo "<script> alert('Add movie failed')</script>";
                }
                           
        
?>