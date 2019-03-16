<table id="data-table-default" class="table table-striped table-bordered" style="font-size: 15px">
  <thead>
  <tr>
      <th class="hidden">ID</th>
      <th>User Account</th>
      <th>User Type</th>
      <th>Navigation</th>
      <th style="text-align: center; ">Allow Access</th>
      <th>Timestamp</th>
      <th style="text-align: center">Action</th>
  </tr>
  </thead>
  <tbody>
  <?php
      $view_query = mysqli_query($connection,"SELECT * FROM `f_user_permission` AS PERMIS 
                                                       INNER JOIN `r_user_role` AS USR 
                                                       ON USR.usr_ID = PERMIS.per_user_role
                                                       INNER JOIN `r_navigation` AS NAV
                                                       ON NAV.nav_ID = PERMIS.per_nav_ID
                                                       INNER JOIN `t_accounts` AS ACC 
                                                       ON ACC.acc_ID = PERMIS.per_user_ID
                                                       INNER JOIN `t_employees` AS EMP 
                                                       ON ACC.acc_empID = EMP.emp_ID
                                                       ");
      while($row = mysqli_fetch_assoc($view_query))
      {
          $ID = $row["per_ID"];
          $per_verdict = $row["per_verdict"];
          $per_timestamp = $row["per_timestamp"];

          $usr_desc = $row["usr_desc"];
          $nav_desc = $row["nav_desc"];
          $acc_un = $row["acc_username"];
          $emp_lname = $row["emp_lastname"];
          $emp_fname = $row["emp_firstname"];
          $emp_compname = $emp_fname.' '.$emp_lname;
          $display = 'UN: '.$acc_un.' - EMP: '.$emp_compname;


          if($per_verdict == 'YES')
          {
            echo 
            '
              <tr class="gradeX">
                  <td class="hidden">'.$ID.'</td>
                  <td width="">'.$display.'</td>
                  <td width="">'.$usr_desc.'</td>
                  <td width="">'.$nav_desc.'</td>
                  <td style="text-align:center; font-weight:bold; background-color: #66ff66;">'.$per_verdict.'</td>
                  <td width="">'.$per_timestamp.'</td>
                  <td style="text-align:center">
                    <a href="#edit_per'.$ID.'" class="btn btn-primary" data-toggle="modal" title="Toggle Status">
                      <i class="fa fa-sync"></i>&nbsp;
                      Toggle Status
                    </a>
                  </td>
              </tr>  
            ';
          }
          else if($per_verdict == 'NO')
          {
            echo 
            '
              <tr class="gradeX">
                  <td class="hidden">'.$ID.'</td>
                  <td width="">'.$display.'</td>
                  <td width="">'.$usr_desc.'</td>
                  <td width="">'.$nav_desc.'</td>
                  <td style="text-align:center; font-weight:bold; background-color: #ff8080;">'.$per_verdict.'</td>
                  <td width="">'.$per_timestamp.'</td>
                  <td style="text-align:center">
                    <a href="#edit_per'.$ID.'" class="btn btn-primary" data-toggle="modal" title="Toggle Status">
                      <i class="fa fa-sync"></i>&nbsp;
                      Toggle Status
                    </a>
                  </td>
              </tr>  
            ';
          }
      }
  ?>      
  </tbody>                                 
</table>

<!--MODAL INCLUDES-->
<?php include("../_access_views/get_view_modal_edit_permissions.php");?>