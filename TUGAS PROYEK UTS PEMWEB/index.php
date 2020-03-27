<?php include('config/koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>PERPUSTAKAAN MENARA ILMU</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<BODY>
        </div>
        <?php
        if(empty($_GET['page']) OR $_GET['page'] == NULL) {
            include('content/home.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page'] == 'tambah') {
            include('content/tambah.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page'] == 'detail') {
            include('content/detail.php');
        } 
        elseif(!empty($_GET['page']) && $_GET['page'] == 'update')  {
            include('content/update.php');
        }
        elseif(!empty($_GET['page']) && $_GET['page'] == 'hapus') {
            include('content/delete.php');
        }
    ?>
        </div>
    </div>
</body>
</html>