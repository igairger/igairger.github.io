<?php

    $host="localhost";
    $user="root";
    $password="";
    $database="kitg6218_rapor-21st-century-skill-data";

    $connect=mysqli_connect($host,$user,$password,$database);
    $link=mysqli_select_db($connect,$database)or die(mysqli_error($link));
?>