<?php
//array: sekumpulan data
//untuk mencetak array memerlukan "foreach"

//1. ARRAY NUMERIK
$ar_buah = ['Pepaya', 'Durian', 'Salak', 'Anggur', 'Jeruk'];

//cetak index ke ?
echo $ar_buah[1];

echo "<hr>";

$jumlah = count($ar_buah);
echo $jumlah;

echo "<hr>";
foreach ($ar_buah as $cetak){
    echo "$cetak <br>";
}

//2. ARRAY ASOSIATIF
$ar_hewan = [10=>'sapi', "kambing", 'ayam', 'bebek',];

//cetak indek ke..
echo $ar_hewan[11];

echo "<hr>";
foreach ($ar_hewan as $id => $isi){
    echo "$id $isi <br>";
}
//3. ARRAY 





?>

Bulan:
<select name="bulan">
    <option value="">Bulan</option>
    <?php
    $Bulan


?>