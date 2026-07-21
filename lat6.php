<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="" method="post">
        Username: <input type="text" name="user"><br>
        Password: <input type="text" name="pass"><br>
        <input type="submit" nama="login" value="login"><br>
</form>
</body>
</html>


<?php
$username = $_POST['user'];
$username = $_POST['pass'];
$username = $_POST['login'];

if(isset($login)){
    if($username == 'admin' && $password == "admin123"){
        header("location:beranda.php");
        exit;
    }
else {
    echo "<script>alert('anda salah login!!')</script>";
}
}
