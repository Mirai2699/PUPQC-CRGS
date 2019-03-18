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
          <form action="../_func/co_add_collection.php" method="POST">
            <!-- FIRST ROW -->

            <p style="font-size: 17px">Today's Date:<br><b> <?php echo date('F d, Y'); ?></b></p>
            <div class="row">
              <div class="col-md-3">
                  <label>OR/DS Number</label>
                  <input type="text" class="form-control" name="cr_ornum" required/>
              </div>
              <div class="col-md-4">
                  <label>Payor</label>
                  <input type="text" class="form-control" name="cr_payor" required/>
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
                                      <div class="col-md-2">
                                         <div class="form-group">
                                             <label>Income Type:</label><br>
                                             <select class="form-control" name="cr_uacs_type[]" required>
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
                                      <div class="col-md-4">
                                         <div class="form-group">
                                             <label>UAC Code / Desc:</label><br>
                                             <select class="form-control" name="cr_uacs[]" required>
                                               <option value="" selected disabled> -- Select UACS -- </option>
                                               <?php
                                                   $view_usr = mysqli_query($connection,"SELECT * FROM `r_uacs` WHERE uacs_acc_stat = 'Active' ");
                                                   while($usr = mysqli_fetch_array($view_usr))
                                                   {
                                                     $uac_ID = $usr["uacs_ID"];
                                                     $uac_title = $usr["uacs_acc_title"];
                                                     $uac_newcode = $usr["uacs_acc_code_new"];  
                                                     $uacs_display = '('.$uac_newcode.') &nbsp;&nbsp; - '.$uac_title;
                                               ?>
                                               <option value="<?php echo $uac_ID?>"><?php echo $uacs_display ?></option>
                                               <?php } ?>
                                             </select>
                                         </div>
                                      </div>
                                      <div class="col-md-2">
                                         <div class="form-group">
                                             <label>Amount: <small> (In Peso)</small></label><br>
                                             <input id="amount" type="number" class="form-control" min="1.00" step="0.01" name="cr_amount[]" >
                                         </div>
                                      </div>
                                     

                                      <div class="col-md-1">
                                         <div class="form-group">
                                             <button type="button" class="btn btn-danger btnRemove" style="margin-top: 26px;">
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
                <input id="receipt" type="text" class="form-control" name="cr_receipt">
              </div>
              <div class="col-md-2">
                <label>National Treasure</label>
                <input type="text" class="form-control" name="cr_treasure">
              </div>
              <div class="col-md-2">
                <label>AGDB</label>
                <input type="text" class="form-control" name="cr_agdb">
              </div>
              <div class="col-md-2">
                <label>Balance</label>
                <input type="text" class="form-control" name="cr_balance">
              </div>
              <div class="col-md-2">
                <label>Total:</label>
                <input id="total" type="text" class="form-control" name="cr_total">
              </div>
              <div class="col-md-2" style="text-align: right">
                <button type="submit" class="btn btn-success" name="add_collection" style="font-size: 16px; margin-top: 23px;">
                  <i class="fa fa-save"></i>
                  Save Entry
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
   <script type="text/javascript">
     
   </script>
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