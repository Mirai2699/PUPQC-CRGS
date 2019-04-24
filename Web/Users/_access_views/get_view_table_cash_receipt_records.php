
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
              <th colspan="2">PUP Quezon City <br> Station</th>
          </tr>
          </thead>
          <tbody>
      ';
      echo
      '
        <tr>
            <td>Date</td>
            <td>Reference</td>
            <td>Payor</td>
            <td>UACS Code
              
            </td>
            <td>Nature<br> of<br> Collection</td>
            <td>Collection</td>
            <td>Deposit</td>
            <td>Undeposited<br>Collection</td>
        </tr>
      ';
      
      $view_query = mysqli_query($connection,"SELECT * FROM `t_cr_register_master` AS CRM 
                                                       INNER JOIN `t_cr_register_income_references` AS CRIR
                                                       ON CRM.cr_or_num = CRIR.cr_ir_ornum_ref 
                                                       LEFT OUTER JOIN `t_deposits` AS DEP
                                                       ON CRM.cr_date_payment = DEP.dep_date_actual
                                                       GROUP BY CRM.cr_or_num
                                                       ORDER BY CRM.cr_or_num ASC ");
      while($row = mysqli_fetch_assoc($view_query))
      {
        $or_num = $row['cr_or_num'];
        $or_payor = $row['cr_payor'];
        $amount = $row['cr_total_payment'];
        $date = new datetime($row['cr_date_payment']);
        $nf_date = $date->format('F d');
        $dep_slip_no = $row['dep_slip_no'];

       
        $get_particulars = mysqli_query($connection, "SELECT * FROM `t_cr_register_income_references` AS CRIR2
                                                              INNER JOIN `r_uacs` AS UACS
                                                              ON CRIR2.cr_ir_uac_ID_ref = UACS.uacs_ID
                                                              WHERE CRIR2.cr_ir_ornum_ref = '$or_num'
                                                              ");
        $all_particulars = '';
        while($row_part = mysqli_fetch_assoc($get_particulars))
        {
          $part_desc = $row_part['uacs_acc_title'];
          $all_particulars = $all_particulars.''.$part_desc.',';
        }
        echo
        '
          <tr>
              <td>'.$nf_date.'</td>
              <td>'.$or_num.'</td>
              <td>'.$or_payor.'</td>
              <td></td>
              <td>'
                   .$all_particulars.
              '</td>
              <td>'.$amount.'</td>
              <td></td>
              <td>'.$amount.'</td>
          </tr>
        ';
        


      }
      echo
      '
        <tr>
            <td>'.$nf_date.'</td>
            <td>'.$dep_slip_no.'</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>'.$amount.'</td>
            <td></td>
        </tr>
      ';
     



      echo 
      '
          </tbody>                                 
        </table>

      ';
  ?>      
 
