<?php
$connection = mysqli_connect('localhost', 'root', '', 'db_user');
// Cek Koneksion
if(!$connection){
    die("Koneksi Gagal:" . mysqli_connect_error());
}
else{
    echo "Koneksi Berhasil";
}
?>