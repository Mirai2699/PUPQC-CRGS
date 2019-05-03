<?php
// include 'DBController.php';
$db_handle = new DBController();
$productResult = $db_handle->runQuery("select * from t_cr_register_income_references");

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
?>