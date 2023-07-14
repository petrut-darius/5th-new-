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
    require_once 'api/connection.inc.php';
    require_once 'include/header.inc.php';
    require_once 'include/aside.inc.php';

    function buildCategoryRoot($parent_id = null) {
        global $con;
        $stmt = $con->prepare("SELECT * FROM categories WHERE parent_id ". (is_null($parent_id) ? 'is NULL' : ("= " . $parent_id)));
        $stmt->execute();

        do {
            $rows = $stmt->fetchAll();
            if ($rows) {
                $data = $rows[0];
                $row = [
                    'id' => $data[0] ?? null,
                    'name' => $data[1] ?? null, 
                    'parent_id' => $data[2] ?? null
                ];

                if (is_null($row['parent_id'])) {
                    echo "<div class='title-option'><b>". $row['name'] ."</b><b class='v' onclick='toggleOption()'>v</b></div>";
                    buildCategoryRoot($row['id']);
                } else {
                    echo "<input type='checkbox' title='".$row['name']."' name='".$row['id']."' value='".$row['id']."'/><br>";
                }
            }
         } while ($stmt->nextRowset());
    }

?><h1 class='color-h1'>Color</h1>
<div class='all'>
    <!-- <aside class='aside_color'>
        <div class='pret'>
            <div class='title-option'><b>PRET  </b><b class='v' id='V1' onclick='toggleOption()'>v</b></div>
        <form class='option' method='get'> 
                <input type='checkbox' name='<30'>  < 30 </input><br>
                <input type='checkbox' name='<70'>  < 70 </input><br>
                <input type='checkbox' name='<100'>  < 100 </input><br>
        </div>
        <div class='pret'>
            <div class='title-option'><b>CULOARE  </b><b class='v' onclick='toggleOption2()' >v</b></div>
                <div class='option' id='option2'>
                <a href="alb_inchis" class='option2_a'>
                <input type='checkbox' name='negru'>
                    <div class='option2_a_color'></div>&emsp;
                    <span class='option2_a_text'>ALB INCHIS</span>
                </a>
                <a href="alb_inchis" class='option2_a'>
                <input type='checkbox' name='alb'>
                    <div class='option2_a_color2'></div>&emsp;
                    <span class='option2_a_text2'>NEGRU DESCHIS</span>
                </a>
                <a href="alb_inchis" class='option2_a'>
                <input type='checkbox' name='rosu'>
                    <div class='option2_a_color3'></div>&emsp;
                    <span class='option2_a_text3'>ROSU</span>
                </a>
                <a href="alb_inchis" class='option2_a'>
                <input type='checkbox' name='verde'>
                    <div class='option2_a_color4'></div>&emsp;
                    <span class='option2_a_text4'>VERDE</span>
                </a>
                <a href="alb_inchis" class='option2_a'>
                <input type='checkbox' name='galben'>
                    <div class='option2_a_color5'></div>&emsp;
                    <span class='option2_a_text5'>GALBEN</span>
                </input>
                </a>
                <a href="alb_inchis" class='option2_a'>
                <input type='checkbox' name='albastru'>
                    <div class='option2_a_color6'></div>&emsp;
                    <span class='option2_a_text6'>ALBASTRU</span>
                </a>
            </div>

        </div>
        <div class='pret'>
            <div class='title-option'><b>DIMENSIUNE</b><b class='v' onclick='toggleOption3()'>v</b></div>
            <div class='option' id='option3'> 
                <input type='checkbox' name=''>200ml-300ml</input><br>
                <input type='checkbox' name=''>500ml</input><br>
                <input type='checkbox' name=''>750ml</input><br>
            </div>
        </div>
        <button type='submit' style='margin-top:0.5rem;'>SUBMIT</button>
        </form>
    </aside> -->

        <aside class='aside_color'>
        <form class='option' method='get'> 
         <?php buildCategoryRoot() ?>
        </form>
    </aside>
    <main class='main_color'>
        <span class='row_color'>
            <div class='product'><a href="product1.php" style="text-decoration: none !important;color:black;">
                <img src="images/product1.jpg" alt="">
                <h2 class='o'>ABCD</h2>
                <p  class='o'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus molestiae quidem numquam, dolor necessitatibus magnam inventore maiores veniam quae! Consectetur optio porro vel magnam laudantium, qui iste voluptatibus enim ea.</p>
            </a></div>
            <div class='product'><a href="product2.php" style="text-decoration: none !important;color:black;">
                <img src="images/product2.jpg" alt="">
                <h2 class='o'>ABCD</h2>
                <p  class='o'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, consequatur quis. Commodi doloribus repellat optio facere, cupiditate laborum similique dicta. Architecto repellendus voluptas labore adipisci exercitationem dolores voluptate a consequuntur.</p>
            </a></div>
            <div class='product'><a href="product3.php" style="text-decoration: none !important;color:black;">
                <img src="images/product3.jpg" alt="">
                <h2 class='o'>ABCD</h2>
                <p  class='o'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id facere nam quia magni dolores tempora autem, et nemo culpa voluptatum architecto odit in corrupti modi doloremque nostrum aut expedita suscipit?</p>
            </a></div>
        </span>
        <span class='row_color'>
            <div class='product'><a href="product4.php" style="text-decoration: none !important;color:black;">
                <img src="images/product4.jpg" alt="">
                <h2 class='o'>ABCD</h2>
                <p  class='o'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus molestiae quidem numquam, dolor necessitatibus magnam inventore maiores veniam quae! Consectetur optio porro vel magnam laudantium, qui iste voluptatibus enim ea.</p>
            </a></div>
            <div class='product'><a href="product5.php" style="text-decoration: none !important;color:black;">
                <img src="images/product5.jpg" alt="">
                <h2 class='o'>ABCD</h2>
                <p  class='o'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, consequatur quis. Commodi doloribus repellat optio facere, cupiditate laborum similique dicta. Architecto repellendus voluptas labore adipisci exercitationem dolores voluptate a consequuntur.</p>
            </a></div>
            <div class='product'><a href="product2.php" style="text-decoration: none !important;color:black;">
                <img src="images/product2.jpg" alt="">
                <h2 class='o'>ABCD</h2>
                <p  class='o'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id facere nam quia magni dolores tempora autem, et nemo culpa voluptatum architecto odit in corrupti modi doloremque nostrum aut expedita suscipit?</p>
            </a></div>
        </span>
    </main>
</div>


    <script src="script.js"></script>
    <script>
        let toggleOption = function (){
        let option = document.querySelector(".option");
        option.classList.toggle("active");
        }
        let toggleOption2 = function (){
        let option = document.querySelector("#option2");
        option.classList.toggle("active");
        }
        let toggleOption3 = function (){
        let option = document.querySelector("#option3");
        option.classList.toggle("active");
        }
    </script>
</body>