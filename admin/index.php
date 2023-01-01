<?php include('partials/menu.php'); ?>

<div class="content">
    <div class="wrapper">
        <h1>Dashboard</h1>
        <br>

        <?php
        if (isset($_SESSION['login'])) {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        ?>

        <div class="abc">
            <img src="..\img\user2.jpg" height="400px" width="350">
            <br<br><h1>User_List</h1>
            <br />
            <a href="user-list.php" class="btn-primary">View</a>
        </div> 

        <div class="ijk">
            <img src="..\img\admin2.png" height="400px" width="350">
            <h1>Admin_List</h1>
            <br />
            <a href="admin-list.php" class="btn-primary">View</a>
        </div>
        
        <div class="def">
            <img src="..\img\instrctr.png" height="500px" width="400">
            <h1>Instructor_List</h1>
            <br />
            <a href="instructor-list.php" class="btn-primary">View</a>
        </div>
        
        <div class="clearfix"></div>
    </div>
</div>


<!--content ends-->


<?php include('partials/footer.php'); ?>

<style>
    .abc{
        background-color: white;
        height: 50px;
        width: 90px;
        top: -10px;
        margin-left: 1in;
    }
    .def{
        background-color: white;
        height: 40px;
        width: 50px;
        margin-left: 6in;
    }
    .ijk{
        background-color: white;
        height: 40px;
        width: 50px;
        margin-left: 11in;

    }
</style>