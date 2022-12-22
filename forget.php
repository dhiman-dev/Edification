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
                <img src="img/forget.png" alt="">
            </div>
            <div class="forget-box" style="padding-left: 70px;">
                <h1>Forgot Password?</h1>
                <form action="recover_psw.php" method="POST">
                    <!-- username feild -->
                    <h6 style="color: grey; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 20px;">Enter username & email address to get recovery</h6>
                    <input type="text" placeholder="enter your username" name="username" style="height: 40px; width: 400px; font-size: 20px; border-radius: 10px;" required>
                    <br>

                    <!-- mail feild -->
                    <h6 style="color: grey; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 20px;"></h6>
                    <input type="email" placeholder="example@mail.com" name="email" style="height: 40px; width: 400px; font-size: 20px; border-radius: 10px;" required>
                    <br>

                    <!-- submit button -->
                    <input type="submit" value="submit" id="query" name="query" style="background-color: white; color: black; 
                    height: 45px; width: 100px; border-radius: 10px; 
                    font-size: 20px; border-color: blue; margin-left: 
                    55px;margin-top: 50px;">

                    <!-- back button -->
                    <button style="background-color: white; color: black; 
                    height: 45px; width: 100px; border-radius: 10px; 
                    font-size: 20px; border-color: blue; margin-left: 
                    90px;margin-top: 50px;"> <a href="login.php"> Back </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>