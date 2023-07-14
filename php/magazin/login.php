<style>
    body{
        display: flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
    }
    h1{
        color:blue;;
        font-size:3rem;
    }
    input{
        background-color:dodgerblue;
        box-shadow:3px 3px 3px grey;
    }
    button{
        background-color:red;
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
<form action="api/login.inc.php" method="post">
    <h1>LOG IN</h1>
    <input type="text" name="Uusername" placeholder="Username/Email"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit" name="submit">LOG IN</button>
</form>
<p>Don't have an account?<a href="signup.php">Create one!</a></p>
</div>
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