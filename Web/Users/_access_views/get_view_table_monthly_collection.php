
<?php

      include("../../../db_con.php");
      include("../_access_views/get_view_details_fund_cluster.php");
     
      $curryear = date('Y');
      $firstday = date("Y-m-01");
      $endday = date("t", strtotime($firstday));
      $displaydate = date("F 01").'-'.$endday.', '.date('Y');
      

      $get_particulars = mysqli_query($connection, "SELECT * FROM `t_cr_register_income_references` AS CRIR2
                                                            INNER JOIN `r_uacs` AS UACS
                                                            ON CRIR2.cr_ir_uac_ID_ref = UACS.uacs_ID
                                                            ORDER BY CRIR2.cr_ir_ID ASC
                                                            ");
      $count_particulars = mysqli_num_rows($get_particulars) + 1;

      echo
      ' 
      
        <table class="tabl">
          <thead style="text-align:center">
          <tr>
              <th colspan="2">Official Receipt /<br>Deposit Slip</th>
              <th colspan="3" rowspan="2">Payor</th>
              <th colspan="1">Cash Collecting Officer</th>
              <th colspan="'.$count_particulars.'">BREAKDOWN OF RECEIPTS</th>
              
          </tr>
          <tr>
              <th colspan="1">Date</th>
              <th colspan="1">Number</th>
              <th colspan="1">Receipts</th>
              <th colspan="1">DTT</th>
          ';

           $get_particulars_blank = mysqli_query($connection, "SELECT * FROM `t_cr_register_income_references` AS CRIR2
                                                                 INNER JOIN `r_uacs` AS UACS
                                                                 ON CRIR2.cr_ir_uac_ID_ref = UACS.uacs_ID
                                                                 GROUP BY CRIR2.cr_ir_uac_ID_ref
                                                                 ORDER BY cr_ir_uac_ID_ref ASC
                                                                 ");
           while($row_desc = mysqli_fetch_assoc($get_particulars_blank))
           {
             $part_desc = $row_desc['uacs_acc_title'];
             echo
             '
                  <th colspan="1">'.$part_desc.'</th>
             ';
           }

                  
              
          echo
          '    
             </tr>
            </thead>
          <tbody>
          ';
         
          
          
          $view_query = mysqli_query($connection,"SELECT * FROM `t_cash_receipt_record` AS CRR
                                                           LEFT OUTER JOIN `t_deposits` AS DEP
                                                           ON DEP.dep_slip_no = CRR.crt_reference_no
                                                           LEFT OUTER JOIN `r_deposit_account` AS DPAC
                                                           ON DEP.dep_acc_no = DPAC.dpac_acc_no
                                                           ORDER BY CRR.crt_ID ASC ");
          while($row = mysqli_fetch_assoc($view_query))
          {
            
            $date = new datetime($row['crt_date']);
            $nf_date = $date->format('M d');

            $ref_no = $row['crt_reference_no'];
            $payor = $row['crt_payor'];
            $crt_mfm_pap = $row['crt_mfm_pap'];
            $crt_obj_code = $row['crt_object_code'];
            $crt_nat_col = $row['crt_nat_col'];
            $crt_collection = $row['crt_collection'];
            $crt_deposit = $row['crt_deposit'];
            $crt_un_deposit = $row['crt_un_deposit'];

            $dep_acc_no = $row['dep_acc_no'];
            $dep_slip_no = $row['dep_slip_no'];
            $bank = $row['dpac_bank'];

            echo
            '
              <tr>
                  <td style="width:5%">'.$nf_date.'</td>
            ';
            if($ref_no != $dep_slip_no)
            {
              echo
              '
                <td colspan="1" style="width:5%;">'.$ref_no.'</td>
                <td colspan="3" style="width:10%">'.$payor.'</td>
              ';
            }
            else if($ref_no == $dep_slip_no)
            {
                echo
                '
                  <td colspan="1" style="width:10%;">'.$dep_acc_no.'</td>
                  <td colspan="3" style="width:10%">'.$bank.'</td>
                ';
            }
           
            echo
             '
                  
                  <td style="width:3%">'.$crt_collection.'</td>
                  <td style="width:3%">'.$crt_collection.'</td>
             ';

            
             $get_particulars = mysqli_query($connection, "SELECT DISTINCT cr_ir_uac_ID_ref FROM `t_cr_register_income_references`
                                                                          GROUP BY cr_ir_uac_ID_ref
                                                                          -- ORDER BY cr_ir_uac_ID_ref ASC");
           
              while($row_part = mysqli_fetch_assoc($get_particulars))
              {
                
                  $outer_uac = $row_part['cr_ir_uac_ID_ref'];
                  //$outer_ornum_ref = $row_part['cr_ir_ornum_ref'];
                 
                  $get_inner = mysqli_query($connection, "SELECT * FROM `t_cr_register_income_references` AS CRIR2
                                                                        INNER JOIN `r_uacs` AS UACS
                                                                        ON CRIR2.cr_ir_uac_ID_ref = UACS.uacs_ID
                                                                        WHERE CRIR2.cr_ir_ornum_ref = '$ref_no'
                                                                        and CRIR2.cr_ir_uac_ID_ref = '$outer_uac'
                                                                        GROUP BY CRIR2.cr_ir_uac_ID_ref
                                                                        ORDER BY CRIR2.cr_ir_uac_ID_ref ASC
                                                                        ");

                  $total = 0;
                  while($row_inner = mysqli_fetch_assoc($get_inner))
                  {
                      $inner_uac = $row_inner['cr_ir_uac_ID_ref']; 
                      $inner_part_amount   = $row_inner['cr_ir_amount'];
                      $inner_part_desc = $row_inner['uacs_acc_title'];
                      $inner_ornum_ref = $row_inner['cr_ir_ornum_ref'];
                      $total += $inner_part_amount;
                      
                     // echo $inner_ornum_ref.'-'.$outer_uac.'-'.$inner_uac.'<br>';

                      
                          echo 
                          '
                            <td colspan="1">'.$inner_part_amount .'<br>'.$inner_part_desc.'</td>
                          ';


                    
                  }


                  $get_outside = mysqli_query($connection, "SELECT COUNT(*) AS COUNTED FROM `t_cr_register_income_references` AS CRIR2
                                                                        INNER JOIN `r_uacs` AS UACS
                                                                        ON CRIR2.cr_ir_uac_ID_ref = UACS.uacs_ID
                                                                        WHERE CRIR2.cr_ir_uac_ID_ref = '$outer_uac'
                                                                        GROUP BY CRIR2.cr_ir_uac_ID_ref
                                                                        ORDER BY CRIR2.cr_ir_uac_ID_ref ASC
                                                                        ");

                  while($row_outside = mysqli_fetch_assoc($get_outside))
                  {
                      
                          echo 
                          '
                            <td colspan="1"></td>
                          ';
                    
                  }
                  
                 
                    
               
              }


          }
       
          echo 
          '     </tr>
                <tr>
                  <td>'.$total.'</td>
                </tr>
              </tbody>                                 
            </table>
       
      ';
  ?>      
 
