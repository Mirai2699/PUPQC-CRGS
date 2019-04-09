<?php
      $get_ID = $_GET['getID'];

      $get_official_receipt = mysqli_query($connection,"SELECT * FROM `t_cr_register_master` AS CRM 
                                                              INNER JOIN `t_cr_register_income_references` AS CRIR
                                                              ON CRM.cr_or_num = CRIR.cr_ir_ornum_ref
                                                        WHERE cr_ID = '$get_ID'");
      while($row = mysqli_fetch_assoc($get_official_receipt))
      {
          $cr_ID = $row["cr_ID"];
          $cr_or_num = $row["cr_or_num"];
          $cr_payor = $row["cr_payor"];
          $cr_date_payment = new datetime($row["cr_date_payment"]);
          $cr_nf_date_payment = $cr_date_payment->format('F d, Y');
          $cr_total_payment = $row["cr_total_payment"];
          $cr_stat = $row["cr_stat"];
          $cr_timestamp = $row["cr_timestamp"];


      }

?>      
