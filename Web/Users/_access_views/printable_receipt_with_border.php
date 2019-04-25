<!-- <link href="../../../resources/custom/print_format.css" media="print" rel="stylesheet" /> -->
<style type="text/css">
  @page {
    size:4in 6in;
    margin-top: 0in; 
    margin-left: 0.2in;
    margin-right: 0.2in;
    margin-bottom: 0in;
   
  }
  .table1{
      border: 1px solid black;
      border-collapse: collapse;
      text-align: center;
  }
</style>

<div style="display: none">
  <div id="printable" class="panel-body" style="color: black">
     <div style="border:1px solid black;">
       <table style="width: 100%; font-size: 11px" >
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
       </table>
       <?php include("../_access_views/get_view_details_official_receipt.php");?>
       <table class="table1" style="width: 100%; font-size: 13px;">
         <tr class="table1">
           <td rowspan="2" class="table1" style="width: 100px">
             (O)
           </td>
           <td class="table1" style="font-size: 11px; width: 30px">
            Official Receipt of the<br>
            Republic of the Philippines
           </td>
           <td rowspan="2" class="table1" style="width: 100px">
             (O)
           </td>
         </tr>
         <tr class="table1">
           <td class="table1">
             No. <?php echo $cr_or_num; ?>
           </td>
         </tr>
       </table>

       <table class="table1" style="width: 100%; font-size: 13px;">
         <tr class="table1">
           <td class="table1" style="text-align: left">
             Fund: 05 2 06 441
           </td>
           <td class="table1" style="text-align: left">
             Date: <?php echo $cr_nf_date_payment; ?>
           </td>
         </tr>
       </table>
       <center>
        <b style="font-size: 12px; font-family: arial">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</b>
       </center>
       <hr>

       <pre style="font-size: 9px; font-family: arial">Payor: <?php echo $cr_payor; ?></pre>
       <table  class="table1"style="height:300px; width: 100%">
         <thead>
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
                                    <tr style="height: 15px">
                                      <td style="border-left: 1px solid black; font-size: 10px; text-align:  left">
                                         '.$part_desc.'
                                      </td>
                                      <td style="border-left: 1px solid black; font-size: 10px; text-align:  left"></td>
                                      <td style="border-left: 1px solid black; font-size: 10px; text-align:  right">
                                         ₱ '.$part_amount.'
                                      </td>
                                     </tr>';
                  // echo $part_desc.'-'.$part_amount.'<br>';
                     echo $display_part;
                     $total = $total + $part_amount;
                 }

           ?>  
           <tr>
              <td class="table1"></td>
              <td class="table1"></td>
              <td class="table1"></td>
           </tr>    
           <tr style="height: 20px">
             <td class="table1" colspan="2" style="font-size: 9px"><b>TOTAL</b></td>
             <td class="table1" style="font-size: 10px; text-align: right">₱ <?php echo $total; ?></td>
           </tr>
           <tr style="height: 20px">
             <td class="table1" colspan="3" style="font-size: 9px; text-align: left;">Amount in Words</td>
           </tr>
           <tr style="height: 10px">
             <td class="table1" colspan="3" style="font-size: 9px; text-align: left;"></td>
         </tbody>
       </table>

       <table class="table1" style="width:100%; font-size: 9px">
         <tr>
           <td class="table1" rowspan="4" style="text-align: left">
             <input type="checkbox"> Cash<br>
             <input type="checkbox"> Check<br>
             <input type="checkbox"> Money Order<br>
           </td>
           <td class="table1" style="text-align: center; font-weight: bold">Drawee Bank</td>
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

       <p style="font-size: 10px">Received the amount stated above.</p>
       <p style="font-size: 9px; text-align: center">______________________________________<br>Collecting Officer
       </p>
      </div>

  </div>
</div>