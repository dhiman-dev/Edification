<?php
include("header.php");
include("footer.php");
?>

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
            opacity: 100;
        }
    </style>

    <!-- header file alone with dropdown profile is in header file -->

    <section class="section-p1 dashboard">
        <div class="greet">
            <p>
            <h1>
                Edification is an E-Learning platform dedicated to CSE students.
                Here, you can learn from basic to depth at totally free of costs.
                You can also share and discuss your problem with others
            </h1>
            </p>
        </div>
    </section>

    <style>
        .button {
            position: relative;
            bottom: 10px;
            left: 1810px;
            right: 20px;
            padding: 30;
        }
    </style>

    <button class="button"> <a href="dashboard.php"> Back </a></button>

</body>

</html>