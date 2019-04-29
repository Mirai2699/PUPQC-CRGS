<!-- <link href="../../../resources/custom/print_format.css" media="print" rel="stylesheet" /> -->
<style type="text/css">
  @page {
    size:legal;
    margin-top: 0.4in; 
    margin-left: 0.7in;
    margin-right: 0.7in;
    margin-bottom: 0.7in;
   
  }
  table, td, th{
   
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
           Cashier's Office
        </p>
        <?php

          $get_bank_acc = mysqli_query($connection, "SELECT * FROM `r_deposit_account`");
          while($brow = mysqli_fetch_assoc($get_bank_acc))
          {
            $bank = $brow['dpac_bank'];
            $acc_no = $brow['dpac_acc_no'];
            $acc_display = $bank.' ACCOUNT NO. '.$acc_no;
          }
        ?>
        <br>
        <p>Account Current: <?php echo $acc_display;?> </p>
        <table id="data-table-default" class="table table-striped table-bordered" style="font-size: 15px; width: 100%">
          <thead>
          <tr>
              <th ></th>
              <th style="text-align: center"></th>
              <th style="text-align: center"></th>
              <th style="text-align: center"></th>
          </tr>
          </thead>
          <tbody>
          <?php
                      if(isset($_POST['filter_date']))
                      { 

                          $start_of = $_POST['start_date'];
                          $end_of = $_POST['end_date'];

                          ;

                          $convert_start = new datetime($start_of);
                          $nf_start = $convert_start->format('m');
                          $nf_display_start = $convert_start->format('F');

                           $previous_month = $nf_start-1;
                           $curr_month = date('m');
                           $curr_year = date('Y');

                           $endday = date("t", strtotime($start_of));
                           $displaydate = $nf_display_start.' 01-'.$endday.' '.date('Y');

                          $view_query1 = mysqli_query($connection,"SELECT * FROM `t_deposits` 
                                                                  WHERE dep_status = 'DEPOSITED'
                                                                  and month(dep_date_for) = '$curr_month'
                                                                  and dep_date_actual BETWEEN 'start_of' and '$end_of'
                                                                  and year(dep_date_actual) = '$curr_year'
                                                                  ORDER BY dep_ID  DESC");
                           $total_deposit = 0;
                           while($row1 = mysqli_fetch_assoc($view_query1))
                           {
                               $dep_ID = $row1["dep_ID"];
                               $dep_acc_no = $row1["dep_acc_no"];
                               $dep_slip_no = $row1["dep_slip_no"];
                               $dep_amount = $row1["dep_amount"];
                               $dep_date_actual = new datetime($row1["dep_date_actual"]);
                               $dep_nf_dactual = $dep_date_actual->format('m/d/Y');
                               $total_deposit += $dep_amount;
                           
                          } 


                          //echo $amount_sum;
                          

                          $remaining_balance = 0;
                          $view_query2 = mysqli_query($connection,"SELECT * FROM `t_deposits` 
                                                                  WHERE dep_status = 'DEPOSITED'
                                                                  and month(dep_date_for) = '$previous_month'
                                                                  and dep_date_actual BETWEEN 'start_of' and '$end_of'
                                                                  and year(dep_date_actual) = '$curr_year'");
                          while($row2 = mysqli_fetch_assoc($view_query2))
                          {
                              $dep_amount_rem = $row2["dep_amount"];
                              $remaining_balance += $dep_amount_rem;
                          } 
                          $total_balance = $total_deposit + $remaining_balance;

                          echo
                          '
                            <tr class="gradeX">
                                <td style="text-align:left">Beginning Balance:</td>
                                <td></td>
                                <td></td>
                                <td style="text-align:right"></td>
                            </tr>  
                          ';
                          echo
                          '
                            <tr class="gradeX">
                                <td style="text-align:left">Add: Collection per this '.$displaydate.'</td>
                                <td></td>
                                <td></td>
                                <td style="text-align:right; border-bottom: 2px double;">'.$total_balance.'</td>
                            </tr>  
                          ';
                          echo
                          '
                            <tr class="gradeX">
                                <td style="text-align:left; font-weight:bold; ">TOTAL</td>
                                <td></td>
                                <td></td>
                                <td style="text-align:right; border-bottom:4px double;">'.$total_balance.'</td>
                            </tr>  
                          ';
                      }

                      else
                      {
                          
                          $firstday = date("Y-m-01");
                          $endday = date("t", strtotime($firstday));
                          $displaydate = date("F 01").'-'.$endday.' '.date('Y');
                       

                          $previous_month = date('m')-1;
                          $curr_month = date('m');
                          $curr_year = date('Y');


                          $view_query1 = mysqli_query($connection,"SELECT * FROM `t_deposits` 
                                                                  WHERE dep_status = 'DEPOSITED'
                                                                  and month(dep_date_for) = '$curr_month'
                                                                  and month(dep_date_actual) = '$curr_month'
                                                                  and year(dep_date_actual) = '$curr_year'
                                                                  ORDER BY dep_ID  DESC");
                           $total_deposit = 0;
                           while($row1 = mysqli_fetch_assoc($view_query1))
                           {
                               $dep_ID = $row1["dep_ID"];
                               $dep_acc_no = $row1["dep_acc_no"];
                               $dep_slip_no = $row1["dep_slip_no"];
                               $dep_amount = $row1["dep_amount"];
                               $dep_date_actual = new datetime($row1["dep_date_actual"]);
                               $dep_nf_dactual = $dep_date_actual->format('m/d/Y');
                               $total_deposit += $dep_amount;
                           
                          } 


                          //echo $amount_sum;
                          

                          $remaining_balance = 0;
                          $view_query2 = mysqli_query($connection,"SELECT * FROM `t_deposits` 
                                                                  WHERE dep_status = 'DEPOSITED'
                                                                  and month(dep_date_for) = '$previous_month'
                                                                  and month(dep_date_actual) = '$curr_month'
                                                                  and year(dep_date_actual) = '$curr_year'");
                          while($row2 = mysqli_fetch_assoc($view_query2))
                          {
                              $dep_amount_rem = $row2["dep_amount"];
                              $remaining_balance += $dep_amount_rem;
                          } 
                          $total_balance = $total_deposit + $remaining_balance;

                          echo
                          '
                            <tr class="gradeX">
                                <td style="text-align:left">Beginning Balance:</td>
                                <td></td>
                                <td></td>
                                <td style="text-align:right"></td>
                            </tr>  
                          ';
                          echo
                          '
                            <tr class="gradeX">
                                <td style="text-align:left">Add: Collection per this '.$displaydate.'</td>
                                <td></td>
                                <td></td>
                                <td style="text-align:right; border-bottom: 2px double;">'.$total_balance.'</td>
                            </tr>  
                          ';
                          echo
                          '
                            <tr class="gradeX">
                                <td style="text-align:left; font-weight:bold; ">TOTAL</td>
                                <td></td>
                                <td></td>
                                <td style="text-align:right; border-bottom:4px double;">'.$total_balance.'</td>
                            </tr>  
                          ';
                       
                      }
          ?>      
          </tbody>                                 
        </table>
        <p>To authorized government depository bank:</p>
        <br>
        <table id="data-table-default" class="table table-striped table-bordered" style="font-size: 15px; width: 100%">
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

                          $convert_start = new datetime($start_of);
                          $nf_start = $convert_start->format('m');

                           $previous_month = $nf_start-1;
                           $curr_month = date('m');
                           $curr_year = date('Y');


                           $view_query1 = mysqli_query($connection,"SELECT * FROM `t_deposits` 
                                                                   WHERE dep_status = 'DEPOSITED'
                                                                   and month(dep_date_for) = '$curr_month'
                                                                   and dep_date_actual BETWEEN 'start_of' and '$end_of'
                                                                   and year(dep_date_actual) = '$curr_year'
                                                                   ORDER BY dep_ID  DESC");
                           $total_deposit = 0;
                           while($row1 = mysqli_fetch_assoc($view_query1))
                           {
                               $dep_ID = $row1["dep_ID"];
                               $dep_acc_no = $row1["dep_acc_no"];
                               $dep_slip_no = $row1["dep_slip_no"];
                               $dep_amount = $row1["dep_amount"];
                               $dep_date_actual = new datetime($row1["dep_date_actual"]);
                               $dep_nf_dactual = $dep_date_actual->format('m/d/Y');
                               $total_deposit += $dep_amount;

                             echo
                             '
                             <tr class="gradeX">
                                 <td class="hidden">'.$dep_ID.'</td>
                                 <td width="" style="text-align:center">'.$dep_nf_dactual.'</td>
                                 <td width="" style="text-align:center">'.$dep_slip_no.'</td>
                                 <td width="" style="text-align:right">'.$dep_amount.'</td>
                             </tr>  
                             ';
                           } 

                             $remaining_balance = 0;
                             $view_query2 = mysqli_query($connection,"SELECT * FROM `t_deposits` 
                                                                     WHERE dep_status = 'DEPOSITED'
                                                                     and month(dep_date_for) = '$previous_month'
                                                                     and dep_date_actual BETWEEN 'start_of' and '$end_of'
                                                                     and year(dep_date_actual) = '$curr_year'");
                             while($row2 = mysqli_fetch_assoc($view_query2))
                             {
                                 $dep_amount_rem = $row2["dep_amount"];
                                 $remaining_balance += $dep_amount_rem;
                             } 


                             echo
                             '
                               <tr class="gradeX">
                                   <td class="hidden"><br></td>
                                   <td width="" style="text-align:center"><br></td>
                                   <td width="" style="text-align:left"><br></td>
                                   <td width="" style="text-align:right"><br></td>
                               </tr>  
                             ';
                             echo
                             '
                               <tr class="gradeX">
                                   <td style="text-align:left">Total Deposits</td>
                                   <td></td>
                                   <td></td>
                                   <td style="text-align:right">'.$total_deposit.'</td>
                               </tr>  
                             ';
                             echo
                             '
                               <tr class="gradeX">
                                   <td style="text-align:left">Add Balance</td>
                                   <td></td>
                                   <td></td>
                                   <td style="text-align:right; border-bottom: 2px double;">'.$remaining_balance.'</td>
                               </tr>  
                             ';
                             $total_balance = $total_deposit + $remaining_balance;
                             echo
                             '
                               <tr class="gradeX">
                                   <td style="text-align:left; font-weight:bold; ">TOTAL</td>
                                   <td></td>
                                   <td></td>
                                   <td style="text-align:right; border-bottom: 4px double;">'.$total_balance.'</td>
                               </tr>  
                             ';


                             //$selected_month = $nf_start;
                             $curryear = date('Y');

                             //Beginning Balance
                             $iss_start = mysqli_fetch_array(mysqli_query($connection, "SELECT or_no FROM `r_official_receipt` 
                                                                                                     WHERE or_status = 'PAID' or 'CANCELLED'
                                                                                                     and (month(or_create_date) = 
                                                                                                     '$nf_start'
                                                                                                     and year(or_create_date) = '$curryear')
                                                                                                     ORDER BY or_ID ASC"));
                             $iss_start_display = $iss_start[0];

                             $iss_end = mysqli_fetch_array(mysqli_query($connection, "SELECT or_no FROM `r_official_receipt` 
                                                                                                     WHERE or_status = 'PAID' or 'CANCELLED'
                                                                                                     and (month(or_create_date) = 
                                                                                                     '$nf_start'
                                                                                                     and year(or_create_date) = '$curryear')
                                                                                                     ORDER BY or_ID DESC"));
                             $iss_end_display = $iss_end[0];

                             $or_issued = $iss_start_display.'-'.$iss_end_display;
                          //echo $amount_sum;
                      }

                      else
                      {
                          $previous_month = date('m')-1;
                          $curr_month = date('m');
                          $curr_year = date('Y');


                          $view_query1 = mysqli_query($connection,"SELECT * FROM `t_deposits` 
                                                                  WHERE dep_status = 'DEPOSITED'
                                                                  and month(dep_date_for) = '$curr_month'
                                                                  and month(dep_date_actual) = '$curr_month'
                                                                  and year(dep_date_actual) = '$curr_year'
                                                                  ORDER BY dep_ID  DESC");
                          $total_deposit = 0;
                          while($row1 = mysqli_fetch_assoc($view_query1))
                          {
                              $dep_ID = $row1["dep_ID"];
                              $dep_acc_no = $row1["dep_acc_no"];
                              $dep_slip_no = $row1["dep_slip_no"];
                              $dep_amount = $row1["dep_amount"];
                              $dep_date_actual = new datetime($row1["dep_date_actual"]);
                              $dep_nf_dactual = $dep_date_actual->format('m/d/Y');
                              $total_deposit += $dep_amount;

                            echo
                            '
                            <tr class="gradeX">
                                <td class="hidden">'.$dep_ID.'</td>
                                <td width="" style="text-align:center">'.$dep_nf_dactual.'</td>
                                <td width="" style="text-align:center">'.$dep_slip_no.'</td>
                                <td width="" style="text-align:right">'.$dep_amount.'</td>
                            </tr>  
                            ';
                          } 


                          //echo $amount_sum;
                          

                          $remaining_balance = 0;
                          $view_query2 = mysqli_query($connection,"SELECT * FROM `t_deposits` 
                                                                  WHERE dep_status = 'DEPOSITED'
                                                                  and month(dep_date_for) = '$previous_month'
                                                                  and month(dep_date_actual) = '$curr_month'
                                                                  and year(dep_date_actual) = '$curr_year'");
                          while($row2 = mysqli_fetch_assoc($view_query2))
                          {
                              $dep_amount_rem = $row2["dep_amount"];
                              $remaining_balance += $dep_amount_rem;
                          } 


                          echo
                          '
                            <tr class="gradeX">
                                <td class="hidden"><br></td>
                                <td width="" style="text-align:center"><br></td>
                                <td width="" style="text-align:left"><br></td>
                                <td width="" style="text-align:right"><br></td>
                            </tr>  
                          ';
                          echo
                          '
                            <tr class="gradeX">
                                <td style="text-align:left">Total Deposits</td>
                                <td></td>
                                <td></td>
                                <td style="text-align:right">'.$total_deposit.'</td>
                            </tr>  
                          ';
                          echo
                          '
                            <tr class="gradeX">
                                <td style="text-align:left">Add Balance</td>
                                <td></td>
                                <td></td>
                                <td style="text-align:right; border-bottom: 2px double;">'.$remaining_balance.'</td>
                            </tr>  
                          ';
                          $total_balance = $total_deposit + $remaining_balance;
                          echo
                          '
                            <tr class="gradeX">
                                <td style="text-align:left; font-weight:bold; ">TOTAL</td>
                                <td></td>
                                <td></td>
                                <td style="text-align:right; border-bottom: 4px double;">'.$total_balance.'</td>
                            </tr>  
                          ';


                            $selected_month = date('m');
                            $curryear = date('Y');

                            //Beginning Balance
                            $iss_start = mysqli_fetch_array(mysqli_query($connection, "SELECT or_no FROM `r_official_receipt` 
                                                                                                    WHERE or_status = 'PAID' or 'CANCELLED'
                                                                                                    and (month(or_create_date) = 
                                                                                                    '$selected_month'
                                                                                                    and year(or_create_date) = '$curryear')
                                                                                                    ORDER BY or_ID ASC"));
                            $iss_start_display = $iss_start[0];

                            $iss_end = mysqli_fetch_array(mysqli_query($connection, "SELECT or_no FROM `r_official_receipt` 
                                                                                                    WHERE or_status = 'PAID' or 'CANCELLED'
                                                                                                    and (month(or_create_date) = 
                                                                                                    '$selected_month'
                                                                                                    and year(or_create_date) = '$curryear')
                                                                                                    ORDER BY or_ID DESC"));
                            $iss_end_display = $iss_end[0];

                            $or_issued = $iss_start_display.'-'.$iss_end_display;
                       
                      }


                      
          ?>      
          </tbody>                                 
        </table>

     </div>

     <div class="" style="font-size: 15px; font-family: arial">
      <br>
      <br>
      <p style="margin: 5px; text-align: center">
        I hereby certify on my official oath that the above is a true statement of all collections and deposits had by me during the period stated above for which Official Receipts Nos. <?php echo $or_issued; ?> inclusive, were actually issued by me in the amounts shown thereon. I also certify that I have not received money from whatever source without saving issued the necessary Official Receipt in Acknowledgement thereof. Collections received by sub-collectors are recorded above in lump-sum opposite their respective report numbers. I certify further that the balance shown above agrees with the balance appearing in my Cash Receipt Record.
      </p>
     </div>
     <!-- end panel-body -->
     <div class="panel" style="text-align: center">
        <br><br>
        <p style="font-family: arial">
          Prepared and Certified Correct:
        </p>
        <br><br>
        <p style="font-family: arial">
          <b>MS. MERLY B. GONZALBO</b><br>
          Collecting Officer<br>
        <!--   <?php echo date('F d, Y');?>  -->
        </p>
     </div>
  </div>
</div>