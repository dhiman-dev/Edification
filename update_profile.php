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
  if (isset($_FILES['profile_pic'])) {

    // something needs to be done here

    // $imagename = $_FILES["imagename"]["name"];
    // move_uploaded_file($_FILES["imagename"]["tmp_name"], "media/" . $_FILES["imagename"]["name"]);

    // Create the UPDATE query
    $query = "UPDATE users SET full_name = '$full_name', username = '$username', mail = '$email', education = '$education', age = '$age', password = '$password', profile_pic = '$imagename' WHERE user_id = '$user_id'";
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
