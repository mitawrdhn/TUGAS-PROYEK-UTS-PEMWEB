<!DOCTYPE html>
<html>
<head>
    <LINK REL="STYLESHEET" TYPE="text/css" HREF="style.css">
</head>
<body>
    <div class="text"><h3>Tambah Anggota Perpustakaan</h3></div>
    <div class="container">
    <div class="main">
<form action="aksi/aksi_tambah.php" method="POST">
<div class="content">
    <table class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td width="20%"><label for="nama">Nama Lengkap</label></td>
            <td colspan="3"><input name="nama" id="nama" type="text" class="form"></td>
        </tr>
        <tr>
            <td><label for="tempat_lahir">Tempat Lahir</label></td>
            <td><input name="tempat_lahir" id="tempat_lahir" type="text" class="form"></td>
            <td><label>Tanggal Lahir</label></td>
            <td>
        <select name="tgl_lahir" class="form">
        <?php 
           for($tanggal = 1; $tanggal <= 31; $tanggal++) {
               if($tanggal < 10) {
                   echo '<option value="0'. $tanggal .'">0'. $tanggal .'</option>';
               }
               else {
                   echo '<option value="'. $tanggal .'">'. $tanggal .'</option>';
               }
            }
         ?>
         </select>
         <select name="bln_lahir" class="form">
        <?php 
            for($bulan = 1; $bulan <= 12; $bulan++) {
                if($bulan < 10) {
                    echo '<option value="0'. $bulan .'">0'. $bulan .'</option>';
                }
                else {
                    echo '<option value="'. $bulan .'">'. $bulan .'</option>';
                }
            }
        ?>
        </select>
        <select name="thn_lahir" class="form">
        <?php 
            for($tahun = date('Y'); $tahun >= 1925; $tahun--) {
                echo '<option value="'. $tahun .'">'. $tahun .'</option>';
            }
        ?>
        </select>
            </td>
        </tr>
        <tr>
            <td valign="top"><label for="alamat">Alamat</label></td>
            <td valign="top" colspan="2">
                <textarea name="alamat" id="alamat" class="form" cols="50" rows="8"></textarea>
            </td>
            <td valign="top">
                <div>
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" name="kecamatan" id="kecamatan" class="form">
                </div>
                <div>
                    <label for="kota">Kota</label>
                    <input type="text" name="kota" id="kota" class="form">
                </div>
                <div>
                    <label for="kode_pos">Kode Pos</label>
                    <input type="text" name="kode_pos" id="kode_pos" class="form">
                </div>
            </td>
        </tr>
        <tr>
            <td><label for="hp">No. HP</label></td>
            <td colspan="3"><input name="hp" id="hp" type="text" class="form"></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td colspan="3"><input name="email" id="email" type="text" class="form"></td>
        </tr>
    </table>
</div>
<input type="submit" class="btn" value="Simpan">
</form>
</body>
</html>