<?php 
  include("../../utilities/header.php");
  include("../../utilities/Notification.php");
  include("../../utilities/navibar.php");
  include("../../utilities/BaseJs.php");

?>
    <title>Dashboard | PUPQC-CRGS</title>
    
    <script src="../../../resources/custom/highcharts/highcharts.js"></script>
    <script src="../../../resources/custom/highcharts/modules/data.js"></script>
    <script src="../../../resources/custom/highcharts/modules/exporting.js"></script>
    <script src="../../../resources/custom/highcharts/modules/drilldown.js"></script>

    <style type="text/css">
        #I2_box{
          color: white;
          font-size: 17px;
        }
    </style>
    <!-- begin #content -->
    <div id="content" class="content">
      
      <!-- begin page-header -->
      <h1 class="page-header">Dashboard</h1>
      <div class="row" style="padding: 1px; background-color: #262626"></div>
      <!-- end page-header -->

      <!--FIRST INDEX-->
        <?php 
                 $curr_sess_role = $_SESSION['UserRole'];
                 $type = $_SESSION['UserRole'];
                 $curr_sess_user = $_SESSION['UserID'];

                 $access_index = mysqli_query($connection,"SELECT * FROM `r_navigation` AS NAV 
                                                      INNER JOIN `f_user_permission` AS PERMIS
                                                      ON PERMIS.per_nav_ID = NAV.nav_ID
                                                      WHERE PERMIS.per_user_ID = '$curr_sess_user'
                                                      and PERMIS.per_user_role = '$curr_sess_role'
                                                      and NAV.nav_link = '$curr_page'
                                                      and PERMIS.per_verdict = 'YES'");
                 if($curr_sess_role == 1)
                 {
                    echo
                    '
                      <div id="first index" class="row" style="margin-top: 15px">
                     
                    ';
                 }
                 else
                 {
                    echo
                    '
                       <div id="first index" class="row" style="display:none">
                    ';
                 }
        ?>
        
          <!-- begin row -->
            <!-- begin col-3 -->
            <div class="col-lg-3 col-md-6">
              <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                <div class="stats-info">
                  <h4>TOTAL VISITORS</h4>
                  <p>3,291,922</p>  
                </div>
                <div class="stats-link">
                  <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
              </div>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-lg-3 col-md-6">
              <div class="widget widget-stats bg-orange">
                <div class="stats-icon"><i class="fa fa-link"></i></div>
                <div class="stats-info">
                  <h4>BOUNCE RATE</h4>
                  <p>20.44%</p> 
                </div>
                <div class="stats-link">
                  <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
              </div>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-lg-3 col-md-6">
              <div class="widget widget-stats bg-grey-darker">
                <div class="stats-icon"><i class="fa fa-users"></i></div>
                <div class="stats-info">
                  <h4>UNIQUE VISITORS</h4>
                  <p>1,291,922</p>  
                </div>
                <div class="stats-link">
                  <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
              </div>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-lg-3 col-md-6">
              <div class="widget widget-stats bg-black-lighter">
                <div class="stats-icon"><i class="fa fa-clock"></i></div>
                <div class="stats-info">
                  <h4>AVG TIME ON SITE</h4>
                  <p>00:12:23</p> 
                </div>
                <div class="stats-link">
                  <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
              </div>
            </div>
            <!-- end col-3 -->
          
          <!-- begin row -->

        </div>
      <!--END OF FIRST INDEX-->






      <!-- SECOND INDEX -->
        <?php 
                 $curr_sess_role = $_SESSION['UserRole'];
                 $type = $_SESSION['UserRole'];
                 $curr_sess_user = $_SESSION['UserID'];

                 $access_index = mysqli_query($connection,"SELECT * FROM `r_navigation` AS NAV 
                                                      INNER JOIN `f_user_permission` AS PERMIS
                                                      ON PERMIS.per_nav_ID = NAV.nav_ID
                                                      WHERE PERMIS.per_user_ID = '$curr_sess_user'
                                                      and PERMIS.per_user_role = '$curr_sess_role'
                                                      and NAV.nav_link = '$curr_page'
                                                      and PERMIS.per_verdict = 'YES'");
                 if($curr_sess_role == 2)
                 {
                    echo
                    '
                      <div id="second index" class="row" style="margin-top: 15px">
                     
                    ';
                 }
                 else
                 {
                    echo
                    '
                       <div id="second index" class="row" style="display:none">
                    ';
                 }
        ?>
        
          <!---INCLUDE INDEX 2-->
           <?php include('../_access_views/get_view_index_2_dashboard.php');?>
          <!---INCLUDE INDEX 2->
        </div>
        

      <!--END OF SECOND INDEX-->


      <!-- end panel -->
    </div>
    <!-- end #content -->
  </div>
  <!-- end page container -->
  

  <!--ON PAGE SCRIPTS-->
  <script>
    $(document).ready(function() {
      App.init();
    });
  </script>
  <!--ON PAGE SCRIPTS-->
</body>
</html>
