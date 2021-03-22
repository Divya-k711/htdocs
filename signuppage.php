<?php
if(isset($_GET['val']))
{
  $signincheck=$_GET['val'];
    if($signincheck=="already_exist")
    {
      echo "<script language='javascript'>";
			echo "alert('Email id Already exist')";
			echo "</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <html>
    <head>
      <title>Sign Up</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta charset="utf-8" />
      <link rel="stylesheet" type="text/css" href="login_signup.css" />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      />
      <link
        href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600"
        rel="stylesheet"
        type="text/css"
      />
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    </head>

    <body class="body">
        
      <div class="login-page">
        <div class="form">
            <b>Signup page</b>
          <form action="signup.php" method="POST">
            <lottie-player
              src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"
              background="transparent"
              speed="1"
              style="justify-content: center"
              loop
              autoplay
            ></lottie-player>
            <input type="text" name="fullname" placeholder="full name" required/>
            <input type="email" name="emailadd" placeholder="email address" required/>
            <input type="text" name="username" placeholder="pick a username" required/>
            <input type="password" name="password" id="password" placeholder="set a password" required/>
            <i class="fas fa-eye" onclick="show()"></i>
           <input type="submit" name="save" value="SIGN UP">
            <br>
            <br>
          </form>
           <b>
           <a href="homepage.html">Click here to get back to HOME page.</a></b>
          <!--<form class="login-form">
             
            <button type="submit" name="save" >
              SIGN UP
            </button>
          </form>
        -->
        </div>
      </div>
    </body>
    <script>
      function show() {
        var password = document.getElementById("password");
        var icon = document.querySelector(".fas");

        // ========== Checking type of password ===========
        if (password.type === "password") {
          password.type = "text";
        } else {
          password.type = "password";
        }
      }
    </script>
  </html>
