<?php

require 'koneksi.php';
$polo = "SELECT * FROM data_siswa";
$hasil = mysqli_query($kon, $polo);


?>


<!doctype html>
<html lang="en">
  <link rel="stylesheet" href="style1.css" > <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tampil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
  <table class="table  table-striped">
  <tr>
<th class="table-dark">nama</th>
<th class="table-dark">tanggal lahir</th>
<th class="table-dark">jurusan </th>
<th class="table-dark">rayon</th>


  </tr>
  <?php if (mysqli_num_rows($hasil)>0) :
    while ($tampil=mysqli_fetch_assoc($hasil)):
       ?>


  <tr>
<td><?=$tampil['nama']; ?></td>
<td><?=$tampil['ttl']; ?></td>
<td><?=$tampil['jurusan']; ?> </td>
<td><?=$tampil['rayon']; ?></td>


  </tr>

  

  <?php endwhile; ?>
  <?php endif; ?>
</table>

<a class="link" href="nilai.php">KEMBALI KE HALAMAN UTAMA </a>

    
  </body>
</html>