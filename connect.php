<?php

//error_reporting(0);

#connection to phpMyAdmin root directory!!
$connect = mysqli_connect("localhost","root","") or die("mysql_error");

#selecting database name!!
mysqli_select_db($connect,"quizappdb");
//echo "connected!<br><br>";


?>