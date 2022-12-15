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

        <div id="myDropdown" class="dropdown-content">
          <a href="def.php">Profile</a>
          <a href="abd.php">Home</a>

          <a href="logout.php">Log Out</a>
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

  <footer class="footer">
    <p>© 2022 Edification</p>
    <a href="" class="footer-btn">About Us</a>
    <a href="" class="footer-btn">Contact Us</a>
    <a href="" class="footer-btn">FAQ</a>
  </footer>
</body>

</html>

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
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown a:hover {
    background-color: #ddd;
  }

  .show {
    display: block;
  }
</style>