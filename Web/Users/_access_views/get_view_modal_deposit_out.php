 <div class="modal fade" id="deposit_out">
        <div class="modal-dialog">
            <div class="modal-content">
                <center>
                    <form action="../_func/co_logout_transact.php" method="POST">
                        <div class="modal-header" style="background-color: maroon;">
                            <h4 class="modal-title" style="color: white">Log Out Confirmation</h4>
                        </div>
                        <div class="modal-body" style="text-align: justify; font-size: 16px">
                            <!-- FIRST ROW -->
                            

                            <div class="row" style="margin-top: 5px; text-align: center">
                              
                              <div class="row" style="margin-top: 10px">
                                <p style="font-size: 17px; text-align: center;">
                                  By logging out, the system will automatically create a deposit slip record for today's total collection.
                                  <br>
                                  But if you want to rest for a bit without logging out, you can lock your system's screen by clicking the lock screen button.
                                  <br>
                                  Are you sure want confirm?
                                </p>
                              </div>
                              <?php

                                $date_now = date('Y-m-d');
                                $get_today_transact = "SELECT * FROM `t_cr_register_master` WHERE cr_date_payment = '$date_now'";
                                $excute_view = mysqli_query($connection, $get_today_transact);
                                $total_deposits = 0;
                                while($row = mysqli_fetch_assoc($excute_view))
                                {
                                  $cr_t_payment = $row['cr_total_payment'];
                                  $total_deposits += $cr_t_payment;
                                }
                              ?>
                              <table style="border: 1px solid black; border-collapse: collapse; width:100%; margin:20px;">
                                <tbody>
                                  <tr style="">
                                    <td style="border: 1px solid black; border-collapse: collapse;text-align: left">
                                      
                                      <b>Today's Total Collection:</b></td>
                                    <td style="border: 1px solid black; border-collapse: collapse;text-align: center">
                                       <b>₱ <?php echo $total_deposits; ?></b></td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>
                            <!-- FIRST ROW -->
                        </div>
                        <input type="hidden" name="userID" value="<?php echo $userID;?>">
                        <input type="hidden" name="currpage" value="<?php echo $curr_page;?>">

                        <div class="modal-footer" style="text-align: center">
                            <div class="col-md-12" style="text-align: right; ">
                                <button type="submit" class="btn btn-danger" name="toggle_deposit" style="font-size:13px; background-color: maroon">
                                    <i class="ion-archive"></i>
                                     Log Me Out
                                </button>&nbsp;
                                <button type="submit" class="btn btn-primary" name="lock" style="font-size:13px">
                                    <i class="ion-locked"></i>
                                    Lock My Screen
                                </button>&nbsp;
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
