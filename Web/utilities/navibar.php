<!-- begin #sidebar -->
<div id="sidebar" class="sidebar" style="font-size: 12px">
  <!-- begin sidebar scrollbar -->
  <div data-scrollbar="true" data-height="100%">
    <!-- begin sidebar user -->
    <ul class="nav">
      <li class="nav-profile">
        <?php include("side_profile.php");?>
      </li>
    </ul>
    <!-- end sidebar user -->
    <!-- begin sidebar nav -->
    <ul class="nav">
      <li class="nav-header">Navigation</li>
      <?php
          $curr_sess_role = $_SESSION['UserRole'];
          $curr_sess_user = $_SESSION['UserID'];

          $navigation = mysqli_query($connection,"SELECT * FROM `r_navigation` AS NAV 
                                                  INNER JOIN `f_user_permission` AS PERMIS
                                                  ON PERMIS.per_nav_ID = NAV.nav_ID
                                                  WHERE PERMIS.per_user_ID = '$curr_sess_user'
                                                  and PERMIS.per_user_role = '$curr_sess_role'
                                                  and PERMIS.per_verdict = 'YES' 
                                                  ");
             while($row = mysqli_fetch_array($navigation))
             {
                  
                $nav_ID = $row["nav_ID"];
                $nav_desc = $row["nav_desc"];

                if(!empty($row['nav_link']))
                {
                  $nav_link = $row["nav_link"];
                }
                else
                {
                  $nav_link = 'javascript:;';
                }
                
                $nav_class = $row["nav_class"];
                $nav_icon_class = $row["nav_icon_class"];
                $nav_parent = $row["nav_parent"];

                if($nav_parent == NULL)
                {
                   echo '
                      <li id="'.$nav_ID.'" class="'.$nav_class.'">
                        <a href="'.$nav_link.'">
                          <i class="'.$nav_icon_class.'"></i> 
                          <span>'.$nav_desc.'</span>
                        </a>';
                        $sub_navi = mysqli_query($connection,"SELECT * FROM `r_navigation` AS NAV 
                                                             INNER JOIN `f_user_permission` AS PERMIS
                                                             ON PERMIS.per_nav_ID = NAV.nav_ID
                                                             WHERE PERMIS.per_user_ID = '$curr_sess_user'
                                                             and PERMIS.per_user_role = '$curr_sess_role'
                                                             and PERMIS.per_verdict = 'YES'
                                                             and NAV.nav_parent = '$nav_ID'
                                                             and NAV.nav_class != 'none'");
                        echo' <ul class="sub-menu">';
                          while($rowsub = mysqli_fetch_array($sub_navi))
                          {

                            $subnav_desc = $rowsub["nav_desc"];
                            $subnav_link = $rowsub["nav_link"];
                            echo'
                                <li>

                                  <a href="'.$subnav_link.'">
                                  <i class="fa fa-angle-double-right"></i>&nbsp;
                                  '.$subnav_desc.'</a>
                                </li>
                               ';
                          }
                        echo 
                        '  </ul>';
                }
                else 
                {
                  //No Dispaly  
                }
              
             }
             echo 
             '  
             </li>
             ';
      ?>
     
      
          <!-- begin sidebar minify button -->
      <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ion-ios-arrow-left"></i> <span>Collapse</span></a></li>
          <!-- end sidebar minify button -->
    </ul>
    <!-- end sidebar nav -->
  </div>
  <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->