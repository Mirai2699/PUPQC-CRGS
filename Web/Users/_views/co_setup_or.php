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
      <h1 class="page-header">Setup Offical Receipt <small> Setup and Configuration</small></h1>
      <!-- end page-header -->
      
      <!-- begin panel -->
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title" style="font-size: 15px">Add Offical Receipt</h4>
        </div>
        <div class="panel-body">
              <form action="../_func/co_add_or.php" method="POST">

                 <div class="panel">  
                     <div class="row">
                       <div class="col-md-2">
                         <label>OR Prefix</label>
                         <input type="text" class="form-control" name="or_prefix" required>
                       </div>
                       <div class="col-md-1">
                         <label>Starting Count</label>
                         <input type="number" class="form-control" name="or_scount" required>
                       </div>
                       <div class="col-md-1">
                         <label>Ending Count</label>
                         <input type="number" class="form-control" name="or_ecount" required>
                       </div>
                       <div class="col-md-2">
                         <label>Start Date of OR</label>
                         <input type="date" class="form-control" name="or_sdate" required>
                       </div>
                       <div class="col-md-2">
                         <label>End Date of OR</label>
                         <input type="date" class="form-control" name="or_edate" required>
                       </div>
                     </div>
                 </div>        
                 
                  <div class="modal-footer" style="text-align: center">
                      <div class="col-md-12" style="text-align: right;">
                          <button type="submit" class="btn btn-primary" style=" font-size: 14px" name="add_or" >
                              <i class="fa fa-save"></i>
                               Save
                          </button>
                      </div>
                  </div>
               </form>
        </div>
      </div>
      <!-- end panel -->

      <!-- begin 2nd panel -->
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title" style="font-size: 15px">Manage UACS Type</h4>
        </div>
        <div class="panel-body">
              <?php //include("../_access_views/get_view_table_uacs_type.php");?>
        </div>
      </div>
      <!-- end panel -->


    </div>
    <!-- end #content -->
  </div>
  <!-- end page container -->
  

  <!--ON PAGE SCRIPTS-->

  
  <!--ON PAGE SCRIPTS-->
</body>
</html>
