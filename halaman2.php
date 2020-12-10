<?php

$nama = $_POST["nama1"].$_POST["nama2"];
$alamat = $_POST["alamat"];
$kdpos = $_POST["kdpos"];
$date = $_POST["date"];
$tlp1 = $_POST["tlp1"];
$tlp2 = $_POST["tlp2"];
$email = $_POST["email"];

//opsional
$tgllahir = date("l, d M Y", strtotime($date));
$tgllahir2 = date("d-M", strtotime($date));
$now = date('d-M');
if ($now == $tgllahir2){
    $ucapan = true;
}

// if($now == )
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 2</title>
    <style>
        .hasil{
            border:1px solid;
            width:50%;
            margin-left:20%;
            padding:10px;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="hasil">
        <p>
            Terimakasih Anda sudah mendaftar Bpk/Ibu <strong><?= $_POST["nama1"]; ?> <?=$_POST["nama2"];?></strong> kami akan segera menginformasikan jadwal anda ke email <a href=""><?= $email; ?></a>
        </p>
        <h1>
            Berikut Data anda : <br>
            Nama : <strong><?= $_POST["nama1"]; ?> <?=$_POST["nama2"];?></strong><br>
            alamat : <?= $alamat;?><br>
            Kode Pos : <?= $kdpos ;?> <br>
            Tgl Lahir : <?= $tgllahir; ?><br>
            No HP : <?= $tlp1; ?> <br>
            Telephone : <?= $tlp2; ?>
        </h1>
    </div>
    <?php if(isset($ucapan)) : ?>
    <h1>SELAMAT ULANG TAHUN MAD SEMOGA PANJANG UMUR DAN SEHAT SELALU, LANCAR DALAM PENDIDIKAN MU,,,,,,!!!</h1>
    <?php endif;?>
</body>
</html>