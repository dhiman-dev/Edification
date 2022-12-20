<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300&family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style_profile.css">
</head>
<body>
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
      <div class="profile">
        <button class="drpdwn-btn">
          <img src="img/person_avatar_account_user_icon_191606.png" alt="" class="pro-icon" style="width: 50px;"> 
          <img src="img/down.png" alt="" class="dwn-icon">
        </button>
      </div>
    </div>
  </header>
  <section class="container section-p1">
    <div class="flex">
      <div class="sub-container-user">
        <div class="user-info">
          <img src="img/user (1).png" alt="" class="user-img">
          <p>Name : </p>
          <p>Email : </p>
          <p>Education : </p>
        </div>
        <div class="user-status">
          <h3>My Status</h3>
          <div><img src="img/right-arrow.png" alt="" class="arrow"><p>1 Completed</p></div>
          <div><img src="img/right-arrow.png" alt="" class="arrow"><p>2 in Progress</p></div>
          <div><img src="img/right-arrow.png" alt="" class="arrow"><p>0 Contributed</p></div>
        </div>
      </div>
      <div class="sub-container">
        <h3>Taken Courses :</h3>
        <div><img src="img/right-arrow.png" alt="" class="arrow"><P>Algorithm 1</P></div>
        <div><img src="img/right-arrow.png" alt="" class="arrow"><P>System Analysis & Design</P></div>
      </div>
      <div class="sub-container">
        <h3>Wishlist :</h3>
      </div>
      <div class="sub-container">
        <h3>Contribution :</h3>
        <div><img src="img/right-arrow.png" alt="" class="arrow"><P>Algorithm 1</P></div>
        <div><img src="img/right-arrow.png" alt="" class="arrow"><P>System Analysis & Design</P></div>
      </div>
    </div>
    <div class="pro-back-btn section-p1">
      <a href="dashboard.php">Back</a>
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