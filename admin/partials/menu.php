<?php 

    include('../config/constants.php');
    include('login-check-admin.php');
?>

<html>
    <head>
        <title>Admin - Home Page</title>
        <link rel="stylesheet" href="../css/admin.css"> 
    </head>

    <body>
        <!--Menu starts-->
        <div class="menu">
        <div class="wrapper">
              <ul>
              <li><a href="index.php"> Home </a></li>
              <li><a href="manage-course.php"> Course</a></li>
              <!-- <li><a href="donation-details.php"> Donation</a></li> -->
              <li><a href="verification.php">Course Request</a></li>
              <li><a href="manage-admin.php"> Manage</a></li>
              <!-- <li><a href="manage-volunteer-admin.php"> Volunteer</a></li> -->
              <li><a href="admin-logout.php"> Logout</a></li>
              </ul>
        </div>
        </div>
        <!--Menu ends-->
        