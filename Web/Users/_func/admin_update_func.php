<?php
    include('../../../db_con.php');

      if(isset($_POST['edit_account']))
      { 
      }


      else if(isset($_POST['update_navigation']))
      { 
        update_navigation();
      }

       else if(isset($_POST['update_permission']))
      { 
        update_permission();
      }





      function update_employees()
      {

        
        $emp_lname = $_POST['emp_lname'];
        $emp_mname = $_POST['emp_mname'];
        $emp_fname = $_POST['emp_fname'];
        $emp_off = $_POST['emp_off'];
        $emp_pos = $_POST['emp_pos'];
        $emp_pic = $_POST['emp_pic'];

        $acc_username = $_POST['acc_username'];
        $acc_password = $_POST['acc_password'];
        $acc_usr = $_POST['acc_usr'];


        $EMP_ID = $_POST["emp_ID"];
        $ID = $_POST["acc_ID"];

        $update1 = "UPDATE t_employees SET 

                    emp_lastname = '$emp_lname',
                    emp_middlename = '$emp_mname',
                    emp_firstname = '$emp_fname',
                    emp_office = '$emp_off',
                    emp_position = '$emp_pos',
                    emp_picture = '$emp_pic',
                    emp_mod_date = CURRENT_TIMESTAMP

                  WHERE emp_ID = '$EMP_ID'";

        $update2 = "UPDATE t_accounts SET 

                    acc_username = '$acc_username',
                    acc_password = '$acc_password',
                    acc_user_role = '$acc_usr',
                    acc_mod_date = CURRENT_TIMESTAMP

                  WHERE acc_ID = '$ID'";
              
         mysqli_query($connection,$update1);
         mysqli_query($connection,$update2);

         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully updated the details!');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../views/manage_users.php';\",0);</script>";

      }

      function update_navigation()
      {
          require('../../../db_con.php');
          $ID = $_POST['nav_ID'];
          $nv_desc = $_POST['up_nav_desc'];
          $nv_link = $_POST['up_nav_link'];
          $nv_class = $_POST['up_nav_class'];
          $nv_icon = $_POST['up_nav_icon'];
          $nv_parent = $_POST['up_nav_parent']; 
          $timestamp = date("Y-m-d h:i:s");

          $update = "UPDATE r_navigation SET 
                               nav_desc = '$nv_desc',
                               nav_link = '$nv_link',
                               nav_class = '$nv_class',
                               nav_icon_class = '$nv_icon',
                               nav_parent = '$nv_parent',
                               nav_timestamp = '$timestamp'
                    WHERE nav_ID = '$ID'";
                
          mysqli_query($connection,$update);

           echo "<script type=\"text/javascript\">".
                    "alert
                    ('You have successfully updated the details!');".
                   "</script>";
           echo "<script>setTimeout(\"location.href = '../_views/admin_setup_nav.php';\",0);</script>";
      }

      function update_permission()
      {
          require('../../../db_con.php');
          $ID = $_POST['per_ID'];
          $per_verdict = $_POST['per_verdict'];
          $timestamp = date("Y-m-d h:i:s");

          $update = "UPDATE f_user_permission SET 
                               per_verdict  = '$per_verdict',
                               per_timestamp = '$timestamp'
                    WHERE per_ID = '$ID'";
                
          mysqli_query($connection,$update);

           echo "<script type=\"text/javascript\">".
                    "alert
                    ('You have successfully updated the permission for the user.');".
                   "</script>";
           echo "<script>setTimeout(\"location.href = '../_views/admin_setup_permission.php';\",0);</script>";
      }

      
?>


