  
  <?php

require('../include/database.php');
include('../include/submit.php');

require('./Agreement_function.php');




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../favicon.png" rel="icon">
      <!-- custome styling -->
  <link rel="stylesheet" href="./Total Progress.css?<?php echo time(); ?>">

  <!-- Owl carosel -->


  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Main_CSS/all.css">
  <!-- AOS Library -->
  <link rel="stylesheet" href="../Main_CSS/aos.css">

    <title>Total Progress-RIMO</title>
</head>
<body>
  
<?php
  require('../include/flash_news1.php');

  ?>

  <!-- ------------------------------------logo images and flags section------------------------------------ -->

  <?php

  include('../include/logo_images.php');

  ?>


  <?php

  include_once('../include/navigation.php');

  ?>
 
    

      <?php

include('../include/login_form.php');

?>




      <div class="sub-menu-header">
        <ul>
          <li class="active">
            <a href="/index.php<?=$languages?>"><i class="fas fa-home"></i></a>
          </li>
          <li><a href="#"><?=$top_nav[$language][3]?> &nbsp;&nbsp; &nbsp; &nbsp;/</a></li>
          <li><a href="#"><?=$agree[$language][3]?></a></li>
          
          
          
        </ul>
      </div>


      <?php


      $total_progress=total_progress($db);
      ?>
      <!-- ---------------------------main -content---------------------------------------------------- -->
      <div class="main-about-content">
        <div class="about-content">
            <div class="title">
               
                 
                <div class="table1">
                    <div class="table-details">
            
                        <table>
                            <caption style="color: black;padding-bottom: 10px;"></caption>
                          <tr class="main">


                           
                                <th rowspan="3" width="5%">SN</th>
                                <th rowspan="3" width="15%">Periodicity</th>
                                <th colspan="5" width="50%">Financial Progress</th>
                                <th colspan="2" width="15%">Physical Progress</th>
                                <th rowspan="3" width="50%">Remarks</th>
                            </tr>
                            <tr class="sub-head-table">
                                <th colspan="2">Amount (Rs)</th>
                                <th rowspan="2">Target Rs</th>
                                <th colspan="2">Percentage</th>
                                <th rowspan="2">Periodic</th>
                                <th rowspan="2">Cumulative</th>
                            </tr>
                            <tr class="sub-head-table1">
                                <th>Periodic Rs</th>
                                <th>P. Cumulative Rs</th>
                                <th>Periodic</th>
                                <th>Yearly</th>
                            </tr>


                            <?php
                            $sno=0;

                            foreach($total_progress as $tot)

                            {
                                $sno=$sno+1;
                              ?>
                              <tr>
                                <td><?=$sno?></td>
                                <td><?=$tot['Periodicity']?></td>
                                <td><?=$tot['Periodic Rs']?></td>
                                <td><?=$tot['P.Cumulative Rs']?></td>
                                <td><?=$tot['Target Rs']?></td>
                                <td><?=$tot['Periodic']?></td>
                                <td><?=$tot['Yearly']?></td>
                                <td><?=$tot['P_Periodic']?></td>
                                <td><?=$tot['P_Cumulative']?></td>
                                <td><?=$tot['Remarks']?></td>
                            </tr>



                              <?php
                            }
                            ?>

                            
                          
                          
            
                          
                        
                        
                        </table>
                    </div>
                     
                  </div>
                
            
                    
            </div>

        </div>
    </div>

    
      <!-- ------------------------footer section------------------------------------- -->
  
  
      <?php

include('../include/footer.php')

?>

<!-- jquery file -->
<?php

include('../include/script.php');

?>
</body>
</html>