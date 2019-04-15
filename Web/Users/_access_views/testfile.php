<?php
		include("../../../db_con.php");

		$start_input = 5;
		$end_input = 19;
		$OR_Prefix = '06270';
		for($i = $start_input; $i <= $end_input; $i++)
	  	{
	    	//echo $i;
	    	$OR_NUMBER = $OR_Prefix.''.$i;
	    	$insert = "INSERT INTO `r_official_receipt` (or_no) VALUES ($OR_NUMBER)";
	    	print_r($insert.'<br>');
	  	}

?>