<?php
     
    //TRIGGERS
       if(isset($_POST['save_acc_report']))
       { 
         
          add_accountable_form();
          echo "<script type=\"text/javascript\">".
                   "alert
                   ('You have successfully save the accountable form record.');".
                  "</script>";
          echo "<script>setTimeout(\"location.href = '../_views/co_create_accountable_form.php';\",0);</script>";
       }

       else if(isset($_POST['add_navigation']))
       { 
          //add_navigation();
       }

      

      
     //FUNCTIONS
        
        function add_accountable_form()
        { 
            require('../../../db_con.php');
            $curr_year = date('Y');
            $curr_month = date('m');
            $month_no = str_pad($curr_month,1,"0",STR_PAD_LEFT);
            $acc_form_no = $curr_year.'-'.$month_no;
            

            $co_acc_bb_total_count = $_POST['co_acc_bb_total_count'];
            $co_acc_bb_start_display = $_POST['co_acc_bb_start_display'];
            $co_acc_bb_end_display = $_POST['co_acc_bb_end_display'];
            $co_acc_iss_total_count = $_POST['co_acc_iss_total_count'];
            $co_acc_iss_start_display = $_POST['co_acc_iss_start_display'];
            $co_acc_iss_end_display = $_POST['co_acc_iss_end_display'];
            $co_acc_eb_total_count = $_POST['co_acc_eb_total_count'];
            $co_acc_eb_start_display = $_POST['co_acc_eb_start_display'];
            $co_acc_eb_end_display = $_POST['co_acc_eb_end_display'];
            $co_acc_PIC = $_POST['co_acc_PIC'];
            $co_datestamp = date('Y-m-d');

             $insert = "INSERT INTO t_accountable_forms_wfv(af_wfv_no,
                                                             af_wfv_bb_qty,
                                                             af_wfv_bb_from,
                                                             af_wfv_bb_to,
                                                             af_wfv_iss_qty,
                                                             af_wfv_iss_from,
                                                             af_wfv_iss_to,
                                                             af_wfv_eb_qty,
                                                             af_wfv_eb_from,
                                                             af_wfv_eb_to,
                                                             af_wfv_person_in_charge,
                                                             af_wfv_datestamp,
                                                             af_wfv_active_stat
                                                            )     
                                                 VALUES ('$acc_form_no',
                                                         '$co_acc_bb_total_count',
                                                         '$co_acc_bb_start_display',
                                                         '$co_acc_bb_end_display',
                                                         '$co_acc_iss_total_count',
                                                         '$co_acc_iss_start_display',
                                                         '$co_acc_iss_end_display',
                                                         '$co_acc_eb_total_count',
                                                         '$co_acc_eb_start_display',
                                                         '$co_acc_eb_end_display',
                                                         '$co_acc_PIC',
                                                         '$co_datestamp',
                                                         'Active'
                                                        )";
                  
              mysqli_query($connection,$insert);

              //($insert);

        }

       
?>


