<?php

include('../config/koneksi.php');

$ID              = $_POST['id'];
$nama          = $_POST['nama'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['thn_lahir'] . '-' . $_POST['bln_lahir'] . '-' . $_POST['tgl_lahir'];
$alamat        = $_POST['alamat'];
$kecamatan	   = $_POST['kecamatan'];
$kota          = $_POST['kota'];
$kode_pos      = $_POST['kode_pos'];
$hp            = $_POST['hp'];
$email         = $_POST['email'];

$query = mysqli_query($connect, "UPDATE anggota SET nama_lengkap = '$nama', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', alamat = '$alamat', kecamatan= '$kecamatan',kota= '$kota', kode_pos= '$kode_pos', no_hp= '$hp', email= '$email' WHERE ID = '$ID'");

if($query) {
    header('location:../index.php?aksi=update&status=true');
}
else {
    header('location:../index.php?page=update&id='. $ID .'&status=false');
}
?>