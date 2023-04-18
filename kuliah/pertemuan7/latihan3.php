<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <center>
    <h1>Daftar Mahasiswa</h1>



    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>


    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Gambar</th>
        <th>Aksi</th>
      </tr>

      <?php $i = 1;
      foreach ($mahasiswa as $m) : ?>

        <tr>
          <td><?= $i++; ?></td>
          <td><?= $m['nama']; ?></td>
          <td><img src="img/<?= $m['gambar']; ?>" width="70"></td>
          <td>
            <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>



          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </center>
</body>

</html>