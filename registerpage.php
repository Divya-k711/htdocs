<?php
if(isset($_GET['val']))
{
  $signincheck=$_GET['val'];
    if($signincheck=="already_exist")
    {
      echo "<script language='javascript'>";
			echo "alert('User already exist')";
			echo "</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <html>
    <head>
      <title>Register</title>
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
                <b>Registeration page</b>

              <form action="register.php" method="POST">
                <lottie-player
                  src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"
                  background="transparent"
                  speed="1"
                  style="justify-content: center"
                  loop
                  autoplay
                ></lottie-player>

                Enter Email id:<input type="email" name="emailadd" placeholder="email id which is used during signup" required/>
                <br>
                <br>
                Current Semester:<input type="number" name="currsem" placeholder="Current Semester" min="1" max="8" required>
                CGPA : <input type="number" step="0.01" min="0" max="10" name="cgpa" placeholder="cgpa: (eg: 9.34)" required>
                Frequency of AMCAT/Equivalent test:<input type="number" placeholder="(eg: 2)" min="1" max="10" name="numberoftest" required>
                Cummulative Quants Score:<input type="number" placeholder="Enter in % (eg: 75)" min="1" max="100" name="quantsscore" required>
                Cummulative Logical Score:<input type="number" placeholder="Enter in % (eg: 75)" min="1" max="100" name="logicalscore" required>
                Cummulative Verbal Score:<input type="number" placeholder="Enter in % (eg: 75)" min="1" max="100" name="verbalscore" required>
                Automata<input type="number"  placeholder="(eg:75) out of 100" min="1" max="100" name="automata" required>
                Automata Fix<input type="number"  placeholder="(eg:75) out of 100" min="1" max="100" name="automatafix" required>
                Daily Challenge count(in Skillrack):<input type="number" placeholder="(eg: 233)" min="0" max="1000" name="countofdc" required>
                <br>
            <br>
            <input type="submit" name="register" value="Register">
          </form>
          <!--<form class="login-form">
            <button type="button"  name="register">
              REGISTER
            </button>
          </form>-->
          Once registered, kindly login.
        </div>
      </div>
    </body>
    </html>