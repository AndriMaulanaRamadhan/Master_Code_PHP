<?php
//pengulangan : for, while, do while, foreach (pengulangan khusus array)
for ($i = 0; $i < 10; $i++) {
  echo "Hello Worlds!<br>";
}
$a = 0;
while ($a <= 10) {
  echo "master yura<br>";
  $a++;
}
$b = 0;
do {
  echo "Aku sang raja<br>";
  $b++;
} while ($b <= 3);
$c = 10;
do {
  echo "test do while yang gagal<br>";
  $c++;
} while ($c <= 3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Membuat Table</title>
  <style>
    .warna-baris {
      background-color: silver;
    }
  </style>
</head>

<body>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php for ($d = 1; $d <= 3; $d++) { ?>
      <tr>
        <?php for ($e = 1; $e <= 3; $e++) { ?>
          <td><?php echo "$d, $e"; ?></td>
        <?php } ?>
      </tr>
    <?php } ?>
  </table>
  <p>agar tidak bingung maka kurung kurawal diganti dengan : dan diakhiri dengan kata "end" dan metode perulangannya</p>

  <table border="1" cellpadding="10" cellspacing="0">
    <?php for ($f = 1; $f <= 5; $f++) : ?>
      <?php if ($f % 2 == 1) : ?>
        <tr class="warna-baris">
        <?php else : ?>
        <tr>
        <?php endif; ?>
        <?php for ($g = 1; $g <= 5; $g++) : ?>
          <td><?php echo "$f, $g"; ?></td>
        <?php endfor; ?>
        </tr>
      <?php endfor; ?>
  </table>
</body>

</html>