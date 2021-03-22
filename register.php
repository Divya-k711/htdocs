<?php
include_once"databaseconnection.php";
$email=$_POST['emailadd'];
$currentsem=$_POST['currsem'];
$cgpa=$_POST['cgpa'];
$testcount=$_POST['numberoftest'];
$quants=$_POST['quantsscore'];
$logical=$_POST['logicalscore'];
$verbal=$_POST['verbalscore'];
$automata=$_POST['automata'];
$automatafix=$_POST['automatafix'];
$dc=$_POST['countofdc'];

$sql=mysqli_query($con,"SELECT * FROM dataregistered where emailadd='$email'");
$res=mysqli_num_rows($sql);

if(isset($_POST['register']))
{
    if($res==0)
    {
    $insertsql = "INSERT INTO dataregistered (emailadd,currsem,cgpa,numberoftest,quantsscore,logicalscore,verbalscore,automata,automatafix,countofdc) VALUES ('$email','$currentsem','$cgpa','$testcount','$quants','$logical','$verbal','$automata','$automatafix','$dc')";
    mysqli_query($con,$insertsql);
    header("Location: firstpage.php");
    }
    else{
        header("Location: registerpage.php?val=already_exist");
    }
}

?>