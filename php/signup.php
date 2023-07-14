<?php  require_once 'things/header.php'; ?>

<form action="things/signup.inc.php" method="post">
    <h1>SIGN UP</h1>
    <input type="text" name="Uname" placeholder="Name"><br><br>
    <input type="text" name="Uemail" placeholder="Email"><br><br>
    <input type="text" name="Uusername" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="password" name="repeatpassword" placeholder="Repeat the password"><br><br>
    <button type="submit" name="submit">SIGN UP</button>
</form>
<?php 
    if(isset($_GET['error'])){
       $error = $_GET['error'];
       if($error == 'emptyinput' ){
        echo '<p>Please complete all the input\'s</p>';
       }elseif($error == 'invalidemail'){
        echo '<p>Please write a valid email</p>';
       }elseif($error == 'invalidusername'){
        echo '<p>This username isn\'t good</p>';
       }elseif($error == 'usernametaken'){
        echo '<p>This username is already taken</p>';
       }elseif($error =='passwordmatch'){
        echo '<p>The 2 password\'s dont match</p>';
       }elseif($error == 'stmtfailed'){
        echo '<p>Oops... Something went wrong</p>';
       }elseif($error == 'none'){
        echo '<br><b>You have signed up</b>';
       }
    }
?>