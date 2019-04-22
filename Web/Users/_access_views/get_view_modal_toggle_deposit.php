  <?php
      $currmonth = date('m');
      $view_query1 = mysqli_query($connection,"SELECT * FROM `t_deposits` 
                                              WHERE dep_status = 'PENDING'
                                              ORDER BY dep_ID  DESC");
      while($row1 = mysqli_fetch_assoc($view_query1))
      {
          $dep_ID = $row1["dep_ID"];
          $dep_acc_no = $row1["dep_acc_no"];
          $dep_slip_no = $row1["dep_slip_no"];
          $dep_amount = $row1["dep_amount"];
          $dep_date_for = $row1["dep_date_for"];
          $dep_date_actual = $row1["dep_date_actual"];

  ?>  
    <div class="modal fade" id="toggle_deposit_pending<?php echo $dep_ID?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <center>
                    <form action="../_func/co_add_deposit.php" method="POST">
                        <div class="modal-header" style="background-color: green;">
                            <h4 class="modal-title" style="color: white">Mark as Deposited</h4>
                        </div>
                        <div class="modal-body" style="text-align: justify; font-size: 16px">
                            <!-- FIRST ROW -->
                            <input type="hidden" name="dep_ID" value="<?php echo $dep_ID?>">

                            <div class="row" style="margin-top: 5px; text-align: center">
                              <label>Deposit Record Information</label>
                              <table style="border: 1px solid black; border-collapse: collapse; width: 100%; text-align: center">
                                <thead>
                                  <th style="border: 1px solid black; border-collapse: collapse;">Dep Slip No.</th>
                                  <th style="border: 1px solid black; border-collapse: collapse;">Amount</th>
                                  <th style="border: 1px solid black; border-collapse: collapse;">Date of Collection</th>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td style="border: 1px solid black; border-collapse: collapse;"><?php echo $dep_slip_no; ?></td>
                                    <td style="border: 1px solid black; border-collapse: collapse;">₱ <?php echo $dep_amount; ?></td>
                                    <td style="border: 1px solid black; border-collapse: collapse;"><?php echo $dep_date_for; ?></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="row" style="margin-top: 10px">
                                <div class="col-md-12" style="margin-left: 70%">
                                      <label>Date of Actual of Deposit:</label>
                                      <input type="date" name="actual_date_deposit" class="form-control" required>
                                </div>
                              </div>
                              <div class="row" style="margin-top: 10px">
                                <p style="font-size: 17px; text-align: center;">
                                  By clicking the confirm button, this deposit slip record will be marked as deposited.<br>
                                  Are you sure want confirm?
                                </p>
                              </div>
                           
                            </div>
                            <!-- FIRST ROW -->
                        </div>
                        <div class="modal-footer" style="text-align: center">
                            <div class="col-md-12" style="text-align: right; ">
                                <button type="submit" class="btn btn-success" name="toggle_deposit" style="font-size:13px">
                                    <i class="ion-archive"></i>
                                     Confirm
                                </button>
                                <button type="submit" class="btn btn-danger" style="font-size:13px" data-dismiss="modal">
                                    <i class="fa fa-times"></i>
                                     Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </center>
            </div>
        </div>
    </div>
<?php } ?>

