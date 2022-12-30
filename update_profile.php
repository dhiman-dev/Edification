<?php
session_start();
include("connection.php");

// Check if the form has been submitted
if (isset($_POST['btnEdt'])) {
  // retrieve the form data
  $user_id = $_POST['user_id'];
  $full_name = $_POST['full_name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $education = $_POST['education'];
  $age = $_POST['age'];
  $password = $_POST['password'];

  // Check if a new profile picture has been uploaded
  if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['size'] > 0) {
    // Get the file details
    $file_tmp_name = $_FILES['profile_pic']['tmp_name'];
    $file_name = $_FILES['profile_pic']['name'];
    $file_size = $_FILES['profile_pic']['size'];
    $file_type = $_FILES['profile_pic']['type'];

    // Read the contents of the file into a variable
    $fp = fopen($file_tmp_name, 'r');
    $content = fread($fp, filesize($file_tmp_name));
    $content = addslashes($content);
    fclose($fp);

    // Create the UPDATE query
    $query = "UPDATE users SET full_name = '$full_name', username = '$username', mail = '$email', education = '$education', age = '$age', password = '$password', profile_pic = '$content' WHERE user_id = '$user_id'";
  } else {
    // Create the UPDATE query without the profile picture
    $query = "UPDATE users SET full_name = '$full_name', username = '$username', mail = '$email', education = '$education', age = '$age', password = '$password' WHERE user_id = '$user_id'";
  }

  // execute the query
  $result = mysqli_query($con, $query);
  if ($result) {
    // the query was successful, redirect to the dashboard
    echo "<script>alert('updated successfully'); window.location.href = 'edit_profile.php';</script>"; 

  } else {
    // the query was unsuccessful, display an error message
    echo "Error updating profile: " . mysqli_error($con);
    echo "<script>alert('failed to update'); window.location.href = 'edit_profile.php';</script>"; 
  }
}
?>
