<table id="data-table-default" class="table table-striped table-bordered" style="font-size: 15px">
  <thead>
  <tr>
      <th class="hidden">ID</th>
      <th>UACS Account Title</th>
      <th>UACS Type</th>
      <th>Fund Cluster</th>
      <th>Old Code</th>
      <th>New Code</th>
      <th style="text-align: center">Action</th>
  </tr>
  </thead>
  <tbody>
  <?php
      $view_query = mysqli_query($connection,"SELECT * FROM `r_uacs` AS UACS
                                                 INNER JOIN `r_uacs_type` AS UTYPE 
                                                 ON UACS.uacs_type = UTYPE.uacs_type_ID
                                                 INNER JOIN `r_fund_cluster` AS FC 
                                                 ON UACS.uacs_fund_cluster = FC.fc_ID
                                              WHERE uacs_acc_stat = 'Active'");
      while($row = mysqli_fetch_assoc($view_query))
      {
          $uacs_ID = $row["uacs_ID"];
          $uacs_desc = $row["uacs_acc_title"];
          $uacs_type = $row["uacs_type"];
          $uacs_oac = $row["uacs_acc_code_old"];
          $uacs_nac = $row["uacs_acc_code_new"];
          $uacs_fc = $row["uacs_fund_cluster"];
          $uacs_stat = $row["uacs_acc_stat"];
          $uacs_timestamp = $row["uacs_acc_timestamp"];

          $fc_desc = $row["fc_desc"];
          $utype_name = $row["uacs_type_name"];
  ?>      
      <tr class="gradeX">
          <td class="hidden"><?php echo $uacs_ID; ?></td>
          <td width=""><?php echo $uacs_desc; ?></td>
          <td width=""><?php echo $utype_name; ?></td>
          <td width=""><?php echo $fc_desc; ?></td>
          <td width=""><?php echo $uacs_oac; ?></td>
          <td width=""><?php echo $uacs_nac; ?></td>
          <td style="text-align:center">
            <a href="#edit_navigation<?php echo $nav_ID?>" data-toggle="modal" class="btn btn-warning" title="Modify Details">
              <i class="ion-compose"></i>&nbsp;
              Edit
            </a>
          </td>
      </tr>  
  <?php } ?>
  </tbody>                                 
</table>

<!--MODAL INCLUDES-->
<?php include("../_access_views/get_view_modal_edit_navigations.php");?>
