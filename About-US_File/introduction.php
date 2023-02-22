<?php
  require('../include/database.php');
  include('../include/language.php');
  include('../include/submit.php');

?>


<?php
  require('./about_function.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../favicon.png" rel="icon">
      <!-- custome styling -->
  <link rel="stylesheet" href="./introduction.css?<?php echo time();?>">

  <!-- Owl carosel -->


  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Main_CSS/all.css">
  <!-- AOS Library -->
  <link rel="stylesheet" href="../Main_CSS/aos.css">

    <title>Introduction-RIMO</title>
</head>


<body>

<!-- ---------------------------------flash news------------------------------------------- -->

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
    
      <!-- --------------------- section of navigation bar ------------------ -->


      <?php

     // $row_intro=intro($db);
      $sql = "SELECT * FROM `introduction`";
      $result = mysqli_query($db, $sql);
      $row_intro = @mysqli_fetch_assoc($result);
      


     ?>

      <div class="sub-menu-header">
        <ul>
          <li class="active">
            <a href="../index.php<?=$languages?>"><i class="fas fa-home"></i></a>
          </li>
          <li><a href="#"><?=$top_nav[$language][0]?> &nbsp;&nbsp; &nbsp; &nbsp;/</a></li>
          <li><a href="#"><?=$About[$language][0]?></a></li>
        </ul>
      </div>


          <!-- login-form -->


  <?php

include('../include/login_form.php');

?>
      <div class="main-about-content">
        <div class="about-content">
          <div class="title">
          
            <h4> 
            <?=$About[$language][6]?>
              </h4>
              <p><?= $row_intro['background']?></p>
          </div>

        </div>
      </div>
      <div class="secondary-about-content">
        <div class="secondary-content">
          <div class="secondary-content-1">
            <div class="title">
            <?php



?>
              <h4> 
              <?=$About[$language][7]?>

                </h4>
                <p><?= $row_intro['objectives']?> ।</p>
            </div>
  

          </div>
          <div class="secondary-content-2">
            <div class="title">
              <h4> 
              <?=$About[$language][8]?>
                </h4>
                
                  <p><?= $row_intro['plan']?></p>
                  
                
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