<?php
    require('connection.php');
    
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $fullname = stripslashes($_REQUEST['fullname']);
        //escapes special characters in a string
        $fullname = mysqli_real_escape_string($con, $fullname);

        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        
        $mail    = stripslashes($_REQUEST['mail']);
        $mail    = mysqli_real_escape_string($con, $mail);
        
        $age    = stripslashes($_REQUEST['age']);
        $age    = mysqli_real_escape_string($con, $age);

        $education    = stripslashes($_REQUEST['education']);
        $education    = mysqli_real_escape_string($con, $education);

        $query    = "INSERT INTO `users` (`full_name`, `username`, `password`, `mail`, `age`, `education`) 
                    VALUES ('$fullname', '$username', '$password', '$mail', '$age', '$education')";

        $result   = mysqli_query($con, $query);
        
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } 
        else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } 
?>