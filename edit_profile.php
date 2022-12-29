<?php
include("connection.php");
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
            Name: <?php echo $full_name; ?><br>
            Username: <?php echo $username; ?><br>
            Mail: <?php echo $email; ?><br>
            Education: <?php echo $education; ?><br>
            Age: <?php echo $age; ?><br>
            <!-- Password: <?php echo $password; ?><br> -->
        </p>
    </div>

    <div class="inputField">
        <div>
            <form method="post" action=""> <br>
                <input type="text" id="name" name="name" style="font-size: 30px; height: 70px; width: 480px; margin-left: 250px; border-radius: 15px; padding: 20px;" value="<?php echo $full_name; ?>"><br><br>

                <input type="text" id="username" name="username" style="font-size: 30px; height: 70px; width: 480px; margin-left: 250px; border-radius: 15px; padding: 20px;" value="<?php echo $username; ?>"><br><br>

                <input type="email" id="email" name="email" style="font-size: 30px; height: 70px; width: 480px; margin-left: 250px; border-radius: 15px; padding: 20px;" value="<?php echo $email; ?>"><br><br>

                <input type="text" id="education" name="education" style="font-size: 30px; height: 70px; width: 480px; margin-left: 250px; border-radius: 15px; padding: 20px;" value="<?php echo $education; ?>"><br><br>

                <input type="number" id="age" name="age" style="font-size: 30px; height: 70px; width: 480px; margin-left: 250px; border-radius: 15px; padding: 20px;" value="<?php echo $age; ?>"><br><br>

                <input type="text" id="name" name="name" style="font-size: 30px; height: 70px; width: 480px; margin-left: 250px; border-radius: 15px; padding: 20px;" value="<?php echo $password; ?>">
                <br><br><br><br>
            </form>
        </div><br><br>
    </div>
    <br> <br>
    <button id="btnEdt" type="submit" value="">
        Update
    </button>
</body>

</html>


<style>
    button#btnEdt {
        height: 50px;
        width: 150px;
        font-size: 25px;
        color: black;
        border-radius: 12px;
        color: green;
        margin-left: 18in;
    }


    .userInfo {
        width: 600px;
        height: 650px;
        background-color: lightgray;
        border: 2px black;
        border-radius: 15px;
        font-family: Arial, sans-serif;
        font-size: 18px;
        margin-left: 2in;
        margin-top: 50px;
    }

    .inputField {
        width: 1000px;
        height: 650px;
        background-color: lightgray;
        border: 2px black;
        border-radius: 15px;
        font-family: Arial, sans-serif;
        font-size: 18px;
        margin-left: 10in;
        margin-top: -6.75in;
    }


    p {
        font-size: 30px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        margin-left: 35px;
    }

    label {
        display: inline-block;
        width: 120px;
        text-align: right;
        margin-right: 10px;
    }

    input {
        display: inline-block;
        width: 300px;
    }
</style>