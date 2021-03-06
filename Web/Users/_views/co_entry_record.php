<?php 
  include("../../utilities/header.php");
  include("../../utilities/title_display.php");
  include("../../utilities/Notification.php");
  include("../../utilities/navibar.php");
  include("../../utilities/BaseJs.php");
  include("../../utilities/Table_Default.php");

?>
    <title><?php echo $title_name; ?> | PUPQC-CRGS</title>
    
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
              <table id="TableBody" style="margin-left: 15px">
              </table>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row" style="margin-top: 10px; margin-left: 5px">
                  <div class="col-md-3" style="border: 1px solid">
                    <label style="font-size: 15px">Payor Type:</label><br>
                    <div class="radio radio-css radio-inline">
                      <input type="radio" id="cr_indiv_payor" name="cr_payor_type" value="Individual" required onclick="cr_individual();" />
                      <label for="cr_indiv_payor" style="font-size: 15px">Individual</label>
                    </div>
                    <div class="radio radio-css radio-inline">
                      <input type="radio" id="cr_company_name" name="cr_payor_type" value="Company" required onclick="cr_company();" />
                      <label for="cr_company_name" style="font-size: 15px">Company</label>
                    </div>
                  </div>
                  <!-- <div class="col-md-3" >
                      <label style="font-size: 18px">Payor Type</label>
                      <select class="form-control" name="" style="font-size:14px">
                        <option value="" selected disabled> -- Select Type -- </option>
                        <?php
                          $view_type = mysqli_query($connection, "SELECT * FROM `r_payor_type` where pyt_active_stat = 'Active' ");
                          while($row_type = mysqli_fetch_assoc($view_type))
                          {
                            $pyt_ID = $row_type['pyt_ID'];
                            $pyt_desc = $row_type['pyt_desc'];

                        ?>
                        <option value="<?php echo $pyt_ID; ?>" style="font-size:14px"><?php echo $pyt_desc; ?></option>
                        <?php } ?>
                      </select>
                  </div> -->
                  <div class="col-md-5" id="cr_null_type">
                      <p style="font-size: 20px; margin-top: 20px"> -- (Select Payor Type First) -- </p>
                  </div>

                  <div class="col-md-3" id="cr_lname" style="display: none">
                      <label style="font-size: 18px">Last Name:</label>
                      <input id="cr_inp_lname" type="text" class="form-control" name="cr_lastname" style="font-size: 20px; color: black" required/>
                  </div>
                  <div class="col-md-3" id="cr_fname" style="display: none">
                      <label style="font-size: 18px">First Name:</label>
                      <input id="cr_inp_fname" type="text" class="form-control" name="cr_firstname" style="font-size: 20px; color: black" required/>
                  </div>

                  <div class="col-md-5" id="cr_company" style="display: none">
                      <label style="font-size: 18px">Company's Name</label>
                      <input id="cr_inp_comp" type="text" class="form-control" name="cr_company_payor" style="font-size: 20px; color: black" required/>
                  </div>
                </div>
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
                                             <label class="label1">Income Type:</label><br>
                                             <select class="form-control UAC_TYPE" name="cr_uacs_type[]" required onchange="changeFunction(this,$(this).val())">
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
                                        <!-- <label class="label5" style="color:black;">Label5</label> -->
                                        <div class="form-group">
                                             <label>UAC Code / Desc:</label><br>
                                             <select id="ddItem" class="form-control UAC_DESC" name="cr_uacs[]" required onchange="changeUACAmount(this,$(this).val())">
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
                                             <input id="amount" type="number" onkeyup="getTotal()" class="form-control UAC_AMOUNT" min="1.00" step="0.01" name="cr_amount[]">

                                         </div>
                                      </div>
                                     

                                      <div class="col-md-1">
                                         <div class="form-group">
                                             <button type="button" onclick="removeRow(this)" class="btn btn-danger" style="margin-top: 30px;">
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
                <input id="total" type="text" class="form-control" name="cr_receipt" readonly style="color: black; font-size: 18px; font-weight: bold" />
              </div>
             <!--  <div class="col-md-2">
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
              </div> -->
              <div class="col-md-2">
                <label>Total:</label>
                <input id="total" type="text" class="form-control" name="cr_total" readonly style="color: black; font-size: 18px; font-weight: bold" />
              </div>
              <div class="col-md-2" style="text-align: right">
                <button type="submit" class="btn btn-success" name="add_collection" style="font-size: 16px; margin-top: 23px; background-color: green">
                  <i class="fa fa-save"></i>
                  Save Entry
                </button>

               <!--  <button type="submit" class="btn btn-warning" name="test" style="font-size: 16px; margin-top: 23px;">
                  <i class="fa fa-save"></i>
                  TEST BUTTON
                </button>
 -->

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

   <script type="text/javascript">
      function changeFunction(OBJECT,val){
        // alert($(OBJECT).parents().eq(2).find('.label1').text());
        // $(OBJECT).parents().eq(2).find('.label5').text('Changed');
        $.ajax({
          url:'get_income_type.php',
          type:'POST',
          data:{
            category: val, input:'type'
          },
          dataType: 'json',
          success:function(data){
              // document.getElementById('ddItem').innerHTML = data.option;
              $(OBJECT).parents().eq(2).find('.UAC_DESC').empty();
              $(OBJECT).parents().eq(2).find('.UAC_DESC').html(data['option']);

             
          },
          error:function(){
            alert('ERROR');
          }
        });

      }
      

      function changeUACAmount(OBJECT,val){
        // alert($(OBJECT).parents().eq(2).find('.label1').text());
        // $(OBJECT).parents().eq(2).find('.label5').text('Changed');
        $.ajax({
          url:'get_income_type.php',
          type:'POST',
          data:{
            TypeID: val, input:'amount'
          },
          dataType: 'json',
          success:function(data){
              // document.getElementById('ddItem').innerHTML = data.option;
              $(OBJECT).parents().eq(2).find('.UAC_AMOUNT').empty();
              $(OBJECT).parents().eq(2).find('.UAC_AMOUNT').val(data['amount']);
              getTotal();
          },
          error:function(){
            alert('ERROR');
          }
        });

      }
      // $('.UAC_TYPE').on('change',function(){
        // $(this).parents().eq(2).find('.UAC_DESC').val('17').change();
        // $(this).parents().eq(2).find('.label5').text('Changed');
      // })
  </script>
  <!-- <script type="text/javascript">
    $(document).ready(function(){
      setTimeInterval(function(){
        $.ajax(function(){
          url:'getTableData.php',
          type:'GET',
          async:false,
          success:function(data){
            $('#TableBody').empty();
            $('#tableBody').html(data);
          },
          error:function(){

          }
        });
      },5000);
    });
  </script> -->
   <script type="text/javascript">
     function TableData(){
       $.ajax({
             url:'../_access_views/get_view_table_current_OR.php',
             type:'GET',
             async:true,
             success:function(data){
               $('#TableBody').empty();
               $('#TableBody').html(data);
             },
             error:function(){

             }
           });
     }
     //FOR REALTIME (DISABLED)

     $(document).ready(function(){
        TableData();
          setInterval(function(){
            TableData();
          },5000);
        });
     </script>

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

          function removeRow(btn) {
            $(btn).closest("div[class='row group']").remove();
            getTotal();
          }

          function getTotal() {
            var total = 0;
            $.each($("input[id='amount']"), function() {
              // console.log($(this).val());
              total = total + Number($(this).val());
            });
            console.log(total);
            $("input[id='total']").val(total);
          }
          function cr_individual()
          {
              $("#cr_null_type").prop("disabled", true).hide();
              $("#cr_company").prop("disabled", true).hide();
              $("#cr_inp_comp").prop("disabled", true);
              $("#cr_lname").prop("disabled", false).toggle("slide");
              $("#cr_fname").prop("disabled", false).toggle("slide");

              $("#cr_inp_lname").prop("disabled", false);
              $("#cr_inp_fname").prop("disabled", false);
          }
          function cr_company()
          {
              $("#cr_null_type").prop("disabled", true).hide();
              $("#cr_lname").prop("disabled", true).hide();
              $("#cr_fname").prop("disabled", true).hide();
              $("#cr_inp_lname").prop("disabled", true);
              $("#cr_inp_fname").prop("disabled", true);

              $("#cr_company").prop("disabled", false).toggle("slide");
              $("#cr_inp_comp").prop("disabled", false);
          }


  </script>
  
  <!--ON PAGE SCRIPTS-->
</body>
</html>
