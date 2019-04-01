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
    margin: 3px;
    border: 1px solid black;
    border-collapse: collapse;
  }
  .borderless{
    border-bottom: 0px;
    border-left: 0px;
    border-right: 0px;
    border-top:0px;
    border-collapse: separate;
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
        <p style="font-size: 16px; text-align: right; font-style: italic; font-family: times new roman">
           Appendix 29
        </p>

        <p style="font-size: 16px; text-align: center">
           Republic of the Philippines<br>
           POLYTECHNIC UNIVERSITY OF THE PHILPPINES<br>
           <b>Quezon City Branch</b><br>
           Don Fabian Street, Brgy. Commonwealth<br>
           Quezon City<br>
        </p>
        <br>
        <p style="font-size: 18px; text-align: center">
           <b>CASH RECEIPTS RECORD<br>
           </b> 
        </p>

        <table class="borderless" style="width: 100%">
          <tr>
            <td class="borderless" style="width: 70%">Entity Name: <b style="text-decoration: underline;">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</b></td>
            <td class="borderless" style="width: 30%">Year: <b style="text-decoration: underline;"><?php echo date('Y');?></b></td>
          </tr>
          <tr>
            <?php include("../_access_views/get_view_details_fund_cluster.php");?>
            <td class="borderless" style="width: 70%">Fund Cluster:<b style="text-decoration: underline;"> <?php echo $fc_code; ?></b></td>
            <td class="borderless" style="width: 30%">Period: <b style="text-decoration: underline;">
              <?php
                $firstday = date("Y-m-01");
                $endday = date("t", strtotime($firstday));
                $displaydate = date("F 01").'-'.$endday.', '.date('Y');
                echo $displaydate;
              ?>
            </b></td>
          </tr>
        </table>
        <br><br>
        
        <?php

              include("../../../db_con.php");

              echo
              ' 
              <style>
                table, td, th{
                  border: 1px solid black;
                  border-collapse: collapse;
                }
              </style>
                <table>
                  <thead style="text-align:center">
                  <tr>
                      <th colspan="3">IRYNNE P. GATCHALIAN <br> Accountable Officer</th>
                      <th colspan="3">Collecting and Disbursing Officer <br> Official Designation</th>
                      <th colspan="3">PUP Quezon City <br> Station</th>
                      
                  </tr>
                  </thead>
                  <tbody>
              ';
              echo
              '  <tr style="text-align: center">
                    <td rowspan="2">Date</td>
                    <td rowspan="2">Reference <br>
                                    No./.OR   <br>
                                    No./DS
                    </td>
                    <td rowspan="2">Payor</td>
                    <td colspan="2"> UACS Code</td>
                    <td rowspan="2">Nature<br> of<br> Collection</td>
                    <td rowspan="2">Collection</td>
                    <td rowspan="2">Deposit</td>
                    <td rowspan="2" colspan="1">Undeposited<br>Collection</td>
                    
                </tr>
              ';
              echo
              ' <tr style="text-align: center">
                    <td scope="row">MFM/PAP</td>
                    <td>Object Code</td>
                </tr>
              ';
              
              
              $view_query = mysqli_query($connection,"SELECT * FROM `t_cash_receipt_record` 
                                                               ORDER BY crt_ID ASC ");
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

                echo
                '
                  <tr>
                      <td rowspan="2" style="width:10%">'.$nf_date.'</td>
                      <td rowspan="2" style="width:10%">'.$ref_no.'</td>
                      <td rowspan="2" style="width:20%">'.$payor.'</td>
                      <td colspan="2" rowspan="2" style="width:5%"></td>
                      <td rowspan="2" style="width:30%">
                      '
                           .$crt_nat_col.
                      '</td>
                      <td rowspan="2" style="width:4%">'.$crt_collection.'</td>
                      <td rowspan="2" style="width:4%">'.$crt_deposit.'</td>
                      <td rowspan="2" style="width:4%">'.$crt_un_deposit.'</td>
                  </tr>
                ';
                echo
                ' <tr style="text-align: center">
                      

                  </tr>
                ';
               
                


              }
           

              echo 
              '
                  </tbody>                                 
                </table>

              ';
        ?>   

     </div>

     <div class="" style="font-size: 17px; font-family: arial; text-align: center">
        <br>
        <br>
        <label><b>CERTIFICATION</b></label>
        <p style="margin: 20px">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        I hereby certify on my official oath that the foregoing is a correct and complete record of all collections and deposits had by me in my capacity as  Collecting Officer  of PUP Quezon City  during the period from 
        <?php
          $firstday = date("Y-m-01");
          $endday = date("t", strtotime($firstday));
          $displaydate = date("F 01").'-'.$endday.', '.date('Y');
          echo $displaydate;
        ?>
        inclusives, as indicated in the corresponding columns.
        </p>
     </div>
     <!-- end panel-body -->
     <div class="panel" style="text-align: center">
        <br><br>
        <p style="font-family: arial">
          <u>MS. MERLY B. GONZALBO</u><br>
          Name and Signature<br><br>
          <u><?php echo date('F d, Y');?></u>
          <br>
          Date
        </p>
     </div>
  </div>
</div>