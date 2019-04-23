
  <?php
      require('../../../db_con.php');
      
      $curr_date = date('Y-m-d');
      $get_current_status = mysqli_query($connection,"SELECT * FROM `t_cr_register_master` AS CRM 
                                                               INNER JOIN `r_official_receipt` AS ROR 
                                                               ON CRM.cr_or_num = ROR.or_no 
                                                             WHERE ROR.or_status = 'PENDING'
                                                             and CRM.cr_date_payment = '$curr_date' 
                                                             ORDER BY ROR.or_ID DESC 
                                                             LIMIT 1");
      if(mysqli_num_rows($get_current_status) > 0)
      {
        $get_ID_query = mysqli_fetch_array(mysqli_query($connection,"SELECT MAX(cr_ID) FROM `t_cr_register_master` LIMIT 1"));
        $get_ID = $get_ID_query[0];
        echo $get_ID;


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
        
        echo 
        ' 
          <tr>
            <td style="display:none"><input type="hidden" name="cr_master_ID" value="'.$cr_or_num.'" /></td>
            <td style="font-size: 20px; font-weight: bold;">OR Number: <br>'.$cr_or_num.'</td>
            <td style="font-size: 20px; font-weight: bold;">Date of Receipt: <br>'.$cr_nf_date_payment.'</td>
          </tr>
          <tr>
            <td colspan="2" style="font-size: 20px; font-weight: bold;">Payor: <br> '.$cr_payor.'</td>
            
          </tr>
          <tr>
            <td  style="font-size: 20px; font-weight: bold; text-align: right">Payment Particulars:</td>
            <td  style="font-size: 20px; font-weight: bold; text-align: right">Amount:</td>
          </tr>
        ';


        

        $get_particulars = mysqli_query($connection, "SELECT * FROM `t_cr_register_income_references` AS CRIR2
                                                              INNER JOIN `r_uacs` AS UACS
                                                              ON CRIR2.cr_ir_uac_ID_ref = UACS.uacs_ID
                                                              WHERE CRIR2.cr_ir_ornum_ref = '$cr_or_num'
                                                              ");
        $total = 0;
        while($row_part = mysqli_fetch_assoc($get_particulars))
        {
          $part_ID = $row_part['cr_ir_ID'];
          $part_desc = $row_part['uacs_acc_title'];
          $part_amount = $row_part['cr_ir_amount'];
          $display_part = '
                           <tr>
                               <td style="display: none">
                                  <input type="hidden" name="part_ID[]" value="'.$part_ID.'" />
                               </td>
                               <td style="width: 600px; font-size: 19px; text-align: right">
                                  '.$part_desc.'
                               </td>
                               <td style="width: 300px; font-size: 19px; text-align: right">
                                  <input type="number" name="part_amount[]" value="'.$part_amount.'" 
                                   style="width:50%; text-align:right; font-size: 19px" min="1.00" step="0.01"/>
                               </td>
                            </tr>';
         // echo $part_desc.'-'.$part_amount.'<br>';
            echo $display_part;
            $total = $total + $part_amount;
        }
      }
      else
      {
          echo 
          ' 
            <tr>
              <td style="font-size: 20px; font-weight: bold;">Click Refresh to View Current Transaction.</td>
            </tr>
          ';
      }
      
  ?>      
  