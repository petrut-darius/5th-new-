<?php 
    session_start();
    ?>
<header class="header">
        <nav class="nav">
            <img src="images/rename.png" alt="icoana" class="icoana" id="menu" onclick="toogleNav()">
            <ul class="front">
                <li><a href="index.php">Home page</a></li>
                <li><a href="product.php">Product's</a></li>
                <?php 
                    if(isset($_SESSION['uID'])){
                        echo '<li><a href="">Profile</a></li>';
                        echo '<li><a href="logout.php">Log Out</a></li>';
                    }else{
                        echo'<li><a href="">About us</a></li>';
                        echo'<li><a href="login.php">Log In/SignUP</a></li>';
                    }  
                ?>
                <div>
                    <span id='hours'>00</span>
                    <span>:</span>
                    <span id='minutes'>00</span>
                    <span>:</span>
                    <span id='seconds'>00</span>
                    <span id = 'session'></span> 
                </div>
                <?php
                    if(isset($_SESSION['uID'])){
                        echo'<div><a href="profile.php">Cont-ul tau</a></div>';
                        echo'<div><a href="daortya">Cos-ul tau</a></div>';
                    }
                ?>
            </ul>
        </nav>
    </header>
    <script>
        function displayTime(){
            var dateTime = new Date();
            var hrs = dateTime.getHours();
            var min = dateTime.getMinutes();
            var sec = dateTime.getSeconds();
            var session = document.getElementById('session');
        
            if(hrs >= 12){
                session.innerHTML = 'PM';
            }else{
                session.intnerHTML = 'AM';
            }
            if(hrs > 12){
                hrs = hrs - 12;
            }

            document.getElementById('hours').innerHTML = hrs;
            document.getElementById('minutes').innerHTML = min;
            document.getElementById('seconds').innerHTML = sec;
        }
        setInterval(displayTime,10);
    </script>