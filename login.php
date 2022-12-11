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
        <form action="login_action_page.php" method="post">
          
          <div class="container">
            <div class="place-holder">
              <div class="logo">
                <img src="img/person_avatar_account_user_icon_191606.png" alt="">
              </div>
              <div>
                <label for="uname"><b>Username</b></label><br>
                <!-- username -->
                <input type="text" placeholder="" name="username" required>
              </div>
              
            </div>
            <div class="place-holder">
              <div class="logo">
                <img src="img/key_security_icon_195229.png" alt="" class="key">
              </div>
              <div>
                <label for="psw"><b>Password</b></label><br>
                <!-- password -->
                <input type="password" placeholder="" name="password" required>
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