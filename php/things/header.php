<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="things/style.css">
</head>
<body>
    <section class="header" id='header'>
        <nav>
            <ul id='ul'>
                <li><a href="index.php">HOME PAGE</a></li>
                <li>ABOUT US</li>
                <?php 
                if(isset($_SESSION['uID'])){
                    echo'<li>PROFILE</li>';
                    echo'<li><a href="logout.php">LOG OUT</a></li>';
                }else{
                    echo '<li><a href="signup.php">SIGN UP</a>';
                    echo '<li><a href="login.php">LOGIN</a></li>';
                    
                }
                ?>
            </ul>
        </nav>
    </section>
    <section id='header2' style='line-height:56px;'>
            <b id='b' class='hide'>A</b>
    </section>
    <script>
        window.addEventListener('scroll', function() {
  
    var header = document.getElementById('header');
    var header2 = document.getElementById('b');
    var scrollPosition = (document.documentElement.scrollTop / (document.documentElement.scrollHeight - document.documentElement.clientHeight)) * 100;

  if (scrollPosition > 30) {
    header.classList.remove('show');
    b.classList.remove('hide');
    header.classList.add('hide');
    b.classList.add('show');
  } else {
    header.classList.remove('hide');
    b.classList.remove('show');
    header.classList.add('show');
    b.classList.add('hide');
  }});
    </script>
</body>
</html>