




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
  <form action="" method="get">
  </script>
    <h3><center>Input Data Diri</center></h3>
    <center><form action= "#" method = "get" name = "input1">
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
</form>
  <?php
  $server  = mysqli_connect("localhost", "root", "", "phpdasar");
  if($server) {
    echo "<center><b>Selamat Datang!</b></center>";
  }
  else{
    echo "gagal :(";
  }
if($_SERVER['REQUEST_METHOD'] == "GET") {
  $nam = $_GET["nama"];
  $ttl = $_GET["date"];
  $jur = $_GET["jur"];
  $ray = $_GET["ray"];
  $num = $_GET["ang"];
  $num2 = $_GET["ang1"];
  $num3 = $_GET["ang2"];
  $num4 = $_GET["ang3"];
  $num5 = $_GET["ang4"];
  $num6 = $_GET["ang5"];
  $num7 = $_GET["ang6"];
  $max = max($num, $num2, $num3, $num4, $num5, $num6, $num7);
  $min = min($num, $num2, $num3, $num4, $num5, $num6, $num7);
  $rata = $num + $num2 + $num3 + $num4 + $num5 + $num6 + $num7;
  $rata = $rata / 7;
  $h = round($rata);
  
$sql = "INSERT INTO data_siswa(nama, ttl,jurusan,rayon,n1,n2,n3,n4,n5,n6,n7) Values
('$nam','$ttl','$jur','$ray','$num','$num2','$num3','$num4','$num5','$num6','$num7')";
if (mysqli_query($server, $sql)) {
  echo "y";

}
  echo " <center><table><tr><th> Nama </th><th> Tanggal Lahir </th><th>Rayon<th>Jurusan</th></th></tr>
  <td><font style ='color:red'><b>$nam</b></font><td>$ttl</td><td>$ray</td><td>$jur</td></td></td></table></center>
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
    <center><p>Lihat semua data?<a href="tampil.php">SINI</a></p>
  <p>================================</p>
  <h1>Nama Kelompok</h1>
  <h2>kelompok 12 opet<br><font style ='color:blue'>Rizki Maulana Arif</font><br>Dion Sultan Nasution<br>Muhammad fadly opet <br>Muhammad Fazri Ramdani<br>Simon </h2>
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