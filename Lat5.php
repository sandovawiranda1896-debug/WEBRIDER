<?php
// Variabel pesan error
$errornrp = "";
$errornama = "";
$errorlahir = "";
$errortgl = "";
$errorjk = "";
$errorpangkat = "";
$errorhobi = "";
$errorkomentar = "";
$errorfoto = "";


if(isset($_POST['proses'])){ //isset() akan mengecek apakah data sudah dikirim.
    
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $lahir = $_POST['lahir'];
    $tgl = $_POST['tgl'];
    $jk = $_POST['jk'] ?? "";
    $pangkat = $_POST['pangkat'];
    $hobi = $_POST['hobi'] ?? array();
    $komentar = $_POST['komentar'];


    $foto = $_FILES['upload']['name'];
    $tmp = $_FILES['upload']['tmp_name'];
    $ukuran = $_FILES['upload']['size'];


    $valid = true; //jika semua data benar


    // VALIDASI NRP
    if($nrp==""){
        $errornrp="NRP wajib diisi.";
        $valid=false; // jika ada data yang salah
    }
    else if(!is_numeric($nrp)){
        $errornrp="NRP hanya boleh angka.";
        $valid=false;
    }
    else if(strlen($nrp)<8 || strlen($nrp)>12){
        $errornrp="NRP harus 8-12 digit.";
        $valid=false;
    }
    else{
        $errornrp = "";
    }


    // VALIDASI NAMA
    if($nama==""){
        $errornama="Nama wajib diisi.";
        $valid=false;
    }
    else if(strlen($nama)>30){
        $errornama="Nama maksimal 30 karakter.";
        $valid=false;
    }
    else{
        $errornama = "";
    }


    // TEMPAT LAHIR
    if($lahir==""){
        $errorlahir="Tempat lahir wajib diisi.";
        $valid=false;
    }
    else{
        $errorlahir = ""; //hasil kosong
    }


    // TANGGAL
    if($tgl==""){
        $errortgl="Tanggal lahir wajib diisi.";
        $valid=false;
    }
    else if($tgl > date("Y-m-d")){
        $errortgl="Tanggal tidak boleh melebihi hari ini.";
        $valid=false;
    }
    else{
        $errortgl = "";
    }


    // JENIS KELAMIN
    if($jk==""){
        $errorjk="Pilih jenis kelamin.";
        $valid=false;
    }
    else{
        $errorjk = ""; //hasil kosong
    }


    // PANGKAT
    if($pangkat==""){
        $errorpangkat="Pilih pangkat.";
        $valid=false;
    }
    else{
        $errorpangkat = ""; //hasil kosong
    }


    // HOBI
    if(count($hobi)==0){
        $errorhobi="Pilih minimal satu hobi.";
        $valid=false;
    }
     else{
        $errorhobi = ""; //hasil kosong
    }


    // KOMENTAR
    if($komentar==""){
        $errorkomentar="Komentar wajib diisi.";
        $valid=false;
    }
    else if(strlen($komentar)<10){
        $errorkomentar="Komentar minimal 10 karakter.";
        $valid=false;
    }
    else if(strlen($komentar)>200){
        $errorkomentar="Komentar maksimal 200 karakter.";
        $valid=false;
    }
    else{
        $errorkomentar = "";
    }


    // FOTO
    //explode(".", $foto) → memisahkan nama file berdasarkan titik (.).
    //end($pecah) → mengambil bagian terakhir, yaitu ekstensi file.
    $pecah = explode(".", $foto);
    $ext = strtolower(end($pecah));


    if($foto==""){
        $errorfoto = "Pilih foto.";
        $valid = false;
    }
    else if($ext!="jpg" && $ext!="jpeg" && $ext!="png"){
        $errorfoto = "Foto harus JPG, JPEG atau PNG.";
        $valid = false;
    }
    else if($ukuran > 2*1024*1024){
        $errorfoto = "Ukuran foto maksimal 2 MB.";
        $valid = false;
    }
    else{
       $errorfoto=""; //foto valid
    }
}

?>
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
          <td><input type="text" name="nrp" placeholder="isikan nrp.." /><br /><span style='color:red'><?= $errornrp??'' ?></span>
</td>
        </tr>
        <tr>
          <td><label>Nama:</label></td>
          <td>
            <input type="text" name="nama" placeholder="nama lengkap anda.." /><br><span style='color:red'><?= $errornama??'' ?></span>

          </td>
        </tr>          
        <tr>
            <td><label for="">Tempat Lahir</label></td>
            <td> <input type="text" name="lahir" size="44"><br><span style='color:red'><?= $errorlahir??'' ?></span>
</td>
        </tr>
        <tr>
            <td><label for="">Tanggal Lahir</label></td>
            <td><input type="date" name="tgl"></td>
        </tr>
        <tr>
            <td><label for="">Jenis Kelamin</label></td>
            <td>
                <input type="radio" name="jk" value="L">Laki-Laki<br>
                <input type="radio" name="jk" value="P">Perempuan<br><span style='color:red'><?= $errorjk??'' ?></span></td>
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

<br /><span style='color:red'><?= $errornrp??'' ?></span>

<br><span style='color:red'><?= $errornama??'' ?></span>

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

