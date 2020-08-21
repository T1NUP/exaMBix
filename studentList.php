<!DOCTYPE html>
<meta name="viewport" content="width-device width">
<meta name="description" content="">
<meta name="author" content="">

<title>
    Signin Template
</title>
<link rel="icon" href="qpic.png">


<!---BootStrap Core CSS(act as an import for different classes)-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<body style="background-color: lightsteelblue;">
    <div class="fluid block text-center row">
        <nav class="col-12 flex fluid navbar-dark bg-primary  border-bottom border-dark shadow">
            <span class="navbar-text text-dark font-weight-normal display-4" id="appName">
                <img class="mr-2 mb-2" alt="Nothing" width="60px" height="60px" src="https://cdn3.iconfinder.com/data/icons/letters-and-numbers-1/32/letter_Q_blue-512.png">
                <u>APP NAME</u>
            </span>
        <nav>
    </div>
    <div class="row py-4">
    <div class="box shadow py-4 bg-info px-3" style="margin: auto;">
    
<?php

require("connect.php");

$id= $_POST['qid'];
$us= $_POST['user'];
$em= $_POST['email'];

$q1= "SELECT * from questionId where qid=".$id.";";
$f1= mysqli_query($connect,$q1);
$a1= mysqli_fetch_assoc($f1);
$em1= $a1['email'];
$us1= $a1['uname'];
if(($em1==$em)&&($us1==$us))
{
    $q2= "SELECT * from answers where qid=".$id." and sl=1;";
    $f2= mysqli_query($connect,$q2);
    while($row= mysqli_fetch_assoc($f2))
    {
        //echo "CORRECT";
        echo "<form action='ansShw.php' method='POST'>";
        echo "<input type='text' value=".$row['pid']." name='email' readonly>";
        echo "<input type='number' value=".$row['vmarks']." readonly>";
        echo "<input type='hidden' value=".$id." name='qzid' readonly>";
        echo "<input type='hidden' value=".$row['qname']." name='qname' readonly>";
        echo "<input type='submit' value='SEE >>' readonly>";
        echo "</form>";
    }

    
}
else
{
    echo "<script>alert('Access Denied!!');window.location.href= 'javascript:history.go(-1)';</script>";
}

?>
