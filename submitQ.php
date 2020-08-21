<?php
//for submitting answers
require("connect.php");
if(isset($_POST['suba']))
    {
        $title= $_POST['qiz'];//quiz name
        $qzid= $_POST['yo'];//quiz id
        $n= $_POST['totans'];//total number of questions to answer
        $emans= $_POST['eex'];//email (also id) of answerer 
        for($i=1;$i<$n;$i++)
        {
            $a= $_POST[$i];//each answer serially
            $insq= "INSERT into answers(qid,pid,qname,sl,ans) value(".$qzid.",'".$emans."','".$title."',".$i.",'".$a."');";
            $put= mysqli_query($connect,$insq);
        }
        //echo "Submitted!!";
        echo "<script>alert('Your answers has been successfully submitted. Thank You!')</script>";
        echo "<script>window.location.replace('dashboard.html');</script>";      
    }
?>