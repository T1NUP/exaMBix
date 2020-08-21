<?php
//for uploading questions to question db
error_reporting(E_ERROR);
require("connect.php");
if(isset($_POST['sm']))
    {
        $tot= $_POST['tot'];
        $e= $_POST['mail'];
        $tid= $_POST['idt'];
        $quiz= $_POST['quiz'];
        for($i=1;$i<$tot;$i++)
        {   
            $j=$i+$tot;
            $txt= $_POST[$i];
            $img= addslashes(file_get_contents($_FILES[$j]["tmp_name"]));
            //echo $img;
            //echo $txt;
            $insQns="INSERT into question(email,qid,sl,textq,pic)values('".$e."',".$tid.",".$i.",'".$txt."' ,'".$img."');";
            $toSer= mysqli_query($connect,$insQns);
        }
    }
    echo "<script>alert('Congo!! Your Quiz has been created with id: ".$quiz." Share it with your examines..')</script>";
    echo "<script>window.location.replace('dashboard.html');</script>";
?>