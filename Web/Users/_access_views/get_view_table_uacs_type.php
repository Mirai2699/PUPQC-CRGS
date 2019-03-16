<table id="data-table-default" class="table table-striped table-bordered" style="font-size: 15px">
  <thead>
  <tr>
      <th class="hidden">ID</th>
      <th>UACS Type Name</th>
      <th>Status</th>
      <th>Timestamp</th>
      <th style="text-align: center">Action</th>
  </tr>
  </thead>
  <tbody>
  <?php
      $view_query = mysqli_query($connection,"SELECT * FROM `r_uacs_type`");
      while($row = mysqli_fetch_assoc($view_query))
      {
          $uacstype_ID = $row["uacs_type_ID"];
          $uacstype_name = $row["uacs_type_name"];
          $uacstype_stat = $row["uacs_stat"];
          $uacstype_timestamp = $row["uacs_timestamp"];
  ?>      
      <tr class="gradeX">
          <td class="hidden"><?php echo $uacstype_ID; ?></td>
          <td width=""><?php echo $uacstype_name; ?></td>
          <td width=""><?php echo $uacstype_stat; ?></td>
          <td width=""><?php echo $uacstype_timestamp; ?></td>
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
