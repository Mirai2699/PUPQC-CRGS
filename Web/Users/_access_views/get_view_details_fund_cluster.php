<?php

      include("../../../db_con.php");

      $get_fund_cluster = mysqli_query($connection, "SELECT * FROM `r_fund_cluster` WHERE fc_ID = 2");
      while($row_fc = mysqli_fetch_assoc($get_fund_cluster))
      {
        $fc_code = $row_fc['fc_code'];
      }
?>      
 
