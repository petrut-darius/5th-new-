<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='include/slideshow/slideshow.css'>
</head>
<body>
    <div class='slider'>
        <div class="slides">
            <input type="radio" name='radio-btn' id='radio1'>
            <input type="radio" name='radio-btn' id='radio2'>
            <input type="radio" name='radio-btn' id='radio3'>
            <input type="radio" name='radio-btn' id='radio4'>

            <div class="slide first">
                <img src="images/lndscp1.jpg" alt="abcd">
            </div>
            <div class="slide">
                <img src="images/lndscp2.jpg" alt="d">
            </div>
            <div class="slide">
                <img src="images/lndscp3.jpg" alt="r">
            </div>
            <div class="slide">
                <img src="images/lndscp4.jpg" alt="e">
            </div>


            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>

        </div>
            <div class="navigation-manual"></div>
    </div>
    <script type='text/javascript'>
        var counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter > 4){
                counter = 1;
            }
        }, 2500);
    </script>
</body>
</html>