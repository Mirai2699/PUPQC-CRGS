<?php 
  include("../../utilities/header.php");
  include("../../utilities/Notification.php");
  include("../../utilities/navibar.php");
  include("../../utilities/BaseJs.php");
  include("../../utilities/Table_Default.php");

?>
    <title>Add Collection Record | PUPQC-CRGS</title>
    
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
      <h1 class="page-header">Add Collection Record <small>Records Payment Entities</small></h1>
      <hr style="background-color: black">
      <!-- end page-header -->
      
      <!-- begin panel -->
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title" style="font-size: 16px">Add Collection  </h4>
        </div>
        <div class="panel-body">
          <form action="../_func/admin_insert_func.php" method="POST">
            <!-- FIRST ROW -->
            <div class="row">
              <div class="col-md-3">
                  <label>Date:</label>
                  <input type="text" class="form-control" name="nav_desc" required/>
              </div>
              <div class="col-md-3">
                  <label>OR/DS Number</label>
                  <input type="text" class="form-control" name="nav_link" required/>
              </div>
              <div class="col-md-4">
                  <label>Payor</label>
                  <input type="text" class="form-control" name="nav_class" required/>
              </div>
            </div>
            <!-- FIRST ROW -->

            <hr style="border: 1px solid">
            <!--SECOND ROW-->
            <div class="row" style="margin-top: 10px">
              <div class="col-md-12">
                <div class="adv-table">
                  <table class="display table table-bordered table-striped">                                
                      <tr>
                          <td>                                        
                             <div class="form-content">
                                 <div class="row">
                                     <div class="col-md-12">
                                             <p> 
                                                 <button type="button" id="btnAdd" class="btn btn-primary">      
                                                 <i class="fa fa-plus"></i>&nbsp;
                                                   Add Particulars
                                                 </button>
                                             </p>
                                     </div>
                                 </div>

                                 <div class="row group" style="font-size: 15px">      
                                      <div class="col-md-3">
                                         <div class="form-group">
                                             <label>User Account:</label><br>
                                             <select class="form-control" name="per_acc[]" rqeuired>
                                               <option value="" selected disabled> -- Select User Account -- </option>
                                               <?php
                                                   $view_usr = mysqli_query($connection,"SELECT * FROM `t_accounts` AS ACC 
                                                                                        INNER JOIN `t_employees` AS EMP 
                                                                                        ON ACC.acc_empID = EMP.emp_ID");
                                                   while($ua = mysqli_fetch_array($view_usr))
                                                   {
                                                     $acc_ID = $ua["acc_ID"];
                                                     $acc_un = $ua["acc_username"];
                                                     $emp_lname = $ua["emp_lastname"];
                                                     $emp_fname = $ua["emp_firstname"];
                                                     $emp_compname = $emp_fname.' '.$emp_lname;
                                               ?>
                                               <option value="<?php echo $acc_ID?>">UN: <?php echo $acc_un ?>&nbsp; EMP: <?php echo $emp_compname?></option>
                                               <?php } ?>
                                             </select>
                                         </div>
                                      </div>
                                      <div class="col-md-2">
                                         <div class="form-group">
                                             <label>User Type:</label><br>
                                             <select class="form-control" name="per_utype[]" required>
                                               <option value="" selected disabled> -- Select User Role -- </option>
                                               <?php
                                                   $view_usr = mysqli_query($connection,"SELECT * FROM `r_user_role` WHERE usr_stat = 1 ");
                                                   while($usr = mysqli_fetch_array($view_usr))
                                                   {
                                                     $usr_ID = $usr["usr_ID"];
                                                     $usr_desc = $usr["usr_desc"];
                                               ?>
                                               <option value="<?php echo $usr_ID?>"><?php echo $usr_desc ?></option>
                                               <?php } ?>
                                             </select>
                                         </div>
                                      </div>
                                      <div class="col-md-3">
                                         <div class="form-group">
                                             <label>Navigation:</label><br>
                                             <select class="form-control" name="per_nav[]" required>
                                               <option value="" selected disabled> -- Select Navigation -- </option>
                                               <?php
                                                   $view_navs = mysqli_query($connection,"SELECT * FROM `r_navigation` WHERE nav_active_stat = 'Active' ");
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
                                      <div class="col-md-2">
                                         <div class="form-group">
                                             <label>Access Permission:</label><br>
                                             <select class="form-control" name="per_access[]" required>
                                                <option value="" selected disabled> -- Select Verdict -- </option>
                                                <option value="YES">ALLOW</option>
                                                <option value="NO">DENY</option>
                                             </select>
                                         </div>
                                      </div>

                                      <div class="col-md-1">
                                         <div class="form-group">
                                             <button type="button" class="btn btn-danger btnRemove" style="margin-top: 40px;">
                                              <i class="fa fa-times"></i>
                                            </button>
                                         </div>
                                     </div>
                                 </div>

                              </div>
                         </td>
                     </tr>
                  </table>
                </div>
              </div>
            </div>
            <!--SECOND ROW-->
            <hr style="border: 1px solid">

            <!-- THIRD ROW -->
            <div class="row">
              <div class="col-md-2">
                <label>Receipt</label>
                <input type="text" class="form-control" name="">
              </div>
              <div class="col-md-2">
                <label>National Treasure</label>
                <input type="text" class="form-control" name="">
              </div>
              <div class="col-md-2">
                <label>AGDB</label>
                <input type="text" class="form-control" name="">
              </div>
              <div class="col-md-2">
                <label>Balance</label>
                <input type="text" class="form-control" name="">
              </div>
              <div class="col-md-2">
                <label>Total:</label>
                <input type="text" class="form-control" name="">
              </div>
              <div class="col-md-2" style="text-align: right">
                <button type="submit" class="btn btn-success" name="add_navigation" style="font-size: 16px; margin-top: 23px;">
                  <i class="fa fa-save"></i>
                  Save
                </button>
              </div>
            </div>
            <!-- THIRD ROW -->
          </form>
        </div>
      </div>
      <!-- end panel -->

     
    </div>
    <!-- end #content -->
  </div>
  <!-- end page container -->
  

  <!--ON PAGE SCRIPTS-->

   <script src="../../../resources/custom/multi-field/advanced-form.js"></script>
   <script src="../../../resources/custom/multi-field/jquery.multifield.min.js"></script> 
   <script>

          $('.form-content').multifield({
              section: '.group',
              btnAdd:'#btnAdd',
              btnRemove:'.btnRemove',
          });

          $(function(){
              $('select').on('change',function(){                        
                  $('input[name=place]').val($(this).val());            
              });
          });

          $(function(){
              $('select').on('change',function(){                        
                  $('input[name=reqperson]').val($(this).val());            
              });
          });

          $(function(){
              $('select').on('change',function(){                        
                  $('input[name=asttypesss]').val($(this).val());            
              });
          });

  </script>
  
  <!--ON PAGE SCRIPTS-->
</body>
</html>
