
<table id="data-table-select" class="table table-striped table-bordered" style="font-size: 15px">
  <thead>
  <tr>
      <th class="hidden">ID</th>
      <th>Bank Accunt No.</th>
      <th>Deposit Slip No.</th>
      <th>Amount</th>
      <th>Date of Collection</th>
      <th>Actual Date of Deposit</th>
      <th style="text-align: center">Status</th>
  </tr>
  </thead>
  <tbody>
  <?php
      $currmonth = date('m');
      $view_query1 = mysqli_query($connection,"SELECT * FROM `t_deposits` 
                                              WHERE dep_status = 'DEPOSITED'
                                              and month(dep_date_for) = '$currmonth'
                                              ORDER BY dep_ID  DESC");
      while($row1 = mysqli_fetch_assoc($view_query1))
      {
          $dep_ID = $row1["dep_ID"];
          $dep_acc_no = $row1["dep_acc_no"];
          $dep_slip_no = $row1["dep_slip_no"];
          $dep_amount = $row1["dep_amount"];
          $dep_date_for = $row1["dep_date_for"];
          $dep_date_actual = $row1["dep_date_actual"];
          $dep_status = $row1["dep_status"];

  ?>      
      <tr class="gradeX">
          <td class="hidden"><?php echo $dep_ID; ?></td>
          <td width=""><?php echo $dep_acc_no; ?></td>
          <td width=""><?php echo $dep_slip_no; ?></td>
          <td width="">₱<?php echo $dep_amount; ?></td>
          <td width=""><?php echo $dep_date_for; ?></td>
          <td width=""><?php echo $dep_date_actual; ?></td>
          <td style="text-align:center">
             <?php echo $dep_status; ?>
          </td>
      </tr>  
  <?php } ?>
  </tbody>                                 
</table>

<!--MODAL INCLUDES-->

