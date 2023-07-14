<?php
if(isset($_POST['submit'])){
    $username = $_POST['Uusername'];
    $password = $_POST['password'];

    require_once 'connectiontoDB.inc.php';
    require_once 'functions.inc.php';

    if(emptyinputLOGIN($username,$password)){
        header("Location:../login.php?error=emptyinput");
        exit();
    }

    if(loginUSER($connection,$username,$password)){
        header("Location:../login.php");
        exit();
    }
}else{
    
}
