<?php
include("connection.php");
session_start();
$username = $_SESSION['username'];
?>

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
          <!-- logged in as ... -->
          <h3>&nbsp;&nbsp;&nbsp;<?php echo "$username"; ?></h3>

          <li><a href="profile.php"> &nbsp;&nbsp;&nbsp;&nbsp; <img src="img/profile_pic.jpg" style="width: 35px;"> &nbsp;&nbsp;&nbsp;&nbsp; Profile</a></li>
          <li><a href="home.php"> &nbsp;&nbsp;&nbsp;&nbsp; <img src="img/home_pic.png" style="width: 35px;"> &nbsp;&nbsp;&nbsp;&nbsp; Home</a></li>
          <li><a href="courses.php"> &nbsp;&nbsp;&nbsp;&nbsp; <img src="img/courses.png" style="width: 35px;"> &nbsp;&nbsp;&nbsp;&nbsp; Courses</a></li>
          <li><a href="edit.php"> &nbsp;&nbsp;&nbsp;&nbsp; <img src="img/edit.png" style="width: 35px;"> &nbsp;&nbsp;&nbsp;&nbsp; Edit</a></li>
          <li><a href="setting.php"> &nbsp;&nbsp;&nbsp;&nbsp; <img src="img/setting.png" style="width: 35px;"> &nbsp;&nbsp;&nbsp;&nbsp; Setting</a></li>
          <li><a href="login_as.php"> &nbsp;&nbsp;&nbsp;&nbsp; <img src="img/logout.png" style="width: 35px;"> &nbsp;&nbsp;&nbsp;&nbsp; Log Out</a></li>
        </ul>
      </div>

      <!-- src to js code for profile dropdown menu -->
      <script src="js_code/profile_dropdown.js"> </script>

    </div>
    <!-- profile dropdown menu ends-->

  </div>
</header>


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
    height: 520px;
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