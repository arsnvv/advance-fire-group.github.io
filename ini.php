<?php

$db_name="135";
$db_user="root";
$db_pass="";
$my_db=mysqli_connect('localhost',$db_user,$db_pass,$db_name) or die("не работает");
mysqli_query($my_db,"SET NAMES 'utf8' ");
?>