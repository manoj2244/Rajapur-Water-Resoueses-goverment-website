
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

    <title>Work Plan-RIMO</title>
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
          <li><a href="#"><?=$top_nav[$language][3]?>&nbsp;&nbsp; &nbsp; &nbsp;/</a></li>
          <li><a href="#"><?=$agree[$language][4]?></a></li>
          
          
          
        </ul>
      </div>


      



      <?php


      $work_plan=work_plan($db);
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
                                <th colspan="2" rowspan="2">माइलस्टोन</th>
                                <th colspan="12">लक्ष</th>
                                <th rowspan="3" width="5%">मंग्सीर महिनाको प्रगति</th>
                                <th rowspan="3"width="5%">मंग्सीर महिना सम्मको प्रगति</th>
                                <th rowspan="3" width="25%">सम्पन्न कार्यहरु</th>
                                <th rowspan="3" width="20%">प्रगति कम हुनुका कारणहरु</th>
                            </tr>
                            <tr class="sub-head-table">
                                <th colspan="4">प्रथम चौमासिक</th>
                                <th colspan="4">दोस्रो चौमासिक</th>
                                <th colspan="4">तेस्रो चौमासिक</th>
                            </tr>
                            <tr class="sub-head-table1">
                                <th width="20%">विवरण</th>
                                <th width="2%">परिमाण</th>
                                <th>१</th>
                                <th>२</th>
                                <th>३</th>
                                <th>४</th>
                                <th>१</th>
                                <th>२</th>
                                <th>३</th>
                                <th>४</th>
                                <th>१</th>
                                <th>२</th>
                                <th>३</th>
                                <th>४</th>
                            </tr>


                                  <?php

                                  foreach($work_plan as $work)

                                  {
                                    ?>

<tr>
                            <td><?=$work['bibaran']?></td>
                            <td><?=$work['pariman']?></td>
                            <td><?=$work['1_1']?></td>
                            <td><?=$work['1_2']?></td>
                            <td><?=$work['1_3']?></td>
                            <td><?=$work['1_4']?></td>
                            <td><?=$work['2_1']?></td>
                            <td><?=$work['2_2']?></td>
                            <td><?=$work['2_3']?></td>
                            <td><?=$work['2_4']?></td>
                            <td><?=$work['3_1']?></td>
                            <td><?=$work['3_2']?></td>
                            <td><?=$work['3_3']?></td>
                            <td><?=$work['3_4']?></td>
                            <td><?=$work['mansir_progress']?></td>
                            <td><?=$work['till_mansir']?></td>
                            <td><?=$work['complete']?></td>
                            <td><?=$work['cause']?></td>
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