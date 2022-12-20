<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Edification</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300&family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;700&family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/signup.css">
  </head>
<body>
  <section class="content">
    <div class="img-container">
      <img src="img/img3.png" alt="">
    </div>
    <div class="login-container">
      <div class="login-form">
        <!-- info goes to signup action page -->
        <form action="" method="post">
          
          <div class="container">
            <div class="place-holder">
              <div class="logo">
                <img src="img/person_avatar_account_user_icon_191606.png" alt="">
              </div>
              <div>
                <label for="fullname"><b>Full Name</b></label><br>
                <!-- fullname -->
                <input type="text" placeholder="enter your full name" name="fullname" style="font-size: 17px;" required>
              </div>
              
            </div>
            <div class="place-holder">
              <div class="logo">
                <img src="img/person_avatar_account_user_icon_191606.png" alt="">
              </div>
              <div>
                <label for="username"><b>Username</b></label><br>
                <!-- username -->
                <input type="text" placeholder="enter your user-name" name="username" style="font-size: 17px;" required>
              </div>
              
            </div>
            <div class="place-holder">
              <div class="logo">
                <img src="img/key_security_icon_195229.png" alt="" class="key">
              </div>
              <div>
                <label for="password"><b>Password</b></label><br>
                <!-- password -->
                <input type="password" placeholder="enter your password" name="password" style="font-size: 17px;" required>
              </div>
            </div>
            <div class="place-holder">
              <div class="logo">
                <img src="img/1904660-email-envelope-letter-mail-message-post-send_122510.png" alt="">
              </div>
              <div>
                <label for="mail"><b>Email</b></label><br>
                <!-- mail -->
                <input type="email" placeholder="example@mail.com" name="mail" style="font-size: 17px;" required>
              </div>
              
            </div>
            <div class="place-holder">
              <div class="logo">
                <img src="img/age_theapplication_3019.png" alt="">
              </div>
              <div>
                <label for="uage"><b>Age</b></label><br>
                <!-- age -->
                <input type="text" placeholder="enter your age" name="age" style="font-size: 17px;" required>
              </div>
              
            </div>
            <div class="place-holder">
              <div class="logo">
                <img src="img/3586376-book-education-learning-teacher_107951.png" alt="">
              </div>
              <div>
                <label for="uedu"><b>Education</b></label><br>
                <!-- education -->
                <input type="text" placeholder="enter your educational qualification" name="education" style="font-size: 17px;" required>
              </div>
            </div>
            <button type="submit">Creat Account</button>
          </div>
        </form>

      </div>
    </div>
  </section>
</body>
</html>


<?php
    require('connection.php');
    
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $fullname = stripslashes($_REQUEST['fullname']);
        //escapes special characters in a string
        $fullname = mysqli_real_escape_string($con, $fullname);

        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        
        $mail = stripslashes($_REQUEST['mail']);
        $mail = mysqli_real_escape_string($con, $mail);
        
        $age = stripslashes($_REQUEST['age']);
        $age = mysqli_real_escape_string($con, $age);

        $education = stripslashes($_REQUEST['education']);
        $education = mysqli_real_escape_string($con, $education);

        $query = "INSERT INTO `users` (`full_name`, `username`, `password`, `mail`, `age`, `education`) 
                  VALUES ('$fullname', '$username', '$password', '$mail', '$age', '$education')";

        $result = mysqli_query($con, $query);
        
        if ($result) {
          echo "<script>alert('You are registered successfully.')</script>";
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here <a href='login_as.php'>Login</a></p>
                  </div>";
        } 
        else {
          echo "<script>alert('Required fields are missing.')</script>";
        }
    } 
?>