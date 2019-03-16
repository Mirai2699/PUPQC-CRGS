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
?>      
    <div class="modal fade" id="edit_per<?php echo $ID?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <center>
                    <form action="../_func/admin_update_func.php" method="POST">
                        <div class="modal-header" style="background-color: navy;text-align: center;">
                            <h4 class="modal-title" style="color: white; ">
                            <i class="fa fa-key"></i> 
                            Edit Permission</h4>
                        </div>
                        <div class="modal-body" style="text-align: justify; font-size: 16px">
                            <!-- FIRST ROW -->
                            <input type="hidden" name="per_ID" value="<?php echo $ID?>">
                            <center>
                              <div class="row" style="margin-top: 5px">
                                <div class="col-md-12">
                                    <label>Access Permission:</label>
                                    <select class="form-control" name="per_verdict" required style="width: 40%; font-size: 16px">
                                      <option value="YES" selected> ALLOW ACCESS</option>
                                      <option value="NO"> DENY ACCESS</option>
                                    </select>
                                </div>
                              </div>
                            </center>
                            <!-- FIRST ROW -->
                        </div>
                        <div class="modal-footer" style="text-align: center">
                            <div class="col-md-12" style="text-align: center; ">
                                <button type="submit" class="btn btn-primary" name="update_permission" style="font-size:13px">
                                    <i class="fa fa-save"></i>
                                     Save 
                                </button>
                                <button type="submit" class="btn btn-danger" style="font-size:13px" data-dismiss="modal">
                                    <i class="fa fa-times"></i>
                                     Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </center>
            </div>
        </div>
    </div>
<?php } ?>

