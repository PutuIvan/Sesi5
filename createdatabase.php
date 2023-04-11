<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS);
    if($cnn){

        $sql = "CREATE DATABASE ". DBNAME;
        $hasil = mysqli_query($cnn, $sql);
        if($hasil){
            echo "Pembuatan Database ". DBNAME . " Sukses";
        }else{
            echo "Pembuatan Database ". DBNAME . " Gagal";
        }

    }else{
        echo "Koneksi ke MySQL Gagal";
    }