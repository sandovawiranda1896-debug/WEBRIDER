<?php

//Pengulangan angka 1 s/d 50
//Pengulangan angka 10 s/d 1
for($x=50;$x>=0;$x=$x-4){ //$x++ => $x=$x+1
    echo '<br>'.$x;
}

echo "<hr>";

?>

echo "Tanggal Lahir:";
<select name="tanggal">
    <option value="">Tanggal</option>
    <?php
    for($tgl=1;$tgl<=31;$tgl++){
        echo "<option value=$tgl>$tgl</option>";
    }
    ?>
    </select>