<?php
session_start();
if (isset($_SESSION["login"])) {
    $_SESSION["login"] = false;
}
echo header('Location: ../view/index.php');
