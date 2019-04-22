<?php 
  include("../../utilities/header.php");
  include("../../utilities/title_display.php");
  include("../../utilities/Notification.php");
  include("../../utilities/navibar.php");
  include("../../utilities/BaseJs.php");
  include("../../utilities/Table_Default.php");

?>
    <title><?php echo $title_name; ?> | PUPQC-CRGS</title>
    
    <!-- begin #content -->
    <div id="content" class="content">
      <!-- begin breadcrumb -->
      <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Page Options</a></li>
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
      <!-- end breadcrumb -->
      <!-- begin page-header -->
      <h1 class="page-header">Configure Navigations <small>Add and Modify</small></h1>
      <hr style="background-color: black">
      <!-- end page-header -->
      
      <!-- begin panel -->
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title" style="font-size: 16px">Add Navigation</h4>
        </div>
        <div class="panel-body">
          <form action="../_func/admin_insert_func.php" method="POST">
            <!-- FIRST ROW -->
            <div class="row">
              <div class="col-md-3">
                  <label>Navigation Description</label>
                  <input type="text" class="form-control" name="nav_desc" required/>
              </div>
              <div class="col-md-3">
                  <label>Navigation Link</label>
                  <input type="text" class="form-control" name="nav_link" required/>
              </div>
              <div class="col-md-2">
                  <label>Navigation Class</label>
                  <input type="text" class="form-control" name="nav_class" required/>
              </div>
              <div class="col-md-2">
                  <label>Navigation Icon-Class</label>
                  <input type="text" class="form-control" name="nav_icon" />
              </div>
              <div class="col-md-2">
                  <label>Navigation Parent (If Child)</label>
                  <select class="form-control" name="nav_parent">
                    <option value="" selected disabled> -- Select Parent Nav -- </option>
                    <?php
                        $view_navs = mysqli_query($connection,"SELECT * FROM `r_navigation` WHERE nav_active_stat = 'Active' and nav_class = 'has-sub'");
                        while($nv = mysqli_fetch_array($view_navs))
                        {
                          $nv_ID = $nv["nav_ID"];
                          $nv_desc = $nv["nav_desc"];
                    ?>
                    <option value="<?php echo $nv_ID?>"><?php echo $nv_desc ?></option>
                    <?php } ?>
                  </select>
              </div>
            </div>
            <!-- FIRST ROW -->
            <!-- SECOND ROW -->
            <div class="row">
              <div class="col-md-12" style="text-align: right">
                <button type="submit" class="btn btn-primary" name="add_navigation" style="font-size: 16px; margin-top: 10px;">
                  <i class="fa fa-save"></i>
                  Save
                </button>
              </div>
            </div>
            <!-- SECOND ROW -->
          </form>
        </div>
      </div>
      <!-- end panel -->

      <!-- START TABLE -->
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title" style="font-size: 16px">Manage Navigation</h4>
        </div>
        <div class="panel-body">
          <!-- FIRST ROW -->
          <?php include("../_access_views/get_view_table_navigations.php");?>
          <!-- FIRST ROW -->
        </div>
      </div>
      <!-- END TABLE -->
    </div>
    <!-- end #content -->
  </div>
  <!-- end page container -->
  

  <!--ON PAGE SCRIPTS--><!-- 
  <script>
    $(document).ready(function() {
      App.init();
    });
  </script> -->
 
  <!--ON PAGE SCRIPTS-->
</body>
</html>
