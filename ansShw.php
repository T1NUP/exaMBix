<?php

require("connect.php");

$qid= $_POST['qzid'];
$pid= $_POST['email'];
$nameq= $_POST['qname'];
//echo $nameq;

$q3= "SELECT * from questionId where qid=".$qid.";";
$f3= mysqli_query($connect,$q3);
$rs= mysqli_fetch_assoc($f3);
$nameq= $rs['testName'];
?>
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

<body>
    <div class="fluid block text-center row">
        <nav class="col-12 flex fluid navbar-dark bg-primary  border-bottom border-dark shadow">
            <span class="navbar-text text-dark font-weight-normal display-4" id="appName">
                <img class="mr-2 mb-2" alt="Nothing" width="60px" height="60px" src="https://cdn3.iconfinder.com/data/icons/letters-and-numbers-1/32/letter_Q_blue-512.png">
                <u>APP NAME</u>
            </span>
        <nav>
    </div>
    <div class="text-center font-weight-bold py-2" style="background-color: cyan;">
        <div id='t'>QUIZ: <?php echo $nameq ?></div>
        <div id='id'>Test ID: <?php echo $qid ?></div>
    </div>
    <div class="card mx-5 my-2 shadow">
        <form action="markSer.php" method="POST" class="my-3">
        <div id='user' class="px-3 py-2 font-weight-italics border-dark text-center" style="background-color: lightgray;">
            <?php echo $pid ?>
        </div>
        <div id='ans' class="px-3 py-3 text-dark">

<?php
    echo "<input type='hidden' name='ema' value='".$pid."'>";
    echo "<input type='hidden' name='tid' value='".$qid."'>";
    
    $q= "SELECT * from answers where qid=".$qid." and pid='".$pid."';";
    $f= mysqli_query($connect,$q);$l=1;
    while($row = mysqli_fetch_assoc($f))
    {
        echo "<div class='py-2 border border-info' style='background-color: lightskyblue;'>Ans ".$row['sl'].": ".$row['ans']."</div>";
        $l=$l+1;
    }
    echo "<input type='number' step='0.01' class='px-2' name='mark' id='mrk' required style='float: right;'><br><br>";
    echo "<input type='submit' class='btn btn-primary'></form>";
?>
        