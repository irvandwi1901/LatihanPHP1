<?php
require 'koneksi.php';

$id = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/ <?= $mhs['gambar']; ?>"></li>
    <li><?= $mhs['nrp']; ?></li>
    <li><?= $mhs['nama']; ?></li>
    <li><?= $mhs['email']; ?></li>
    <li><?= $mhs['jurusan']; ?></li>
    <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
    <li><a href="index.php">Kembali Halaman Mahasiswa</a></li>
  </ul>
</body>

</html>