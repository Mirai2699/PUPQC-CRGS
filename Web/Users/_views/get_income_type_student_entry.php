
<?php
    include("../../../db_con.php");
    if($_POST['input'] == 'type')
    {
      $va = $_POST['category'];
      $option ='<option value="" selected disabled> -- Select Particulars -- </option>';

      $view_usr = mysqli_query($connection,"SELECT * FROM `r_uacs` WHERE uacs_acc_stat = 'Active' AND uacs_type = '$va' ") or die (mysqli_error($connection));
      while($usr = mysqli_fetch_array($view_usr))
      {
        $uac_ID = $usr["uacs_ID"];
        $uac_title = $usr["uacs_acc_title"];
        $uac_newcode = $usr["uacs_acc_code_new"];  
        $uacs_display = $uac_title;
        $uac_amount = $usr["uac_amount"];  


        $option = $option. '<option value="'.$uac_ID.'">'.$uacs_display.'</option>';
        $amount = $uac_amount;
      }
      echo json_encode(
            array("option" => $option)
       );
    }

    elseif ($_POST['input'] == 'amount')
    {
      $TypeID = $_POST['TypeID'];

      $view_usr = mysqli_query($connection,"SELECT * FROM `r_uacs` WHERE uacs_acc_stat = 'Active' AND uacs_ID = '$TypeID' ") or die (mysqli_error($connection));
      while($usr = mysqli_fetch_array($view_usr))
      {
       
        $uac_ID = $usr["uacs_ID"];
        $uac_amount = $usr["uac_amount"];  

      }

      echo json_encode(array('amount' => $uac_amount));

    }
    
?>