<?php
     
    //TRIGGERS
       if(isset($_POST['acc_reg']))
       { 
          add_employee();
       }

       else if(isset($_POST['add_navigation']))
       { 
          add_navigation();
       }

       else if(isset($_POST['add_permission']))
       { 
          add_permission();
       }

       else if(isset($_POST['add_fund_cluster']))
       { 
          add_fund_cluster();
       }

       else if(isset($_POST['add_uacs_type']))
       { 
          add_uacs_type();
       }

       else if(isset($_POST['add_uacs']))
       { 
          add_uacs();
       }

      
     //FUNCTIONS
        function add_employee()
        { 

          require('../../../db_con.php');
          $code_ret = mysqli_query($connection, "SELECT MAX(emp_ID) FROM t_employees");
          $getrow = mysqli_fetch_array($code_ret);
          $lastcount = $getrow[0];
          $finalID = $lastcount + 1;


          $emp_lname = $_POST['emp_lname'];
          $emp_mname = $_POST['emp_mname'];
          $emp_fname = $_POST['emp_fname'];
         
          $emp_pos = $_POST['emp_pos'];
          $emp_pic = $_POST['emp_pic'];

          $acc_username = $_POST['acc_username'];
          $acc_password = $_POST['acc_password'];
          $acc_usr = $_POST['acc_usr'];


          $insertemp = "INSERT INTO t_employees (emp_lastname, emp_middlename, emp_firstname, emp_position, emp_picture)     
                     VALUES ('$emp_lname', '$emp_mname', '$emp_fname', '$emp_pos', '$emp_pic')";

          $insertacc = "INSERT INTO t_accounts (acc_empID, acc_username, acc_password, acc_user_role)     
                     VALUES ('$finalID', '$acc_username', '$acc_password', '$acc_usr')";
          
           mysqli_query($connection,$insertemp);   
           mysqli_query($connection,$insertacc);

           echo "<script type=\"text/javascript\">".
                    "alert
                    ('You have successfully registered an account');".
                   "</script>";
           echo "<script>setTimeout(\"location.href = '../_views/admin_account_manage.php';\",0);</script>";
        }

        function add_navigation()
        { 
          require('../../../db_con.php');
          $nv_desc = $_POST['nav_desc'];
          $nv_class = $_POST['nav_class'];

          if(!empty($_POST["nav_link"]))
          { 
            $nv_link = $_POST['nav_link'];
          }
          else
          {
             $nv_link = NULL;
          }

          if(!empty($_POST["nav_icon"]))
          { 
             $nv_icon = $_POST['nav_icon'];
          }
          else
          {
             $nv_icon = NULL;
          }

          if(!empty($_POST["nav_parent"]))
          { 
             $nv_parent = $_POST['nav_parent']; 
          }
          else
          {
             $nv_parent = NULL;
          }
          $timestamp = date("Y-m-d h:i:s");

             $insert = "INSERT INTO r_navigation (nav_desc,
                                               nav_link,
                                               nav_class,
                                               nav_icon_class,
                                               nav_parent,
                                               nav_timestamp
                                              )     
                                       VALUES ('$nv_desc',
                                               '$nv_link',
                                               '$nv_class',
                                               '$nv_icon',
                                               '$nv_parent',
                                               '$timestamp'
                                              )";
                  
              mysqli_query($connection,$insert);

             echo "<script type=\"text/javascript\">".
                      "alert
                      ('You have successfully added a navigation!');".
                     "</script>";
             echo "<script>setTimeout(\"location.href = '../_views/admin_setup_nav.php';\",0);</script>";
        }
        
        function add_permission()
        {
            $user = 'root';
            $pass = '';
            $dbnm = 'crgs_v1';

            try 
            {
                $dbh = new PDO('mysql:host=localhost;dbname='.$dbnm, $user, $pass);
            } 
            catch (PDOException $e) 
            {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }



            $stmt = $dbh->prepare("INSERT INTO f_user_permission(per_user_ID, 
                                                                 per_user_role, 
                                                                 per_nav_ID, 
                                                                 per_verdict,
                                                                 per_timestamp) 
                                                         VALUES (?, ?, ?, ?, CURRENT_TIMESTAMP)");
            $stmt->bindParam(1, $per_user);
            $stmt->bindParam(2, $per_usrrole);
            $stmt->bindParam(3, $per_nav);
            $stmt->bindParam(4, $per_verdict);

       
            $arr = $_POST; 
            for($i = 0; $i <= count($arr['per_acc'])-1;$i++)
            {
                $per_user = $arr['per_acc'][$i];
                $per_usrrole = $arr['per_utype'][$i];
                $per_nav = $arr['per_nav'][$i];
                $per_verdict = $arr['per_access'][$i];
                $stmt->execute();

            }

                 

                 echo "<script type=\"text/javascript\">".
                          "alert
                          ('You have successfully added permission(s)!');".
                         "</script>";
                 echo "<script>setTimeout(\"location.href = '../_views/admin_setup_permission.php';\",0);</script>";
        }

        function add_fund_cluster()
        {
          require('../../../db_con.php');
          $fc_desc = $_POST['fc_desc'];
          $fc_code = $_POST['fc_code'];
          $timestamp = date("Y-m-d H:i:s");

             $insert = "INSERT INTO r_fund_cluster (fc_desc,
                                                   fc_code,
                                                   fc_timestamp
                                                  )     
                                           VALUES ('$fc_desc',
                                                   '$fc_code',
                                                   '$timestamp'
                                                  )";
                  
             mysqli_query($connection,$insert);

             echo "<script type=\"text/javascript\">".
                      "alert
                      ('You have successfully added a fund cluster!');".
                     "</script>";
             echo "<script>setTimeout(\"location.href = '../_views/admin_setup_fund_cluster.php';\",0);</script>";
        }

        function add_uacs_type()
        {
          require('../../../db_con.php');
          $uactype_name = $_POST['uactype_name'];
          $timestamp = date("Y-m-d H:i:s");

             $insert = "INSERT INTO r_uacs_type (uacs_type_name,
                                                    uacs_timestamp
                                                    )     
                                            VALUES ('$uactype_name',
                                                    '$timestamp'
                                                    )";
                  
             mysqli_query($connection,$insert);

             echo "<script type=\"text/javascript\">".
                      "alert
                      ('You have successfully added a UACS Type!');".
                     "</script>";
             echo "<script>setTimeout(\"location.href = '../_views/admin_setup_uacs_type.php';\",0);</script>";
        }

        function add_uacs()
        {
            $user = 'root';
            $pass = '';
            $dbnm = 'crgs_v1';

            try 
            {
                $dbh = new PDO('mysql:host=localhost;dbname='.$dbnm, $user, $pass);
            } 
            catch (PDOException $e) 
            {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }



            $stmt = $dbh->prepare("INSERT INTO r_uacs(uacs_acc_title, 
                                                      uacs_type, 
                                                      uacs_fund_cluster, 
                                                      uacs_acc_code_old,
                                                      uacs_acc_code_new,
                                                      uacs_acc_timestamp) 
                                          VALUES (?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
            $stmt->bindParam(1, $uac_name);
            $stmt->bindParam(2, $uac_type);
            $stmt->bindParam(3, $uac_fc);
            $stmt->bindParam(4, $uac_oac);
            $stmt->bindParam(5, $uac_nac);

       
            $arr = $_POST; 
            for($i = 0; $i <= count($arr['uac_name'])-1;$i++)
            {
                $uac_name = $arr['uac_name'][$i];
                $uac_type = $arr['uac_type'][$i];
                $uac_fc = $arr['uac_fc'][$i];
                $uac_oac = $arr['uac_oac'][$i];
                $uac_nac = $arr['uac_nac'][$i];
                $stmt->execute();

            }

                 

                 echo "<script type=\"text/javascript\">".
                          "alert
                          ('You have successfully added UACS!');".
                         "</script>";
                 echo "<script>setTimeout(\"location.href = '../_views/admin_setup_uacs.php';\",0);</script>";
        }
?>


