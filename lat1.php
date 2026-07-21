<?php

//komentar 1
#komentasr 2

/*
ini adalah komentar 1
komentar 2
komentar 3
komentar 4
*/

echo "Belajar PHP";
echo "<br>";
echo "Belajar Web <br>";
print 'Belajar MySqL';
echo "<hr>";

//variabel user
$nama ="GHOST RIDER";
$kata ="Selamat Pagi";
echo 'HALO '.$nama.' APA KABAR!!!';
//halo selamat pagi pak GHOST RIDER, Silahkan Belajar PHP Anak Orang yaa??
echo ' Pagi Juga GHOST '.$kata.' Okay Aku Kibulin dulu yaa <br>';

//soal:Pak GHOST RIDER Bekerja Sebagai SETAN, Beliau Tinggal di Neraka. Umurnya 100 tahun dengan berat 74.5kg
$nama2="GHOST RIDER"; //tipy data string
$pekerjaan="SETAN"; //type data string
$alamat="NERAKA"; //type data string
$umur=100; //type data integer
$berat=800; //type data float
echo 'Pak '.$nama2.' Bekerja Sebagai '.$pekerjaan.', Beliau tinggal di '.$alamat.' umurnya '.$umur.' TAHUN dengan berat '.$berat.'KG'; 



//variabel sistem
echo $_SERVER['SERVER_ADMIN'];
echo $_SERVER['SERVER_PORT'];
echo $_SERVER['SERVER_ROOT'];
//$_GET dan $_POST

//Variabel konstanta
//define: untuk memanggil variabel konstanta
define('PHI',3,14); //Phi diameter 3,14
define('PELAJARAN','Laravel');
define('DBSERVER','Lcalhost');

//cetak:
// soal cetak pelajaran, dbserver dan phi
echo 'matpel:' .PELAJARAN. '<br>';
echo "<hr>";

//tipe data
$itungstring="Belajar";
var_dump($itungstring);
echo "<hr>";

$angka=12177; //integer
$angka2=12.177; //fload
var_dump($angka);
var_dump($angka2);
echo "<hr>";

$str="Pak GHOST RIDER SEDANG BELAJAR PHP"; //Teks Asli
echo "$str";
echo "<br>";

//konversi huruf $str menjadi kapital
$besar=strtoupper($str);
$kecil=strtolower($str);
echo $besar;
echo $kecil;
echo ucwords($str);
echo lcfirst($str);
echo "<br>";

echo "<hr>";

echo "<h3>operator aritmatika</h3>";
$a=10;
$b=4;
echo $a+$b.'<br>';

?>

<!DOCTYPE html>
<html lang="en"
<head>
<title>Dokument</title>
</head>
<body


