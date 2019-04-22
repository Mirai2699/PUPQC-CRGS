<?php
  $get_navigation_name = mysqli_query($connection, "SELECT * FROM `r_navigation`
                                                            WHERE nav_link = '$curr_page'");
  while($getnav = mysqli_fetch_assoc($get_navigation_name))
  {
    $title_name = $getnav['nav_desc'];
  }

?>