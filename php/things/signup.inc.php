<?php

if(isset($_POST['submit'])){
    $name = $_POST["Uname"];
    $email = $_POST["Uemail"];
    $username = $_POST["Uusername"];
    $password = $_POST["password"];
    $repeatpassword = $_POST["repeatpassword"];
    require_once 'connectiontoDB.inc.php';
    require_once 'functions.inc.php';
    require_once '../signup.php';

    if(emptyinputSIGNUP($name,$email,$password,$repeatpassword)){
        header("Location:../signup.php?error=emptyinput");
        exit();
    }
    if(invalidemail($email)){
        header("Location:../signup.php?error=invalidemail");
        exit();
    }
    if(invalidusername($username)){
        header("Location:../signup.php?error=invalidusername");
        exit();
    }
    if(passwordmatch($password,$repeatpassword)){
        header("Location:../signup.php?error=passwordmatch");
        exit();
    }
    if(usernameExist($connection,$username,$password)){
        header("Location:../signup.php?error=usernametaken");
        exit();    
    }
    if(createU($connection,$name,$email,$username,$password,$repeatpassword)){
        header("Location:../signup.php?error=none");
        exit();   
    }




}else{
    header("location: ../signup.php");
    exit();
}