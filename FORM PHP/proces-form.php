<?php
$servername ="localhost"; 
$username ="root";
$password ="";
$dbname ="data_user";

$sconn = new mysqli($servername,$username,$password,$dbname);

if ($sconn->connect_eror) {
    die("koneksi gagal : " . $conn->connect_error);
}

$nik = $_POST['nik']
$nama = $_POST['nama']
$alamat =  $_POST['alamat']
$email = $_POST['email']