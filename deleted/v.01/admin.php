<?php
session_start();
include("connection.php");
include("function.php");
// $user_data = check_login($con);

$user_name = & $user_data['user_name'];
$user_id = & $user_data['user_id'];
$query = "select * from course_req";
$result = mysqli_query($con, $query);
$requestss = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
  <header id="header">
    <div class="nav">
      <ul id="nav-bar">
        <li> <a href="courses.html">Courses</a></li>
        <li> <a href="contribute.html">Contribute</a></li>
        <li> <a href="faq.html">FAQ</a></li>
        <li> <a href="contact.html">Contact Us</a></li>
        <li> <a href="about.html">About Us</a></li>
        <li><button class="login-btn">Log In</button></li>
      </ul>
    </div>
  </header>

  <section class="section-p1">
    <div class="left-col">
      
      <div class="notice-box">
				<h1>Course requests: </h1>
				<?php foreach ($requestss as $reqq) { ?>
					<div class="row">
					<p style="background-color: white; color: black; text-transform: uppercase;"><?php echo $reqq['req']; ?></p><br>
					</div>
					<?php } ?>			
			</div>
    </div>
    <div class="right-col">
    </div>
  </section>
</body>
</html>
