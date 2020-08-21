<!DOCTYPE html>
<meta name="viewport" content="width-device width">
<meta name="description" content="done">
<meta name="author" content="register">

<title>
    APP NAME
</title>
<link rel="icon" href="https://cdn3.iconfinder.com/data/icons/letters-and-numbers-1/32/letter_Q_blue-512.png">


<!---BootStrap Core CSS(act as an import for different classes)-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


<body style="background-color:darkslateblue;">
    <div class="display-3 text-center">
        <u>Registration Window</u>
    </div>
    
<div class="container shadow " style="background-color:  rgba(124, 82, 224,1);">
        
        <form class="form-action my-5 py-3" action="register.php" method="POST">
            <div class="lead mb-3 ">
                <u><b><i>Please enter all details...</i></b></u>
                <div id="warn"></div>
                
            </div>
                <label for="emailbox" class="text-dark my-2" style="float: left;">Please enter your Email id:</label>
                <input type="email" name="email" id="emailbox" class="form-control"  required autofocus>
              
                <label for="userid" class="text-dark my-2" style="float: left;">Please enter a username:</label>
                <input type="text" name="userid" id="userid" class="form-control" required autofocus>

                <label for="password1" class="text-dark my-2" style="float: left;">Please enter a password:</label>
                <input type="password" name="password1" id="password1" class="form-control"  required autofocus>

                <label for="password2" class="text-dark pt-2" style="float: left;">Re-enter the above password:</label>
                <input type="password" name="password2" class="form-control mb-3" id="password2"  required autofocus>

                <input class="btn btn-info" style="float: right;" type="submit" value="SUBMIT" name="submit">
        </form>
    </div>
    <script>function add(){document.getElementById('warn').innerHTML='User with this email already exist...register another?';}</script>
</body>
</html>




<?php
//echo "Welcome";

require("connect.php");
if(isset($_POST['submit']))
{
    if(($_POST['password1'])!=($_POST['password2']))
    {
        echo "<script>alert('password mismatched!!');</script>";
    }
    else
    {
    $e= $_POST['email'];
    $id= $_POST['userid'];
    $pwd= $_POST['password1'];

    $existq= mysqli_query($connect,"SELECT email from users where email='$e';");
    $n = mysqli_num_rows($existq);

    if($n>0)
    {
        //echo $n;
        //$t="Username ".$id." already exists... please try another!";
        //echo "<script>document.getElementById('warn').insertAdjacentHTML('afterend','000');</script>";
        echo "<script>add();</script>";
        //echo "present";
    }
    else
    {
        $put= "INSERT into users(username,email,password) values('".$id."','".$e."','"."$pwd');";
        //echo $put;
        $do= mysqli_query($connect,$put); //or die("mysql_error");
        echo "<script>alert('Successfully registered');location.replace('index.php');</script>";
    }
    }
    //header("location: register.php");
}

?>

