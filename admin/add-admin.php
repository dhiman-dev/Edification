<?php  include('partials/menu.php'); ?>

<div class="content">
    <div class="wrapper">
              <h1>Add Admin</h1>
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
                        <td>First Name:</td>
                        <td>
                            <input type="text" name="first_name" placeholder="Enter first name">
                        </td> 
                    </tr>

                    <tr>
                        <td>Last Name:</td>
                        <td>
                            <input type="text" name="last_name" placeholder="Enter last name">
                        </td> 
                    </tr>



                    <tr>
                        <td>Username:</td> 
                        <td> 
                            <input type="text" name="username" placeholder="Enter username">
                        </td>
                    </tr>

                    <tr>
                        <td>E-mail:</td> 
                        <td> 
                            <input type="text" name="email" placeholder="Enter email">
                        </td>
                    </tr>


                    <tr>
                        <td>Password:</td> 
                        <td> 
                            <input type="password" name="password" placeholder="Enter password">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
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
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']); //password encryption with md5

    //2.sql query to save the data into database
    $sql = "INSERT INTO admin SET

    First_name = '$first_name',
    last_name = '$last_name',
    username = '$username',
    email ='$email',
    password ='$password',
    status ='1' ";

    //3.execute query and save data in database
    $res = mysqli_query($conn, $sql) or die(mysqli_error());

    //4. check the (query is execute) data is inserted or not and display appropiate meesage
    if($res==TRUE)
    {
        echo "hello";
        //create a session variable to display the message
        $_SESSION['add'] = "Admin added successfully!";
        //Redirect page to manage admin
        header("location:".SITEURL.'admin/manage-admin.php');
    }
    else
    {
        echo "hello9";
        //create a session variable to display the message
        $_SESSION['add'] = "Oops! Failed your request.";
        //Redirect page to add admin
        header("location:".SITEURL.'admin/add-admin.php');
    }
  }
  

?>