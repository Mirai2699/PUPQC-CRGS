<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Login Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../../resources/assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="../../resources/assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../resources/assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="../../resources/assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
	<link href="../../resources/assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="../../resources/assets/css/apple/style.min.css" rel="stylesheet" />
	<link href="../../resources/assets/css/apple/style-responsive.min.css" rel="stylesheet" />
	<link href="../../resources/assets/css/apple/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	<link href="../../resources/images/pupqclogo.png" rel="icon"/>
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../../resources/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<div class="login-cover">
	    <div class="login-cover-image" style="background-image: url(../../resources/images/login-bg-24.jpg)" data-id="login-cover-image"></div>
	    <div class="login-cover-bg"></div>
	</div>
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated fadeIn" style="background-color: #f6f6f6">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand" style="color: #262626">
                    <span class="logo">
                        <img src="../../resources/images/pupqclogo.png" style="width: 150%; margin: 5px">
                    </span> 
                    <b style="margin-left: 6%">PUPQC</b> CRGS
                    <small style="color: #262626; margin-left: 22%">Collection Report Generator System</small>
                  
                </div>
                <div class="icon">
                    <i class="ion-locked"></i>
                </div>
            </div>
            <!-- end brand -->
            <!-- begin login-content -->
            <div class="login-content">
                <form action="../Users/_func/user_lock_screen.php" method="POST" class="margin-bottom-0">
                    <?php
                        include("../../db_con.php");
                        $get_latest = mysqli_query($connection,"SELECT * FROM `t_accounts` AS ACC
                                                                   INNER JOIN `f_lock_screen_log` AS LS
                                                                   ON ACC.acc_ID = LS.ls_acc_ID
                                                                   INNER JOIN `t_employees` AS EMP 
                                                                   ON ACC.acc_empID = EMP.emp_ID
                                                                   ORDER BY ls_ID DESC LIMIT 1");
                        while($row = mysqli_fetch_assoc($get_latest))
                        {
                          $ls_page = $row['ls_page'];
                          $ls_acc_ID = $row['ls_acc_ID'];

                          $up_lname = $row["emp_lastname"];
                          $up_fname = $row["emp_firstname"];
                          $up_pos = $row["emp_position"];
                          $up_display = $up_fname.' '.$up_lname.' ('.$up_pos.')';
                        }
                    ?>
                    <label style="color: #262626; font-size: 14px">Currently logged-in: <?php echo $up_display; ?></label>
                    <div class="form-group m-b-20">
                        <input type="password" class="form-control form-control-lg" placeholder="Enter Password" required name="password_unlock"  style="background-color: white; color: #262626; border: 1px solid lightgray" />
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg" name="unlock">
                            <i class="ion-unlocked"></i>
                            Unlock
                        </button>
                    </div>
                    <div class="m-t-20" style="color: #262626">
                        Not this user? Click <a href="../../index.php" style="color: blue"><b>here</b></a> to log in to another account.
                    </div>
                </form>
            </div>
            <!-- end login-content -->
        </div>
        <!-- end login -->
      
       
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../../resources/assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="../../resources/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="../../resources/assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="../../resources/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../../resources/assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="../../resources/assets/js/theme/apple.min.js"></script>
	<script src="../../resources/assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="../../resources/assets/js/demo/login-v2.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			LoginV2.init();
		});
	</script>
</body>
</html>
