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
      <h1 class="page-header">Pending Deposits <small>View and Access</small></h1>
      <hr style="background-color: black">
      <!-- end page-header -->
      
      <!--INCASE OF FORGOTTEN-->
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title" style="font-size: 16px">Create Deposit Slip Record</h4>
        </div>
        <div class="panel-body">
            <p style="font-size: 16px; ">
              Note: This form is only applicable to use if the deposit slip from yesterday, or from the other day was not created.
            </p>
            <div class="col-md-12">
              <form action="../_func/co_add_deposit.php" method="POST">
                <div class="row" style="font-size: 15px">
                  <div class="col-md-3">
                      <label>Date of Collection for Deposit Slip:</label>
                      <input type="date" name="date_deposit" class="form-control" max="<?php echo date('Y-m-d');?>" style="font-size: 15px" required>
                  </div>
                  <div class="col-md-1">
                    <button type="submit" class="btn btn-success" name="deposit_otherday" style="font-size: 15px; margin-top: 29px">
                      <i class="ion-archive"></i>
                      Create Deposit Slip Record
                    </button>
                  </div>
                </div>
              </form>
            </div>
        </div>
      </div>
      <!-- IN CASE FORGOTTEN -->

      <!-- START TABLE -->
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title" style="font-size: 16px">View Pending Deposits</h4>
        </div>
        <div class="panel-body">
              <!-- begin col-6 -->
              <div class="col-lg-12" >
                <!-- begin nav-tabs -->
              <ul class="nav nav-tabs" >
                <li class="nav-items">
                  <a href="#default-tab-1" data-toggle="tab" class="nav-link active">
                    <span class="d-sm-none">Current Month</span>
                    <span class="d-sm-block d-none" style="font-size: 20px">Current Month</span>
                  </a>
                </li>
                <li class="nav-items">
                  <a href="#default-tab-2" data-toggle="tab" class="nav-link">
                    <span class="d-sm-none">Past Months</span>
                    <span class="d-sm-block d-none" style="font-size: 20px">Past Months</span>
                  </a>
                </li>
              </ul>
              <!-- end nav-tabs -->
              <!-- begin tab-content -->
              <div class="tab-content" style="border: 1px solid lightgray;">
                <!-- begin tab-pane -->
                <div class="tab-pane fade active show" id="default-tab-1">
                  <h3 class="m-t-10"><i class="fa fa-calendar"></i> Deposits for the Current Month  (<?php echo date('F Y')?>)</h3>
                  <hr>
                  <!-- FIRST ROW -->
                  <?php include("../_access_views/get_view_table_pending_deposit_currmonth.php");?>
                  <!-- FIRST ROW -->
                </div>
                <!-- end tab-pane -->
                <!-- begin tab-pane -->
                <div class="tab-pane fade" id="default-tab-2">
                   <h3 class="m-t-10"><i class="ion-reply-all"></i> Deposits for the Past Months</h3>
                   <hr>
                   <!-- FIRST ROW -->
                   <?php include("../_access_views/get_view_table_pending_deposit_pastmonths.php");?>
                   <!-- FIRST ROW -->
                </div>
                <!-- end tab-pane -->
               
              </div>
              <!-- end tab-content -->
              <?php  include("../_access_views/get_view_modal_toggle_deposit.php");?>
            </div>
              <!-- end col-6 -->
          
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
