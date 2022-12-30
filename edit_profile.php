<?php
include("header.php");
?>

<?php
// current user's username
$username = $_SESSION['username'];

// Fetch the user's information from the database
$result = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");

// Check whether the query was successful
if ($result == TRUE) {
    // Get the user's information
    $user = mysqli_fetch_assoc($result);
    $full_name = $user['full_name'];
    $username = $user['username'];
    $user_id = $user['user_id'];
    $email = $user['mail'];
    $education = $user['education'];
    $age = $user['age'];
    $password = $user['password'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Edit Profile</title>
</head>

<body>
    <div class="userInfo">
        <br> <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="img/user (1).png" alt="" height="350px"> <br> <br>
        <p>
            User ID: <?php echo $user_id; ?><br>
            Name: <?php echo $full_name; ?><br>
            Username: <?php echo $username; ?><br>
            Mail: <?php echo $email; ?><br>
            Education: <?php echo $education; ?><br>
            Age: <?php echo $age; ?><br>
            <!-- Password: <?php echo $password; ?><br> -->
        </p>
    </div>

    <div class="inputField">
        <form action="update_profile.php" method="post">
            <label for="profile_pic">Picture:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="file" id="profile_pic" name="profile_pic"> <br>

            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name"> <br>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username"> <br>

            <label for="email">Email:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="email" id="email" name="email"> <br>

            <label for="education">Education:</label>
            <input type="text" id="education" name="education"> <br>

            <label for="age">Age:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            <input type="number" id="age" name="age"> <br>

            <label for="password">Password:</label>
            <input type="text" id="password" name="password"> <br>

            <!-- editing -->
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

            <br><br>
            <button id="btnEdt" name="btnEdt" type="submit">Update</button>
        </form>
    </div>
    <!-- <button id="backBtn" type="submit" onclick="window.location='dashboard.php'">Back</button> -->
</body>

</html>












<style>
    .inputField {
        background-color: gray;
        border-radius: 20px;
        width: 50%;
        padding: 20px;
        margin-left: 45%;
        margin-top: -6.5in;
    }

    label {
        font-size: 35px;
    }

    input[type="text"] {
        margin: 10px 0;
        width: 550px;
        height: 70px;
        font-size: 35px;
        border-radius: 10px;
        border: 3px solid green;
        padding: 20px;
    }

    input[type="email"] {
        width: 550px;
        height: 70px;
        font-size: 35px;
        border-radius: 10px;
        border: 3px solid green;
        padding: 10px;
    }

    input[type="file"] {
        width: 440px;
        height: 70px;
        font-size: 35px;
        border-radius: 10px;
        border: 3px solid green;
        padding: 10px;
    }

    input[type="number"] {
        width: 550px;
        height: 70px;
        font-size: 35px;
        border-radius: 10px;
        border: 3px solid green;
        padding: 10px;
    }

    .userInfo {
        width: 600px;
        height: 650px;
        background-color: lightgray;
        border: 3px black;
        border-radius: 15px;
        font-family: Arial, sans-serif;
        font-size: 18px;
        margin-left: 1.7in;
        margin-top: 50px;
    }

    p {
        font-size: 30px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        margin-left: 35px;
    }

    button#btnEdt {
        height: 50px;
        width: 150px;
        font-size: 25px;
        color: black;
        border-radius: 12px;
        color: green;
        margin-left: 8in;
    }

    button#backBtn {
        height: 50px;
        width: 150px;
        font-size: 25px;
        color: black;
        border-radius: 12px;
        color: green;
        margin-left: 14in;
        margin-top: 20px;
        text-decoration: none;
    }
</style>