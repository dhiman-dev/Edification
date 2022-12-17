<?php
session_start();

include("connection.php");
$req = "select * from users ";
$re = mysqli_query($con, $req);
$list = mysqli_fetch_all($re, MYSQLI_ASSOC);
if (isset($_POST['req'])) {

  $request = $_POST['request'];

  $query = "insert into course_req (req) values ('$request')";

  mysqli_query($con, $query);


  die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edification</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300&family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header id="main-header">
    <div class="dash-nav">
      <ul>
        <li> <a href="dashboard.php">Home</a></li> <a href=""></a>
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

  <section class="section-p1">
    <br><br><br>
    <form class="form-style-4" action="" method="POST">
      <span>
        <h2>Enter the course name you are looking for</h2>
      </span> <br>
      <label for="field1">
        <input id="coursename" type="text" placeholder="enter course name" name="request" />
      </label>

      <br><br>

      <label for="field2">
        <span>
          <h2>Why do you want this course?</h2>
        </span><br>
        <textarea name="comment" rows="8" cols="50" placeholder="enter some reasons"></textarea>
      </label>

      <br> <br>
      &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
      <button> <a href="#" class="btn-primary">Submit</a></button>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
      <button> <a href="#" class="btn-primary">Cancel</a></button>

    </form>
  </section>

  <footer class="footer">
    <p>© 2022 Edification</p>
    <a href="" class="footer-btn">About Us</a>
    <a href="" class="footer-btn">Contact Us  <br> sadhvk <br></a>
    <a href="" class="footer-btn">FAQ</a>
  </footer>
</body>

</html>


<style>
  #coursename {
    font-size: 30px;
    border-radius: 10px;
    height: 50px;
    background-color: #e4d6ca;
  }

  textarea {
    font-size: 30px;
    border-radius: 10px;
    background-color: #e4d6ca;
  }

  .btn-primary {
    background-color: #e4d6ca;
    text-decoration: solid;
    color: red;
    font-weight: bold;
    font-size: 30px;
    padding: 12px 25px;
    text-align: center;
    border-radius: 25px;
    position: absolute;
  }

  /* opacity of bg image */
  body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 500px;
    right: 10px;
    bottom: 0;
    background-image: url('img/dashboard_backgroud.png');
    opacity: 0.25;
    z-index: -1;
    background-repeat: no-repeat;
  }
</style>