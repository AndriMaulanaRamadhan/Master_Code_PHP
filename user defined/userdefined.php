<?php
function salam($waktu = "datang", $nama = "andri")
{
  return "selamat $waktu, $nama";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan function user defined</title>
</head>

<body>
  <h1><?php echo salam("pagi", "masteryura"); ?></h1>

</body>

</html>