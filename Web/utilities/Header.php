<?php 
     include ("../../../db_con.php");
     session_start();
     
        $type = $_SESSION['UserRole'];
        $curr_sess_role = $_SESSION['UserRole'];
        $curr_sess_user = $_SESSION['UserID'];
        $curr_page = basename($_SERVER['PHP_SELF']);

        $access_permission = mysqli_query($connection,"SELECT * FROM `r_navigation` AS NAV 
                                             INNER JOIN `f_user_permission` AS PERMIS
                                             ON PERMIS.per_nav_ID = NAV.nav_ID
                                             WHERE PERMIS.per_user_ID = '$curr_sess_user'
                                             and PERMIS.per_user_role = '$curr_sess_role'
                                             and NAV.nav_link = '$curr_page'
                                             and PERMIS.per_verdict = 'YES'");
        if(mysqli_num_rows($access_permission) == 0)
        {
        	header('Location:../../Utilities/403.php');
        }
        else if(mysqli_num_rows($access_permission) > 0)
        {
        	while($access = mysqli_fetch_array($access_permission))
	        {
	          $access_link = $access["nav_link"];
	          $access_type = $access["per_user_role"];
	          $access_verdict = $access["per_verdict"];
	         
	        
	        }
	        if($access_link == $curr_page)
	        {
	        	//echo 'OK';
	        }
	        else if($access_link != $curr_page)
			{
	        	header('Location:../../Utilities/404.php');
	    	}
        }
        
   
?> 


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../../../resources/assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="../../../resources/assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../../resources/assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="../../../resources/assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
	<link href="../../../resources/assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="../../../resources/assets/css/apple/style.min.css" rel="stylesheet" />
	<link href="../../../resources/assets/css/apple/style-responsive.min.css" rel="stylesheet" />
	<link href="../../../resources/assets/css/apple/theme/default.css" rel="stylesheet" id="theme" />
	<link href="../../../resources/images/pupqclogo.png" rel="icon"/>
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../../../resources/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	<!-- ================== BEGIN PAGE LEVEL CSS ================== -->
	<style type="text/css">
		.hidden {
			display: none;
		}
	</style>
	<!-- ================== END PAGE LEVEL CSS ================== -->
</head>

