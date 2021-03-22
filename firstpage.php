<?php
if(isset($_GET['val']))
{
    $signincheck=$_GET['val'];
    if($signincheck=="password_incorrect")
    {
      echo "<script language='javascript'>";
			echo "alert('Email id or Password Incorrect')";
			echo "</script>";
    }
    else if($signincheck=="not_exist")
    {
      echo "<script language='javascript'>";
			echo "alert('Email not exist')";
			echo "</script>";
    }
}
?>

<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <link rel="stylesheet" href="login_signup.css">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="body">

	
<div class="login-page">
  <div class="form">
    <b>Login page</b>
    <form name="f1" action="login.php" onsubmit = "return validation()" method="POST">
      <lottie-player src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"  background="transparent"  speed="1"  style="justify-content: center;" loop  autoplay></lottie-player>
      <input type="text" name="emailadd" placeholder=" email id";   required/>
      <input type="password" name="password" placeholder="password" required/>
      <i class="fas fa-eye" onclick="show()"></i> 
      <input type="submit" name="login" value="LOGIN">
      <br>
      <br>
     <!-- <button>LOGIN</button>-->
      <p class="message"></p>
    </form>

    <form class="login-form">
      <button type="button" onclick="window.location.href='signuppage.php'">SIGN UP</button>
    </form>
    <br>
    <br>
    <b> <a href="homepage.html">Click here to get back to HOME page.</a> </b>
  </div>
</div>

  <script>
    function show(){
      var password = document.getElementById("password");
      var icon = document.querySelector(".fas")

      // ========== Checking type of password ===========
      if(password.type === "password"){
        password.type = "text";
      }
      else {
        password.type = "password";
      }
    };
    //=== validation for empty field===
    function validation()  
    {  
        var id=document.f1.user.value;  
        var ps=document.f1.pass.value;  
        if(id.length=="" && ps.length=="") {  
            alert("User Name and Password fields are empty");  
            return false;  
        }  
        else  
        {  
            if(id.length=="") {  
                alert("User Name is empty");  
                return false;  
            }   
            if (ps.length=="") {  
            alert("Password field is empty");  
            return false;  
            }  
        }     
      }
  </script>
  
</body>
</html>