<?php
//variabel pesan error
$errornrp= "";

if(isset($_POST['proses'])){
//nrp
$nrp = $_POST['nrp'];


$valid = true;


//validasi nrp
if($nrp==""){
  $errornrp=NRP Wajib di isi";
  $valid=false;
}
else{
  }










<!doctype html>
<html lang="en">
  <head>
    <title>Belajar Form</title>
  </head>
  <body>
    <form action="#" method="post" enctype="multipart/form-data">
      <h2 align="center">
        Formulir Personil Pelatihan<br /><i>Pusinfolahta TNI TA 2026</i>
      </h2>
      <center><img src="" width="10%" /></center>
      <table border="1" align="center" celpadding="5" cellspacing="1">
        <tr bgcolor="yellow" align="center">
          <td colspan="2">Personil 2026</td>
          <!-- <td></td> -->
        </tr>
        <tr>
          <td><label>NRP:</label></td>
          <td><input type="text" name="nrp" placeholder="isikan nrp.." /></td>
        </tr>
        <tr>
          <td><label>Nama:</label></td>
          <td>
            <input type="text" name="nama" placeholder="nama lengkap anda.." />
          </td>
        </tr>          
        <tr>
            <td><label for="">Tempat Lahir</label></td>
            <td> <input type="text" name="lahir" size="44"></td>
        </tr>
        <tr>
            <td><label for="">Tanggal Lahir</label></td>
            <td><input type="date" name="tgl"></td>
        </tr>
        <tr>
            <td><label for="">Jenis Kelamin</label></td>
            <td>
                <input type="radio" name="jk" value="L">Laki-Laki<br>
                <input type="radio" name="jk" value="P">Perempuan</td>
        </tr>
            <td><label for="">Pangkat/Gol</label></td>
            <td>
                 <select name="pangkat">
                    <option value="">Pangkat/Gol?</option>
                    <option value="pa">PA</option>
                    <option value="ba">BA</option>
                    <option value="ta">TA</option>
                    <option value="pns">PNS</option>
                </select>      
            </td>
        </tr>  
        <tr>
            <td><label for="">Hobi</label></td>
            <td>
                <input type="checkbox" name="hobi[]" value="futsal">Futsal<br>
                <input type="checkbox" name="hobi[]" value="badmintoon">Badmintoon<br>
                <input type="checkbox" name="hobi[]" value="renang">Berenang<br>
                <input type="checkbox" name="hobi[]" value="basket">Bola Basket          
            </td>
        </tr>  
         <tr>
            <td><label for="">Komentar</label></td>
            <td><textarea name="komentar" cols="35" rows="10"></textarea></td>
        </tr>
         <tr>
            <td><label for="">Foto</label></td>
            <td><input type="file" name="upload"></td>
        </tr>
        <tr bgcolor="yellow" align="center">
            <th colspan="2">
                <input type="submit" name="proses" value="Simpan">&nbsp;
                <input type="reset" name="unproses" value="Batal">
            </th>    
            <!--<th></th>-->
        </tr>          
    </table>
    </form>
</body>
</html>


<!-- script untuk cetak hasil input form -->
<?php
if(isset($_POST['proses'])){ //isset() akan mengecek apakah data sudah dikirim.
    // JIKA SEMUA VALID
    if($valid){ //hanya simpan data jika semua validasi berhasil
        move_uploaded_file($tmp,"upload/".$foto);
       
        echo "<hr>";
        echo "<h2>DATA BERHASIL DISIMPAN</h2>";


        echo "NRP : ".$nrp."<br>";
        echo "Nama : ".$nama."<br>";
        echo "Tempat Lahir : ".$lahir."<br>";
        echo "Tanggal Lahir : ".$tgl."<br>";
        echo "Jenis Kelamin : ".$jk."<br>";
        echo "Pangkat : ".$pangkat."<br>";


        echo "Hobi : ";
        foreach($hobi as $isi){
            echo $isi.", ";
        }


        echo "<br>";
        echo "Komentar : ".$komentar."<br>";
        echo "Foto : ".$foto."<br><br>";
        echo "<img src='upload/$foto' width='200'>";
    }
}
?>




