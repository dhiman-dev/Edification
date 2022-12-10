<?php
session_start();
if(isset($_POST['recovery'])){
    $email = $_POST['email'];
    $sql = "SELECT * FROM users where mail='$email'";
    $query = mysqli_query($connect, $sql);

    $row = mtsqli_fetch_array($query);
    $email_to = $row['mail'];
    $password = $row['password'];
    $body = "email recovery";
    $msg = "your password is $password";
    $header = "FROM: sammantasnim151@gmail.com";

    if(mail($email_to,$body,$msg,$header)){
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
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <div class="main" style="align-items: center; width: auto;" >
            <div class="img" style="padding-left: 10%; padding-top: 5%;">
                <img src="img/forget.png" alt="">
            </div>
            <div class="forget-box" style="padding-left: 70px;">
                <br>
                <br>
                <br>
                <br>
                <h1>Forget Password?</h1>
                <form action="" method="POST">
                    <h6 style="color: grey; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 20px;">Enter email adress to get recovery</h6>
                    <input type="email" name="email" style="height: 50px; width: 300px; font-size: 30px;">
                    <br>
                    <button name="recovery" class="btnz" type="button" style="background-color: blue; color: white; height: 55px; width: 80px; border-radius: 10px; font-size: 20px; border-color: blue; margin-left: 100px;margin-top: 50px;" value="submit">
                </form>
                <div class="back">
                    <a href="login.html">Back</a>
                </div>
            </div>
            
        </div>
    </div>
    
</body>
</html>
