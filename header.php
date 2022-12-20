<?php
      include("connection.php");
      session_start();
      // $username = $_SESSION['username'];
 ?>
 
 <header id="main-header">
  <br>
   <!-- <h3><?php echo $username ; ?></h3> -->
    <div class="dash-nav">
        <ul>
            <li> <a href="dashboard.php">Home</a></li>
            <li> <a href="#">Your Courses</a></li>
            <li> <a href="all_courses.php">All Courses</a></li>
            <li> <a href="#">Contribute</a></li>
        </ul>
    </div>
    <div id="topbar" class="section-p1">

        <!-- search menu  -->

        <div class="searchbar">
          <form action="search_course.php" method="get">
            <img src="img/magnifying-glass.png" alt="" style="width: 30px;">
            <input type="text" id="query" name="query" placeholder="search for courses/topics...">
            <!-- <input type="submit" value="Submit"> -->
          </form>
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
                    <!-- <h4><?php echo $username ; ?></h4> -->

                    <li><a href="profile.php"> <img src="img/profile_pic.jpg" style="width: 35px;"> Profile</a></li>
                    <li><a href="dashboard.php"> <img src="img/home_pic.png" style="width: 35px;"> Home</a></li>
                    <li><a href="#"> <img src="img/courses.png" style="width: 35px;"> Courses</a></li>
                    <li><a href="#"> <img src="img/edit.png" style="width: 35px;"> Edit</a></li>
                    <li><a href="#"> <img src="img/setting.png" style="width: 35px;"> Setting</a></li>
                    <li><a href="logout.php"> <img src="img/logout.png" style="width: 35px;"> Log Out</a></li>
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
    width: 150px;
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