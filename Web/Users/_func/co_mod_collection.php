<?php
     
    //TRIGGERS
       if(isset($_POST['create_receipt_disabled']))
       { 
         
       }
       else if(isset($_POST['create_receipt']))
       { 
         require('../../../db_con.php');

         mod_payment();
         update_or_stat();
        
         $get_max = mysqli_query($connection, "SELECT MAX(cr_ID) AS LAST FROM `t_cr_register_master`");
         while($row = mysqli_fetch_assoc($get_max))
         {
           $last_ID = $row['LAST'];
         }

         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully recorded a collection.');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../_views/co_review_receipt.php?getID=$last_ID';\",0);</script>";
       }
      

      
     //FUNCTIONS
        function update_or_stat()
        {
            require('../../../db_con.php');
            $cr_ornum = $_POST['cr_master_ID'];

            $update = "UPDATE `r_official_receipt` SET or_status = 'PAID' WHERE or_no = '$cr_ornum'";
            mysqli_query($connection, $update);
        }
        function mod_payment()
        { 
            require('../../../db_con.php');
            $cr_master_ID = $_POST['cr_master_ID'];
           
            $arr = $_POST; 
            $total = 0;
            for($i = 0; $i <= count($arr['part_ID'])-1;$i++)
            {
                $part_ID = $arr['part_ID'][$i];
                $part_amount = $arr['part_amount'][$i];
                $total += $part_amount;
                $part_update = "UPDATE `t_cr_register_income_references` SET cr_ir_amount = '$part_amount',
                                                                             cr_ir_timestamp = CURRENT_TIMESTAMP
                                                                         WHERE cr_ir_ID = '$part_ID'";
                mysqli_query($connection, $part_update);
                //print_r($part_update);
                
            }

            $update = "UPDATE `t_cr_register_master` SET cr_total_payment = '$total', 
                                                         cr_receipt = '$total',
                                                         cr_timestamp = CURRENT_TIMESTAMP
                                                   WHERE cr_or_num = '$cr_master_ID'";
            

            //print_r($update);
            mysqli_query($connection, $update);

        }

      
?>


