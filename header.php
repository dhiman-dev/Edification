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