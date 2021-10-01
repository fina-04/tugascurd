<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "perpus";

    $koneksi = mysqli_connect($serverName, $userName, $password, $database);

   if(!$koneksi){
       die("koneksi gagal".mysqli_connect_error());
    }
   else{
       echo "koneksi berhasil";
    }
?>