
<?php

      include("../../../db_con.php");
      include("../_access_views/get_view_details_fund_cluster.php");
      echo
      '
        <p style="font-size: 18px">
          Cash Receipt Record for the Month of April
        </p>
        <div class="panel" style="background-color:#262626; padding:1px"></div>
      ';
      $curryear = date('Y');
      $firstday = date("Y-m-01");
      $endday = date("t", strtotime($firstday));
      $displaydate = date("F 01").'-'.$endday.', '.date('Y');
      
      echo
      ' 
      <style>
        table, td, th{
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
      </style>
      <table class="borderless" style="width: 100%; font-size: 15px">
        <tr>
          <td class="borderless" style="width: 70%">Entity Name: <b style="text-decoration: underline;">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</b></td>
          <td class="borderless" style="width: 30%">Year: <b style="text-decoration: underline;">'.$curryear.'</b></td>
        </tr>
        <tr>
          <td class="borderless" style="width: 70%">Fund Cluster:<b style="text-decoration: underline;">'.$fc_code.'</b></td>
          <td class="borderless" style="width: 30%">Period: <b style="text-decoration: underline;">
            '.$displaydate.'
          </b></td>
        </tr>
      </table>
      <br>
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
              <td rowspan="2" style="width:5%">'.$nf_date.'</td>
              <td rowspan="2" style="width:5%">'.$ref_no.'</td>
              <td rowspan="2" style="width:10%">'.$payor.'</td>
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
 
