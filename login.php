<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Edification</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300&family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;700&family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
  </head>
<body>
  <section class="content">
    <div class="img-container">
      <img src="img/img2.png" alt="">
    </div>
    <div class="login-container">
      <div class="title">
        <h2>Welcome to<br><span style="color: #6358DC; font-family: 'Poppins'; font-weight: 700; font-size: 48px;">Edification!</span></h2>
      </div>
      <div class="login-form">
        <!-- login action page -->
        <form action="" method="post">
          
          <div class="container">
            <div class="place-holder">
              <div class="logo">
                <img src="img/person_avatar_account_user_icon_191606.png" alt="">
              </div>
              <div>
                <label for="uname"><b>Username</b></label><br>
                <!-- username -->
                <input type="text" style="font-size: 22px;" placeholder="enter your username" name="username" required>
              </div>
              
            </div>
            <div class="place-holder">
              <div class="logo">
                <img src="img/key_security_icon_195229.png" alt="" class="key">
              </div>
              <div>
                <label for="psw"><b>Password</b></label><br>
                <!-- password -->
                <input type="password" style="font-size: 22px;" placeholder="enter your password" name="password" required>
              </div>
            </div>
            <div class="rem-pass">
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
              <span class="psw"><a href="forget.php">Forgot password?</a></span>
            </div>
            
            <button type="submit">Login</button>
          </div>
        </form>

      </div>
      <div class="reg">
        <p>Don’t have an account? <a href="signup.php">Register Now</a></p>
      </div>
    </div>
  </section>
</body>
</html>


<?php
    require('connection.php');
    session_start();

    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        
        // Check user is exist in the database
        $query = "SELECT * FROM `users` WHERE username = '$username'
                  AND password = '$password'";
        
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
          echo "<script>alert('wrong password or username.')</script>";
        }
    } 
       
?>