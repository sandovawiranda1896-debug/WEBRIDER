<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        Username: <input type="text" name="user"><br>
        Password: <input type="text" name="pass"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>
</html>


<?php
$username = $_POST['user'];
$password = $_POST['pass'];
$login = $_POST['login'];


if(isset($login)){
    if($username == 'admin' && $password == "admin123"){
        $_SESSION['usersesi'] = $username;
        header("location:berandaku.php");
        exit;
    }
    else {
        echo "<script>alert('Anda Salah Login!!')</script>";
    }
}
?>

