<?php
session_start();
if (isset($_SESSION["login"]) && $_SESSION["user"]) {
    if (!$_SESSION["login"]) {
        echo header('Location: ./form/index.html');
    }
    echo $_SESSION["login"];
} else {
    echo header('Location: ./form/index.html');
}
$user = $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>Home viewport</p>
    <p>Hello <?php echo $user ?></p>
    <a href="logout.php"><button>Logout</button></a>
</body>

</html>