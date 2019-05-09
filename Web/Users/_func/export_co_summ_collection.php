<?php
  ob_start();
  include('../_func/co_DBController.php');
  $db_handle = new DBController();


  $title1_query = "SELECT NULL, 'Republic of the Philippines',  NULL";
  $title2_query = "SELECT NULL, 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES',  NULL";
  $title3_query = "SELECT NULL, 'Quezon City Branch', NULL";

  $spacer1_query = "SELECT NULL, NULL, NULL";

  $title4_query = "SELECT NULL, 'SUMMARY OF COLLECTION', NULL";

  $spacer2_query = "SELECT NULL, NULL, NULL";



  $custom_query = "SELECT `uacs_acc_code_new` AS ACCOUNT_CODE, 
                          `uacs_acc_title` AS NATURE_OF_COLLECTION,
                          `cr_ir_amount` AS AMOUNT

                          FROM `t_cr_register_income_references` AS CRIR2
                          INNER JOIN `r_uacs` AS UACS
                          ON CRIR2.cr_ir_uac_ID_ref = UACS.uacs_ID
                          GROUP BY CRIR2.cr_ir_uac_ID_ref
                                                                            
                    
                       

  ";
  $total_query = "SELECT NULL, 'TOTAL:', SUM(cr_ir_amount) AS TOTAL
                          FROM `t_cr_register_income_references` ";

   $title1 = $db_handle->runQuery($title1_query);
   $title2 = $db_handle->runQuery($title2_query);
   $title3 = $db_handle->runQuery($title3_query);
   $sapcer1 = $db_handle->runQuery($spacer1_query);
   $title4 = $db_handle->runQuery($title4_query);
   $spacer2 = $db_handle->runQuery($spacer2_query);
   $productResult = $db_handle->runQuery($custom_query); 
   $total = $db_handle->runQuery($total_query);

  if (isset($_POST["export"])) {

      $filename = "Summary_of_collection.xls";
      header("Content-Type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=\"$filename\"");
      $isPrintHeader = false;

      if (! empty($title1)) {
          foreach ($title1 as $row) {
              if (! $isPrintHeader) {
                  echo implode("\t", array_keys($row)) . "\n";
                  $isPrintHeader = true;
              }
              echo implode("\t", array_values($row)) . "\n";
          }
      }
      if (! empty($title2)) {
          foreach ($title2 as $row) {
              if (! $isPrintHeader) {
                  echo implode("\t", array_keys($row)) . "\n";
                  $isPrintHeader = true;
              }
              echo implode("\t", array_values($row)) . "\n";
          }
      }
      if (! empty($title3)) {
          foreach ($title3 as $row) {
              if (! $isPrintHeader) {
                  echo implode("\t", array_keys($row)) . "\n";
                  $isPrintHeader = true;
              }
              echo implode("\t", array_values($row)) . "\n";
          }
      }
      if (! empty($spacer1)) {
          foreach ($spacer1 as $row) {
              if (! $isPrintHeader) {
                  echo implode("\t", array_keys($row)) . "\n";
                  $isPrintHeader = true;
              }
              echo implode("\t", array_values($row)) . "\n";
          }
      }
      if (! empty($title4)) {
          foreach ($title4 as $row) {
              if (! $isPrintHeader) {
                  echo implode("\t", array_keys($row)) . "\n";
                  $isPrintHeader = true;
              }
              echo implode("\t", array_values($row)) . "\n";
          }
      }
      if (! empty($spacer2)) {
          foreach ($spacer2 as $row) {
              if (! $isPrintHeader) {
                  echo implode("\t", array_keys($row)) . "\n";
                  $isPrintHeader = true;
              }
              echo implode("\t", array_values($row)) . "\n";
          }
      }
      if (! empty($productResult)) {
          foreach ($productResult as $row) {
              if (! $isPrintHeader) {
                  echo implode("\t", array_keys($row)) . "\n";
                  $isPrintHeader = true;
              }
              echo implode("\t", array_values($row)) . "\n";
          }
      }
      if (! empty($total)) {
          foreach ($total as $row1) {
              if (! $isPrintHeader) {
                  echo implode("\t", array_keys($row1)) . "\n";
                  $isPrintHeader = true;
              }
              echo implode("\t", array_values($row1)) . "\n";
          }
      }
      
      exit();
  }
  ob_flush();
?>