<?php


function emptyinputSIGNUP($name,$email,$password,$repeatpassword){
    $error = 0;
    if(empty($name) || empty($email) || empty($password) || empty($repeatpassword)){
        $error = true;
    }else{
        $error = false;
    }
}


function invalidemail($email){
    $error = 0;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = true;
    }else{
        $error = false;
    }
    return $error;
}

function invalidusername($username){
    $error = 0;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $error = true;
    }else{
        $error = false;
    }

    return $error;
}

function passwordmatch($password,$repeatpassword){
    $error = 0;
    if($password !== $repeatpassword){
        $error = true;
    }else{
        $error = false;
    }
    return $error;
}

function usernameExist($connection,$username,$password){
    $sql="SELECT * FROM user WHERE Uusername=? OR Uemail=?";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../signup.php?error=stmtfailed");
    }

    mysqli_stmt_bind_param($stmt, "ss" , $username , $password);
    mysqli_stmt_execute($stmt);

    $result_data = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($result_data)){
        return $row;
    }else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}



function createU($connection,$name,$email,$username,$password,$repeatpassword){
    $sql = "INSERT INTO user (Uname , Uemail , Uusername , Upassword , Urepeatpassword) VALUES (?,?,?,?,?)";
    $stmt = mysqli_stmt_init($connection);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../signup?error=stmtFAILED");
    }else{
    
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt , "sssss" , $name , $email , $username , $hashedpassword , $repeatpassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    $uidexist = usernameExist($connection,$username,$username);
    session_start();
    $_SESSION['uID'] = $uidexist['Uid'];
    $_SESSION['Uusername'] = $uidexist['Uusername'];
    header("location: ../signup.php?error=none");
    exit();
    }
}


//LOG IN FUNCTION'S

function emptyinputLOGIN($username,$password){
    if(empty($username) || empty($password)){
        $error = true;
    }else{
        $error = false;
    }
    return $error;
}

function loginUSER($connection,$username,$password){
    $uidexist = usernameExist($connection,$username,$username);
    if($uidexist === false){
        header("Location:../login.php?error=wronglogin");
        exit();
    }

    $passwordhashed = $uidexist['Upassword'];
    $checkpassword = password_verify($password,$passwordhashed);

    if($checkpassword === false){
        header("Location:../login.php?error=wronglogin2");
    }elseif($checkpassword === true){
        session_start();
        $_SESSION['uID'] = $uidexist['Uid'];
        $_SESSION['Uusername'] = $uidexist['Uusername'];
        header("Location:../index.php?error=none");
        exit();
    }
}
















