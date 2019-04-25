<?php
		
		if(isset($_POST['add_deposit']))
		{
			add_deposit_today();
			//add_cash_receipt_record();
		}
		else if(isset($_POST['deposit_otherday']))
		{
			add_deposit_other_day();
			//add_cash_receipt_record();
		}
		else if(isset($_POST['toggle_deposit']))
		{
			toggle_deposit();
			add_cash_receipt_record();
		}

		
		function add_deposit_other_day()
		{
			require("../../../db_con.php");

			$date_now = $_POST['date_deposit'];

			$get_today_transact = "SELECT * FROM `t_cr_register_master` WHERE cr_date_payment = '$date_now'";
			$excute_view = mysqli_query($connection, $get_today_transact);
			$total_deposits = 0;
			while($row = mysqli_fetch_assoc($excute_view))
			{
				$cr_t_payment = $row['cr_total_payment'];
				$total_deposits += $cr_t_payment;
			}
			echo $total_deposits;

			$get_account = "SELECT * FROM `r_deposit_account`";
			$excute_view_acc = mysqli_query($connection, $get_account);
			while($row_acc = mysqli_fetch_assoc($excute_view_acc))
			{
				$acc_no = $row['dpac_acc_no'];
				$count = $row['dpac_starting_count'];
				
			}


			$year_now = date('Y');
			$get_deposit_stat = "SELECT * FROM `t_deposits` WHERE year(dep_date_for) = '$year_now'";
			$excute_dep_stat = mysqli_query($connection, $get_deposit_stat);
			if(mysqli_num_rows($excute_dep_stat) > 0)
			{

				$get_account = "SELECT * FROM `r_deposit_account`";
				$excute_view_acc = mysqli_query($connection, $get_account);
				while($row_acc = mysqli_fetch_assoc($excute_view_acc))
				{
					$acc_no = $row_acc['dpac_acc_no'];
					$count = $row_acc['dpac_starting_count'];
					$plusone = $count + 1;
					
				}
			}
			else
			{
				$get_account = "SELECT * FROM `r_deposit_account`";
				$excute_view_acc = mysqli_query($connection, $get_account);
				while($row_acc = mysqli_fetch_assoc($excute_view_acc))
				{
					$acc_no = $row_acc['dpac_acc_no'];
					$count = 1;
					$plusone = $count + 1;
					
				}
			}
			
			$modified = str_pad($count,3,"0",STR_PAD_LEFT);
			$slipno = $year_now.'-'.$modified;


			


			$insert_deposit = "INSERT INTO `t_deposits`(dep_acc_no, dep_slip_no, dep_amount, dep_status, dep_date_for)
								   				 VALUES('$acc_no','$slipno','$total_deposits','PENDING','$date_now')";
			//print_r($insert_deposit);
			mysqli_query($connection, $insert_deposit);

			$update_count = "UPDATE `r_deposit_account` SET dpac_starting_count = '$plusone'";
			mysqli_query($connection, $update_count);

			echo "<script type=\"text/javascript\">".
			         "alert
			         ('You have confirmed the deposit status of the record!');".
			        "</script>";
			echo "<script>setTimeout(\"location.href = '../_views/co_deposit_pending.php';\",0);</script>";

		}

		function add_deposit_today()
		{
			require("../../../db_con.php");

			$date_now = date('Y-m-d');
			$get_today_transact = "SELECT * FROM `t_cr_register_master` WHERE cr_date_payment = '$date_now'";
			$excute_view = mysqli_query($connection, $get_today_transact);
			$total_deposits = 0;
			while($row = mysqli_fetch_assoc($excute_view))
			{
				$cr_t_payment = $row['cr_total_payment'];
				$total_deposits += $cr_t_payment;
			}
			//echo $total_deposits;

			$get_account = "SELECT * FROM `r_deposit_account`";
			$excute_view_acc = mysqli_query($connection, $get_account);
			while($row_acc = mysqli_fetch_assoc($excute_view_acc))
			{
				$acc_no = $row['dpac_acc_no'];
				$count = $row['dpac_starting_count'];
				
			}


			$year_now = date('Y');
			$get_deposit_stat = "SELECT * FROM `t_deposits` WHERE year(dep_date_for) = '$year_now'";
			$excute_dep_stat = mysqli_query($connection, $get_deposit_stat);
			if(mysqli_num_rows($excute_dep_stat) > 0)
			{

				$get_account = "SELECT * FROM `r_deposit_account`";
				$excute_view_acc = mysqli_query($connection, $get_account);
				while($row_acc = mysqli_fetch_assoc($excute_view_acc))
				{
					$acc_no = $row_acc['dpac_acc_no'];
					$count = $row_acc['dpac_starting_count'];
					$plusone = $count + 1;
					
				}
			}
			else
			{
				$get_account = "SELECT * FROM `r_deposit_account`";
				$excute_view_acc = mysqli_query($connection, $get_account);
				while($row_acc = mysqli_fetch_assoc($excute_view_acc))
				{
					$acc_no = $row_acc['dpac_acc_no'];
					$count = 1;
					$plusone = $count + 1;
					
				}
			}
			
			$modified = str_pad($count,3,"0",STR_PAD_LEFT);
			$slipno = $year_now.'-'.$modified;


			


			$insert_deposit = "INSERT INTO `t_deposits`(dep_acc_no, dep_slip_no, dep_amount, dep_status, dep_date_for)
								   				 VALUES('$acc_no','$slipno','$total_deposits','PENDING','$date_now')";
			//print_r($insert_deposit);
			mysqli_query($connection, $insert_deposit);

			$update_count = "UPDATE `r_deposit_account` SET dpac_starting_count = '$plusone'";
			mysqli_query($connection, $update_count);
		}

		function toggle_deposit()
		{
			require("../../../db_con.php");

			$dep_ID = $_POST['dep_ID'];
			$dep_actual_date = $_POST['actual_date_deposit'];

			$update = "UPDATE `t_deposits` SET dep_status = 'DEPOSITED',
											   dep_date_actual = '$dep_actual_date'
										   WHERE dep_ID = '$dep_ID'";
			mysqli_query($connection, $update);

			echo "<script type=\"text/javascript\">".
			         "alert
			         ('You have confirmed the deposit status of the record!');".
			        "</script>";
			echo "<script>setTimeout(\"location.href = '../_views/co_deposit_pending.php';\",0);</script>";
		}

		function add_cash_receipt_record()
		{
		  require('../../../db_con.php');
		  $dep_ID = $_POST['dep_ID'];
		  $dep_date_actual = $_POST['actual_date_deposit'];

		  $view_query1 = mysqli_query($connection,"SELECT * FROM `t_deposits` 
		                                          WHERE dep_ID = '$dep_ID'");
		  while($row1 = mysqli_fetch_assoc($view_query1))
		  {
		      $dep_ID = $row1["dep_ID"];
		      $dep_acc_no = $row1["dep_acc_no"];
		      $dep_slip_no = $row1["dep_slip_no"];
		      $dep_amount = $row1["dep_amount"];
		  }
		  $bank = 'LBP Acct. No. 0682102047';

		  $today = date('Y-m-d h:i:s');
		 
		  $insert = "INSERT INTO `t_cash_receipt_record` (crt_date, crt_reference_no, crt_payor, crt_deposit)
		                                          VALUES ('$dep_date_actual', '$dep_acc_no', '$bank', '$dep_amount' )";
		  //print_r($insert);
		  mysqli_query($connection, $insert);
		}
		
?>