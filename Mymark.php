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

<body style="background-color: rgba(252, 182, 252, 0.959);">
    <div class="fluid block text-center row">
        <nav class="col-12 flex fluid navbar-dark bg-primary  border-bottom border-dark shadow">
            <span class="navbar-text text-dark font-weight-normal display-4" id="appName">
                <img class="mr-2 mb-2" alt="Nothing" width="60px" height="60px" src="https://cdn3.iconfinder.com/data/icons/letters-and-numbers-1/32/letter_Q_blue-512.png">
                <u>APP NAME</u>
            </span>
        <nav>
    </div>

    <div class="row px-5 py-3 my-3 mx-4" style="background-color: darkorchid;" >
    <form action='Mymark.php' method='POST'>
    <input type='hidden' name='email' id='em'>
    <script>var m= localStorage.getItem('email');document.getElementById('em').value=m;</script>
    <input type='submit' value='SHOW' class='btn btn-info btn-lg btn-block' name='mrk'>
    </form>
    </div>

    <div class=" row px-5 py-3 my-3 mx-4" style="background-color: darkorchid;" >
    <div class='card col-8 shadow px-2 py-2 mx-4 my-4 font-weight-bold text-center' style='background-color: deepskyblue;' >
    <h2><b><u>TEST NAME</b></h2></div>
    <div class='card col-3 shadow px-5 py-2 mx-3 my-4 text-center' style='background-color: lightblue' >
    <h2> MARKS </u></h2></div>

<?php

    require("connect.php");
    //echo "<script>var m= localStorage.getItem('email');</script>"
    if(isset($_POST['mrk']))
    {
        //echo "DONE";
        $cli= $_POST['email'];
        $q= "SELECT * from answers where pid='".$cli."' and sl=1;";
        $f= mysqli_query($connect,$q);
        while($row= mysqli_fetch_assoc($f))
        {
            echo "<div class='card col-8 shadow px-2 py-2 mx-4 my-2 font-weight-bold text-center' style='background-color: deepskyblue;' >";
            echo "<h2><b>".$row['qname']."</b></h2></div>";
            echo "<div class='card col-3 shadow px-5 py-2 mx-3 my-2 text-center' style='background-color: lightblue' >";
            if($row['vmarks']==-99)
            {echo "<h2> Pending!! </h2></div>";}
            else
            {echo "<h2>".$row['vmarks']."</h2></div>";}
        }
        echo "</div>";
    }

?>    

    
        
    

