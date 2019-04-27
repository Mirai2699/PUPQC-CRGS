<?php
     
    //TRIGGERS
       if(isset($_POST['add_collection']))
       { 
          require('../../../db_con.php');
          add_collection_summary();
          add_collection_particulars();
          add_cash_receipt_record();
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
       else if(isset($_POST['add_collection_outside_entry']))
       { 
          
          add_collection_summary();
          add_collection_particulars();
          //update_or_stat();

          echo "<script type=\"text/javascript\">".
                   "alert
                   ('You have successfully saved your entries; Wait for the collection process to be finished.');".
                  "</script>";
          echo "<script>setTimeout(\"location.href = '../../../student_entry.php';\",0);</script>";
       }
       else if(isset($_POST['test']))
       {
         add_cash_receipt_record();
       }
      

      
     //FUNCTIONS
        function update_or_stat()
        {
            require('../../../db_con.php');
            $cr_ornum = $_POST['cr_ornum'];

            $update = "UPDATE `r_official_receipt` SET or_status = 'PAID' WHERE or_no = '$cr_ornum'";
            mysqli_query($connection, $update);
        }
        function add_collection_summary()
        { 
            require('../../../db_con.php');
            $cr_ornum = $_POST['cr_ornum'];
            //$cr_payor = $_POST['cr_payor'];
            $cr_receipt = $_POST['cr_receipt'];
            $cr_payor_type = $_POST['cr_payor_type'];



            if(!empty($_POST['cr_treasure']))
            {
               $cr_dep_nat_signature = $_POST['cr_treasure'];
            }
            else
            {
               $cr_dep_nat_signature = NULL;
            }
            if(!empty($_POST['cr_agdb']))
            {
               $cr_dep_agdb = $_POST['cr_agdb'];
            }
            else
            {
               $cr_dep_agdb = NULL;
            }
            if(!empty($_POST['cr_balance']))
            {
               $cr_balance = $_POST['cr_balance'];
            }
            else
            {
               $cr_balance = NULL;
            }
            if(!empty($_POST['cr_lastname']) && !empty($_POST['cr_firstname']))
            {
              $cr_lname = $_POST['cr_lastname']; 
              $cr_fname = $_POST['cr_firstname'];
              $cr_payor = $cr_lname.', '.$cr_fname;
            } 
            else
            {
              $cr_payor = $_POST['cr_company_payor'];
            } 
           

            $cr_total_payment = $_POST['cr_total'];

            $today = date('Y-m-d');
    

             $insert = "INSERT INTO t_cr_register_master(cr_date_payment,
                                                         cr_or_num,
                                                         cr_payor_type,
                                                         cr_payor,
                                                         cr_receipt,
                                                         cr_dep_nat_treasure,
                                                         cr_dep_agdb,
                                                         cr_balance,
                                                         cr_total_payment,
                                                         cr_timestamp
                                                        )     
                                                 VALUES ('$today',
                                                         '$cr_ornum',
                                                         '$cr_payor_type',
                                                         '$cr_payor',
                                                         '$cr_receipt',
                                                         '$cr_dep_nat_signature',
                                                         '$cr_dep_agdb',
                                                         '$cr_balance',
                                                         '$cr_total_payment',
                                                         '$today'
                                                        )";
              //print_r($insert);  
             mysqli_query($connection,$insert);


        }

        function add_collection_particulars()
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



            $stmt = $dbh->prepare("INSERT INTO  t_cr_register_income_references(cr_ir_uac_type_ref, 
                                                                                cr_ir_uac_ID_ref, 
                                                                                cr_ir_amount, 
                                                                                cr_ir_ornum_ref,
                                                                                cr_ir_date_payment,
                                                                                cr_ir_timestamp) 
                                                                        VALUES (?, ?, ?, ?, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
            $stmt->bindParam(1, $cr_uacs_type);
            $stmt->bindParam(2, $cr_uacs);
            $stmt->bindParam(3, $cr_amount);
            $stmt->bindParam(4, $cr_ornum);

            $arr = $_POST; 
            for($i = 0; $i <= count($arr['cr_uacs'])-1;$i++)
            {   
                $cr_uacs = $arr['cr_uacs'][$i];
                $cr_uacs_type = $arr['cr_uacs_type'][$i];
                $cr_amount = $arr['cr_amount'][$i];
                $cr_ornum = $arr['cr_ornum'];
                $stmt->execute();
            }
            
  
        }
        function add_cash_receipt_record()
        {
          require('../../../db_con.php');
          $cr_ornum = $_POST['cr_ornum'];
          //$cr_payor = $_POST['cr_payor'];
          if(!empty($_POST['cr_lastname']) && !empty($_POST['cr_firstname']))
          {
            $cr_lname = $_POST['cr_lastname']; 
            $cr_fname = $_POST['cr_firstname'];
            $cr_payor = $cr_lname.', '.$cr_fname;
          } 
          else
          {
            $cr_payor = $_POST['cr_company_payor'];
          } 
          $cr_total_payment = $_POST['cr_total'];


          $arr = $_POST; 
          $all_particulars = '';
          for($i = 0; $i <= count($arr['cr_uacs'])-1;$i++)
          {   

              $cr_uacs = $arr['cr_uacs'][$i];


              $get_particulars = mysqli_query($connection, "SELECT * FROM `r_uacs` 
                                                                     WHERE uacs_ID = '$cr_uacs'
                                                                    ");
              
              while($row_part = mysqli_fetch_assoc($get_particulars))
              {
                $part_desc = $row_part['uacs_acc_title'];
               
              }
              $all_particulars = $all_particulars.''.$part_desc.',';
          }
          $today = date('Y-m-d h:i:s');
         
          $insert = "INSERT INTO `t_cash_receipt_record` (crt_date, crt_reference_no, crt_payor, crt_nat_col, crt_collection, crt_un_deposit)
                                                  VALUES (CURRENT_TIMESTAMP, '$cr_ornum', '$cr_payor', '$all_particulars', '$cr_total_payment', '$cr_total_payment' )";
          //print_r($insert);
          mysqli_query($connection, $insert);
        }
?>


