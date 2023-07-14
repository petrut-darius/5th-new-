<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belanosima&display=swap" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<style>
    main{
        display: grid;
        grid-template-columns:3fr 1fr;
        grid-template-areas:'img data';
    }
</style>
<?php
    require_once 'include/header.inc.php';
    require_once 'include/aside.inc.php';
?>
<main>
    <div class='main_product1'>
        <div class='main_div_prod1'>
            <h2>Ceva Graffiti</h2>
            <img src="images/product4.jpg" alt="qqqwertyuiop">
        </div>
        <div class='second_div_prod1'>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method='get'>
            <label>
                <p>Un recipient miraculos</p>
                <button name='200ml-300ml'>200ml-300ml</button><br>
                <button name='500ml'>500ml</button><br>
                <button name='750ml'>750ml</button><br>
            </label>
            </form>
        </div>
    </div>
    <div class='aside_product1'>
        <h2><?php  ?></h2>
        <form action="cos.php" method='post'>
            <h2>30 Ron</h2>
            <button>Adauga in cos</button>
            <button>Adauga la favorite</button>
        </form>
    </div>
</main>
</style>
</body>