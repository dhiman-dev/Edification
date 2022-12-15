<?php
session_start();
if(isset($_POST['recovery'])){
    $email = $_POST['mail'];
    $sql = "SELECT * FROM users WHERE mail ='$mail'";
    $query = mysqli_query($connect, $sql);

    $row = mysqli_fetch_array($query);
    $email_to = $row['mail'];
    $password = $row['password'];
    $body = "email recovery";
    $msg = "your password is $password";
    $header = "FROM: sammantasnim151@gmail.com";

    if(mail($email_to, $body, $msg, $header)){
        echo "<script>alert('email successfully send')</script>";
    }
    else{
        echo "<script>alert('Failed to send email')</script>";
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
        <div class="main" style="align-items: center; width: auto;" >
            <div class="img" style="padding-left: 10%; padding-top: 5%;">
                <img src="img/forget.png" alt="">
            </div>
            <div class="forget-box" style="padding-left: 90px;">
                <!-- <br>
                <br>
                <br>
                <br> -->
                <h1>Forgot Password?</h1>
                <form action="#" method="POST">
                    <!-- username feild -->
                    <h6 style="color: grey; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 20px;">Enter username & email address to get recovery</h6>
                    <input type="text" placeholder="enter your username" name="username" 
                    style="height: 40px; width: 400px; font-size: 20px; border-radius: 10px;">
                    <br>

                    <!-- mail feild -->
                    <h6 style="color: grey; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 20px;"></h6>
                    <input type="email" placeholder="example@mail.com" name="mail" 
                    style="height: 40px; width: 400px; font-size: 20px; border-radius: 10px;">
                    <br>

                    <button name="recovery" class="btnz" type="button" 
                        style="background-color: white; color: white; 
                        height: 50px; width: 100px; border-radius: 10px; 
                        font-size: 20px; border-color: blue; margin-left: 100px;
                        margin-top: 50px;" 
                        value="submit"> <a href="login.php">submit</a> 
                    </button>
                </form>
                <div class="back" style="height: 40px; width: 100px;">
                    <a href="login.php">Back</a>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>