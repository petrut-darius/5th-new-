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
    <?php
    require_once 'include/header.inc.php';
    require_once 'include/aside.inc.php';
    ?>


    <section class='searchbar'>
        <?php
        // require_once 'searchbar/connection.inc.php';
        ?>
        <form action="#" method="POST">
            <input type="text" placeholder='Te autam sa gasesti culoare speciala pentru tine?' name='mancare'>
            <input type='submit' name='submit'>
        </form>


        <?php
        if(isset($_POST['submit'])){
            $mancare = $_POST['mancare'];
            $stmt = $con->prepare("SELECT * FROM searchbar WHERE food_name LIKE  '%".  $mancare ."%'");
            // $stmt->bindParam(':mancare','"%" '' "%"');
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            if($row = $stmt->fetch()){
                echo '<h1 class="foodName">' . $row->food_name . '</h1>';
                echo '<p class="foodDescription">' . $row->description . '</p>';
            } else {
                echo 'Nu am gasit nici un produs.';
            }
        }
        ?>
    </section>
    <section class="hero">
        <img src="images/hero.png" alt="hero-image" class="heroImage">
    </section>
    <section class='email'>
      <form action="api/email2.php" method='post'>
      <h2>Contact us!!!</h2>
      <textarea rows='2' cols='50' name='frWHO' placeholder='Your Email(so we know who you are)'></textarea><br>
      <textarea  name="content" rows="20" cols="90" placeholder='Send Us an Email!'></textarea><br>
      <input type='submit' name='submitEmail' placeholder='trimite Email-ul'>
      </form>
    </section><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  
    <section id='ft'>
          <h1>You can also contact us on:</h1>
        <div class="ft">
          <a href='../../adidas.com'><img src='images/ig.png' class='ft-img'></a>
          <a href='../../nike.com'><img src='images/facebook.png' class='ft-img'></a>
          <a href='../../youtube.com'><img src='images/whatsapp.png' class='ft-img'></a>
        </div>
    </section>
    
</body>
</html>