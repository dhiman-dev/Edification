<?php
  include("footer.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Courses</title>
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

  <div class="tab-bar section-p1">
    <h3>All Courses</h3>
  </div>
  <section id="main" class="section-p1">

  <?php
         require('connection.php');
         $sql = "SELECT course_name,instructor FROM all_courses where status=1";
         //execute the querry
         $res = mysqli_query($con , $sql) or die(mysqli_error());

         // check whether the query is executed or not
         if($res==TRUE)
         {
            //count rows whether we have data in the database
            $count= mysqli_num_rows($res); //function to get all the rows in database

            //check the num of rows
            if($count>0)
            {
                //we have data in database
                while($rows=mysqli_fetch_assoc($res))
                {
                    $name=$rows['course_name'];
                    $instructor=$rows['instructor'];
                    ?>
                      <div class="course-details">
                        <div class="thum">
                            <img src="img/monitor.png" alt="">
                        </div>
                        <div class="title">
                            <h4><?php echo $name; ?></h4>
                            <p>by <?php echo $instructor; ?></p>
                        </div>
                        <div class="icon-set">
                            <img src="img/clock.png" alt="">
                            <p>3h 30min</p>
                        </div>
                        <div class="icon-set">
                            <img src="img/people.png" alt="">
                            <p>12</p>
                        </div>
                        <button class="view-course">View Course</button>
                      </div>
                    <?php
                }
            }
            else
            {
              //we do not have data in database
            }
         }
         ?>
  </section>
</body>
</html>
