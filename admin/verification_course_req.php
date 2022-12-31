<?php  include('partials/menu.php'); ?>


        <!--content starts-->
        <div class="content">
        <div class="wrapper">
              <h1>Verify Course Request</h1>

              <table class="table">
                  <tr>
                        <th>S.N.</th>
                        <th>ID</th>
                        <th>Course Name</th>
                        <!-- <th>Username</th> -->
                        <th>Reason</th>
                        <th>Actions</th>
                  </tr>

                  <!-- display user's request -->
                  <?php 
                        $sql = "SELECT * FROM request_course where current_status =0";
                        //execute the querry
                        $res = mysqli_query($conn, $sql) or die(mysqli_error());

                        // check whether the query is executed or not
                        if($res==TRUE)
                        {
                              //count rows whether we have data in the database
                              $count= mysqli_num_rows($res); //function to get all the rows in database

                              $serial_number=1;

                              //check the num of rows
                              if($count>0)
                              {
                                    //we have data in database
                                    while($rows=mysqli_fetch_assoc($res))
                                    {
                                          $id=$rows['id'];
                                          $course_name=$rows['course_name'];
                                          $reason=$rows['description'];
                                          //$post=$rows['post'];

                                                ?>

                                                      <tr>
                                                      <td><?php echo $serial_number++ ; ?></td>
                                                      <td><?php echo $id ; ?></td>
                                                      <td><?php echo $course_name ; ?></td>
                                                      <td><?php echo $reason ; ?></td>
                                                      <td>
                                                      <a href="<?php echo SITEURL; ?>admin/accept.php?id=<?php echo $id; ?>" class="btn-secondary">Accept</a>
                                                      <a href="<?php echo SITEURL; ?>admin/reject.php?id=<?php echo $id; ?>" class="btn-danger">Reject</a>
                                                      <!-- <a href="#>" class="btn-secondary">Change</a> -->
                                                      <!-- <a href="<?php echo SITEURL; ?>admin/view-post.php?id=<?php echo $id; ?>" class="btn-secondary">View</a> -->
                                                      <!-- <a href="#" class="btn-danger">Delete Admin</a> -->
                                                      </td>
                                                      </tr>

                                                <?php

                                           }
                                    
                                    }
                              }
                              else
                              {
                                    //we do not have data in database
                              }
                  ?>

            </table>

               <div class="clearfix"></div>
        </div>
        </div>
        <!--content ends-->


        <?php include('partials/footer.php'); ?>       

        <style>
            tr {
                background-color: #6a747c;
                color: white;
                height: 50px;
                width: 40px;
                border-radius: 20px;
        }
        </style>