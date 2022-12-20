<?php include('config/constants.php'); ?>

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
    &nbsp;&nbsp;&nbsp;&nbsp;
    <div class="img-container">
    <br><br>
      <img src="img/instructor_login.png" alt="">
    </div>
    <div class="login-container">
      <div class="title">
        <h2>Welcome to<br><span style="color: #6358DC; font-family: 'Poppins'; font-weight: 700; font-size: 48px;">Edification!</span></h2>
      </div>

      <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }


                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
        ?>

        <br><br>


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
            </div>

            <button type="submit" name="submit">Login</button>
            <!-- <input type="submit" name="submit" value="Login" class="btn-primary"><br><br> -->
          </div>
        </form>
        <br><br><br>
        <h4 class="text-center">Created By - <a href="#">The Differentiate Trio</a></h4>
  </section>
</body>

</html>

<?php 

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        //Process for Login
        //1. Get the Data from Login form
        // $username = $_POST['username'];
        // $password = md5($_POST['password']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        
        $raw_password = md5($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password' AND status In (2,1) ";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //User AVailable and Login Success
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it

            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'admin/');
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['login'] = "<div style='color: #ff4757;  text-align: center;' class='error text-center'>Username or Password did not match or you are not in pannel now!!.</div>";
            //REdirect to HOme Page/Dashboard
            header('location:'.SITEURL.'login-admin.php');
        }


    }

?>

