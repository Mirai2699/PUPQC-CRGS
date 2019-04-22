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
                    <th>₱ <?php echo $total;?></th>
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
            <button class="btn btn-primary" type="button">
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
  

  <!--ON PAGE SCRIPTS--><!-- 
  <script>
    $(document).ready(function() {
      App.init();
    });
  </script> -->
 
  <!--ON PAGE SCRIPTS-->
</body>
</html>
