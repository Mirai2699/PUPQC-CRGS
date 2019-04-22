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
      <th style="text-align: center">Date</th>
      <th style="text-align: center">R.A Deposit Slip No.</th>
      <th style="text-align: center">AMOUNT</th>
  </tr>
  </thead>
  <tbody>
  <?php

      

      if(isset($_POST['filter_date']))
      { 

          $start_of = $_POST['start_date'];
          $end_of = $_POST['end_date'];

           $view_query1 = mysqli_query($connection,"SELECT * FROM `t_deposits` 
                                                   WHERE dep_status = 'DEPOSITED'
                                                   and dep_date_actual BETWEEN 'start_of' and '$end_of'
                                                   ORDER BY dep_ID  DESC");
           while($row1 = mysqli_fetch_assoc($view_query1))
           {
               $dep_ID = $row1["dep_ID"];
               $dep_acc_no = $row1["dep_acc_no"];
               $dep_slip_no = $row1["dep_slip_no"];
               $dep_amount = $row1["dep_amount"];
               $dep_date_actual = new datetime($row1["dep_date_actual"]);
               $dep_nf_dactual = $dep_date_actual->format('m/d/Y');

             echo
             '
             <tr class="gradeX">
                 <td class="hidden">'.$dep_ID.'</td>
                 <td width="">'.$dep_nf_dactual.'</td>
                 <td width="">'.$dep_slip_no.'</td>
                 <td width="">'.$dep_amount.'</td>
             </tr>  
             ';
           } 
        //echo $amount_sum;
      }

      else
      {
          $view_query1 = mysqli_query($connection,"SELECT * FROM `t_deposits` 
                                                  WHERE dep_status = 'DEPOSITED'
                                                  ORDER BY dep_ID  DESC");
          while($row1 = mysqli_fetch_assoc($view_query1))
          {
              $dep_ID = $row1["dep_ID"];
              $dep_acc_no = $row1["dep_acc_no"];
              $dep_slip_no = $row1["dep_slip_no"];
              $dep_amount = $row1["dep_amount"];
              $dep_date_actual = new datetime($row1["dep_date_actual"]);
              $dep_nf_dactual = $dep_date_actual->format('m/d/Y');

            echo
            '
            <tr class="gradeX">
                <td class="hidden">'.$dep_ID.'</td>
                <td width="">'.$dep_nf_dactual.'</td>
                <td width="">'.$dep_slip_no.'</td>
                <td width="">'.$dep_amount.'</td>
            </tr>  
            ';
          } 
          //echo $amount_sum;
       
      }

?>
  </tbody>                                 
</table>



<!--MODAL INCLUDES-->

