<?php
//date
//hari
echo date("l");
echo "<br>";
//tanggal
echo date("d");
echo "<br>";
//bulan dalam bentuk nama
echo date("M");
echo "<br>";
//bulan dalam bentuk angka
echo date("m");
echo "<br>";
//cara menggabungkan semuanya
echo date("l, d-M-Y");
echo "<br>";

//time
//UNIX timestamp / EPOCH TIME (asal mula di dunia komputer / detik yang sudah berlalu sejak 1 januari 1970 sampai saat ini)
echo time();
echo "<br>";

//cara mengetahui 2 hari dari sekarang itu hari apa
//caranya adalah mencari berapa detik dalam 2 hari yang akan datang
//seperti 1 menit adalah 60 detik lalu 1 jam adalah 60 menit dan 1 hari adalah 24 jam
// jadi 60 * 60 * 24 * 2 jadi 172800
echo date("l", time() + 172800);
echo "<br>";

//bisa juga ngitung langsung di php
//100 hari dari sekarang
echo date("l", time() + 60 * 60 * 24 * 100);
echo "<br>";

//100 hari kebelakang atau 100 hari yang lalu
echo date("l", time() - 60 * 60 * 24 * 100);
echo "<br>";

//bisa juga lengkap
//100 hari kebelakang atau 100 hari yang lalu
echo date("d M Y", time() - 60 * 60 * 24 * 100);
echo "<br>";

//mktime
//untuk membuat sendiri detik
//parameternya ada 6 mktime(0, 0, 0, 0, 0, 0)
// jam, menit, detik,bulan, tanggal, tahun
echo mktime(0, 0, 0, 12, 2, 2000);
echo "<br>";

//dan bisa dicombo untuk mencari hari pada tanggal tersebut
echo date("l", mktime(0, 0, 0, 12, 2, 2000));
echo "<br>";

//strtotime
//sama saja dengan mktime hanya saja memakai nama tanggal bukan angka
echo date("l", strtotime("2 des 2000"));
echo "<br>";
