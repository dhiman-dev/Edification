<?php
require('connection.php');

// get the email and username from the form
$mail = $_POST['email'];
$username = $_POST['username'];

// Run the query
$result = mysqli_query($con, "SELECT * FROM users 
            WHERE username = '$username' AND mail = '$mail'");

// check whether the query is executed or not
if ($result == TRUE) {
  //count rows whether we have data in the database
  $count = mysqli_num_rows($result);

  if ($count > 0) {
    while ($rows = mysqli_fetch_assoc($result)) {
      $full_name = $rows['full_name'];
      $username = $rows['username'];
      $mail = $rows['mail'];
      // $password = md5($rows['password']);
      $password = $rows['password'];
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/forget_style.css">
  <title>Document</title>
</head>

<body>
  <div>
    <div class="main" style="align-items: center; width: auto;">
      <div class="img" style="padding-left: 10%; padding-top: 0%;">
        <img src="img/catch.png" alt="">
      </div>

      <!-- if user exists -->
      <?php
      if ($count > 0) { ?>
        <div class="recover">
          <h1>Here's your information</h1>
          <p>
          <h2>
            full name: <?php echo $full_name; ?> <br>
            username: <?php echo $username; ?> <br>
            mail: <?php echo $mail; ?> <br>
            password: <?php echo $password; ?> <br>
          </h2>
          </p>
        </div>

        <br>
        <!-- back button -->
        <button style="background-color: white; color: black; 
              height: 50px; width: 140px; border-radius: 10px; 
              font-size: 20px; border-color: blue; 
              margin-left: -80px; margin-top: 550px;">
          <a href="login.php"> Login Now </button>

          <!-- if user doesnt exist -->
      <?php } else { ?>
        <div class="recover">
        <h1>
          it seems, we do not have <br>
          any user with that username and mail <br>
          that you have provided! <br>
          in that case, check is there's any spelling error <br>
          in your username and mail. <br> <br>
          -------------------------------- admin
        </h1>
        </div>

        <br>
        <!-- back button -->
        <button style="background-color: white; color: black; 
              height: 45px; width: 100px; border-radius: 10px; 
              font-size: 20px; border-color: blue; 
              margin-left: -80px; margin-top: 550px;">
          <a href="forget.php"> recover_psw </button>
      <?php } ?>
    </div>
  </div>
  </div>
</body>
</html>

<style>
  .recover {
    background-color: #c8c1c1;
    width: 35%;
    height: 25%;
    border: 10px gold;
    padding: 50px;
    border-radius: 50px;
  }

  .recover h2 {
    font-size: 30px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: black;
    margin-bottom: 20px;
  }

  h1 {
    font-size: 30px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color: black;
    margin-bottom: 20px;
    text-align: center;
  }
</style>