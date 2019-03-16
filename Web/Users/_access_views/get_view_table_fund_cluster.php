<table id="data-table-default" class="table table-striped table-bordered" style="font-size: 15px">
  <thead>
  <tr>
      <th class="hidden">ID</th>
      <th>Fund Cluster Description</th>
      <th>Fund Cluster Code</th>
      <th>Status</th>
      <th>Timestamp</th>
      <th style="text-align: center">Action</th>
  </tr>
  </thead>
  <tbody>
  <?php
      $view_query = mysqli_query($connection,"SELECT * FROM `r_fund_cluster`");
      while($row = mysqli_fetch_assoc($view_query))
      {
          $fc_ID = $row["fc_ID"];
          $fc_desc = $row["fc_desc"];
          $fc_code = $row["fc_code"];
          $fc_stat = $row["fc_stat"];
          $fc_timestamp = $row["fc_timestamp"];
  ?>      
      <tr class="gradeX">
          <td class="hidden"><?php echo $fc_ID; ?></td>
          <td width=""><?php echo $fc_desc; ?></td>
          <td width=""><?php echo $fc_code; ?></td>
          <td width=""><?php echo $fc_stat; ?></td>
          <td width=""><?php echo $fc_timestamp; ?></td>
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
