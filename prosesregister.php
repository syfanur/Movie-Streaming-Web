<?php
   require_once("connect.php");
   $nama = $_POST['nama'];
   $nip = $_POST['nip'];
   $email = $_POST['email'];
   $username = $_POST['username']; 
   $pass = $_POST['password'];

   $sql = "SELECT * FROM registrasi WHERE nip = '$nip'";
   $query = $conn->query($sql);

    if($query->num_rows != 0) {
      echo "<div align='center'>Pegawai dengan NIP $nip Sudah Terdaftar! </div>";
      ?> <a href="RegistrasiTubes.html"> OK </a> <?php
    } else {
      $data = "INSERT INTO registrasi VALUES (NULL, '$nama', '$nip', '$email', '$username', '$pass' )";
         $simpan = $conn->query($data);
        if($simpan) {
          echo "<script>alert('Register sukses!');window.location.href='PROGRESSTUBES-LOGIN.php?id=$id'</script>";
        } else {
          echo "<script>alert('Register gagal');window.location.href='RegistrasiTubes .php?id=$id'</script>";
        }
    }
?>