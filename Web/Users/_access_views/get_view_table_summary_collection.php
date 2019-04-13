<div class="col-md-12" style="margin-top: 10px">
    <?php 
        if(isset($_POST['filter_date']))
        {

            $start = new datetime($_POST['start_date']);
            $end = new datetime($_POST['end_date']);

            $nf_start = $start->format('F d, Y');
            $nf_end = $end->format('F d, Y');
            echo
            '
                <p style="font-size:18px; color: black">
                    Date Range from <b>'.$nf_start.'</b> to <b>'.$nf_end.'</b>.
                </p>
            ';
        }
        else
        {
            echo
            '
                <p style="font-size:18px; color: black">
                    Date Range from the beginning of transactions up to now.
                </p>
            ';
        }
    ?>
</div>
<hr>


<table id="data-table-default" class="table table-striped table-bordered" style="font-size: 15px">
  <thead>
  <tr>
      <th class="hidden">ID</th>
      <th>ACCOUNT CODE</th>
      <th>NATURE OF COLLECTION</th>
      <th>AMOUNT</th>
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
            
          }
          $overall_sum += $total;
          $amount_sum += $overall_sum;
         

          echo
          '
          <tr class="gradeX">
              <td class="hidden">'.$uac_ID.'</td>
              <td width="">'.$uac_new_code.'</td>
              <td width="">'.$uac_desc.'</td>
              <td width="">₱ '.$total.'</td>
          </tr>  
          ';
        } 
        //echo $amount_sum;
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
           
          }
          $overall_sum += $total;
          $amount_sum += $overall_sum;
          

          echo
          '
          <tr class="gradeX">
              <td class="hidden">'.$uac_ID.'</td>
              <td width="">'.$uac_new_code.'</td>
              <td width="">'.$uac_desc.'</td>
              <td width="">₱ '.$total.'</td>
          </tr>  
          ';
        } 
        //echo $amount_sum;
       
      }

?>
  </tbody>                                 
</table>



<!--MODAL INCLUDES-->

