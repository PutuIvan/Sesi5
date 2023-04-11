<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);
    if($cnn){
        $mtkul = "tbMATKUL";
        $sql = "CREATE TABLE $mtkul(
            kodetik INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            matakuliah VARCHAR(50),
            sks VARCHAR(1)
        )";
        $hasil = mysqli_query($cnn, $sql);
        if($hasil){
            echo "Pembuatan Table ". $mtkul . " Sukses";
        }else{
            echo "Pembuatan Table ". $mtkul . " Gagal";
        }
    
    }else{
        echo "Koneksi ke MySQL Gagal";
    }