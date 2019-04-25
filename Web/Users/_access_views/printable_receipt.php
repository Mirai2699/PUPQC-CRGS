<!-- <link href="../../../resources/custom/print_format.css" media="print" rel="stylesheet" /> -->
<style type="text/css">
  @page {
    size:5in 7in;
   /* size:letter;*/
    margin-top: 0in; 
    margin-left: 0in;
    margin-right: 1.3in;
    margin-bottom: 0in;
   
  }
  .table1{
      /*border: 1px solid black;*/
      /*border-collapse: collapse;*/
      text-align: center;
  }
</style>

<div style="display: none">
  <div id="printable" class="panel-body" style="color: black">
     <div>
       <!-- <table style="width: 100%; font-size: 11px; visibility: hidden;" >
         <tr>
           <td style="font-size: 11px">
             Accountable FORM No. 51-C
             <br>
             <br>
             Revised January, 1992
           </td>
           <td style="font-size: 11px">
             <br>
             <br>
             (ORIGINAL)
           </td>
         </tr>
       </table> -->
       <?php include("../_access_views/get_view_details_official_receipt.php");?>
       <!-- <table class="table1" style="width: 100%; font-size: 13px; ;">
         <tr class="table1">
           <td rowspan="2" class="table1" style="width: 100px; visibility: hidden">
             (O)
           </td>
           <td class="table1" style="font-size: 11px; width: 30px; visibility: hidden">
            Official Receipt of the<br>
            Republic of the Philippines
           </td>
           <td rowspan="2" class="table1" style="width: 100px; visibility: hidden">
             (O)
           </td>
         </tr>
         <tr class="table1">
           <td class="table1">
             No. <?php echo $cr_or_num; ?>
           </td>
         </tr>
       </table> -->
       <br><br><br>
       <table class="table1" style="width: 100%; font-size: 13px;">
         <tr class="table1">
           <td class="table1" style="text-align: left; visibility: hidden;">
             &nbsp;&nbsp;&nbsp;&nbsp; 05 2 06 441
           </td>
           <td class="table1" style="text-align: left; margin-top:3px; font-family: arial">
             <?php echo $cr_nf_date_payment; ?>
           </td>
         </tr>
       </table>
       <center style="visibility: hidden;">
        <b style="font-size: 12px; font-family: arial">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</b>
       </center>
       <hr style="visibility: hidden">

       <pre style="font-size: 13px; font-family: arial; ">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cr_payor; ?></pre>
       <table  class="table1"style="height:330px; width: 100%">
         <thead style="visibility: hidden">
           <th class="table1" style="font-size: 9px">Nature of Collection</th>
           <th class="table1" style="font-size: 9px">Account Code</th>
           <th class="table1" style="font-size: 9px">Amount</th>
         </thead>

         <tbody style="font-family: arial">
           <?php
                 $get_ID = $_GET['getID'];

                 
                 $get_particulars = mysqli_query($connection, "SELECT * FROM `t_cr_register_income_references` AS CRIR2
                                                                       INNER JOIN `r_uacs` AS UACS
                                                                       ON CRIR2.cr_ir_uac_ID_ref = UACS.uacs_ID
                                                                       WHERE CRIR2.cr_ir_ornum_ref = '$cr_or_num'
                                                                       ");
                 $total = 0;
                 while($row_part = mysqli_fetch_assoc($get_particulars))
                 {
                   $part_desc = $row_part['uacs_acc_title'];
                   $part_amount = $row_part['cr_ir_amount'];
                   $display_part = '
                                    <tr style="height: 2%">
                                      <td style="font-size: 13px; text-align:  left">
                                         '.$part_desc.'
                                      </td>
                                      <td style="font-size: 13px; text-align:  left"></td>
                                      <td style="font-size: 13px; text-align:  right">
                                         ₱ '.$part_amount.'
                                      </td>
                                     </tr>';
                  // echo $part_desc.'-'.$part_amount.'<br>';
                     echo $display_part;
                     $total = $total + $part_amount;
                     $nf_total = number_format((float)$total, 2, '.', '');
                 }

           ?>  
           <!-- <tr style="height: 2%">
             <td style="font-size: 13px; text-align:  left">
                TEST
             </td>
             <td style="font-size: 13px; text-align:  left"></td>
             <td style="font-size: 13px; text-align:  right">
                ₱ 500.00
             </td>
           </tr>
           <tr style="height: 2%">
             <td style="font-size: 13px; text-align:  left">
                TEST
             </td>
             <td style="font-size: 13px; text-align:  left"></td>
             <td style="font-size: 13px; text-align:  right">
                ₱ 500.00
             </td>
           </tr>
           <tr style="height: 2%">
             <td style="font-size: 13px; text-align:  left">
                TEST
             </td>
             <td style="font-size: 13px; text-align:  left"></td>
             <td style="font-size: 13px; text-align:  right">
                ₱ 500.00
             </td>
           </tr>
           <tr style="height: 2%">
             <td style="font-size: 13px; text-align:  left">
                TEST
             </td>
             <td style="font-size: 13px; text-align:  left"></td>
             <td style="font-size: 13px; text-align:  right">
                ₱ 500.00
             </td>
           </tr>
           <tr style="height: 2%">
             <td style="font-size: 13px; text-align:  left">
                TEST
             </td>
             <td style="font-size: 13px; text-align:  left"></td>
             <td style="font-size: 13px; text-align:  right">
                ₱ 500.00
             </td>
           </tr> -->

           <tr style="height: 40%">
              <td class="table1"></td>
              <td class="table1"></td>
              <td class="table1"></td>
           </tr>   
           <tr style="height: 60%">
              <td class="table1"></td>
              <td class="table1"></td>
              <td class="table1"></td>
           </tr>
           <tr style="height: 2%; visibility: hidden">
             <td class="table1" colspan="2" style="font-size: 9px; visibility: hidden;"><b>TOTAL</b></td>
             <td class="table1" style="font-size: 13px; text-align: right">₱ <?php echo $nf_total; ?></td>
           </tr>
           <tr style="height: 2%; visibility: hidden">
             <td class="table1" colspan="1" style="font-size: 9px; text-align: left; visibility: hidden">Amount in Words</td>
             <td class="table1" colspan="2" style="font-size: 13px; text-align: left;">Amount in Words</td>
           </tr>
         </tbody>
       </table>

      <table  class="table1"style="height:300px; width: 100%">
        <thead style="visibility: hidden">
          <th class="table1" style="font-size: 9px">Nature of Collection</th>
          <th class="table1" style="font-size: 9px">Account Code</th>
          <th class="table1" style="font-size: 9px">Amount</th>
        </thead>
        <tbody style="font-family: arial">
          <tr style="height: 2%">
            <td class="table1" colspan="2" style="font-size: 9px; visibility: hidden;"><b>TOTAL</b></td>
            <td class="table1" style="font-size: 13px; text-align: right">₱ <?php echo $nf_total; ?></td>
            <input id="input" type="hidden" name="input" value="<?php echo $nf_total; ?>" />
          </tr>
          <tr style="height: 2%">
            <td class="table1" colspan="1" style="font-size: 9px; text-align: left; visibility: hidden">Amount in Words</td>
            <td id="output" class="table1" colspan="2" style="font-size: 13px; text-align: left; text-transform: uppercase"></td>
          </tr>


          <script type="text/javascript" src="../../../resources/custom/numberToWords.js"></script>
          <script type="text/javascript">
             var input = document.getElementById('input');
             var output = document.getElementById('output');

        
             output.innerHTML = numberToWords( parseInt(input.value, 10));
            
          </script>
        
        </tbody>
      </table>

       <table class="table1" style="width:100%; font-size: 9px; visibility: hidden;">
         <tr>
           <td class="table1" rowspan="4" style="text-align: left">
             <input type="checkbox"> Cash<br>
             <input type="checkbox"> Check<br>
             <input type="checkbox"> Mon           <td class="table1" style="text-align: center; font-weight: bold">Drawee Bank</td>
           <td class="table1" style="text-align: center; font-weight: bold">Number</td>
           <td class="table1" style="text-align: center; font-weight: bold">Date</td>
         </tr>
         <tr>
           <td class="table1"></td>
           <td class="table1"></td>
           <td class="table1"></td>
         </tr>
         <tr>
           <td class="table1"></td>          
           <td class="table1"></td>
           <td class="table1"></td>
         </tr>
         <tr>
           <td class="table1"></td>          
           <td class="table1"></td>
           <td class="table1"></td>
         </tr>
       </table>

       
       <p style="font-size: 14px; text-align: center; margin-top: 45px; font-family: arial">
        Ms. Merly B. Gonzalbo<br>
       </p>
      </div>

  </div>
</div>