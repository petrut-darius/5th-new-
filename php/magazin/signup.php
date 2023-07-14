<style>
    body{
        display: flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
    }
    h1{
        color:red;
        font-size:3rem;
    }
    input{
        background:lightgreen;
        box-shadow:3px 3px 3px grey;
        color:black;
    }
    button{
        background:lightblue;
        border-radius:5px;
    }
    p{
        font-size:1.25rem;
    }
    div{
        outline:1px solid black;
        box-shadow:3px 3px 3px grey;
        padding:2rem;
        border-radius:10px;
    }
</style>
<div>
<form action="api/signup.inc.php" method="post">
    <h1>SIGN UP</h1>
    <input type="text" name="Uname" placeholder="Name"><br><br>
    <input type="text" name="Uemail" placeholder="Email"><br><br>
    <input type="text" name="Uusername" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="password" name="repeatpassword" placeholder="Repeat the password"><br><br>
    <button type="submit" name="submit">SIGN UP</button>
</form>
<p>ALready have an account?<a href="login.php">Log in with that one!</a></p>
</div>
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