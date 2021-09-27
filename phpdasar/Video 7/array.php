<?php
//array
//cara membuat array ada 2 yaitu :
//cara lama
$hari = array("senin", "selasa", "rabu");
//cara baru
$bulan = ["januari", "februari", "maret"];

//tipe data bisa berbeda
$arr1 = [123, "yura", true];

//cara menampilkan array ada 2 cara yaitu : var_dump, print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

//cara menampilkan 1 elemen saja pada array
echo $arr1[1];
echo "<br>";

//menambahkan elemen baru pada array
//sebelum ditambahkan
var_dump($hari);
//setelah ditambahkan
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);
echo "<br>";

// cara pengulangan pada array : for, foreach
$angka = [12, 44, 15, 20, 5, 18, 89, 56, 78, 34];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cara memanggil array</title>
  <style>
    div {
      width: 50;
      height: 50px;
      background-color: salmon;
      text-align: center;
      line-height: 50px;
      margin: 3px;
      float: left;
    }
  </style>
</head>

<body>
  <?php for ($i = 0; $i < 7; $i++) { ?>
    <div><?php echo $angka[$i]; ?></div>
  <?php } ?>

  <?php echo "<br>"; ?>
  <?php echo "<br>"; ?>
  <?php echo "<br>"; ?>
  <?php echo "<br>"; ?>

  <?php for ($j = 0; $j < count($angka); $j++) { ?>
    <div><?php echo $angka[$j]; ?></div>
  <?php } ?>

  <?php echo "<br>"; ?>
  <?php echo "<br>"; ?>
  <?php echo "<br>"; ?>
  <?php echo "<br>"; ?>

  <?php foreach ($angka as $a) : ?>
    <div><?php echo $a; ?></div>
  <?php endforeach; ?>
</body>

</html>