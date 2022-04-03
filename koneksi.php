<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "sulimah";

$koneksi = mysqli_connect($host,$user,$password,$dbname);
if (!$koneksi) {
    echo "koneksi gagal";
}

?>