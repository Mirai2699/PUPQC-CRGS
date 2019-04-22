<table id="table-default" class="table table-striped table-bordered" style="font-size: 15px">
  <tbody>
  <?php
      echo
      '
        <tr>
          <td colspan="3" style="text-align: center; font-weight: bold; border: 2px solid black;">Accountable Forms</td>
          <td colspan="3" style="text-align: center; font-weight: bold; border: 2px solid black;">Beginning Balance</td>
          <td colspan="3" style="text-align: center; font-weight: bold; border: 2px solid black;">Receipt</td>
          <td colspan="3" style="text-align: center; font-weight: bold; border: 2px solid black;">Issuance</td>
          <td colspan="3" style="text-align: center; font-weight: bold; border: 2px solid black;">Ending Balance</td>
        <tr>
      ';

      echo 
      '
        <tr>
          <td colspan="3" style="text-align: center; border: 1px solid black;"></td>
          <td colspan="1" style="text-align: center; border: 1px solid black;"></td>
          <td colspan="2" style="text-align: center; border: 1px solid black;">Inclusive Serial Nos.</td>
          <td colspan="1" style="text-align: center; border: 1px solid black;"></td>
          <td colspan="2" style="text-align: center; border: 1px solid black;">Inclusive Serial Nos.</td>
          <td colspan="1" style="text-align: center; border: 1px solid black;"></td>
          <td colspan="2" style="text-align: center; border: 1px solid black;">Inclusive Serial Nos.</td>
          <td colspan="1" style="text-align: center; border: 1px solid black;"></td>
          <td colspan="2" style="text-align: center; border: 1px solid black;">Inclusive Serial Nos.</td>
        </tr>
      ';

      echo
      '
        <tr>

          <td>Name of Form</td>
          <td>Number</td>
          <td>Face Value</td>

          <td>Qty.</td>
          <td>From</td>
          <td>To</td>

          <td>Qty.</td>
          <td>From</td>
          <td>To</td>

          <td>Qty.</td>
          <td>From</td>
          <td>To</td>

          <td>Qty.</td>
          <td>From</td>
          <td>To</td>
        <tr>
      ';

     
      //Filter
      if(isset($_POST['filter_month']))
      {
          echo
          '
            <tr>
              <td colspan="1" style="font-weight:bold">A. WITH FACE VALUE</td>
              <td></td>
              <td></td>

              <td></td>
              <td></td>
              <td></td>

              <td></td>
              <td></td>
              <td></td>

              <td></td>
              <td></td>
              <td></td>

              <td></td>
              <td></td>
              <td></td>

            <tr>
          ';

          echo
          '
            <tr>
              <td></td>
              <td></td>
              <td></td>

              <td></td>
              <td></td>
              <td></td>

              <td></td>
              <td></td>
              <td></td>

              <td></td>
              <td></td>
              <td></td>

              <td></td>
              <td></td>
              <td></td>

            <tr>
          ';

        $selected_month = 4;
        $curryear = date('Y');

        //Beginning Balance
          $bb_start = mysqli_fetch_array(mysqli_query($connection, "SELECT or_no FROM `r_official_receipt` 
                                                                                  WHERE month(or_create_date) = '$selected_month'
                                                                                  and year(or_create_date) = '$curryear'
                                                                                  ORDER BY or_ID ASC"));
          $bb_start_display = $bb_start[0];

          $bb_end = mysqli_fetch_array(mysqli_query($connection, "SELECT or_no FROM `r_official_receipt` 
                                                                                  WHERE month(or_create_date) = '$selected_month'
                                                                                  and year(or_create_date) = '$curryear'
                                                                                  ORDER BY or_ID DESC"));
          $bb_end_display = $bb_end[0];

          $bb_start_convert = (int)(substr($bb_start[0],4));
          $bb_end_convert = (int)(substr($bb_end[0],4));

          $bb_total_count = ($bb_end_convert - $bb_start_convert) + 1;


        //Issuance Balance
          $iss_start = mysqli_fetch_array(mysqli_query($connection, "SELECT or_no FROM `r_official_receipt` 
                                                                                  WHERE or_status = 'PAID' or 'CANCELLED'
                                                                                  and (month(or_create_date) = '$selected_month'
                                                                                  and year(or_create_date) = '$curryear')
                                                                                  ORDER BY or_ID ASC"));
          $iss_start_display = $iss_start[0];

          $iss_end = mysqli_fetch_array(mysqli_query($connection, "SELECT or_no FROM `r_official_receipt` 
                                                                                  WHERE or_status = 'PAID' or 'CANCELLED'
                                                                                  and (month(or_create_date) = '$selected_month'
                                                                                  and year(or_create_date) = '$curryear')
                                                                                  ORDER BY or_ID DESC"));
          $iss_end_display = $iss_end[0];

          $iss_start_convert = (int)(substr($iss_start[0],4));
          $iss_end_convert = (int)(substr($iss_end[0],4));

          $iss_total_count = ($iss_end_convert - $iss_start_convert) + 1;

        //Ending Balance
          $eb_start = mysqli_fetch_array(mysqli_query($connection, "SELECT or_no FROM `r_official_receipt` 
                                                                                  WHERE or_status = 'PENDING'
                                                                                  and (month(or_create_date) = '$selected_month'
                                                                                  and year(or_create_date) = '$curryear')
                                                                                  ORDER BY or_ID ASC"));
          $eb_start_display = $eb_start[0];

          $eb_end = mysqli_fetch_array(mysqli_query($connection, "SELECT or_no FROM `r_official_receipt` 
                                                                                  WHERE or_status = 'PENDING'
                                                                                  and (month(or_create_date) = '$selected_month'
                                                                                  and year(or_create_date) = '$curryear')
                                                                                  ORDER BY or_ID DESC"));
          $eb_end_display = $eb_end[0];

          $eb_start_convert = (int)(substr($eb_start[0],4));
          $eb_end_convert = (int)(substr($eb_end[0],4));

          $eb_total_count = ($eb_end_convert - $eb_start_convert) + 1;

        

        echo
        '
          <tr>
            <td colspan="1" style="font-weight:bold">B. WITHOUT FACE VALUE</td>
            <td></td>
            <td></td>

            <td style="font-weight: bold">'.$bb_total_count.'</td>
            <td>'.$bb_start_display.'</td>
            <td>'.$bb_end_display.'</td>

            <td></td>
            <td></td>
            <td></td>

            <td style="font-weight: bold">'.$iss_total_count.'</td>
            <td>'.$iss_start_display.'</td>
            <td>'.$iss_end_display.'</td>

            <td style="font-weight: bold">'.$eb_total_count.'</td>
            <td>'.$eb_start_display.'</td>
            <td>'.$eb_end_display.'</td>

          <tr>
        ';
        echo
        '
          <tr>
            <td></td>
            <td></td>
            <td></td>

            <td></td>
            <td></td>
            <td></td>

            <td></td>
            <td></td>
            <td></td>

            <td></td>
            <td></td>
            <td></td>

            <td></td>
            <td></td>
            <td></td>

          <tr>
        ';
        echo
        '
          <tr>
            <td style="font-weight: bold">TOTAL:</td>
            <td></td>
            <td></td>

            <td style="font-weight: bold">'.$bb_total_count.'</td>
            <td></td>
            <td></td>

            <td></td>
            <td></td>
            <td></td>

            <td style="font-weight: bold">'.$iss_total_count.'</td>
            <td></td>
            <td></td>

            <td style="font-weight: bold">'.$eb_total_count.'</td>
            <td></td>
            <td></td>
          <tr>
        ';
      }
      else
      {
          echo
          '
            <tr>
              <td colspan="15" style="font-weight:bold; color: red; text-align: center">
                YOU STILL NEED TO FILTER THE MONTH!
              </td>
            <tr>
          ';
      } 
      
  ?>      
  </tbody>                                 
</table>

<!--MODAL INCLUDES-->
<?php include("../_access_views/get_view_modal_edit_permissions.php");?>