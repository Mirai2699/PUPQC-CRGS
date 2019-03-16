<?php 
  include("../../utilities/header.php");
  include("../../utilities/Notification.php");
  include("../../utilities/navibar.php");
  include("../../utilities/BaseJs.php");
   include("../../utilities/Table_Default.php");
?>
  
       <title>Account Management | PUPQC-CRGS</title>

        <!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
                    <li class="breadcrumb-item active">view Accounts</li>
                </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
                <h1 class="page-header">Account Management</h1>
            <!-- end page-header -->
            <!--Line Divider-->
                <div class="row" style="padding: 1px; background-color: #262626; margin-bottom: 20px"></div>
            <!--Line Divider-->


            <!-- START CUSTOM CONTENT-->

            <form action="../functionalities/insert_func.php" method="POST">
              <!--FIRST PART-->
              <div class="panel panel-inverse">
                  <div class="panel-heading">
                      <h2 class="panel-title">
                          <i class="fa fa-users"></i>&nbsp;&nbsp;&nbsp;View Account Details
                      </h2>
                  </div>
                  <div class="panel-body">
                    <div class="col-md-12">
                        <div class="panel">
                            <?php include("../_access_views/get_view_table_accounts.php");?> 
                        </div>
                    </div>
                  </div>
                  <!--FIRST PART-->

                 
               </form>

            </div>

            <!-- END CUSTOM CONTENT -->


        </div>
        <!-- end #content -->
        
    </div>
    <!-- end page container -->
    

   </body>
</html>




