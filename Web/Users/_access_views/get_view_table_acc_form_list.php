<table id="data-table-default" class="table table-striped table-bordered" style="font-size: 15px">
  <thead>
  <tr>
      <th class="hidden">ID</th>
      <th>ACC FR No.</th>
      <th>For the Month of</th>
      <th style="text-align: center">Action</th>
  </tr>
  </thead>
  <tbody>
  <?php
      $view_query = mysqli_query($connection,"SELECT * FROM `t_accountable_forms_wfv` 
                                                       ORDER BY af_wfv_ID DESC");
      while($row = mysqli_fetch_assoc($view_query))
      {
          $ID = $row["af_wfv_ID"];
          $af_wfv_no = $row["af_wfv_no"];
          $af_wfv_datestamp = new datetime($row["af_wfv_datestamp"]);
          $nf_datestamp = $af_wfv_datestamp->format('F Y');


        
            echo 
            '
              <tr class="gradeX">
                  <td class="hidden">'.$ID.'</td>
                  <td width="">'.$af_wfv_no.'</td>
                  <td width="">'.$nf_datestamp.'</td>
                  <td style="text-align:center">
                    <a href="co_view_accountable_form.php?getID='.$ID.'" class="btn btn-primary" title="View More Details">
                      <i class="fa fa-eye"></i>&nbsp;
                      View More Details
                    </a>
                  </td>
              </tr>  
            ';
         
         
      }
  ?>      
  </tbody>                                 
</table>

<!--MODAL INCLUDES-->