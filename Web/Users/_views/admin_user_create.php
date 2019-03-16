
<?php
    
  include("../../utilities/header.php");
  include("../../utilities/Notification.php");
  include("../../utilities/navibar.php");
  include("../../utilities/BaseJs.php");
  include("../../utilities/Table_Default.php");
?>
     
        
        <title>Create Account | PUPQC-CRGS</title>
        <!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
                    <li class="breadcrumb-item active">Create Account</li>
                </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
                <h1 class="page-header">Setup Account and Profile Details</h1>
            <!-- end page-header -->
            <!--Line Divider-->
                <div class="row" style="padding: 1px; background-color: #262626; margin-bottom: 20px"></div>
            <!--Line Divider-->


            <!-- START CUSTOM CONTENT-->

            <form action="../_func/admin_insert_func.php" method="POST">
              <!--FIRST PART-->
              <div class="panel panel-inverse">
                  <div class="panel-heading">
                      <h2 class="panel-title">
                          <i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;Add User Profile Details
                      </h2>
                  </div>
                  <div class="panel-body">
                    <div class="col-md-12">
                        <div class="panel">
                              <div class="row">
                                 <div class="col-md-4">
                                  <label>Last Name</label>
                                  <input type="text" class="form-control" name="emp_lname" required/>
                               </div>
                               <div class="col-md-4">
                                  <label>Middle Name</label><small>(Optional)</small>
                                  <input type="text" class="form-control" name="emp_mname" />
                               </div>
                               <div class="col-md-4">
                                  <label>First Name</label>
                                  <input type="text" class="form-control" name="emp_fname" required/>
                               </div>
                           </div>
                           <div class="row" style="margin-top: 10px">
                               
                               <div class="col-md-4">
                                  <label>Official Position</label>
                                  <input type="text" class="form-control" name="emp_pos" required/>
                               </div>
                               <div class="col-md-4">
                                  <label>Profile Picture</label><small>(Optional)</small>
                                  <input type="file" class="form-control" name="emp_pic" />
                               </div>
                           </div>
                        </div>
                    </div>
                  </div>
                  <!--FIRST PART-->


                  <!--SECOND PART-->
                  <div class="panel-heading">
                      <h2 class="panel-title">
                          <i class="fa fa-key"></i>&nbsp;&nbsp;&nbsp;Add Account Credentials
                      </h2>
                  </div>
                  <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="panel panel-inverse">
                           <div class="row" style="margin-top: 10px">
                               <div class="col-md-4">
                                  <label>Username</label>
                                  <input type="text" class="form-control" name="acc_username" required/>
                               </div>
                               <div class="col-md-4">
                                  <label>User Role</label>
                                  <select name="acc_usr" class="form-control">
                                     <option value="" selected disabled>-- Select User Role --</option>
                                     <?php  
                                         $sqlemp = "SELECT * FROM `r_user_role`";
                                         $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                           while($row = mysqli_fetch_assoc($results))
                                           {
                                             $usr_ID = $row['usr_ID'];
                                             $usr_desc = $row['usr_desc'];
                                     ?>
                                     <option value="<?php echo $usr_ID ?>"><?php echo $usr_desc; ?></option>
                                     <?php } ?>
                                  </select>
                               </div>
                               <div class="col-md-4">
                                  <label>Email</label>
                                  <input type="email" class="form-control" name="acc_email" required/>
                               </div>
                           </div>
                           <div class="row" style="margin-top: 10px">
                               <div class="col-md-4">
                                  <label>Password</label>
                                  <input id="Password" type="password" name="acc_password" class="form-control" required>
                               </div>
                               <div class="col-md-4">
                                  <label>Confirm Password</label>
                                  <input id="confirmPassword" type="password" name="acc_conpassword" class="form-control" required>
                               </div>
                              <div class="col-md-4" style="text-align: right">
                                <button class="btn btn-success" type="submit" name="acc_reg" style="margin-top: 27px">
                                  <i class="fa fa-edit"></i>
                                  &nbsp;
                                  Register Account
                                </button>
                              </div>
                           </div>
                        </div>
                    </div>
                  </div>
                  <!--SECOND PART-->
               </form>

            </div>

            <!-- END CUSTOM CONTENT -->


        </div>
        <!-- end #content -->
        
    </div>
    <!-- end page container -->
    

   </body>
</html>
<!--=== ON PAGE SCRIPT === -->




