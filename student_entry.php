<?php 
  include("db_con.php");
 
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<title>Student Entry | PUPQC-CRGS</title>

	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="resources/assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="resources/assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="resources/assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="resources/assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
	<link href="resources/assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="resources/assets/css/apple/style.min.css" rel="stylesheet" />
	<link href="resources/assets/css/apple/style-responsive.min.css" rel="stylesheet" />
	<link href="resources/assets/css/apple/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	<link href="resources/images/pupqclogo.png" rel="icon"/>
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="resources/assets/plugins/pace/pace.min.js"></script>

	<style type="text/css">
		#example1 {
		  background: url(resources/images/login-bg-24.jpg);
		  background-repeat: no-repeat;
		  background-size: 100%;
		}
	</style>
	<!-- ================== END BASE JS ================== -->
</head>
<body id="example1" class="boxed-layout">

	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">
				  <img src="resources/images/crgslogo.png" style="width:100%; margin: 1%;" alt=""> 
				</a>
			</div>
			<!-- end navbar-header -->
		</div>
		<!-- end #header -->
		<br>
		
		<!-- begin #content -->
		<div id="content" class="col-md-12">
			
			<!-- begin page-header -->
			<h1 class="page-header">Payment Entry<small></small></h1>
			<!-- end page-header -->
			
			<!-- begin panel -->
			<div class="panel panel-inverse">
			  <div class="panel-heading">
			    <h4 class="panel-title" style="font-size: 16px">Add Collection  </h4>
			  </div>
			  <div class="panel-body">
			    <form action="Web/Users/_func/co_add_collection.php" method="POST">
			      <!-- FIRST ROW -->

			      <p style="font-size: 17px">Today's Date:<br><b> <?php echo date('F d, Y'); ?></b></p>
			      <div class="row">
			        <?php
			          $currmonth = date('m');
			          $select_or = mysqli_query($connection, "SELECT or_no FROM `r_official_receipt` WHERE month(or_create_date) = '4' and or_status = 'PENDING' LIMIT 1");
			          while($row = mysqli_fetch_assoc($select_or))
			          {
			            $or_num = $row['or_no'];
			          }

			        ?>
			        <div class="col-md-3" style="display: none">
			            <label>OR/DS Number</label>
			            <input type="text" class="form-control" name="cr_ornum" style="font-size: 15px; color: black; font-weight: bold" readonly value="<?php echo $or_num;?>" required/>
			        </div>
			        <div class="col-md-5" >
			            <label style="font-size: 18px">Payor</label>
			            <input type="text" class="form-control" name="cr_payor" style="font-size: 20px; color: black" required/>
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
			                                       <label class="label1">Income Type:</label><br>
			                                       <select class="form-control UAC_TYPE" name="cr_uacs_type[]" required onchange="changeFunction(this,$(this).val())" style="font-size: 16px">
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

			                                <div class="col-md-6">
			                                  <!-- <label class="label5" style="color:black;">Label5</label> -->
			                                  <div class="form-group">
			                                       <label>UAC Code / Desc:</label><br>
			                                       <select id="ddItem" class="form-control UAC_DESC" name="cr_uacs[]" required onchange="changeUACAmount(this,$(this).val())" style="font-size: 16px">
			                                         <option value="" selected disabled> -- Select Particulars -- </option>
			                                         <?php
			                                             $view_usr = mysqli_query($connection,"SELECT * FROM `r_uacs` WHERE uacs_acc_stat = 'Active' ");
			                                             while($usr = mysqli_fetch_array($view_usr))
			                                             {
			                                               $uac_ID = $usr["uacs_ID"];
			                                               $uac_title = $usr["uacs_acc_title"];
			                                               $uac_newcode = $usr["uacs_acc_code_new"];  
			                                               $uacs_display = $uac_title;
			                                         ?>
			                                         <option value="<?php echo $uac_ID?>"><?php echo $uacs_display ?></option>
			                                         <?php } ?>
			                                       </select>
			                                   </div>
			                                </div>
			                                <div class="col-md-2" style="display: none">
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
			      <div class="row" >
			        <div class="col-md-2" style="display: none">
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
			        <div class="col-md-2" style="display: none">
			          <label>Total:</label>
			          <input id="total" type="text" class="form-control" name="cr_total" readonly style="color: black; font-size: 18px; font-weight: bold" />
			        </div>

			        <div class="col-md-2" style="text-align: left">
			          <button type="submit" class="btn btn-success" name="add_collection_outside_entry" style="font-size: 16px; margin-top: 10px; background-color: green">
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
		
       
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="resources/assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="resources/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="resources/assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="resources/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="resources/assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="resources/assets/js/theme/apple.min.js"></script>
	<script src="resources/assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
    <!--ON PAGE SCRIPT-->
	<script src="resources/custom/multi-field/advanced-form.js"></script>
	<script src="resources/custom/multi-field/jquery.multifield.min.js"></script> 

	  <script type="text/javascript">
	     function changeFunction(OBJECT,val){
	       // alert($(OBJECT).parents().eq(2).find('.label1').text());
	       // $(OBJECT).parents().eq(2).find('.label5').text('Changed');
	       $.ajax({
	         url:'Web/Users/_views/get_income_type_student_entry.php',
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
	         url:'Web/Users/_views/get_income_type_student_entry.php',
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


	</script>
	<!--ON PAGE SCRIPT-->
</body>
</html>
