<?php

$connection = mysqli_connect("localhost","root","","login");
if(!$connection){
    echo 'Nu te-ai conectat  la baza de date';
    exit();
}