<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "perpustakaan_menara_ilmu";

$connect  = mysqli_connect($hostname, $username, $password, $database);

if(!$connect) {
     die('Koneksi Error: ' . mysqli_connect_error());
}