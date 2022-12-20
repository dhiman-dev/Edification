<?php  include('partials/menu.php'); ?>

<div class="content">
    <div class="wrapper">
              <h1>Add Course</h1>
              <br/> <br/> 

              <?php 
                  if(isset($_SESSION['add']))
                  {
                        echo $_SESSION['add']; //displaying session message
                        unset($_SESSION['add']); //removing session message
                  }
              ?>
              
              <form action="" method="POST">

                <table class="table-30">


                    <tr>
                        <td colspan="1"><br>Course Name:<br></td>
                        <td>
                        <br>
                            <input type="text" name="Course_Name" placeholder="Enter course name">
                            
                            <br>
                        </td> 
                    </tr>

                    <tr>
                        <td>Instructor:</td> 
                        <td> 
                        <br>
                            <input type="text" name="instructor" placeholder="Enter instructor name">
                        <br><br>
                        </td>
                    </tr>

                    <tr>
                        <td>Course Id:</td> 
                        <td> 
                        <br>
                            <input type="text" name="course_id" placeholder="Enter course id">
                        <br><br>
                        </td>
                    </tr>

                    <tr>
                        <td><br>Created By:</td> 
                        <td> 
                        <br>
                            <input type="text" name="username" placeholder="Enter your username">
                        <br>
                        </td>
                    </tr>

                    <tr>
                        <td>E-mail:</td> 
                        <td> 
                        <br>
                            <input type="text" name="mail" placeholder="Enter your mail">
                        <br><br>
                        </td>
                    </tr>

                    <tr>
                        <td><br>Password:</td> 
                        <td> 
                        <br>
                            <input type="password" name="password" placeholder="Enter password">
                        <br>
                        </td>
                    </tr>



                    <tr>
                        <td colspan="2">
                        <br>
                            <input type="submit" name="submit" value="Add course" class="btn-secondary">
                        <br>
                        </td>
                    </tr>
                </table>

              </form>
    </div>
</div>


<?php  include('partials/footer.php'); ?>

<?php 
error_reporting(0);
  //process the value from form and save it to database

  //check whether the submit button is clicked or not

  if(isset($_POST['submit']))
  {
    //button clicked
    //echo "Button Clicked";

    //1.get the data from form
    //$image=$_POST['pic'];
    $name = $_POST['Course_Name'];
    $instructor = $_POST['instructor'];
    $c_id = $_POST['course_id'];
    //$description=trim($_POST['comment']);
    $username = $_POST['username'];
    $email = $_POST['mail'];
    //$pass=$_POST['password'];

    //2.sql query to save the data into database
    $sql1 = "INSERT INTO all_courses SET

    course_name = '$name',
    instructor = '$instructor',
    course_id = '$c_id',
    admin_mail ='$email',
    created_by = '$username' ,
    status=1";

    //3.execute query and save data in database
    $res = mysqli_query($conn, $sql1) or die(mysqli_error());

    //4. check the (query is execute) data is inserted or not and display appropiate meesage
    if($res==TRUE)
    {
        //create a session variable to display the message
        $_SESSION['add'] = "Course added successfully!";
        //Redirect page to create project
        header("location:".SITEURL.'admin/manage-course.php');
    }
    else
    {
        //create a session variable to display the message
        $_SESSION['add'] = "Oops! Failed your request.";
        //Redirect page to add project
        header("location:".SITEURL.'admin/add-course.php');
    }
  }

?>