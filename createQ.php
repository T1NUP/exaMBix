<!DOCTYPE html>
<meta name="viewport" content="width-device width">
<meta name="description" content="">
<meta name="author" content="">

<title>
    EXAMBIX
</title>
<link rel="icon" href="qpic.png">


<!---BootStrap Core CSS(act as an import for different classes)-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<body>
    <div class="fluid block text-center row">
        <nav class="col-12 flex fluid navbar-dark bg-primary  border-bottom border-dark shadow">
            <span class="navbar-text text-dark font-weight-normal display-4" id="appName">
                <img class="mr-2 mb-2" alt="Nothing" width="60px" height="60px" src="https://cdn3.iconfinder.com/data/icons/letters-and-numbers-1/32/letter_Q_blue-512.png">
                <u>exaMBix</u>
            </span>
        <nav>
    </div>
    <div class="row">
    <div class="box shodow text-dark px-5 py-2" style="width: 15rem;text-align: left;background-color:darkturquoise;"><b>

<?php

require("connect.php");
// data from modal
    $e= trim($_POST['email']);
    $id= $_POST['user'];
    $tn= $_POST['head'];
    $tot= $_POST['total'];
    $tim= $_POST['time'] * 60;
    
    $put= "INSERT into questionId(email,uname,testName,total,time) values('".$e."','".$id."','".$tn."',".$tot.",".$tim.");";
    $do= mysqli_query($connect,$put);$g=1;
    
//*****************************
    $fin= "SELECT qid from questionId where email='".$e."' and testName='".$tn."' and total=".$tot.";";
    $gid= mysqli_query($connect,$fin);
    $tid= "na";
    while($row= mysqli_fetch_assoc($gid))
    {
        $tid= $row['qid'];
    }
    echo "<h4><b>Test ID: ".$tid."</b></h4>";
    echo "<h6>Test Name: ".$tn."</h6>";
    echo "<h6>Total Questions: ".$tot."</h6>";
    
?>

    </div>
    <div class=" bx-3 px-4 py-2 mx-auto">
        Enter all the questions and press submit.<br>
        Please note the details displayed left. It will be used for entering the test.<br>
        <u><b>NOTE</b></u>:<br> 
        i. For next line add < br >(without spaces between) at the end of the Line.<br>
        ii. Image(jpg/jpej/png) is optional; if uploaded go for lower resolution images.(under 635 X 800 pixels).
    </div>
    </div>
    
<?php
    
    echo "<form action='queToSer.php' enctype='multipart/form-data' method='POST' class='px-3 py-4'>";
    $tot= $tot+1;
    for($i=1;$i<$tot;$i++)
    {
        $j=$i+$tot;
        echo "Question ".$i."<br>";
        echo "<i>Image (optional):  </i><input type='file' accept='.jpg,.jpeg,.png' name='".$j."' id='img' value='Choose an Image file..'><p>";
        echo "<textarea style='width: 100%;' name='".$i."'required placeholder='Write here...'></textarea><br><br>";
        
    }
    echo "<input type='hidden' name='tot' value='".$tot."'>";
    echo "<input type='hidden' name='mail' value='".$e."'>";
    echo "<input type='hidden' name='idt' value='".$tid."'>";
    echo "<input type='hidden' name='quiz' value='".$tid."'>";
    echo "<input type='submit' id='fst'  name='sm' style='float: right;'></form>";
  
    

?>

</body>