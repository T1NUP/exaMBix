<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="">
<meta name="author" content="">

<title>
    EXAM BIX
</title>
<link rel="icon" href="qpic.png">


<!---BootStrap Core CSS(act as an import for different classes)-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<body style="background-color: rgba(252, 182, 252, 0.959);">
    <div class="fluid block text-center row">
        <nav class="col-12 flex fluid navbar-dark bg-primary  border-bottom border-dark shadow">
            <span class="navbar-text text-dark font-weight-normal display-4" id="appName">
                <img class="mr-2 mb-2" alt="Nothing" width="60px" height="60px" src="https://cdn3.iconfinder.com/data/icons/letters-and-numbers-1/32/letter_Q_blue-512.png">
                <u>exaMBix</u>
            </span>
        <nav>
    </div>
    <div class=" row px-5 py-3" style="background-color: darkorchid;">
        <div class="card col-3-sm shadow px-5 py-2 mx-3"  style="background-color: lightblue" >
            

<?php
//$t=4000;
//echo "<script>setTimeout('end()',".$t.");function end(){alert('qqq');}</script>";
//echo "<script>function end(){alert('qqq');window.location.replace('dashboard.html');}</script>";

require("connect.php");
$qi= $_POST['qid'];
$quizid= $qi;
$aem= trim($_POST['emi']);

//query to authenticate particular quiz 
$qs= "SELECT * from questionId where email='".$aem."' and qid=".$qi.";";
$fndq= mysqli_query($connect,$qs);
$tst= mysqli_fetch_assoc($fndq);
$tn= mysqli_num_rows($fndq);
if($tn==0)
{
    echo "<script>alert('Please enter correct info!!');window.location.replace('javascript:history.go(-1)');</script>";
}

$title= $tst['testName'];
$time= $tst['time'];
$total= $tst['total'];
$ti =$time * 1000;
echo "<h5>Total Questions: ".$total."</h5>";
//countdown timer
echo "<h6>Time: <embed id='t'></embed> sec remaining. </h6><script>var m=".$time."; var x= setInterval(function(){document.getElementById('t').innerHTML=m--; if (m==0){alert('Time Over!!');window.location.replace('dashboard.html');}},1000);</script>";
?>

    </div>
        <div class="card col-sm shadow px-2 py-2 mx-4 my-2 font-weight-bold text-center"  style="background-color: deepskyblue;" >
            <h1><?php echo $title ?></h1>
        </div>
    </div>

    <div class="row px-2 py-3 mx-5">
        <div class="card col-sm  shadow px-2 py-1 mx-4 " style="background-color: lightcyan;">
        <form action="submitQ.php" method="POST" class="form-group px-3 py-4">
<?php
    $qse= "SELECT * from question where email='".$aem."' and qid=".$qi.";";
    $fndqe= mysqli_query($connect,$qse);
    //$tste= mysqli_fetch_assoc($fndqe);
    $tne= mysqli_num_rows($fndqe);
    $ans= 1;

    //echo $tne;
    while(($row= mysqli_fetch_assoc($fndqe)) && $tne>0)
    {
        //echo "test";
        echo "<i>Question ".$ans.":</i><br>".$row['textq']."<br>";
        if($row['pic']!=NULL)
        echo '<div class="my-2">  
        <tr>  
             <td>  
                  <img src="data:image/jpeg;base64,'.base64_encode($row['pic'] ).'" class="img-fluid" />  
             </td>  
        </tr>  
         </div> ';
        echo "<textarea onpaste='return false' autocomplete='false' name='".$ans."' style='width: 100%;' ></textarea><br><br>";
        $ans= $ans + 1; 
        $tne= $tne - 1;
    }
    
    echo "<input type='hidden' name='totans' value='".$ans."'>";
    echo "<input type='hidden' name='qiz' value='".$title."'>";
?>
            <input type="hidden" name='eex' id="eex">
            <input type='hidden' name='yo' value='<?php echo $quizid ?>'>   
            <input type="submit" id='fst'  name="suba" style="float: right;">
            </form>
        </div>

        <script>
            var en= localStorage.getItem('email');
            document.getElementById('eex').value=en;
        </script>
    </div>

</body>