<?php
      $get_ID = $_GET['getID'];

      
      $get_particulars = mysqli_query($connection, "SELECT * FROM `t_cr_register_income_references` AS CRIR2
                                                            INNER JOIN `r_uacs` AS UACS
                                                            ON CRIR2.cr_ir_uac_ID_ref = UACS.uacs_ID
                                                            WHERE CRIR2.cr_ir_ornum_ref = '$cr_or_num'
                                                            ");
      $total = 0;
      while($row_part = mysqli_fetch_assoc($get_particulars))
      {
        $part_desc = $row_part['uacs_acc_title'];
        $part_amount = $row_part['cr_ir_amount'];
        $display_part = '
                         <tr>
                           <td style="width: 600px">
                              '.$part_desc.'
                           </td>
                           <td style="width: 300px">
                              ₱ '.$part_amount.'
                           </td>
                          </tr>';
       // echo $part_desc.'-'.$part_amount.'<br>';
          echo $display_part;
          $total = $total + $part_amount;
          $nf_total = number_format((float)$total, 2, '.', '');
      }

?>      
