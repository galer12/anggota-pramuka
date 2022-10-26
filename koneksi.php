<?php
$servername = "localhost";
$database = "pramuka";
$username = "galih";
$password = "";

// Create connection

$koneksi = mysqli_connect($servername, $username, $password);

// Check connection

if ($koneksi){
    $buka = mysqli_select_db($koneksi,$database);
    if(!$buka){
        echo "Database Tidak Dapat Terhubung";
    }
}
else{
    echo "MySQL tidak Terhubung";
}
?>