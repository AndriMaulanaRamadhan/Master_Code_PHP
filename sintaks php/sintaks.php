<?php
//Video 4 - PHP Dasar
//Sintaks PHP

//standar output : echo, print, print_r, var_dump

echo "My name is master YURA";
echo "<br>";
print "ini adalah hasil print";
echo "<br>";
print_r("ini adalah hasil dari print r");
echo "<br>";
var_dump("aku andri maulana");
echo "<br>";
echo 123;
echo "<br>";
echo true;
echo "<br>";
echo "jum'at";
//penulisan sintaks php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP di dalam HTML</title>
</head>

<body>
  <h1>Selamat datang master <?php echo "yura"; ?></h1>
  <p><?php echo "ini adalah kerajaanmu master"; ?></p>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML di dalam PHP</title>
</head>

<body>
  <?php
  echo "<h1>percobaan dimulai</h1>";
  ?>
</body>

</html>

<?php
//Variabel dan tipe data
//variabel 
$nama = "yura";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>ini adalah percobaan pemanggilan variable master <?php echo "$nama"; ?></h1>
  <p>contoh jika gagal interpolasi <?php echo 'master $nama' ?></p>
</body>

</html>

<?php
//Operator
//aritmatika : + - * / %
echo 1 + 1;
echo "<br>";
$x = 10;
$y = 100;
echo $y - $x;
echo "<br>";

//penggabung string (concatenation) : .
$nama_depan = "Andri";
$nama_belakang = "Maulana";
echo $nama_depan . " " . $nama_belakang;
echo "<br>";

//Assignment (operator penugasan) : = += -= *= /= %= .=
// $x jadi 10 bukan 1 karena tertimpa
$x = 1;
$x = 10;
echo $x;
echo "<br>";

//akan tetapi jika diganti dengan += maka nilai dari $y sebelumnya tidak tertimpa akan tetapi ditambahkan
$y = 1;
$y += 10;
echo $y;
echo "<br>";

//dapat juga string digabung seperti ini
$nama = "Andri";
$nama .= " ";
$nama .= "Maulana";
echo $nama;
echo "<br>";

//operator perbandingan : < > <= >= == !=
var_dump(1 < 6);
echo "<br>";

//hasilnya harusnya false karena integer 1 dan string 1 itu tidak sama tapi operator ini tidak mengecek tipe data jadi hasilnya true
var_dump(1 == "1");
echo "<br>";

//operator identitas (dapat mengecer tipe data) : === !==
var_dump(1 === "1");
echo "<br>";

//operator logika : %% || ! (dipakai untuk pengkondisian)
$x = 40;
var_dump($x < 60 && $x % 2 == 0);
?>