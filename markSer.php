<?php

require("connect.php");

$e= $_POST['ema'];
$i= $_POST['tid'];
$m= $_POST['mark'];

$q= "UPDATE answers set vmarks=".$m." where qid=".$i." and pid='".$e."';";
$d= mysqli_query($connect,$q);

echo "<script>alert('Marks Updated!!');window.location.href= 'javascript:history.go(-3)';</script>";

?>