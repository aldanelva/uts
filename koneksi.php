<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "data_perpus";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if ($connect) {
    echo "<h2>Koneksi ke MySQL berhasil</h2>";
    } else {
         echo "<h2>Koneksi ke MySQL gagal</h2>" . mysqli_connect_error();
    }
?>