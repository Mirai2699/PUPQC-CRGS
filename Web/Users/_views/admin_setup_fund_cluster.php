<?php 
  include("../../utilities/header.php");
  include("../../utilities/Notification.php");
  include("../../utilities/navibar.php");
  include("../../utilities/BaseJs.php");
  include("../../utilities/Table_Default.php");
?>
    <title>Configure Fund Clusters | PUPQC-CRGS</title>
    
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
      <h1 class="page-header">Configure Fund Clusters <small> Setup and Configuration</small></h1>
      <!-- end page-header -->
      
      <!-- begin panel -->
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title" style="font-size: 15px">Add Fund Cluster</h4>
        </div>
        <div class="panel-body">
              <form action="../_func/admin_insert_func.php" method="POST">
                 
                  <div class="modal-body" style="text-align: justify; font-size: 16px">
                      <div class="panel">  
                          <div class="row">
                            <div class="col-md-4">
                              <label>Fund Cluster Description</label>
                              <input type="text" class="form-control" name="fc_desc" required>
                            </div>
                            <div class="col-md-4">
                              <label>Fund Cluster Code</label>
                              <input type="text" class="form-control" name="fc_code" required>
                            </div>

                          </div>
                      </div>                           
                  </div>
                  <div class="modal-footer" style="text-align: center">
                      <div class="col-md-12" style="text-align: right;">
                          <button type="submit" class="btn btn-primary" style=" font-size: 14px" name="add_fund_cluster" >
                              <i class="fa fa-save"></i>
                               Save
                          </button>
                          <button type="submit" class="btn btn-danger"  style=" font-size: 14px" data-dismiss="modal">
                              <i class="fa fa-times"></i>
                               Cancel
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
          <h4 class="panel-title" style="font-size: 15px">Manage Fund Clusters</h4>
        </div>
        <div class="panel-body">
              <?php include("../_access_views/get_view_table_fund_cluster.php");?>
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
