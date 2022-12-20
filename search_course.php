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
                <li> <a href="course_req.php">Course Request</a></li>
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
        <h3>Searched Courses</h3>
    </div>
    <section id="main" class="section-p1">

        <?php
        require('connection.php');
        $query = $_GET['query'];

        // Run the query
        $result = mysqli_query($con, "SELECT * FROM all_courses 
            WHERE course_name LIKE '%$query%' OR course_id LIKE '%$query%'");


        // check whether the query is executed or not
        if ($result == TRUE) {
            //count rows whether we have data in the database
            $count = mysqli_num_rows($result); //function to get all the rows in database

            //check the num of rows
            if (mysqli_num_rows($result) > 0) {
                //we have data in database
                while ($rows = mysqli_fetch_assoc($result)) {
                    $name = $rows['course_name'];
                    $instructor = $rows['instructor'];
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
                        <a style="text-decoration:none; 
                            font-family: 'Roboto';font-size: 26px;
                            font-weight: 500;line-height: 25px;
                            color: #FFFFFF;background: #222;padding: 10px;" href="course_overview.php" class="view-course">View Course</a>
                    </div>
                <?php
                }
            } else {
                ?>
                <div>
                    <img src="img/not_found404.png" width="90%" height="650px" alt="">
                </div>

                <div class="go_back">
                    <a href="dashboard.php">Go Back</a>
                </div>
        <?php
            }
        }
        ?>
    </section>
</body>

</html>


<!-- style for button -->
<style>
    .go_back{
        position: absolute;
        right: 230px;
        bottom: 30px;
        background: gray;
        padding: 25px 40px;
        text-align: center;
        border-radius: 10px;
        font-size: 25px;
    }

    .go_back:hover {
        background-color: red;
        /* cursor: pointer; */
    }
</style>