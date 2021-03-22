<?php
include_once"databaseconnection.php";

$email=$_POST['emailadd'];
$password=$_POST['password'];
$sql=mysqli_query($con,"SELECT * FROM signup where emailadd='$email' and password='$password'");
$res=mysqli_num_rows($sql);
if(isset($_POST['login']))
{
    if($res==1)
    {
    header("Location:afterloginpage.html");
    }
	else{
		$checksql=mysqli_query($con,"SELECT * FROM signup where emailadd='$email'");
		$res1=mysqli_num_rows($checksql);
		if($res1==1)
		{
			header("Location: firstpage.php?val=password_incorrect");
			
		}
		else{
            header("Location: firstpage.php?val=not_exist");
		}
    }
}

?>