

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style1.css">
  <title>Nilai Mata Pelajaran</title>
</head>
<body>

<div class="form-container">
  <form action="#" method="post">
  </script>
    <h3><center>Input Data Diri</center></h3>
    <center><form action= "#" method = "post" name = "input1">
    <!-- <input type="text"   name="nama" required placeholder="Masukkan Nama"> -->
    <input type="text" name="nama"  required placeholder="Input Nama">
    <input type="date" name="date"  required placeholder="Tanggal Lahir">
    <input type="text" name="ray"  required placeholder="Rayon">
    <input type="text" name="jur"  required placeholder="Jurusan"><br><br>
    <h1>Input Nilai Mata Pelajaran</h1><br>
    <input type="number" name="ang"  required placeholder="Input Nilai Matematika">
    <input type="number" name="ang1" required placeholder="Input Nilai B Inggris">
    <input type="number" name="ang2" required placeholder="Input Nilai DPK">
    <input type="number" name="ang3" required placeholder="Input Nilai Fisika">
    <input type="number" name="ang4" required placeholder="Input Nilai Biologi">
    <input type="number" name="ang5" required placeholder="Input Nilai Pipas">
    <input type="number" name="ang6" required placeholder="Input Nilai PP">
    <input type="submit" name="submit" value="Submit" class="form-btn">
  <?php
  
if($_SERVER['REQUEST_METHOD'] == "POST") {
  $nam = $_POST["nama"];
  $ttl = $_POST["date"];
  $jurusan = $_POST["jur"];
  $ray = $_POST["ray"];
  $num = $_POST["ang"];
  $num2 = $_POST["ang1"];
  $num3 = $_POST["ang2"];
  $num4 = $_POST["ang3"];
  $num5 = $_POST["ang4"];
  $num6 = $_POST["ang5"];
  $num7 = $_POST["ang6"];
  $max = max($num, $num2, $num3, $num4, $num5, $num6, $num7);
  $min = min($num, $num2, $num3, $num4, $num5, $num6, $num7);
  $rata = $num + $num2 + $num3 + $num4 + $num5 + $num6 + $num7;
  $rata = $rata / 7;
  $h = round($rata);
  echo " <center><table><tr><th> Nama </th><th> Tanggal Lahir </th><th>Rayon<th>Jurusan</th></th></tr>
  <td><font style ='color:red'><b>$nam</b></font><td>$ttl</td><td>$ray</td><td>$jurusan</td></td></td></table></center>
  <center><table><th> Kimia </th><th> Ips </th><th> DPK </th><th> Fisika </th><th>Biologi</th><th>Pipas</th><th>PP</th></th></tr></center>
  <td>$num</td><td>$num2</td><td>$num3</td><td>$num4</td><td>$num5</td><td>$num6</td><td>$num7</td></table>";
  echo "<center><table><tr><th>Nilai Maximal :</th><td>$max</td><th>Nilai Minimal :</th><td>$min</td></tr></table></center>";
  echo "<center><table><tr><th>Rata - Rata :</th><td><b>$h</b></td><th>Predikat :</th></center>";
  // Percabangan IF ELSE
  if($rata > 100){
    echo " <td><font style ='color:red'><b>Tidak Valid!</b></font></td> ";
  }
  else if($rata < 0){
    echo " <td><font style ='color:red'>Tidak Valid!</font></td> ";
  }
  else if($rata >= 90 && $rata <= 100){
    echo " <td><font style ='color:green'><b> A </b> </font></td> ";
  }
  else if($rata >= 80 && $rata <= 89){
    echo " <td><font style ='color:blue'><b> B </b> </font></td> ";
  }
  else if($rata >= 70 && $rata <= 79){
    echo " <td><font style ='color:Yellow'><b> C </b> </font></td>";
  }
  else {
    echo " <td><font style ='color:red'> Tidak Lulus </font></td> ";
  } 
  echo "</tr></table>";
}
?> <br>
  <center><p>There's Something to ask? <a href="https://www.instagram.com/rizkim4l/" target="_blank">DM me!!</a></p></center><br>
  <p>================================</p>
  <h1>Nama Kelompok</h1>
  <h2>Muhammad Riesky<br><font style ='color:blue'>Rizki Maulana Arif</font><br>Tensa Anargya Rooseno<br>Khairul Ikhwan<br>Samsul Hidayatullah</h2>
  <!-- <span class ="#"><a href ="#">Reset</a></span> -->
</form>
</div>



<style>
table {
  text-align: center;
  position: relative;
  left: -10px;
  top: 5px;
  margin-top: 50px;
  border-collapse: collapse;
  background-color: #f6f6f6;
}
td, th {
  border: 5px solid #fff;
  padding: 20px;
  
}
th {
  background: brown;
  color: white;
  border-radius: 5;
  position: sticky;
  padding-left: 50px;
  top: 0;
  padding: 5px;
}
</style>

</body>
</html>