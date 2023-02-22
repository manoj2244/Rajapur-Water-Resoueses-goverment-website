
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
  <link rel="stylesheet" href="./Agreement Achievement.css?<?php echo time(); ?>">

  <!-- Owl carosel -->


  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Main_CSS/all.css">
  <!-- AOS Library -->
  <link rel="stylesheet" href="../Main_CSS/aos.css">

    <title>Agreement Achievement-RIMO</title>
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

  
      <div class="sub-menu-header">
        <ul>
          <li class="active">
            <a href="/index.php<?=$languages?>"><i class="fas fa-home"></i></a>
          </li>
          <li><a href="#"><?=$top_nav[$language][3]?> &nbsp;&nbsp; &nbsp; &nbsp;/</a></li>
          <li><a href="#"><?=$agree[$language][2]?> </a></li>
          
          
          
        </ul>
      </div>

           <!-- login-form -->


  <?php

include('../include/login_form.php');

?>


      <?php


$agreement=agreement($db);




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
                          
            
                            <th rowspan="2">S.N</th>
                            <th rowspan="2">Name of work</th>
                            <th rowspan="2">Contract ID</th>
                            <th rowspan="2">Name of Contractor</th>
                            <th rowspan="2">Contract Amount</th>
                            <th rowspan="2">Date of Agreement</th>
                            <th rowspan="2">Date of completion as per Agreement</th>
                            <th rowspan="2">Due Date of Completion</th>
                            <th rowspan="2">Time Extended based on Original schedule</th>
                            <th rowspan="2">Time Elapsed based on revised schedule</th>
                            <th colspan="3">Financial Progress</th>
                            <th colspan="2">Physical Progress</th>
                            <th rowspan="2">Progress Status</th>
                            <th rowspan="2">Remarks</th>
                            
                          </tr>
                          <tr class="sub-head-table">
                              <td>Amount</td>
                              <td>Percent</td>
                              <td>Date</td>
                              <td>Percent</td>
                              <td>Date</td>
            
                          </tr>


                          <?php
                          $sno=0;

                          foreach($agreement as $agree)

                          {
                              $sno=$sno+1;
                            ?>


                            <tr>
                            <td><?=$sno?></td>
                            <td><?=$agree['name_of_work']?></td>
                            <td><?=$agree['contract_id']?></td>
                            <td><?=$agree['name_contractor']?></td>
                            
                            <td><?=$agree['Contract Amount']?></td>
                            <td><?=$agree['Dates of Agreement']?></td>
                            <td><?=$agree['Dates of completion']?></td>
                            <td><?=$agree['Due Dates of Completion']?></td>
                            <td><?=$agree['Time Extended']?></td>
                            <td><?=$agree['Time Elapsed']?></td>
                            <td><?=$agree['financial_Amount']?></td>
                            <td><?=$agree['financial_Percent']?></td>
                            <td><?=$agree['financial_dates']?></td>
                            <td><?=$agree['Physical_Percent']?></td>
                            <td><?=$agree['Physical_Dates']?></td>
                            <td><?=$agree['Progress Statuss']?></td>
                            <td><?=$agree['Remarks']?></td>
             
                            
             
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