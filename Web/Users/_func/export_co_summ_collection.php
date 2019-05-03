<?php
  ob_start();
  include('../_func/co_DBController.php');
  $db_handle = new DBController();

  $custom_query = "SELECT `uacs_acc_code_new` AS ACCOUNT_CODE, 
                          `uacs_acc_title` AS NATURE_OF_COLLECTION,
                          `cr_ir_amount` AS AMOUNT

                                                                            FROM `t_cr_register_income_references` AS CRIR2
                                                                            INNER JOIN `r_uacs` AS UACS
                                                                            ON CRIR2.cr_ir_uac_ID_ref = UACS.uacs_ID
                                                                            GROUP BY CRIR2.cr_ir_uac_ID_ref
                                                                            
                    
                       

  ";


  $productResult = $db_handle->runQuery($custom_query);

  if (isset($_POST["export"])) {

      $filename = "Summary_of_collection.xls";
      header("Content-Type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=\"$filename\"");
      $isPrintHeader = false;
      if (! empty($productResult)) {
          foreach ($productResult as $row) {
              if (! $isPrintHeader) {
                  echo implode("\t", array_keys($row)) . "\n";
                  $isPrintHeader = true;
              }
              echo implode("\t", array_values($row)) . "\n";
          }
      }
      exit();
  }
  ob_flush();
?>