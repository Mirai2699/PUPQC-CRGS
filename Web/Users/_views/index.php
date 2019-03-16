<?php 
  include("../../utilities/header.php");
  include("../../utilities/Notification.php");
  include("../../utilities/navibar.php");
  include("../../utilities/BaseJs.php");

?>
    <title>Dashboard | PUPQC-CRGS</title>
    
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
      
        <!-- begin col-3 -->
          <div class="col-lg-3 col-md-6">
              <div class="widget widget-stats bg-white text-inverse">
            <div class="stats-icon stats-icon-square bg-gradient-blue"><i class="ion-ios-analytics-outline"></i></div>
                <div class="stats-content">
              <div class="stats-title">TODAY'S VISITS</div>
              <div class="stats-number">7,842,900</div>
              <div class="stats-progress progress">
                <div class="progress-bar" style="width: 70.1%;"></div>
              </div>
              <div class="stats-desc">Better than last week (70.1%)</div>
                        </div>
              </div>
          </div>
          <!-- end col-3 -->
          <!-- begin col-3 -->
          <div class="col-lg-3 col-md-6">
              <div class="widget widget-stats bg-white text-inverse">
                  <div class="stats-icon stats-icon-square bg-gradient-blue"><i class="ion-ios-pricetags-outline"></i></div>
            <div class="stats-content">
              <div class="stats-title">TODAY'S PROFIT</div>
              <div class="stats-number">180,200</div>
              <div class="stats-progress progress">
                <div class="progress-bar" style="width: 40.5%;"></div>
              </div>
              <div class="stats-desc">Better than last week (40.5%)</div>
            </div>
              </div>
          </div>
          <!-- end col-3 -->
          <!-- begin col-3 -->
          <div class="col-lg-3 col-md-6">
              <div class="widget widget-stats bg-white text-inverse">
                  <div class="stats-icon stats-icon-square bg-gradient-blue"><i class="ion-ios-cart-outline"></i></div>
                <div class="stats-content">
              <div class="stats-title">NEW ORDERS</div>
              <div class="stats-number">38,900</div>
              <div class="stats-progress progress">
                <div class="progress-bar" style="width: 76.3%;"></div>
              </div>
              <div class="stats-desc">Better than last week (76.3%)</div>
            </div>
              </div>
          </div>
          <!-- end col-3 -->
          <!-- begin col-3 -->
          <div class="col-lg-3 col-md-6">
              <div class="widget widget-stats bg-white text-inverse">
                  <div class="stats-icon stats-icon-square bg-gradient-blue"><i class="ion-ios-chatboxes-outline"></i></div>
                <div class="stats-content">
              <div class="stats-title">NEW COMMENTS</div>
              <div class="stats-number">3,988</div>
              <div class="stats-progress progress">
                <div class="progress-bar" style="width: 54.9%;"></div>
              </div>
              <div class="stats-desc">Better than last week (54.9%)</div>
            </div>
              </div>
          </div>
          <!-- end col-3 -->
      </div>
            <div class="row">
              <!-- begin col-8 -->
                <div class="col-lg-8">
                    <div class="widget-chart with-sidebar bg-black">
                        <div class="widget-chart-content">
                            <h4 class="chart-title">
                                Visitors Analytics
                                <small>Where do our visitors come from</small>
                            </h4>
                            <div id="visitors-line-chart" class="widget-chart-full-width nvd3-inverse-mode" style="height: 260px;"></div>
                        </div>
                        <div class="widget-chart-sidebar bg-black-darker">
                            <div class="chart-number">
                                1,225,729
                                <small>Total visitors</small>
                            </div>
                            <div id="visitors-donut-chart" class="nvd3-inverse-mode p-t-10" style="height: 180px"></div>
                            <ul class="chart-legend f-s-11">
                                <li><i class="fa fa-circle fa-fw text-primary f-s-9 m-r-5 t-minus-1"></i> 34.0% <span>New Visitors</span></li>
                                <li><i class="fa fa-circle fa-fw text-aqua f-s-9 m-r-5 t-minus-1"></i> 56.0% <span>Return Visitors</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end col-8 -->
                <!-- begin col-4 -->
                <div class="col-lg-4">
                    <div class="panel panel-inverse" data-sortable-id="index-1">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                Visitors Origin
                            </h4>
                        </div>
                        <div id="visitors-map" class="bg-black" style="height: 179px;"></div>
                        <div class="list-group">
                                  <a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
                                      1. United State 
                                      <span class="badge f-w-500 bg-blue f-s-10">20.95%</span>
                                  </a> 
                                  <a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
                                      2. India
                                      <span class="badge f-w-500 bg-aqua f-s-10">16.12%</span>
                                  </a>
                                  <a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
                                      3. Mongolia
                                      <span class="badge f-w-500 bg-grey-darker f-s-10">14.99%</span>
                                  </a>
                              </div>
                    </div>
                </div>
                <!-- end col-4 -->
            </div>
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
