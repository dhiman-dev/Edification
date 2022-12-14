<?php
session_start();

include("connection.php");
$req = "select * from users ";
$re = mysqli_query($con, $req);
$list = mysqli_fetch_all($re,MYSQLI_ASSOC);
if(isset($_POST['req'])){
	
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  <form class="form-style-4" action="" method="POST" >
		<h2>Enter the course name you are wanting for</h2>
        <label for="field1">
            <span>Enter name</span><input type="text" name="request"  />
            <span> </span><input type="submit" value="Post" name="req" />
        </label>
	</form>
  </section>
</body>
</html>
