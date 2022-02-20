<?php
$mahasiswa = [
  ["Andri Maulana", "7528901234", "Tekhnik Animasi", "andrimaulanaramadhan@hotmail.com"],
  ["Revive Yura", "6435501234", "Tekhnik Berpedang", "masteryura@hotmail.com"],
  ["Slivery Root", "9024781234", "Tekhnik Bertempur", "rootslivery@hotmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Memanggil Array</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li><?= $mhs[0]; ?></li>
      <li><?= $mhs[1]; ?></li>
      <li><?= $mhs[2]; ?></li>
      <li><?= $mhs[3]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>