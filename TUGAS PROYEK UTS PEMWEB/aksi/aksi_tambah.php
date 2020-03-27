<?php

include('../config/koneksi.php');

$nama          = $_POST['nama'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['thn_lahir'] . '-' . $_POST['bln_lahir'] . '-' . $_POST['tgl_lahir'];
$alamat        = $_POST['alamat'];
$kecamatan	   = $_POST['kecamatan'];
$kota          = $_POST['kota'];
$kode_pos      = $_POST['kode_pos'];
$hp            = $_POST['hp'];
$email         = $_POST['email'];

$query = mysqli_query($connect, "INSERT INTO anggota(nama_lengkap, tempat_lahir, tanggal_lahir, alamat, kecamatan, kota, kode_pos, no_hp, email) 
                      VALUES ('$nama', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$kecamatan','$kota', '$kode_pos', '$hp', '$email')");

if($query) {
    header('location:../index.php?aksi=tambah&status=true');
}
else {
    header('location:../index.php?page=tambah&status=false');
}

?>