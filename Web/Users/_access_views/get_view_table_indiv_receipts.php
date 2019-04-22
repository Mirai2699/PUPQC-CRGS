<table id="data-table-default" class="table table-striped table-bordered" style="font-size: 15px">
  <thead>
  <tr>
      <th class="hidden">ID</th>
      <th>Date of Receipt</th>
      <th>OR/DS Number</th>
      <th>Payor</th>
      <th>Total Amount</th>
      <th style="text-align: center">Action</th>
  </tr>
  </thead>
  <tbody>
  <?php
      $view_query = mysqli_query($connection,"SELECT * FROM `t_cr_register_master` 
                                              WHERE cr_stat = 'Active'
                                              ORDER BY cr_timestamp  DESC");
      while($row = mysqli_fetch_assoc($view_query))
      {
          $cr_ID = $row["cr_ID"];
          $cr_or_num = $row["cr_or_num"];
          $cr_payor = $row["cr_payor"];
          $cr_date_payment = new datetime($row["cr_date_payment"]);
          $cr_nf_date_payment = $cr_date_payment->format('F d, Y');
          $cr_total_payment = $row["cr_total_payment"];
          $cr_stat = $row["cr_stat"];
          $cr_timestamp = $row["cr_timestamp"];

  ?>      
      <tr class="gradeX">
          <td class="hidden"><?php echo $cr_ID; ?></td>
          <td width=""><?php echo $cr_nf_date_payment; ?></td>
          <td width=""><?php echo $cr_or_num; ?></td>
          <td width=""><?php echo $cr_payor; ?></td>
          <td width="">₱ <?php echo $cr_total_payment; ?></td>
          <td style="text-align:center">
            <a href="co_review_receipt.php?getID=<?php echo $cr_ID?>" class="btn btn-info" title="View Details">
              <i class="ion-eye"></i>&nbsp;
              View
            </a>
          </td>
      </tr>  
  <?php } ?>
  </tbody>                                 
</table>

<!--MODAL INCLUDES-->

