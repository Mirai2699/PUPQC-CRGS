<?php 
  include("../../utilities/header.php");
  include("../../utilities/Notification.php");
  include("../../utilities/navibar.php");
  include("../../utilities/BaseJs.php");
  include("../../utilities/Table_Default.php");

?> 
    <title>Summary of Collection | PUPQC-CRGS</title>
   
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
      <h1 class="page-header">Summary of Collections <small>Filter and Print</small></h1>
      <hr style="background-color: black">
      <!-- end page-header -->

      <div class="col-md-12" style="background-color: #262626">
        <form method="POST">
          <label style="color: white; margin: 5px">Action Available:</label>
          <div class="row" style="margin: 5px">
            <div class="col-md-2">
                <label style="color: white">From:</label>
                <input type="date" class="form-control" name="start_date">
            </div>
            <!-- <div class="col-md-1" style="font-size: 20px">
              <i class="fa fa-calendar" style="margin-top: 25px; color: white"></i>
            </div> -->
            <div class="col-md-2">
                <label style="color: white">To:</label>
                <input type="date" class="form-control" name="end_date">
            </div>

            <div class="col-md-3">
              <div class="row" style="margin-top: 26px">
                <button class="btn btn-info" type="submit" name="filter_date">
                  <i class="fa fa-sync"></i>
                  Filter Report
                </button>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-primary" type="button" onclick="print();">
                  <i class="fa fa-print"></i>
                  Print Report
                </button>
              </div>
            </div>

            
          </div>
        </form>
        <div class="row" style="padding: 2px"></div>
      </div>
      <br>
      <!-- START TABLE -->
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title" style="font-size: 16px">View Summary of Collection</h4>
        </div>
        <div class="panel-body">
          <!-- FIRST ROW -->
          <?php include("../_access_views/get_view_table_summary_collection.php");?>
          <!-- FIRST ROW -->
        </div>
      </div>
      <!-- END TABLE -->


    </div>
    <!-- end #content -->
  </div>
  <!-- end page container -->
  
  <?php include("../_access_views/printable_summ_collection.php");?>
  <!--ON PAGE SCRIPTS--
  <script>
    $(document).ready(function() {
      //App.init();
      FormPlugins.init();
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
