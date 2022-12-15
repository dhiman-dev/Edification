<?php
include("footer.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300&family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- for background picture -->
  <style>
    body {
      background-image: url('img/dashboard_backgroud.png');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      opacity: 10;
    }
  </style>
  <!-- for background picture -->

  <header id="main-header">
    <div class="dash-nav">
      <ul>
        <li> <a href="dashboard.php">Home</a></li>
        <li> <a href="#">Your Courses</a></li>
        <li> <a href="all_courses.php">All Courses</a></li>
        <li> <a href="#">Contribute</a></li>
      </ul>
    </div>
    <div id="topbar" class="section-p1">
      <div class="searchbar">
        <input type="text" placeholder="search for courses/topics...">
        <img src="img/magnifying-glass.png" alt="" style="width: 30px;">
      </div>


      <!-- profile dropdown menu starts-->
      <div class="profile">

        <button onclick="myFunction()" class="drpdwn-btn">
          <img src="img/person_avatar_account_user_icon_191606.png" alt="" class="pro-icon" style="width: 50px;">
          <img src="img/down.png" alt="" class="dwn-icon">
        </button>

        <!-- dropdown menu goes here -->
        <div id="myDropdown" class="dropdown-content">
          <ul>
            <li><a href="profile.php"> <img src="img/profile.jpg" style="width: 35px;"> Profile</a></li>
            <li><a href="home.php"> <img src="img/home.png" style="width: 35px;"> Home</a></li>
            <li><a href="courses.php"> <img src="img/course.png" style="width: 35px;"> Courses</a></li>
            <li><a href="edit.php"> <img src="img/edit.png" style="width: 35px;"> Edit</a></li>
            <li><a href="setting.php"> <img src="img/setting.png" style="width: 35px;"> Setting</a></li>
            <li><a href="logout.php"> <img src="img/logout.png" style="width: 35px;"> Log Out</a></li>
          </ul>
        </div>

        <!-- src to js code for profile dropdown menu -->
        <script src="js_code/profile_dropdown.js"> </script>

      </div>
      <!-- profile dropdown menu ends-->

    </div>
  </header>

  <section class="section-p1 dashboard">
    <div class="greet">
      <h1>Hello there!</h1>
      <h3>
        <p>It's good to see you</p>
      </h3>
    </div>
  </section>
</body>
</html>

<!-- css for profile dropdown menu -->
<style>
  .dropbtn {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }

  .dropbtn:hover,
  .dropbtn:focus {
    background-color: #2980B9;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #D8BEBE;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    border-radius: 10px; 
    right: 10px;
    width: 200px;
    height: 470px;
  }

  .dropdown-content a {
    color: black;
    padding: 20px 16px;
    text-decoration: double;
    display: table;
  }

  .show {
    display: block;
  }
</style>