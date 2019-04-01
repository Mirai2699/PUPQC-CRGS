    <!-- INDEX CARDS-->
      <div id="I2_box" class="col-lg-4 col-md-6">
          <div class="widget widget-stats bg-black-lighter text-inverse">
            <div class="stats-icon stats-icon-square bg-gradient-blue"><i class="ion-cash"></i></div>
            <div class="stats-content">
              <div id="I2_box" class="stats-title">Today's Total Collection</div>
              <div id="I2_box" class="stats-number" style="font-size: 30px">
                ₱ <?php echo number_format((float)$total_deposits, 2, '.', '');; ?>    
              </div>
              <div class="stats-progress progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <div id="I2_box" class="stats-desc">Today's Date: <?php echo date('F d, Y');?></div>
              </div>
            </div>
      </div>
      <?php include("../_access_views/get_view_details_dashboard.php");?>
      <div id="I2_box" class="col-lg-4 col-md-6">
          <div class="widget widget-stats bg-black-lighter text-inverse">
            <div class="stats-icon stats-icon-square bg-gradient-blue"><i class="ion-cash"></i></div>
            <div class="stats-content">
              <div id="I2_box" class="stats-title">Month's Total Collection</div>
              <div id="I2_box" class="stats-number" style="font-size: 30px">
                ₱ <?php echo number_format((float)$total_monthly_collection, 2, '.', '');; ?>    
              </div>
              <div class="stats-progress progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <div id="I2_box" class="stats-desc">Current Month: <?php echo date('F');?></div>
              </div>
            </div>
      </div>

      <div id="I2_box" class="col-lg-4 col-md-6">
          <div class="widget widget-stats bg-black-lighter text-inverse">
            <div class="stats-icon stats-icon-square bg-gradient-blue"><i class="ion-cash"></i></div>
            <div class="stats-content">
              <div id="I2_box" class="stats-title">Year's Total Collection</div>
              <div id="I2_box" class="stats-number" style="font-size: 30px">
                ₱ <?php echo number_format((float)$total_yearly_collection, 2, '.', '');; ?>    
              </div>
              <div class="stats-progress progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <div id="I2_box" class="stats-desc">Current Year: <?php echo date('Y');?></div>
              </div>
            </div>
      </div> 
    <!-- INDEX CARDS-->

    <!--LINE CHART-->   
    <div class="col-md-12">
        <div class="widget-chart with-sidebar bg-black">
            <div class="widget-content" style="margin:10px">
                <h4 class="chart-title">
                   Monthly Total Collection of the Year <?php echo date('Y') ?>
                    <small>Collective Record of Transactions</small>
                </h4>
                <div id="visitors-line-chart" class="widget-chart-full-width nvd3-inverse-mode">
                  <center>
                    <div class="col-md-12" style="width: 97%; margin-right: 7px">
                        <div id="line"></div>
                        <script type="text/javascript">
                            Highcharts.chart('line', {
                            chart: {
                                type: 'line'
                            },
                            title: {
                                text: 'Monthly Total Collection as of <?php echo date('Y');?>'
                            },
                            xAxis: {
                                categories: [<?php
                                                $curryear = date("Y");

                                                     $view_query2 = mysqli_query($connection,"SELECT DISTINCT month(cr_date_payment) AS Month, monthname(cr_date_payment) AS Name from t_cr_register_master WHERE year(cr_date_payment) = '$curryear'");
                                                    while($row2 = mysqli_fetch_assoc($view_query2))
                                                        {   
                                                            $eventMonth = $row2["Month"];
                                                            $m_name = $row2["Name"];
                                                            echo '\''.$m_name.'\',';
                                                        }
                                             ?>
                                      ]
                            },
                            yAxis: {
                                title: {
                                    text: 'Total Amount of Collection Per Month'
                                }
                            },
                            plotOptions: {
                                line: {
                                    dataLabels: {
                                        enabled: true
                                    },
                                    enableMouseTracking: true
                                }
                            },
                            series: [{
                                name: 'Amount of Collection in Peso',
                                data: [
                                      <?php
                                        $curryear = date("Y");

                                        $view_query2 = mysqli_query($connection,"SELECT DISTINCT month(cr_date_payment) AS Month, monthname(cr_date_payment) AS Name from t_cr_register_master WHERE year(cr_date_payment) = '$curryear'");
                                            while($row2 = mysqli_fetch_assoc($view_query2))
                                                {   
                                                    $eventMonth = $row2["Month"];
                                                    $m_name = $row2["Name"];
                                      ?>
                                    {
                                            name: '<?php
                                                      echo $m_name; 
                                                   ?>',
                                            y: <?php 
                                                  $view_query3 = mysqli_query($connection,"SELECT * FROM `t_cr_register_master` WHERE month(cr_date_payment) = '$eventMonth' ");
                                                  $total = 0;
                                                  while($row3 = mysqli_fetch_assoc($view_query3))
                                                      {
                                                            $amount = $row3["cr_total_payment"];
                                                            $total += $amount;
                                                            
                                                      }
                                                      echo  $total;
                                               ?>
                                    },
                                      <?php
                                      }
                                      ?>
                                      ]
                            }
                            ]
                        });
                        </script>
                    </div>
                  </center>
                </div>
            </div>
        </div>
    </div>
    <!--LINE CHART--> 


    <!--DRILLDOWN CHART-->   
    <div class="col-md-12">
        <div class="widget-chart with-sidebar bg-black">
            <div class="widget-content" style="margin:15px">
                <h4 class="chart-title">
                   Total Collection Per Income Type of the Year <?php echo date('Y')?>
                    <small>&nbsp;Collective Records of Transactions Per Nature of Collection</small>
                </h4>
                <div id="visitors-line-chart" class="widget-chart-full-width nvd3-inverse-mode">
                    <div class="col-md-12" >
                        <div id="population"></div>
                            <script type="text/javascript">
                                Highcharts.chart('population', {
                                chart: {
                                type: 'column'
                                },
                                title: {
                                    text: 'Total Collection Per Income Type as of <?php echo date('Y');?>'

                                },
                                subtitle: {
                                    text: 'Click to View Collection Breakdown Per Nature of Collection'
                                },
                                xAxis: {
                                    type: 'category',
                                    title: {
                                        text: null
                                    },
                                    min: 0,
                                    scrollbar: {
                                        enabled: true
                                    },
                                    tickLength: 0
                                },
                                yAxis: {
                                    title: {
                                        text: null
                                    }
                                },
                                legend: {
                                    enabled: false
                                },
                                plotOptions: {
                                    series: {
                                        borderWidth: 0,
                                        dataLabels: {
                                            enabled: true,
                                            format: '{point.y:.0f}'
                                        }
                                    }
                                },

                                tooltip: {
                                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>Collected Amount of  ₱  {point.y:.0f}</b><br/>'
                                },

                                series: [
                                    {
                                        name: "Municpality",
                                        colorByPoint: true,
                                        data: [
                                            <?php
                                               $level1 =  mysqli_query($connection,"SELECT uacs_type_ID, uacs_type_name FROM `r_uacs_type` ");
                                               while($row1 = mysqli_fetch_assoc($level1))
                                               {
                                                $uacs_type_ID = $row1["uacs_type_ID"];
                                                $uacs_type_name = $row1["uacs_type_name"];
                                                           //echo $display;
                                                            //$InvQty = $row["Quantity"];
                                            ?> 
                                            {
                                                name: '<?php echo $uacs_type_name?>',
                                                y: <?php
                                                        $compute1 = mysqli_query($connection, "SELECT * FROM 
                                                                                                `t_cr_register_income_references`
                                                                                               WHERE cr_ir_uac_type_ref = '$uacs_type_ID' ");
                                                         $totalcount = 0;
                                                         while($row_compute = mysqli_fetch_assoc($compute1))
                                                         {
                                                            $cr_ir_amount = $row_compute['cr_ir_amount'];
                                                            $totalcount += $cr_ir_amount;
                                                           
                                                         }
                                                         echo $totalcount;

                                                   ?>,
                                                drilldown: 'PART<?php echo $uacs_type_ID?>',
                                            },
                                            <?php
                                            }
                                            ?>
                                        ]
                                    }
                                ],
                                    drilldown: {
                                       series: [
                                        //requisition types
                                       <?php
                                          $level1 =  mysqli_query($connection,"SELECT uacs_type_ID, uacs_type_name FROM `r_uacs_type` ");
                                          while($row1 = mysqli_fetch_assoc($level1))
                                          {
                                           $uacs_type_ID = $row1["uacs_type_ID"];
                                           $uacs_type_name = $row1["uacs_type_name"];
                                                      //echo $display;
                                                       //$InvQty = $row["Quantity"];
                                       ?> 
                                       {
                                          name: 'Nature of Collection:',
                                          id: 'PART<?php echo $uacs_type_ID?>',
                                          type:'column',
                                          data: [
                                                <?php

                                                     $view_query = mysqli_query($connection,"SELECT DISTINCT uacs_ID, uacs_acc_title FROM `r_uacs`
                                                                                            WHERE uacs_type = '$uacs_type_ID'");
                                                      while($row = mysqli_fetch_assoc($view_query))
                                                          {   
                                                              $ID_select = $row["uacs_ID"];
                                                              $display = $row["uacs_acc_title"];
                                                              //echo $display;
                                                               //$InvQty = $row["Quantity"];

                                                ?>

                                                { 
                                                    name: '<?php echo $display ?>',
                                                    y: <?php
                                                         $view_query1 = mysqli_query($connection,"SELECT * FROM 
                                                                                                `t_cr_register_income_references` AS CRIR
                                                                                                WHERE CRIR.cr_ir_uac_ID_ref = '$ID_select' ");
                                                        $part_amount = 0;
                                                        while($part_row = mysqli_fetch_assoc($view_query1))
                                                        {
                                                          $get_amount = $part_row['cr_ir_amount'];
                                                          $part_amount += $get_amount;
                                                        }
                                                        echo $part_amount;
                                                            
                                                          
                                                       ?>,
                                                    
                                                },
                                                <?php
                                                }?>
                                          ]
                                   
                                        }, 
                                    <?php
                                      }
                                    ?>
                                       

                                  ]
                                },

                               

                                    
                                    
                                });

                            </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--LDRILLDOWN CHART--> 