<LINK REL="STYLESHEET" TYPE="text/css" HREF="style.css">
<div class="topnav">
            <a href="index.php?page=tambah">TAMBAH KEANGGOTAAN PERPUS</a>
            <a href="jadwal.HTML">JADWAL BUKA PERPUSTAKAAN</a>
            <a href="daftarbuku.HTML">DAFTAR BUKU</a>
            <a href="informasi.HTML">INFORMASI PERPUSTAKAAN</a>
        </div>
        <div class="text"><h3>Silahkan Tambah Anggota</h3></div>
<div class="container">
    <div class="main">
<div class="content">
    <table class="table" width="100%" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th width="1%" align="left">No</th>
                <th width="15%">Nama</th>
                <th width="10%">Alamat</th>
                <th width="10%">No. Hp</th>
                <th width="10%">Email</th>
                <th width="15%">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $anggota = mysqli_query($connect, "SELECT * FROM anggota ORDER BY ID DESC");
            $no = 1;
            while($data = mysqli_fetch_array($anggota)) { ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama_lengkap']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td align="center"><?php echo $data['no_hp']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td align="center"><a href="index.php?page=detail&id=<?php echo $data['ID']; ?>">Lihat</a> | <a href="index.php?page=update&id=<?php echo $data['ID']; ?>">Edit</a> | <a href="index.php?page=hapus&id=<?php echo $data['ID']; ?>">Hapus</a>
                </tr>
            <?php $no++;
            } ?>
        </tbody>
    </table>
</div>