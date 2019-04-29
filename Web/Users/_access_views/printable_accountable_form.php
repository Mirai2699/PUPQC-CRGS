<!-- <link href="../../../resources/custom/print_format.css" media="print" rel="stylesheet" /> -->
<style type="text/css">
  @page {
    size:landscape;
    margin-top: 0.4in; 
    margin-left: 0.7in;
    margin-right: 0.7in;
    margin-bottom: 0.7in;
   
  }
  table, td, th{
    margin: 3px;
    border: 1px solid black;
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
        <p style="font-size: 16px; text-align: center">
           Republic of the Philippines<br>
           POLYTECHNIC UNIVERSITY OF THE PHILPPINES<br>
           <b>Quezon City Branch</b><br>
           Don Fabian Street, Brgy. Commonwealth<br>
           Quezon City<br>
        </p>

        <p style="font-size: 18px; text-align: center">
           <b>REPORT OF ACCOUNTABILITY FOR ACCOUNTABLE FORMS<br>
           For the month of
           <?php 
               if(isset($_GET['getID']))
               {
                   $acc_form_ID = $_GET['getID'];

                   $get_acc_wfv = mysqli_query($connection, "SELECT * FROM `t_accountable_forms_wfv` 
                                                                      WHERE af_wfv_ID = '$acc_form_ID'");
                   while($row = mysqli_fetch_assoc($get_acc_wfv))
                   {  
                      $default = $row['af_wfv_datestamp'];
                      $af_wfv_monthstamp = new datetime($row['af_wfv_datestamp']);
                      $month = $af_wfv_monthstamp->format('F');
                   }

                  
                   $endday = date("t", strtotime($default));
                   $displaydate = $month.' '.date("01").'-'.$endday.', '.date('Y');
                   echo $displaydate;
                   

               }
               else
               {  
                   $firstday = date("Y-m-01");
                   $endday = date("t", strtotime($firstday));
                   $displaydate = date("F 01").'-'.$endday.' '.date('Y');
                   echo $displaydate;

                }
           ?>
           </b> <br>
        </p>
        
        <table id="table-default" class="table table-striped table-bordered" style="font-size: 17px; width: 100%">
          <tbody>
          <?php
              echo
              '
                <tr>
                  <td colspan="3" style="text-align: center; font-weight: bold; border: 2px solid black;">Accountable Forms</td>
                  <td colspan="3" style="text-align: center; font-weight: bold; border: 2px solid black;">Beginning Balance</td>
                  <td colspan="3" style="text-align: center; font-weight: bold; border: 2px solid black;">Receipt</td>
                  <td colspan="3" style="text-align: center; font-weight: bold; border: 2px solid black;">Issuance</td>
                  <td colspan="3" style="text-align: center; font-weight: bold; border: 2px solid black;">Ending Balance</td>
                <tr>
              ';

              echo 
              '
                <tr>
                  <td colspan="3" style="text-align: center; border: 1px solid black;"></td>
                  <td colspan="1" style="text-align: center; border: 1px solid black;"></td>
                  <td colspan="2" style="text-align: center; border: 1px solid black;">Inclusive Serial Nos.</td>
                  <td colspan="1" style="text-align: center; border: 1px solid black;"></td>
                  <td colspan="2" style="text-align: center; border: 1px solid black;">Inclusive Serial Nos.</td>
                  <td colspan="1" style="text-align: center; border: 1px solid black;"></td>
                  <td colspan="2" style="text-align: center; border: 1px solid black;">Inclusive Serial Nos.</td>
                  <td colspan="1" style="text-align: center; border: 1px solid black;"></td>
                  <td colspan="2" style="text-align: center; border: 1px solid black;">Inclusive Serial Nos.</td>
                </tr>
              ';

              echo
              '
                <tr>

                  <td>Name of Form</td>
                  <td>Number</td>
                  <td>Face Value</td>

                  <td>Qty.</td>
                  <td>From</td>
                  <td>To</td>

                  <td>Qty.</td>
                  <td>From</td>
                  <td>To</td>

                  <td>Qty.</td>
                  <td>From</td>
                  <td>To</td>

                  <td>Qty.</td>
                  <td>From</td>
                  <td>To</td>
                <tr>
              ';
              if(isset($_GET['getID']))
              {

                $acc_form_ID = $_GET['getID'];

                echo
                '
                  <tr>
                    <td colspan="1" style="font-weight:bold">A. WITH FACE VALUE</td>
                    <td></td>
                    <td></td>

                    <td></td>
                    <td></td>
                    <td></td>

                    <td></td>
                    <td></td>
                    <td></td>

                    <td></td>
                    <td></td>
                    <td></td>

                    <td></td>
                    <td></td>
                    <td></td>

                  <tr>
                ';

                echo
                '
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>

                    <td></td>
                    <td></td>
                    <td></td>

                    <td></td>
                    <td></td>
                    <td></td>

                    <td></td>
                    <td></td>
                    <td></td>

                    <td></td>
                    <td></td>
                    <td></td>

                  <tr>
                ';

                 $get_acc_wfv = mysqli_query($connection, "SELECT * FROM `t_accountable_forms_wfv` 
                                                                    WHERE af_wfv_ID = '$acc_form_ID'");
                 while($row = mysqli_fetch_assoc($get_acc_wfv))
                 {
                    $bb_total_count = $row['af_wfv_bb_qty'];
                    $bb_start_display = $row['af_wfv_bb_from'];
                    $bb_end_display = $row['af_wfv_bb_to'];
                    
                    $iss_total_count = $row['af_wfv_iss_qty'];
                    $iss_start_display = $row['af_wfv_iss_from'];
                    $iss_end_display = $row['af_wfv_iss_to'];

                    $eb_total_count = $row['af_wfv_eb_qty'];
                    $eb_start_display = $row['af_wfv_eb_from'];
                    $eb_end_display = $row['af_wfv_eb_to'];
                 }
                

                  echo
                  '
                    <tr>
                      <td colspan="1" style="font-weight:bold">B. WITHOUT FACE VALUE</td>
                      <td></td>
                      <td></td>

                      <td style="font-weight: bold">'.$bb_total_count.'</td>
                      <td>'.$bb_start_display.'</td>
                      <td>'.$bb_end_display.'</td>

                      <td></td>
                      <td></td>
                      <td></td>

                      <td style="font-weight: bold">'.$iss_total_count.'</td>
                      <td>'.$iss_start_display.'</td>
                      <td>'.$iss_end_display.'</td>

                      <td style="font-weight: bold">'.$eb_total_count.'</td>
                      <td>'.$eb_start_display.'</td>
                      <td>'.$eb_end_display.'</td>

                    <tr>
                  ';
                  echo
                  '
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>

                      <td></td>
                      <td></td>
                      <td></td>

                      <td></td>
                      <td></td>
                      <td></td>

                      <td></td>
                      <td></td>
                      <td></td>

                      <td></td>
                      <td></td>
                      <td></td>

                    <tr>
                  ';
                  echo
                  '
                    <tr>
                      <td style="font-weight: bold">TOTAL:</td>
                      <td></td>
                      <td></td>

                      <td style="font-weight: bold">'.$bb_total_count.'</td>
                      <td></td>
                      <td></td>

                      <td></td>
                      <td></td>
                      <td></td>

                      <td style="font-weight: bold">'.$iss_total_count.'</td>
                      <td></td>
                      <td></td>

                      <td style="font-weight: bold">'.$eb_total_count.'</td>
                      <td></td>
                      <td></td>
                    <tr>
                  ';
              }
              else
              {
                  echo
                  '
                    <tr>
                      <td colspan="1" style="font-weight:bold">A. WITH FACE VALUE</td>
                      <td></td>
                      <td></td>

                      <td></td>
                      <td></td>
                      <td></td>

                      <td></td>
                      <td></td>
                      <td></td>

                      <td></td>
                      <td></td>
                      <td></td>

                      <td></td>
                      <td></td>
                      <td></td>

                    <tr>
                  ';

                  echo
                  '
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>

                      <td></td>
                      <td></td>
                      <td></td>

                      <td></td>
                      <td></td>
                      <td></td>

                      <td></td>
                      <td></td>
                      <td></td>

                      <td></td>
                      <td></td>
                      <td></td>

                    <tr>
                  ';

                  $selected_month = date('m');
                  $curryear = date('Y');

                  //Beginning Balance
                  $bb_start = mysqli_fetch_array(mysqli_query($connection, "SELECT or_no FROM `r_official_receipt` 
                                                                                          WHERE month(or_create_date) = '$selected_month'
                                                                                          and year(or_create_date) = '$curryear'
                                                                                          ORDER BY or_ID ASC"));
                  $bb_start_display = $bb_start[0];

                  $bb_end = mysqli_fetch_array(mysqli_query($connection, "SELECT or_no FROM `r_official_receipt` 
                                                                                          WHERE month(or_create_date) = '$selected_month'
                                                                                          and year(or_create_date) = '$curryear'
                                                                                          ORDER BY or_ID DESC"));
                  $bb_end_display = $bb_end[0];

                  $bb_start_convert = (int)(substr($bb_start[0],4));
                  $bb_end_convert = (int)(substr($bb_end[0],4));

                  $bb_total_count = ($bb_end_convert - $bb_start_convert) + 1;


                  //Issuance Balance
                  $iss_start = mysqli_fetch_array(mysqli_query($connection, "SELECT or_no FROM `r_official_receipt` 
                                                                                          WHERE or_status = 'PAID' or 'CANCELLED'
                                                                                          and (month(or_create_date) = '$selected_month'
                                                                                          and year(or_create_date) = '$curryear')
                                                                                          ORDER BY or_ID ASC"));
                  $iss_start_display = $iss_start[0];

                  $iss_end = mysqli_fetch_array(mysqli_query($connection, "SELECT or_no FROM `r_official_receipt` 
                                                                                          WHERE or_status = 'PAID' or 'CANCELLED'
                                                                                          and (month(or_create_date) = '$selected_month'
                                                                                          and year(or_create_date) = '$curryear')
                                                                                          ORDER BY or_ID DESC"));
                  $iss_end_display = $iss_end[0];

                  $iss_start_convert = (int)(substr($iss_start[0],4));
                  $iss_end_convert = (int)(substr($iss_end[0],4));

                  $iss_total_count = ($iss_end_convert - $iss_start_convert) + 1;

                  //Ending Balance
                  $eb_start = mysqli_fetch_array(mysqli_query($connection, "SELECT or_no FROM `r_official_receipt` 
                                                                                          WHERE or_status = 'PENDING'
                                                                                          and (month(or_create_date) = '$selected_month'
                                                                                          and year(or_create_date) = '$curryear')
                                                                                          ORDER BY or_ID ASC"));
                  $eb_start_display = $eb_start[0];

                  $eb_end = mysqli_fetch_array(mysqli_query($connection, "SELECT or_no FROM `r_official_receipt` 
                                                                                          WHERE or_status = 'PENDING'
                                                                                          and (month(or_create_date) = '$selected_month'
                                                                                          and year(or_create_date) = '$curryear')
                                                                                          ORDER BY or_ID DESC"));
                  $eb_end_display = $eb_end[0];

                  $eb_start_convert = (int)(substr($eb_start[0],4));
                  $eb_end_convert = (int)(substr($eb_end[0],4));

                  $eb_total_count = ($eb_end_convert - $eb_start_convert) + 1;

                

                    echo
                    '
                      <tr>
                        <td colspan="1" style="font-weight:bold">B. WITHOUT FACE VALUE</td>
                        <td></td>
                        <td></td>

                        <td style="font-weight: bold">'.$bb_total_count.'</td>
                        <td>'.$bb_start_display.'</td>
                        <td>'.$bb_end_display.'</td>

                        <td></td>
                        <td></td>
                        <td></td>

                        <td style="font-weight: bold">'.$iss_total_count.'</td>
                        <td>'.$iss_start_display.'</td>
                        <td>'.$iss_end_display.'</td>

                        <td style="font-weight: bold">'.$eb_total_count.'</td>
                        <td>'.$eb_start_display.'</td>
                        <td>'.$eb_end_display.'</td>

                      <tr>
                    ';
                    echo
                    '
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td></td>
                        <td></td>
                        <td></td>

                        <td></td>
                        <td></td>
                        <td></td>

                        <td></td>
                        <td></td>
                        <td></td>

                        <td></td>
                        <td></td>
                        <td></td>

                      <tr>
                    ';
                    echo
                    '
                      <tr>
                        <td style="font-weight: bold">TOTAL:</td>
                        <td></td>
                        <td></td>

                        <td style="font-weight: bold">'.$bb_total_count.'</td>
                        <td></td>
                        <td></td>

                        <td></td>
                        <td></td>
                        <td></td>

                        <td style="font-weight: bold">'.$iss_total_count.'</td>
                        <td></td>
                        <td></td>

                        <td style="font-weight: bold">'.$eb_total_count.'</td>
                        <td></td>
                        <td></td>
                      <tr>
                    ';
              }

                  
             
          ?>      
          </tbody>                                 
        </table>

     </div>

     <div class="" style="font-size: 17px; font-family: arial">
      <br>
      <br>
      <label><b>CERTIFICATION</b></label>
      <p style="margin: 20px">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I hereby  certify that the foregoing is a true statement of all accountable forms received, issued and transferred by me during the period above-stated and that the beginning and ending balances are correct.
      </p>
     </div>
     <!-- end panel-body -->
     <div class="panel" style="text-align: center">
        <br><br><br>
        <p style="font-family: arial">
          <b>MS. MERLY B. GONZALBO</b><br>
          Collecting Officer<br>
          <!-- <?php echo date('F d, Y');?>  -->
        </p>
     </div>
  </div>
</div>