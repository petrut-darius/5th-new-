<?php  require_once 'things/header.php'; ?>
<form action="things/login.inc.php" method="post">
    <h1>LOG IN</h1>
    <input type="text" name="Uusername" placeholder="Username/Email"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit" name="submit">LOG IN</button>
</form>
<?php 
    if(isset($_GET['error'])){
       $error = $_GET['error'];
       if($error == 'emptyinput' ){
        echo '<p>Please complete all the input\'s</p>';
       }elseif($error == 'wronglogin'){
        echo '<p>incorrect login info</p>';
       }
    }
?>