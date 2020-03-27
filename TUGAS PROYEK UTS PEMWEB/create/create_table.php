<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpustakaan_menara_ilmu";
//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$conn) {
	die("Connection failed : ".mysqli_connect_error());
}

$sql = "CREATE TABLE ANGGOTA (
  ID int(11) NOT NULL,
  nama_lengkap varchar(40) NOT NULL,
  tempat_lahir varchar(11) NOT NULL,
  tanggal_lahir date DEFAULT NULL,
  alamat varchar(200) DEFAULT NULL,
  kecamatan varchar(200) DEFAULT NULL,
  kota varchar(20) DEFAULT NULL,
  kode_pos varchar(5) DEFAULT NULL,
  no_hp varchar(15) DEFAULT NULL,
  email varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if(mysqli_query($conn,$sql)){
	echo "Table created succesfully";
} else {
	echo "Error creating table: ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>