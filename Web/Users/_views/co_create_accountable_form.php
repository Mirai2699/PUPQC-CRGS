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
      <h1 class="page-header">Create Receipt Accountability <small>Review and Save</small></h1>
      <hr style="background-color: black">
      <!-- end page-header -->
      
      <!-- START PANEL -->
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title" style="font-size: 16px">View Accountable Form Report for the Month of <?php echo date('F Y');?></h4>
        </div>
        <div class="panel-body">
          <!-- FIRST ROW -->
          <?php include("../_access_views/get_view_table_accountable_form.php");?>
          <!-- FIRST ROW -->
        </div>
        <div class="panel">
          <div class="col-md-12" style="text-align: right">
            <div class="panel" style="background-color: #262626; padding: 1px"></div>
              <form action="../_func/co_add_accountable_form.php" method="POST">
                <input type="hidden" name="co_acc_bb_total_count" value="<?php echo $bb_total_count?>" />
                <input type="hidden" name="co_acc_bb_start_display" value="<?php echo $bb_start_display?>" />
                <input type="hidden" name="co_acc_bb_end_display" value="<?php echo $bb_end_display?>" />
                <input type="hidden" name="co_acc_iss_total_count" value="<?php echo $iss_total_count?>" />
                <input type="hidden" name="co_acc_iss_start_display" value="<?php echo $iss_start_display?>" />
                <input type="hidden" name="co_acc_iss_end_display" value="<?php echo $iss_end_display?>" />
                <input type="hidden" name="co_acc_eb_total_count" value="<?php echo $eb_total_count?>" />
                <input type="hidden" name="co_acc_eb_start_display" value="<?php echo $eb_start_display?>" />
                <input type="hidden" name="co_acc_eb_end_display" value="<?php echo $eb_end_display?>" />
                <input type="hidden" name="co_acc_PIC" value="<?php echo $curr_sess_user?>" />
                <a href="co_accountable_forms.php" class="btn btn-default"  style="font-size: 17px; background-color: #e6e6e6; border: 1px black solid">
                     <i class="ion-reply"></i>&nbsp;
                     Go Back
                </a>
                &nbsp;
              <?php

                  $check = mysqli_query($connection,"SELECT * FROM `t_accountable_forms_wfv` 
                                                            WHERE month(af_wfv_datestamp) = '$selected_month'
                                                            and year(af_wfv_datestamp) = '$curryear'");
                  if(mysqli_num_rows($check) > 0)
                  {
                    echo
                    '
                      <button type="button" class="btn btn-primary" onclick="print();" style="font-size: 17px">
                        <i class="fa fa-print"></i>&nbsp;
                        Print Report
                      </button>
                    ';
                  }
                  else
                  {
                    echo
                    '
                      <button type="submit" class="btn btn-success" name="save_acc_report" style="font-size: 17px">
                        <i class="fa fa-save"></i>&nbsp;
                        Save Report
                      </button>
                    ';
                  }
              ?>
              
              </form>
              
            <div class="panel" style="padding: 10px"></div>
          </div>
        </div>
      </div>
      <!-- END PANEL -->

      


    </div>
    <!-- end #content -->
  </div>

  <?php include("../_access_views/printable_accountable_form.php");?>
  <!-- end page container -->
  <script src="../../../resources/custom/jasonday-printThis-edc43df/printThis.js"></script>
  <script type="text/javascript">
    function print()
    {
      $('#printable').printThis({
         debug: false,               // show the iframe for debugging
         importCSS: true,            // import page CSS
         importStyle:true,           // import style tags
         printContainer: true,       // grab outer container as well as the contents of the selector
         //loadCSS: "",              // path to additional css file - use an array [] for multiple
         pageTitle: "",              // add title to print page
         removeInline: false,        // remove all inline styles from print elements
         printDelay: 333,            // variable print delay
         header: null,               // prefix to html
         footer: "",               // postfix to html
         base: false ,               // preserve the BASE tag, or accept a string for the URL
         formValues: true,           // preserve input/form values
         canvas: false,              // copy canvas elements (experimental)
         doctypeString: null,        // enter a different doctype for older markup
         removeScripts: false,       // remove script tags from print content
         copyTagClasses: false       // copy classes from the html & body tag
       });
    }
  </script>
 
  <!--ON PAGE SCRIPTS-->
</body>
</html>
