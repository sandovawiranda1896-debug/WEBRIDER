<!DOCTYPE html>
<html lang="en">
<head>
    <title>FORM INPUT KTP</title>
</head>
<body>

<form action="" method="get">
    Masukan Umur:
    <input type="number" name="umur">
    <input type="submit" name="proses "value="proses">
</form>
    
</body>
</html>

<?php
//SOAL IF:
//JIKA UMUR LEBIH 50 TAHUN,DAPAT KTP LANSIA
//JIKA UMUR LEBIH 40 TAHUN,DAPAT KTP PRALANSIA
//JIKA UMUR LEBIH 30 TAHUN,DAPAT KTP DEWASA
//JIKA UMUR LEBIH 20 TAHUN,DAPAT KTP REMAJA
//JIKA UMUR LEBIH 5 TAHUN,DAPAT KTP ANAK
//SELAIN ITU TIDAK DAPAT
// $umur=7; //data yang diinput

if(isset($_GET['Proses'])){

$umur=$_GET['umur'];

    $umur=40; //data yang diinput
    if ($umur >=50){
        echo ("Anda dapat KTP Lansia");
    }
    else if ($umur >=40 && $umur <=49){
        echo ("Anda dapat KTP Pralansia");
    }

    if ($umur >=30){
        echo (" Anda dapat KTP Dewasa");
    }

    if ($umur >=15){
        echo (" Anda dapat KTP Remaja");
    }

    if ($umur >=5){
        echo (" Anda dapat KTP Anak");
    }

    else {
        echo ("tidak dapat");
    }
}

?>
<hr>
</body>
</html>


<?php
//SWITCHCASE
$baju='L'; //nilai yang di input
$baju=strtolower($baju);//memasukkan nilai input jadi huruf kecil

switch ($baju)
{
    case "1":
        echo "large";
        break;
    case "m":
        echo "Medium";
        break;
    default:
        echo "Small";
        break;
}

echo "<hr>";

$nilai=80; // Nilai yang Kita Input
switch($nilai){
    case $nilai <=70:
        echo "$nilai: Nilai Cukup";
        break;
    case $nilai <=80:
        echo "$nilai: Nilai Memuaskan";
        break;
    case $nilai <=100:
        echo "$nilai: Nilai Sangat Memuaskan";
        break;
    default:
        echo "Nihil";

}

echo "<hr>";
//Fungsi if
$nl=10; //input nilai
if($nl){
    echo "Baik";
}
else {
    echo "Buruk";
}

echo "<hr>";

//fungsi ternary
$nlk=4; //input nilai
echo $nlk>5 ? 'Baik' : 'Buruk';
?>