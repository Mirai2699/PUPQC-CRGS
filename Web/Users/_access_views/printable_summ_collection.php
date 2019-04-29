<!-- <link href="../../../resources/custom/print_format.css" media="print" rel="stylesheet" /> -->
<style type="text/css">
  @page {
    size:legal;
    margin-top: 0.4in; 
    margin-left: 0.7in;
    margin-right: 0.7in;
    margin-bottom: 0.7in;
   
  }
  table{
    border-collapse: collapse;
  }
  hr {
     border: none; 
     border-bottom: 1px solid black;
  }
</style>


<div style="display: none">
  <div id="printable" class="panel-body" style="color: black">
     <!-- begin panel-body -->
     <div class="panel" style="font-family: arial;">
        <p style="font-size: 14px; text-align: center">
           Republic of the Philippines<br>
           POLYTECHNIC UNIVERSITY OF THE PHILPPINES<br>
           <b>Quezon City Branch</b><br>
           Don Fabian Street, Brgy. Commonwealth<br>
           Quezon City<br>
        </p>

        <p style="font-size: 15px; text-align: center">
           <b>SUMMARY OF COLLECTION REPORT<br>
           For the month Ended
           <?php 
               if(isset($_POST['filter_date']))
               {

                   $start = new datetime($_POST['start_date']);
                   $end = new datetime($_POST['end_date']);

                   $nf_start = $start->format('F d, Y');
                   $nf_end = $end->format('F d, Y');
                   echo
                   '
                    '.$nf_start.'-'.$nf_end.' 
                   ';
               }
               else
               {
                   echo
                   'from the beginning of transactions up to now.  
                   ';
               }
           ?>
           </b> <br>
        </p>
        
        <table style="font-size: 15px; width: 100%; border: 1px solid">
          <thead>
          <tr>
              <th class="hidden">ID</th>
              <th class="custom" style="text-align: center;  border: 1px solid;"><br>ACCOUNT CODE<br></th>
              <th class="custom" style="text-align: center;  border: 1px solid;"><br>NATURE OF COLLECTION<br></th>
              <th class="custom" style="text-align: center;  border: 1px solid;"><br>AMOUNT<br></th>
          </tr>
          </thead>
          <tbody>
          <?php

              

              if(isset($_POST['filter_date']))
              { 

                $start_of = $_POST['start_date'];
                $end_of = $_POST['end_date'];

                $get_particulars = mysqli_query($connection, "SELECT * FROM `t_cr_register_income_references` AS CRIR2
                                                                      INNER JOIN `r_uacs` AS UACS
                                                                      ON CRIR2.cr_ir_uac_ID_ref = UACS.uacs_ID
                                                                      WHERE CRIR2.cr_ir_date_payment BETWEEN '$start_of' and '$end_of'
                                                                      GROUP BY CRIR2.cr_ir_uac_ID_ref
                                                                      ");
                //$total = 0;
                $amount_sum = 0;
                while($row_part = mysqli_fetch_assoc($get_particulars))
                {
                  $uac_ID = $row_part['uacs_ID'];
                  $uac_new_code = $row_part['uacs_acc_code_new'];
                  $uac_desc = $row_part['uacs_acc_title'];


                  $total = 0;
                  $get_specific = mysqli_query($connection, "SELECT * FROM `t_cr_register_income_references` AS CRIR2
                                                                      INNER JOIN `r_uacs` AS UACS
                                                                      ON CRIR2.cr_ir_uac_ID_ref = UACS.uacs_ID
                                                                      WHERE CRIR2.cr_ir_uac_ID_ref = '$uac_ID'
                                                                      and cr_ir_date_payment BETWEEN '$start_of' and '$end_of'
                                                                      ");
                  $total = 0;
                  $overall_sum = 0;

                  while($row_spec = mysqli_fetch_assoc($get_specific))
                  {
                    $par_spec = $row_spec['cr_ir_amount'];
                    $total = $total + $par_spec;
                    $total1 = number_format((float)$total, 2, '.', '');
                    
                  }
                  $overall_sum += $total;
                  $amount_sum += $overall_sum;
                  $amount_sum1 = number_format((float)$amount_sum, 2, '.', '');

                  echo
                  '
                   <tr class="gradeX" style="border 1px solid">
                       <td class="hidden">'.$uac_ID.'</td>
                       <td style="border:1px solid; text-align: center" width="">'.$uac_new_code.'</td>
                       <td style="border:1px solid; text-align: left" width="">'.$uac_desc.'</td>
                       <td style="border:1px solid; text-align: right" width="">'.$total1.'</td>
                   </tr>  
                  ';
                } 
                //echo $amount_sum;
                echo
                ' <tr>
                    <td>
                    </td>
                    <td style="border:1px solid; text-align: center">
                      <b>TOTAL:</b>
                    </td>
                    <td style="border:1px solid; text-align: right">
                      <b>'.$amount_sum1.'</b>
                    </td>
                  </tr>
                ';
              }

              else
              {
                $get_particulars = mysqli_query($connection, "SELECT * FROM `t_cr_register_income_references` AS CRIR2
                                                                      INNER JOIN `r_uacs` AS UACS
                                                                      ON CRIR2.cr_ir_uac_ID_ref = UACS.uacs_ID
                                                                      GROUP BY CRIR2.cr_ir_uac_ID_ref
                                                                      ");
                //$total = 0;
                $amount_sum = 0;
                while($row_part = mysqli_fetch_assoc($get_particulars))
                {
                  $uac_ID = $row_part['uacs_ID'];
                  $uac_new_code = $row_part['uacs_acc_code_new'];
                  $uac_desc = $row_part['uacs_acc_title'];


                  

                  $get_specific = mysqli_query($connection, "SELECT * FROM `t_cr_register_income_references` AS CRIR2
                                                                      INNER JOIN `r_uacs` AS UACS
                                                                      ON CRIR2.cr_ir_uac_ID_ref = UACS.uacs_ID
                                                                      WHERE CRIR2.cr_ir_uac_ID_ref = '$uac_ID'
                                                                      ");
                     $total = 0;
                     $overall_sum = 0;

                     while($row_spec = mysqli_fetch_assoc($get_specific))
                     {
                       $par_spec = $row_spec['cr_ir_amount'];
                       $total = $total + $par_spec;
                       $total1 = number_format((float)$total, 2, '.', '');
                       
                     }
                     $overall_sum += $total;
                     $amount_sum += $overall_sum;
                     $amount_sum1 = number_format((float)$amount_sum, 2, '.', '');

                     echo
                     '
                      <tr class="gradeX" style="border 1px solid">
                          <td class="hidden">'.$uac_ID.'</td>
                          <td style="border:1px solid; text-align: center" width="">'.$uac_new_code.'</td>
                          <td style="border:1px solid; text-align: left" width="">'.$uac_desc.'</td>
                          <td style="border:1px solid; text-align: right" width="">'.$total1.'</td>
                      </tr>  
                     ';
                   } 
                   //echo $amount_sum;
                   echo
                   ' <tr>
                       <td>
                       </td>
                       <td style="border:1px solid; text-align: center">
                         <b>TOTAL:</b>
                       </td>
                       <td style="border:1px solid; text-align: right">
                         <b>'.$amount_sum1.'</b>
                       </td>
                     </tr>
                   ';
                 }

        ?>
          </tbody>                                 
        </table>

     </div>
     <!-- end panel-body -->
     <div class="panel" style="text-align: center">
        <br><br><br><br>
        <p style="font-family: arial">
          <b>MS. MERLY B. GONZALBO</b><br>
          Collecting Officer<br>
          <!-- <?php echo date('F d, Y');?>  -->
        </p>
     </div>
  </div>
</div>