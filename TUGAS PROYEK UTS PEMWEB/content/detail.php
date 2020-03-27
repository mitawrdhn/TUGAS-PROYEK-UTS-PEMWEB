<?php 
$ID = $_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM anggota WHERE ID = $ID");
$data = mysqli_fetch_array($query);
?>
<div class="text"><br><br><h3>Detail Anggota</h3></div>
     <div class="content">
        <center><table class="table-form" border="2" width="50%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="20%">Nama Lengkap</td>
                <td width="1%">:</td>
                <td><?php echo $data['nama_lengkap']; ?></td>
            </tr>
            <tr>
                <td>Tempat/Tgl. Lahir</td>
                <td width="1%">:</td>
                <td><?php echo $data['tempat_lahir']; ?>, <?php echo date('j F Y', strtotime($data['tanggal_lahir'])); ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td width="1%">:</td>
                <td><?php echo $data['alamat']; ?>, <?php echo $data['kecamatan']; ?>, <?php echo $data['kota']; ?> <?php echo $data['kode_pos']; ?></td>
            </tr>
            <tr>
                <td>No. Hp</td>
                <td width="1%">:</td>
                <td><?php echo $data['no_hp']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td width="1%">:</td>
                <td><?php echo $data['email']; ?></td>
            </tr>
        </table></center></div>
    <A HREF ="index.php"><button type="button" style="background-color: #fff;margin-left: auto;margin-right: auto;display: block;margin-top: 5%;margin-bottom: 0%;padding: 14px;">Kembali</button></A>
