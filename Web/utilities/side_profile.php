<style type="text/css">
  .sidebar .nav>li.nav-profile .cover {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url(../../../resources/images/login-bg-23.jpg) no-repeat;
      background-size: cover;
  }
</style>
<div class="cover with-shadow"></div>
<div class="image">
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
</div>
<div class="info">
   <?php echo $compname; ?>
  <small><?php echo $up_pos; ?></small>
</div>