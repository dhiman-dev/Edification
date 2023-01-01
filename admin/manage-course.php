<?php include('partials/menu.php'); ?>

<!--content starts-->
<div class="content">
        <div class="wrapper">
                <h1>Course List</h1>
                <?php
                if (isset($_SESSION['add'])) {
                        echo $_SESSION['add']; //displaying session message
                        unset($_SESSION['add']); //removing session message
                }
                ?>
                <br> <br>

                <!-- button to add course -->
                <a href="add-course.php" class="btn-primary">Add Course</a>
                <br><br><br>

                <table class="table">
                        <tr>
                                <th>S.N.</th>
                                <th>Course Name</th>
                                <th>Instructor</th>
                                <th>Enrolled Student</th>
                                <th>Actions</th>
                        </tr>

                        <!-- display course -->
                        <?php
                        $sql = "SELECT * FROM all_courses where status=1";
                        //execute the querry
                        $res = mysqli_query($conn, $sql) or die(mysqli_error());

                        // check whether the query is executed or not
                        if ($res == TRUE) {
                                //count rows whether we have data in the database
                                $count = mysqli_num_rows($res); //function to get all the rows in database

                                $serial_number = 1;

                                //check the num of rows
                                if ($count > 0) {
                                        //we have data in database
                                        while ($rows = mysqli_fetch_assoc($res)) {
                                                $id = $rows['id'];
                                                $name = $rows['course_name'];
                                                $email = $rows['admin_mail'];
                                                $instructor = $rows['instructor'];
                                                //$description=$rows['p_description'];

                        ?>
                                                <tr>
                                                        <td><?php echo $serial_number++; ?></td>
                                                        <td><?php echo $name; ?></td>
                                                        <td><?php echo $instructor; ?></td>
                                                        <td>12</td>
                                                        <td>
                                                                <a href="#" class="btn-secondary">Update </a>
                                                                <a href="<?php echo SITEURL; ?>admin/closed-course.php?id=<?php echo $id; ?>" class="btn-danger">Closed</a>
                                                        </td>
                                                </tr>

                        <?php
                                        }
                                } else {
                                        //we do not have data in database
                                }
                        }
                        ?>


                </table>

                <div class="clearfix"></div>
        </div>
</div>
<!--content ends-->

<?php include('partials/footer.php'); ?>

<style>
        .btn-primary {
                background-color: #6a747c;
                padding: 1%;
                text-decoration: none;
                color: white;
                font-weight: bold;
                border-radius: 15px;
        }

        tr {
                background-color: #6a747c;
                color: white;
                height: 50px;
                width: 40px;
        }

        .content {
                margin-top: -7px;
                height: 400px;
                width: 300 px;
                border-radius: 15px;
        }

</style>