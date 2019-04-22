<?php
    
    if(isset($_POST['lock']))
    {
       lock();
    }
    else if(isset($_POST['unlock']))
    {
      unlock();
    }

    function lock()
    {
       require('../../../db_con.php');

       $userID = $_POST['userID'];
       $currpage = $_POST['currpage'];

       $insert = "INSERT INTO `f_lock_screen_log` (ls_page, ls_acc_ID, ls_timestamp) VALUES ('$currpage','$userID', CURRENT_TIMESTAMP)";
       mysqli_query($connection, $insert);

       session_start();
       echo "<script>window.location.assign('../../Utilities/user_lock_screen.php')</script>";
       session_destroy();
         
    }
    function unlock()
    {
      require('../../../db_con.php');

      $get_latest = mysqli_query($connection, "SELECT * FROM `f_lock_screen_log` 
                                                        ORDER BY ls_ID DESC LIMIT 1");
      while($row = mysqli_fetch_assoc($get_latest))
      {
        $ls_page = $row['ls_page'];
        $ls_acc_ID = $row['ls_acc_ID'];
        //echo $ls_page;
        //echo $ls_acc_ID;
      }

      $password = $_POST['password_unlock'];
      $query = "SELECT * FROM `t_accounts` AS ACC
                         INNER JOIN `f_lock_screen_log` AS LS
                         ON ACC.acc_ID = LS.ls_acc_ID
                   WHERE acc_ID = '".$ls_acc_ID."' and acc_password = '".$password."'";

      $result = mysqli_query($connection,$query) or die(mysqli_error());
      if (mysqli_num_rows($result) > 0)
      {

       while($row = mysqli_fetch_assoc($result))
         {
           $user_id = $row['acc_ID'];
           $UserName = $row['acc_username'];
           $userrole = $row['acc_user_role'];
           $status = $row['acc_active_flag'];
           //$email = $row['acc_email'];
           
         }
        if($status == "Active")
        {
           session_start();
           $_SESSION['UserID'] = $user_id;
           $_SESSION['Logged_In'] = $UserName;
           $_SESSION['UserRole'] = $userrole;
           //$_SESSION['email'] = $email;    
         
            $header ='Location:../_views/'.$ls_page.'';
            header($header);
          
        }
        else
        {
          echo 'nani';
        }
      }
      else
      {
        echo "<script type=\"text/javascript\">".
                 "alert
                 ('Incorrect Password!');".
                "</script>";
        echo "<script>setTimeout(\"location.href = '../../Utilities/user_lock_screen.php';\",0);</script>";
      }

    }
   
?>


