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
      <h1 class="page-header">View Receipt Details <small>Viewing of Details</small></h1>
      <hr style="background-color: black">
      <!-- end page-header -->
      <?php include("../_access_views/get_view_details_official_receipt.php");?>
      <!-- START TABLE -->
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title" style="font-size: 16px">View Individual Receipts</h4>
        </div>
        <div class="panel-body">
          <!-- FIRST ROW -->
          <div class="col-md-12">
            <div class="row" style="font-size: 18px">
              <div class="col-md-4">
                <label>Receipt Details:</label>
                <p>OR / DS Number: <b><?php echo $cr_or_num; ?></b>
                   <br>Payor: <b><?php echo $cr_payor; ?></b>
                   <br>Date of Payment: <b><?php echo $cr_nf_date_payment; ?></b></p>
              </div>
              <div class="col-md-6" style="background-color: #f2f2f2">
                <table style="margin: 10px">
                  <thead>
                    <th>Particulars:</th>
                    <th>Amount:</th>
                  </thead>
                  <tbody>
                    <?php include("../_access_views/get_view_details_OR_particulars.php");?>
                  </tbody>
                </table>
                <hr>
                <table style="margin: 10px">
                  <thead>
                    <th>Total Amount:</th>
                    <th>₱ <?php echo $nf_total;?></th>
                  </thead>
                  <tbody>
                   <tr>
                     <td style="width: 600px">
                        
                     </td>
                     <td style="width: 300px">
                                          
                     </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              

            </div>


            <div class="panel" style="padding: 1px; background-color: #262626; margin-top: 10px"></div>
            <button class="btn btn-primary" type="button" onclick="print();">
              <i class="fa fa-print"></i>
              Print Receipt
            </button>
          </div>
          <!-- FIRST ROW -->
        </div>
      </div>
      <!-- END TABLE -->
    </div>
    <!-- end #content -->
  </div>
  <!-- end page container -->
  
  <?php 
    include("../_access_views/printable_receipt.php");
    //include("../_access_views/printable_receipt_with_border.php");
  ?>
  <!--ON PAGE SCRIPTS--><!-- 
  <script>
    $(document).ready(function() {
      App.init();
    });
  </script> -->
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
