
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
          <thead>
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
            <td rowspan="2" colspan="2">Undeposited<br>Collection</td>
            
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
              <td rowspan="2">'.$nf_date.'</td>
              <td rowspan="2">'.$ref_no.'</td>
              <td rowspan="2">'.$payor.'</td>
              <td colspan="2"></td>
              <td rowspan="2">
              '
                   .$crt_nat_col.
              '</td>
              <td rowspan="2">'.$crt_collection.'</td>
              <td rowspan="2">'.$crt_deposit.'</td>
              <td rowspan="2">'.$crt_un_deposit.'</td>
          </tr>
        ';
        echo
        ' <tr style="text-align: center">
              <td></td>
              <td></td>
          </tr>
        ';
        


      }
   



      echo 
      '
          </tbody>                                 
        </table>

      ';
  ?>      
 
