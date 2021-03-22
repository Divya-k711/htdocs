<?php
include_once"databaseconnection.php";
$fullname=$_POST['fullname'];
$email=$_POST['emailadd'];
$username=$_POST['username'];
$password=$_POST['password'];
$sql=mysqli_query($con,"SELECT * FROM signup where emailadd='$email'");
$res=mysqli_num_rows($sql);
if(isset($_POST['save']))
{
    if($res==0)
    {
        //$password1 = md5($password);
    $insertsql = "INSERT INTO signup (fullname,emailadd,username,password) VALUES ('$fullname','$email','$username','$password')";
    $newsql=mysqli_query($con,$insertsql);
    header("Location: registerpage.php");
    }
    else{
        header("Location: signuppage.php?val=already_exist");
        //exit;
    }
}

?>