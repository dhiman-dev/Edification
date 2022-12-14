<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login As</title>
</head>

<body>
    <div class="wlcm">
        <h1>Welcome to <br> Edification!</h1>
    </div>

    <div class="login_as">
        <h1>login as</h1>
    </div>

    <div class="login-wrapper">
        <div class="login-container">
            <div class="login-row">
                <button id="admin-btn"> <a href="login-admin.php">Admin</button>
                <img src="img/admin2.png" alt="Admin"> <a href="admin_login.php">
            </div>
            <div class="login-row">
                <button id="instructor-btn"><a href="ins_login.php">Instructor</button>
                <img src="img/instrctr.png" alt="Instructor"> <a href="ins_login.php">
            </div>
            <div class="login-row">
                <button id="user-btn"> <a href="login.php">User</button>
                <img src="img/user2.jpg" alt="User"><a href="login.php">
            </div>
        </div>
    </div>
</body>

</html>

<!-- css goes here -->
<style>
    .login-wrapper {
        border: 5px solid grey;
        width: 700px;
        height: 500px;
        margin: 0 auto;
        transform: translateX(400px) translateY(290px);
        border-radius: 7%;
        background-color: #b6c08b;
        opacity: 0.6;
    }

    .login-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 500px;
        margin: 0 auto;
        transform: translateX(0px) translateY(60px);
    }

    .login-row {
        display: flex;
        align-items: center;
        margin-bottom: 40px;
    }

    button {
        border-radius: 7%;
        background-color: gray;
        border: 1px solid red;
        padding: 15px 0px;
        text-align: center;
        display: inline-block;
        font-size: 25px;
        cursor: pointer;
        width: 150px;
        height: 90px;
    }

    img {
        height: 100px;
        margin-left: 20px;
    }

    /* opacity of bg image */
    body::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0px;
        right: 0;
        bottom: 0;
        background-image: url('img/dashboard_backgroud.png');
        opacity: 0.4;
        z-index: -1;
        background-repeat: no-repeat;
    }

    .login_as {
        position: absolute;
        top: 80px;
        left: 1250px;
        transform: translateX(15px) translateY(60px);
        font-size: 40px;
        color: #b6c08b;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    .wlcm{
        position: absolute;
        top: 190px;
        left: 250px;
        transform: translateX(15px) translateY(60px);
        font-size: 60px;
        color: black;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

</style>