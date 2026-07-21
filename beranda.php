<h1>Selamat Datang di Web Pusinfolahta TNI 2026</H1>
<br>
<form action="">
    <input type="submit" name="logout" value="logout">
</form>

<?php
if(isset($_POST['logout'])){
    header('location: lat6-login.php');
}
?>