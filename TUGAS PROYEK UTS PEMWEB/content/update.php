<?php 
$ID         = $_GET['id'];
$query      = mysqli_query($connect, "SELECT * FROM anggota WHERE ID = $ID");
$data       = mysqli_fetch_array($query);
$tgl_lahir  = date('d', strtotime($data['tanggal_lahir']));
$bln_lahir  = date('m', strtotime($data['tanggal_lahir']));
$thn_lahir  = date('Y', strtotime($data['tanggal_lahir']));
?>

<div class="text"><h3>Detail Anggota</h3></div>
    <div class="container">
    <div class="main">
<form action="aksi/aksi_update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $ID; ?>">
    <div class="content">
        <table class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="20%"><label for="nama">Nama Lengkap</label></td>
                    <td colspan="3"><input name="nama" id="nama" type="text" class="form" value="<?php echo $data['nama_lengkap']; ?>"></td>
            </tr>
            <tr>
                <td><label for="tempat_lahir">Tempat Lahir</label></td>
                <td><input name="tempat_lahir" id="tempat_lahir" type="text" class="form" value="<?php echo $data['tempat_lahir']; ?>"></td>
                <td><label>Tanggal Lahir</label></td>
                <td>
                    <select name="tgl_lahir" class="form">
                        <?php 
                            for($tanggal = 1; $tanggal <= 31; $tanggal++) {
                               if($tanggal < 10) {
                                   echo '<option value="0'. $tanggal .'"'. ($tgl_lahir == 0 . $tanggal ? ' selected="selected"' : '') .'>0'. $tanggal .'</option>';
                               }
                               else {
                                   echo '<option value="'. $tanggal .'"'. ($tgl_lahir == $tanggal ? ' selected="selected"' : '') .'>'. $tanggal .'</option>';
                                }
                            }
                        ?>
                    </select>
                    <select name="bln_lahir" class="form">
                        <?php 
                            for($bulan = 1; $bulan <= 12; $bulan++) {
                                if($bulan < 10) {
                                    echo '<option value="0'. $bulan .'"'. ($bln_lahir == 0 . $bulan ? ' selected="selected"' : '') .'>0'. $bulan .'</option>';
                                }
                                else {
                                    echo '<option value="'. $bulan .'"'. ($bln_lahir == $bulan ? ' selected="selected"' : '') .'>'. $bulan .'</option>';
                                 }
                             }
                        ?>
                        </select>
                        <select name="thn_lahir" class="form">
                            <?php 
                                for($tahun = date('Y'); $tahun >= 1980; $tahun--) {
                                    echo '<option value="'. $tahun .'"'. ($thn_lahir == $tahun ? ' selected="selected"' : '') .'>'. $tahun .'</option>';
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><label for="alamat">Alamat</label></td>
                    <td valign="top" colspan="2">
                        <textarea name="alamat" id="alamat" class="form" cols="50" rows="8"><?php echo $data['alamat']; ?></textarea>
                    </td>
                    <td valign="top">
                        <div>
                            <label for="kecmatan">Kecamatan</label>
                            <input type="text" name="kecamatan" id="kecamatan" class="form" value="<?php echo $data['kecamatan']; ?>">
                        </div>
                        <div>
                            <label for="kota">Kota</label>
                                <input type="text" name="kota" id="kota" class="form" value="<?php echo $data['kota']; ?>">
                        </div>
                        <div>
                            <label for="kode_pos">Kode Pos</label>
                            <input type="number" name="kode_pos" id="kode_pos" class="form" value="<?php echo $data['kode_pos']; ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label for="hp">No. HP</label></td>
                    <td colspan="3"><input name="hp" id="hp" type="number" class="form" value="<?php echo $data['no_hp']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td colspan="3"><input name="email" id="email" type="text" class="form" value="<?php echo $data['email']; ?>"></td>
                </tr>
            </table>
        </div>
        <input type="submit" class="btn" value="Simpan">
</form>