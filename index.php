<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru POLTEKPOS</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
        <h3>Politeknik Pos Indonesia</h3>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form_daftar.php">Daftar</a></li>
            <li><a href="list_maba.php">Pendaftar</a></li>
        </ul>
    </nav>

    <?php
    //notif
    $status = isset($_GET['status']) ? $_GET['status'] : NULL;
    if ($status == 'sukses') :
        echo "<h5>Pendaftaran mahasiswa baru POLTEKPOS berhasil!</h5>";
    elseif ($status == 'gagal') :
        echo "<h5>Pendaftaran Gagal</h5>";
    endif;
    ?>
</body>

</html>