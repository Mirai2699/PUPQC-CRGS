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
      <h1 class="page-header">Add Collection Record From Student Entry <small>Records Payment Entities</small></h1>
      <hr style="background-color: black">
      <!-- end page-header -->
      
      <!-- begin panel -->
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title" style="font-size: 16px">Add Collection  </h4>
        </div>
        <div class="panel-body">
          <div class="panel" style="background-color: #262626; padding: 1px"></div>
          <form action="../_func/co_mod_collection.php" method="POST">
            <!-- FIRST ROW -->
            <style type="text/css">
              table, td, tr
              {
                border: 1px solid black;
              }
            </style>
            <table id="TableBody" class="table table-striped table-no-border" style="font-size: 12px">
            </table>
            <!-- FIRST ROW -->
            <?php
              $curr_date = date('Y-m-d');
              $get_current_status = mysqli_query($connection,"SELECT * FROM `t_cr_register_master` AS CRM 
                                                                       INNER JOIN `r_official_receipt` AS ROR 
                                                                       ON CRM.cr_or_num = ROR.or_no 
                                                                     WHERE ROR.or_status = 'PENDING'
                                                                     and CRM.cr_date_payment = '$curr_date' 
                                                                     ORDER BY ROR.or_ID DESC 
                                                                     LIMIT 1");
              if(mysqli_num_rows($get_current_status) > 0)
              {
                  echo
                  '
                    <div class="panel" style="text-align: right">
                      <button type="submit" class="btn btn-success" name="create_receipt" style="background-color: green; font-size: 17px">
                        <i class="fa fa-edit"></i>
                        Create Receipt
                      </button>
                    </div>
                  ';
              }
              else
              {
                  echo
                  '
                    <div class="panel" style="text-align: center">
                      <a href="" class="btn btn-primary" style="background-color: navy; font-size: 17px">
                        <i class="fa fa-sync"></i>
                       Refresh Page
                      </a>
                    </div>
                  ';
              }

           
            ?>
          </form>
        </div>
      </div>
      <!-- end panel -->

     
    </div>
    <!-- end #content -->
  </div>
  <!-- end page container -->
  

  <!--ON PAGE SCRIPTS-->

   <script type="text/javascript">
     function TableData(){
       $.ajax({
             url:'../_access_views/get_view_table_current_transact.php',
             type:'GET',
             async:false,
             success:function(data){
               $('#TableBody').empty();
               $('#TableBody').html(data);
             },
             error:function(){

             }
           });
     }
     //FOR REALTIME (DISABLED)

     $(document).ready(function(){
        TableData();
     //     setInterval(function(){
     //       TableData();
     //     },120000);
        });
     </script>
  <!--ON PAGE SCRIPTS-->
</body>
</html>
