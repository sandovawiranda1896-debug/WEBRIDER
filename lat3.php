<?php
$siswa ="Bereno";
$matkul = "PHP";
$nilai = 40; //nilai yang di input

//Jika nilainya >=60. ket=LULUS, selain itu ket:GAGAL
//Ternery
$ket = ($nilai>=60) ? "Lulus" : "Gagal";

//Fungsi IF
//jika nilainya >=85 dan <=100 grade A
//jika nilainya >=75 dan <=85 grade B
//jika nilainya >=60 dan <=75 grade C
//jika nilainya >=50 dan <=60 grade D
//selain itu Grade E
if ($nilai >=85 && $nilai <=100){
    $Grade="A";
}
else if ($nilai >=75 && $nilai <=85){
    $Grade="B";
}
else if ($nilai >=60 && $nilai <=75){
    $Grade="C";
}
else if ($nilai >=50 && $nilai <=60){
    $Grade="D";
}
else $Grade="E";

//Fungsi Switchcase
//Jika Grade A maka Predikatnya Sangat Memuaskan
//Jika Grade B maka Predikatnya Memuaskan
//Jika Grade C maka Predikatnya Cukup
//Jika Grade E maka Predikatnya Kurang
//Selain itu Predikatnya Hancur
switch($Grade){
    case "A":
        $predikat="Sangat Memuaskan";
        break;
    case "B":
        $predikat="Memuaskan";
        break;
    default:
        $predikat="Hancur";
}


//Cetak Hasil Inputan
echo $siswa.'<br>';
echo $matkul.'<br>';
echo $nilai.'<br>';
echo $ket.'<br>';
echo $predikat.'<br>';

?>