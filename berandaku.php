<?php
    session_start();
    if(!$_SESSION['usersesi']){
        header('location: lat6-sesion.php');
    }
?>


<h1>Selamat Datang di Web Pusinfolahta TNI 2026</h1>
<h2>Anda Login sebagai <mark><?= $_SESSION['usersesi']; ?></mark></h2>
<br>
<form action="" method="post">
    <input type="submit" name="logout" value="logout">
</form>


<?php
if(isset($_POST['logout'])){
    unset($_SESSION['usersesi']); //mengakhiri sesi login
    header('location: lat6-sesion.php');
}
?>
