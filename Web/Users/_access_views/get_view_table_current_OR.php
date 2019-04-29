<?php
  include('../../../db_con.php');
  $currmonth = date('m');
  $select_or = mysqli_query($connection, "SELECT or_no FROM `r_official_receipt` WHERE month(or_create_date) = '$currmonth' and or_status = 'PENDING' LIMIT 1");
  while($row = mysqli_fetch_assoc($select_or))
  {
    $or_num = $row['or_no'];

  }
  echo 
  '
   <tbody>
   		<tr>
   			<td>
   			      <label style="font-size: 15px">OR Number:</label>
   			      <input type="text" class="form-control" name="cr_ornum" style="font-size: 15px; color: black; font-weight: bold" readonly value="'.$or_num.'" required/>
   			  
   			</td>
   		</tr>
   </tbody>
  ';

?>