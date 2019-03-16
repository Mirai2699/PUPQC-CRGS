<?php
    $view_query = mysqli_query($connection,"SELECT * FROM `r_navigation`");
    while($row = mysqli_fetch_assoc($view_query))
    {
        $nav_ID = $row["nav_ID"];
        $nav_desc = $row["nav_desc"];
        $nav_link = $row["nav_link"];
        $nav_class = $row["nav_class"];
        $nav_icon_class = $row["nav_icon_class"];
        $nav_parent = $row["nav_parent"];

        
        $nav_stat = $row["nav_active_stat"];
?>      
    <div class="modal fade" id="edit_navigation<?php echo $nav_ID?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <center>
                    <form action="../_func/admin_update_func.php" method="POST">
                        <div class="modal-header" style="background-color: goldenrod;">
                            <h4 class="modal-title" style="color: white">Edit Details</h4>
                        </div>
                        <div class="modal-body" style="text-align: justify; font-size: 16px">
                            <!-- FIRST ROW -->
                            <input type="hidden" name="nav_ID" value="<?php echo $nav_ID?>">
                            <div class="row" style="margin-top: 10px">
                              <div class="col-md-6">
                                  <label>Navigation Description</label>
                                  <input type="text" class="form-control" name="up_nav_desc" required value="<?php echo $nav_desc?>"/>
                              </div>
                              <div class="col-md-6">
                                  <label>Navigation Link</label>
                                  <input type="text" class="form-control" name="up_nav_link"  value="<?php echo $nav_link?>"/>
                              </div>
                            </div>
                            <div class="row" style="margin-top: 10px">
                              <div class="col-md-6">
                                  <label>Navigation Class</label>
                                  <input type="text" class="form-control" name="up_nav_class" required value="<?php echo $nav_class?>"/>
                              </div>
                              <div class="col-md-6">
                                  <label>Navigation Icon-Class</label>
                                  <input type="text" class="form-control" name="up_nav_icon" value="<?php echo $nav_icon_class?>"/>
                              </div>
                            </div>
                            <div class="row" style="margin-top: 10px">
                              <div class="col-md-6">
                                  <label>Navigation Parent (If Child)</label>
                                  <select class="form-control" name="up_nav_parent">
                                    <option value="<?php echo $nav_parent?>" selected readonly><?php echo $nav_parent?></option>
                                    <?php
                                        $view_navs = mysqli_query($connection,"SELECT * FROM `r_navigation` WHERE nav_active_stat = 'Active' and nav_class = 'has-sub'");
                                        while($nv = mysqli_fetch_array($view_navs))
                                        {
                                          $nv_ID = $nv["nav_ID"];
                                          $nv_desc = $nv["nav_desc"];
                                    ?>
                                    <option value="<?php echo $nv_ID?>"><?php echo $nv_desc ?></option>
                                    <?php } ?>
                                  </select>
                              </div>
                            </div>
                            <!-- FIRST ROW -->
                        </div>
                        <div class="modal-footer" style="text-align: center">
                            <div class="col-md-12" style="text-align: right; ">
                                <button type="submit" class="btn btn-primary" name="update_navigation" style="font-size:13px">
                                    <i class="fa fa-save"></i>
                                     Save Tasks
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

