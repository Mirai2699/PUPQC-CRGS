<?php

      include("../../../db_con.php");
      $curr_month = date('m');
      $get_monthly_collection = mysqli_query($connection, "SELECT * FROM `t_cr_register_master` 
      													           WHERE month(cr_date_payment) = '$curr_month'");
      $total_monthly_collection = 0;
      while($row_month = mysqli_fetch_assoc($get_monthly_collection))
      {
      	$cr_total_monthly_payment = $row_month['cr_total_payment'];
      	$total_monthly_collection += $cr_total_monthly_payment;
      }

      $curr_year = date('Y');
      $get_yearly_collection = mysqli_query($connection, "SELECT * FROM `t_cr_register_master` 
      													           WHERE year(cr_date_payment) = '$curr_year'");
      $total_yearly_collection = 0;
      while($row_year = mysqli_fetch_assoc($get_yearly_collection))
      {
      	$cr_total_yearly_payment = $row_year['cr_total_payment'];
      	$total_yearly_collection += $cr_total_yearly_payment;
      }
?>      
 
