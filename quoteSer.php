<?php
//server code for fetching info data 
//require("connect.php");

$connect = mysqli_connect("localhost","root","") or die("mysql_error");

#selecting database name!!
mysqli_select_db($connect,"quizappdb");

$a= array(); 
$d= mysqli_query($connect,"SELECT * from devside;");
while($row= mysqli_fetch_assoc($d))
{
    array_push($a,$row['quote']);
}

$j= json_encode($a);
echo $j;

?>