<body>
  <!-- begin #page-loader -->
  <div id="page-loader" class="fade show"><span class="spinner"></span></div>
  <!-- end #page-loader -->
  
  <!-- begin #page-container -->
  <div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
    <!-- begin #header -->
    <div id="header" class="header navbar-default">
      <!-- begin navbar-header -->
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand">
          <img src="../../../resources/images/crgslogo.png" style="width:100%; margin: 1%;" alt=""> 
        </a>
       
      </div>
      <!-- end navbar-header -->
      
      <!-- begin header-nav -->
      <ul class="navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle icon" style="display: none">
            <i class="ion-ios-bell"></i>
            <span class="label">5</span>
          </a>
          <ul class="dropdown-menu media-list dropdown-menu-right">
            <li class="dropdown-header">NOTIFICATIONS (5)</li>
            <li class="media">
              <a href="javascript:;">
                <div class="media-left">
                  <i class="fa fa-bug media-object bg-silver-darker"></i>
                </div>
                <div class="media-body">
                  <h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
                  <div class="text-muted f-s-11">3 minutes ago</div>
                </div>
              </a>
            </li>
            <li class="media">
              <a href="javascript:;">
                <div class="media-left">
                  <img src="../assets/img/user/user-1.jpg" class="media-object" alt="" />
                  <i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
                </div>
                <div class="media-body">
                  <h6 class="media-heading">John Smith</h6>
                  <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                  <div class="text-muted f-s-11">25 minutes ago</div>
                </div>
              </a>
            </li>
            <li class="media">
              <a href="javascript:;">
                <div class="media-left">
                  <img src="../assets/img/user/user-2.jpg" class="media-object" alt="" />
                  <i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
                </div>
                <div class="media-body">
                  <h6 class="media-heading">Olivia</h6>
                  <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                  <div class="text-muted f-s-11">35 minutes ago</div>
                </div>
              </a>
            </li>
            <li class="media">
              <a href="javascript:;">
                <div class="media-left">
                  <i class="fa fa-plus media-object bg-silver-darker"></i>
                </div>
                <div class="media-body">
                  <h6 class="media-heading"> New User Registered</h6>
                  <div class="text-muted f-s-11">1 hour ago</div>
                </div>
              </a>
            </li>
            <li class="media">
              <a href="javascript:;">
                <div class="media-left">
                  <i class="fa fa-envelope media-object bg-silver-darker"></i>
                  <i class="fab fa-google text-warning media-object-icon f-s-14"></i>
                </div>
                <div class="media-body">
                  <h6 class="media-heading"> New Email From John</h6>
                  <div class="text-muted f-s-11">2 hour ago</div>
                </div>
              </a>
            </li>
            <li class="dropdown-footer text-center">
              <a href="javascript:;">View more</a>
            </li>
          </ul>
        </li>
        <li class="dropdown navbar-user">
          <?php 

               $userID = $_SESSION['UserID'];
               $view_query = mysqli_query($connection,"SELECT * FROM `t_accounts` AS ACC 
                                                       INNER JOIN `r_user_role` AS USR 
                                                       INNER JOIN `t_employees` AS EMP 
                                                       ON  ACC.acc_user_role = USR.usr_ID
                                                       and ACC.acc_empID = EMP.emp_ID
                                                       WHERE ACC.acc_ID = '$userID'");
               while($row = mysqli_fetch_assoc($view_query))
               {
                   $ID = $row["acc_ID"];
                   $up_lname = $row["emp_lastname"];
                   $up_mname = $row["emp_middlename"];
                   $up_fname = $row["emp_firstname"];
                   $up_pos = $row["emp_position"];
                   $up_pic = $row["emp_picture"];

                   $acc_username = $row["acc_username"];
                   $acc_password = $row["acc_password"];
                   $acc_user_role = $row["acc_user_role"];
                   $acc_role = $row["usr_desc"];

                   $compname = $up_fname.' '.$up_lname;
                    $rev_compname = $up_fname.' '.$up_lname;
               }
          ?>
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">

            <?php  
               $view_query = mysqli_query($connection,"SELECT * FROM `t_accounts` AS ACC 
                                                       INNER JOIN `r_user_role` AS USR 
                                                       INNER JOIN `t_employees` AS EMP 
                                                       ON  ACC.acc_user_role = USR.usr_ID
                                                       and ACC.acc_empID = EMP.emp_ID
                                                       WHERE ACC.acc_ID = '$userID'");
               while ($row = mysqli_fetch_array($view_query)) 
               {
                 $pic = $row['emp_picture'];

                 if($pic != NULL)
                 {
                    echo '<img src="../../../resources/images/'.$pic.'"  alt="">';
                 }
                 else if ($pic == NULL)
                     echo '<img src="../../../resources/images/default.png"  alt="">';
               }
             ?> 

            <span class="d-none d-md-inline">
              <?php echo $compname; ?>
            </span> <b class="caret"></b>

          </a>
          <div class="dropdown-menu dropdown-menu-right" style="font-size: 14px; color: black">
           <!--  <a href="javascript:;" class="dropdown-item">
              <span class="badge badge-danger pull-right">5</span> 
              Notification</a>
            <a href="javascript:;" class="dropdown-item">
              <span class="badge badge-danger pull-right">2</span> 
              Inbox
            </a> -->
            <a href="javascript:;" class="dropdown-item">
              <i class="fa fa-key"></i>&nbsp;
              Change Password
            </a>
            <div class="dropdown-divider"></div>

            <form action="../_func/user_lock_screen.php" method="POST">
                <input type="hidden" name="userID" value="<?php echo $userID;?>">
                <input type="hidden" name="currpage" value="<?php echo $curr_page;?>">
                <button class="dropdown-item" type="submit" name="lock">
                  <i class="ion-locked"></i>&nbsp;
                  Lock Screen
                </button> 
            </form>
            
            <div class="dropdown-divider"></div>
            <?php
              if($curr_sess_role == 1)
              {
                echo
                '
                  <a href="../../../logout.php" class="dropdown-item">
                    <i class="ion-log-out"></i>&nbsp;
                    Log Out
                  </a>
                ';
              }
              else
              {
                echo
                '
                  <a href="#deposit_out" data-toggle="modal" class="dropdown-item">
                   <i class="ion-log-out"></i>&nbsp;
                   Log Out
                  </a>
                ';
              }
            ?>
            
          </div>
        </li>
      </ul>
      <!-- end header navigation right -->
    </div>
    <!-- end #header -->
    <?php include("../_access_views/get_view_modal_deposit_out.php");?>