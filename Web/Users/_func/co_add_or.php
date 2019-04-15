<?php
    
    if(isset($_POST['add_or']))
    {
    	add_official_receipt();
    }
    else
    {
    	//Nop display
    }
	function add_official_receipt()
	{
			include("../../../db_con.php");

			$OR_Prefix = $_POST['or_prefix'];
			$start_count = $_POST['or_scount'];
			$end_count = $_POST['or_ecount'];
			$start_date = $_POST['or_sdate'];
			$end_date = $_POST['or_edate'];
			
			
			for($total = $start_count; $total <= $end_count; $total++)
		  	{
		    	
		    	$OR_NUMBER = $OR_Prefix.''.$total;
		    	$insert = "INSERT INTO `r_official_receipt` (or_no, or_create_date) VALUES ('$OR_NUMBER', '$start_date')";
		    	mysqli_query($connection, $insert);
		    	//print_r($insert.'<br>');
		  	}

		  	echo "<script type=\"text/javascript\">".
		  	         "alert
		  	         ('You have successfully added the OR numbers!');".
		  	        "</script>";
		  	echo "<script>setTimeout(\"location.href = '../_views/co_setup_or.php';\",0);</script>";
	}
		
?>