<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "perpus";

    $con = mysqli_connect($server, $username, $password, $database);

    if (!$con){
        echo "<h1>Koneksi Anda gagal!</h1>";
    }
?>