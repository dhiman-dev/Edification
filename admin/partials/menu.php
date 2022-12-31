<?php
include('../config/constants.php');
include('login-check-admin.php');
?>

<html>
<head>
    <title>Admin - Home Page</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>

    <!--Menu starts-->
    <div class="dash-nav">
        <ul>
            <li><a href="index.php"> Home </a></li>
            <li><a href="manage-course.php"> Course</a></li>
            <li><a href="verification_course_req.php">Course Request</a></li>
            <li><a href="manage-admin.php"> Manage</a></li>
            <li><a href="manage-instructor.php">Instructor</a></li>
            <li><a href="admin-logout.php"> Logout</a></li>
        </ul>
    </div>
    <!--Menu ends-->

    <!-- search starts here -->

    <div class="searchbar">
        <form action="../search_course.php" method="get">
            <input type="text" id="query" name="query" placeholder="search for courses/topics...">
            <img src="..\img\magnifying-glass.png" alt="" style="width: 30px;">
            <!-- <input type="submit" value="Submit"> -->
        </form>
    </div>
    <!-- search ends here -->

</body>

<!-- css  -->
<style>
    .dash-nav {
        background: #D9D9D9;
        border-radius: 20px;
        align-self: center;
        margin-left: 10px;
        margin-top: 17px;
        width: 1150px;
    }

    .dash-nav ul {
        display: flex;
        justify-content: center;
        padding: 17px 10px;
    }

    .dash-nav ul li {
        list-style: none;
        margin-right: 50px;
    }

    .dash-nav ul li a {
        font-family: 'Quicksand';
        text-decoration: none;
        font-size: 30px;
        font-weight: 700;
        line-height: 50px;
        color: #222;
        padding: 10px;
    }

    /* search */
    .searchbar {
        padding: 10px 20px;
        margin-top: -90px;
        display: flex;
        justify-content: flex-end;
    }

    .searchbar input[type=text] {
        width: 750px;
        height: 83px;
        color: black;
        font-family: 'Poppins';
        font-size: 40px;
        text-align: center;
        align-items: center center;
        background: #D8BEBE;
        border-radius: 20px;
        padding-left: 10px;
        padding-bottom: 0;
    }

    /* .bgImg::before {
        background-repeat: no-repeat;
        background-size: cover;
        left: 100px;
    } */
</style>