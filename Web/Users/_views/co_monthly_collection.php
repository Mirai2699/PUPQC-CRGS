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
     <div class="col-md-12" style="background-color: #262626">
       <form method="POST">
         <label style="color: white; margin: 5px; font-size: 17px">Action Available:</label>
         <div class="row" style="margin: 5px">
           <!-- div class="col-md-2">
               <label style="color: white">From:</label>
               <input type="date" class="form-control" name="start_date">
           </div>
           <div class="col-md-1" style="font-size: 20px">
             <i class="fa fa-calendar" style="margin-top: 25px; color: white"></i>
           </div>
           <div class="col-md-2">
               <label style="color: white">To:</label>
               <input type="date" class="form-control" name="end_date">
           </div> -->

           <div class="col-md-3">
             <div class="row" style="margin-top: 5px">
               
               <button class="btn btn-primary" type="button" onclick="print();">
                 <i class="fa fa-print"></i>&nbsp;
                 Print Report
               </button>
               &nbsp;&nbsp;&nbsp;&nbsp;
               <button class="btn btn-success" type="button" name="export" style="background-color: green">
                 <i class="fa fa-file-excel"></i>&nbsp;
                 Excel Export
               </button>
               
             </div>
           </div>

           
         </div>
       </form>
       <div class="row" style="padding: 2px"></div>
     </div>
     <br>
      <!-- end panel -->

      <!-- START TABLE -->
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title" style="font-size: 16px">View Monthly Collection Report</h4>
        </div>
        <div class="panel-body">
          <style>
            table, td, th{
              border: 1px solid black;
              border-collapse: collapse;
            }
            .borderless{
              border-bottom: 0px;
              border-left: 0px;
              border-right: 0px;
              border-top:0px;
              border-collapse: separate;
            }
          </style>
          <div class="table-responsive">
            <!-- FIRST ROW -->
            <?php include("../_access_views/get_view_table_monthly_collection.php");?>
            <!-- FIRST ROW -->
          </div>
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
