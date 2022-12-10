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
        <form action="signup_action_page.php" method="post">
          
          <div class="container">
            <div class="place-holder">
              <div class="logo">
                <img src="img/person_avatar_account_user_icon_191606.png" alt="">
              </div>
              <div>
                <label for="fullname"><b>Full Name</b></label><br>
                <!-- fullname -->
                <input type="text" placeholder="enter your full name" name="fullname" required>
              </div>
              
            </div>
            <div class="place-holder">
              <div class="logo">
                <img src="img/person_avatar_account_user_icon_191606.png" alt="">
              </div>
              <div>
                <label for="username"><b>Username</b></label><br>
                <!-- username -->
                <input type="text" placeholder="enter your user-name" name="username" required>
              </div>
              
            </div>
            <div class="place-holder">
              <div class="logo">
                <img src="img/key_security_icon_195229.png" alt="" class="key">
              </div>
              <div>
                <label for="password"><b>Password</b></label><br>
                <!-- password -->
                <input type="password" placeholder="enter your password" name="password" required>
              </div>
            </div>
            <div class="place-holder">
              <div class="logo">
                <img src="img/1904660-email-envelope-letter-mail-message-post-send_122510.png" alt="">
              </div>
              <div>
                <label for="mail"><b>Email</b></label><br>
                <!-- mail -->
                <input type="email" placeholder="example@mail.com" name="mail" required>
              </div>
              
            </div>
            <div class="place-holder">
              <div class="logo">
                <img src="img/age_theapplication_3019.png" alt="">
              </div>
              <div>
                <label for="uage"><b>Age</b></label><br>
                <!-- age -->
                <input type="text" placeholder="enter your age" name="age" required>
              </div>
              
            </div>
            <div class="place-holder">
              <div class="logo">
                <img src="img/3586376-book-education-learning-teacher_107951.png" alt="">
              </div>
              <div>
                <label for="uedu"><b>Education</b></label><br>
                <!-- education -->
                <input type="text" placeholder="enter your educational qualification" name="education" required>
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