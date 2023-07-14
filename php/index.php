<?php  require_once 'things/header.php'; ?>

<h1 style="text-align: center;">THIS IS THE MAIN PAGE</h1>

<?php 

if(isset($_GET['error'])){
    $error = $_GET['error'];
if($error == 'none'){
    echo '<b>Te-ai conectat!</b>';
}
}
