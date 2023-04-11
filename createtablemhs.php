<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);
    if($cnn){
        $mhs = "tbMHS";
        $sql = "CREATE TABLE $mhs(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(35),
            nim VARCHAR(10),
            alamat VARCHAR(255),
            telp VARCHAR(15),
            prodi VARCHAR(25),
            gender VARCHAR(1),
            tgllahir date   
        )";
        $hasil = mysqli_query($cnn, $sql);
        if($hasil){
            echo "Pembuatan Table ". $mhs . " Sukses";
        }else{
            echo "Pembuatan Table ". $mhs . " Gagal";
        }

    }else{
        echo "Koneksi ke MySQL Gagal";
    }