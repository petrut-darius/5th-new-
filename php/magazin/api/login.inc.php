<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['Uusername'];
    $password = $_POST['password'];

    require_once 'connection.inc.php';
    require_once 'functions.inc.php';

    if(emptyinputLOGIN($username,$password)){
        header("Location:../login.php?error=emptyinput");
        exit();
    }

    if(loginUSER($connection,$username,$password)){
        header("Location:../login.php?");
        exit();
    }
}
    