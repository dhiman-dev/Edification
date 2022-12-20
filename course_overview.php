<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/course_overview.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300&family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
  <title>Course Overview</title>
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

  <section class="container section-p1 course-ocerview-section">
    <div class="sidebar">
      <h2>Topics:</h2>
      <div class="topic-lists">
        <div>
          <img src="img/right-arrow.png" alt="" class="arrow">
          <h4>Overview</h4>
        </div>
        <div>
          <img src="img/right-arrow.png" alt="" class="arrow">
          <h4>Table of Content</h4>
        </div>
        <div>
          <img src="img/right-arrow.png" alt="" class="arrow">
          <h4>Topic-name 1</h4>
        </div>
        <div>
          <img src="img/right-arrow.png" alt="" class="arrow">
          <h4>Topic-name 2</h4>
        </div>
      </div>
    </div>
    <div class="main-content">
      <div>
        <div class="course-view">
          <div class="course-overviwe-flex">
            <div class="overview-btn">
              <a href="#">Overview</a>
            </div>
            <div class="overview-main">
              <div class="overview-main-text">
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
              </div>
            </div>
          </div>
          <a href="#" class="left-icon"><img src="img/left.png" alt=""></a>
          <a href="#" class="right-icon"><img src="img/right.png" alt=""></a>
        </div>
      </div>
      <div class="buttons-section">
        <div class="buttons">
          <div>
            <a href="#">
              <img src="img/notes (1).png" alt="">
              <p>Notes/handout</p>
            </a> 
          </div>
          <div>
            <a href="#">
              <img src="img/hologram (1).png" alt="">
              <p>Simulation</p>
            </a> 
          </div>
        </div>
        
      </div>
    </div>
    <div class="pro-back-btn">
      <a href="#">Back</a>
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