<table id="data-table-default" class="table table-striped table-bordered" style="font-size: 15px">
  <thead>
  <tr>
      <th class="hidden">ID</th>
      <th>Navigation Description</th>
      <th>Navigation Link</th>
      <th>Navigation Class</th>
      <th>Navigation Icon-Class</th>
      <th>Navigation Parent</th>
      <th>Status</th>
      <th style="text-align: center">Action</th>
  </tr>
  </thead>
  <tbody>
  <?php
      $view_query = mysqli_query($connection,"SELECT * FROM `r_navigation`");
      while($row = mysqli_fetch_assoc($view_query))
      {
          $nav_ID = $row["nav_ID"];
          $nav_desc = $row["nav_desc"];
          $nav_link = $row["nav_link"];
          $nav_class = $row["nav_class"];
          $nav_icon_class = $row["nav_icon_class"];
          $nav_parent = $row["nav_parent"];

          
          $nav_stat = $row["nav_active_stat"];
  ?>      
      <tr class="gradeX">
          <td class="hidden"><?php echo $nav_ID; ?></td>
          <td width=""><?php echo $nav_desc; ?></td>
          <td width=""><?php echo $nav_link; ?></td>
          <td width=""><?php echo $nav_class; ?></td>
          <td width=""><?php echo $nav_icon_class; ?></td>
          <td width=""><?php echo $nav_parent; ?></td>
          <td width=""><?php echo $nav_stat; ?></td>
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
