<?php 
  include("../../utilities/header.php");
  include("../../utilities/Notification.php");
  include("../../utilities/navibar.php");
  include("../../utilities/BaseJs.php");
  include("../../utilities/Table_Default.php");
?>
    <title>Configure Unified Accounts Code Structures | PUPQC-CRGS</title>
    
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
      <h1 class="page-header">Configure Unified Accounts Code Structures <small> Setup and Configuration</small></h1>
      <!-- end page-header -->
      <hr>

            <!-- begin nav-tabs -->
          <ul class="nav nav-tabs">
            <li class="nav-items">
              <a href="#default-tab-1" data-toggle="tab" class="nav-link active">
                <span class="d-sm-none">Tab 1</span>
                <span class="d-sm-block d-none" style="font-weight: bold">Add Unified Accounts Code Structures</span>
              </a>
            </li>
            <li class="nav-items">
              <a href="#default-tab-2" data-toggle="tab" class="nav-link">
                <span class="d-sm-none">Tab 2</span>
                <span class="d-sm-block d-none" style="font-weight: bold">Manage UACS</span>
              </a>
            </li>
          </ul>
          <!-- end nav-tabs -->
          <!-- begin tab-content -->
          <div class="tab-content">
            <!-- begin tab-pane -->
            <div class="tab-pane fade active show" id="default-tab-1">
                <!-- begin 1st panel -->
                <div class="panel panel-inverse">
                  <div class="panel-heading">
                    <h4 class="panel-title" style="font-size: 15px">Add Unified Accounts Code Structures</h4>
                  </div>
                  <div class="panel-body">
                        <form action="../_func/admin_insert_func.php" method="POST">
                            <div class="adv-table">
                                    <table class="display table table-bordered table-striped">                                
                                        <tr>
                                            <td>                                        
                                               <div class="form-content">
                                                   <div class="row">
                                                       <div class="col-md-12">
                                                               <p> 
                                                                   <button type="button" id="btnAdd" class="btn btn-info">      
                                                                   <i class="fa fa-plus"></i>&nbsp;
                                                                     Add UACS
                                                                   </button>
                                                               </p>
                                                       </div>
                                                   </div>

                                                   <div class="row group">      
                                                        <div class="col-md-3">
                                                           <div class="form-group">
                                                               <label>Account Title:</label><br>
                                                               <input type="text" class="form-control" name="uac_name[]">
                                                           </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                           <div class="form-group">
                                                               <label>UACS Type:</label><br>
                                                               <select class="form-control" name="uac_type[]" required>
                                                                 <option value="" selected disabled> -- Select UACS Type -- </option>
                                                                 <?php
                                                                     $view_usr = mysqli_query($connection,"SELECT * FROM `r_uacs_type` WHERE uacs_stat = 'Active' ");
                                                                     while($usr = mysqli_fetch_array($view_usr))
                                                                     {
                                                                       $uactype_ID = $usr["uacs_type_ID"];
                                                                       $uactype_name = $usr["uacs_type_name"];
                                                                 ?>
                                                                 <option value="<?php echo $uactype_ID?>"><?php echo $uactype_name ?></option>
                                                                 <?php } ?>
                                                               </select>
                                                           </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                           <div class="form-group">
                                                               <label>Fund Cluster:</label><br>
                                                               <select class="form-control" name="uac_fc[]" required>
                                                                 <option value="" selected disabled> -- Select User Role -- </option>
                                                                 <?php
                                                                     $view_usr = mysqli_query($connection,"SELECT * FROM `r_fund_cluster` WHERE fc_stat = 'Active' ");
                                                                     while($usr = mysqli_fetch_array($view_usr))
                                                                     {
                                                                       $fc_ID = $usr["fc_ID"];
                                                                       $fc_desc = $usr["fc_desc"];
                                                                 ?>
                                                                 <option value="<?php echo $fc_ID?>"><?php echo $fc_desc ?></option>
                                                                 <?php } ?>
                                                               </select>
                                                           </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                           <div class="form-group">
                                                               <label>Old Account Code:</label><br>
                                                               <input type="text" class="form-control" name="uac_oac[]">
                                                           </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                           <div class="form-group">
                                                               <label>New Account Code:</label><br>
                                                               <input type="text" class="form-control" name="uac_nac[]">
                                                           </div>
                                                        </div>

                                                        <div class="col-md-1">
                                                           <div class="form-group">
                                                               <button type="button" class="btn btn-danger btnRemove" style="margin-top: 25px;">
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
                            <div class="modal-footer" style="text-align: center">
                                <div class="col-md-12" style="text-align: right;">
                                    <button type="submit" class="btn btn-primary" style=" font-size: 14px" name="add_uacs" >
                                        <i class="fa fa-save"></i>
                                         Save
                                    </button>
                                    <button type="submit" class="btn btn-danger"  style=" font-size: 14px" data-dismiss="modal">
                                        <i class="fa fa-times"></i>
                                         Cancel
                                    </button>
                                </div>
                            </div>
                         </form>
                  </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end tab-pane -->

            <!-- begin tab-pane -->
            <div class="tab-pane fade" id="default-tab-2">
                <!-- begin 2nd panel -->
                <div class="panel panel-inverse">
                  <div class="panel-heading">
                    <h4 class="panel-title" style="font-size: 15px">Manage Unified Accounts Code Structure</h4>
                  </div>
                  <div class="panel-body">
                        <?php include("../_access_views/get_view_table_uacs.php");?>
                  </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end tab-pane -->
           
          </div>
          <!-- end tab-content -->
     

     


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
