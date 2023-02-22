<?php
  require('../include/database.php');
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
  <link rel="stylesheet" href="./Ex Project Chief.css?<?php echo time();?>">

  <!-- Owl carosel -->


  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Main_CSS/all.css">
  <!-- AOS Library -->
  <link rel="stylesheet" href="../Main_CSS/aos.css">

    <title>Ex employee-RIMO</title>
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
    
      <div class="sub-menu-header">
        <ul>
          <li class="active">
            <a href="../index.php<?=$languages?>"><i class="fas fa-home"></i></a>
          </li>
          <li><a href="#"><?=$top_nav[$language][0]?>&nbsp;&nbsp; &nbsp; &nbsp;/</a></li>
          <li><a href="#"><?=$About[$language][5]?></a></li>
        </ul>
      </div>
    

      
          <!-- login-form -->


  <?php

include('../include/login_form.php');

?>

      <!---------------------------------------employee_details---------------------- -->

      <?php

      $card=card1($db);
    


?>
    <div class="main-card">
 
        <?php

        foreach($card as $card1){

          ?>
          

            <div class="employee-data">
            <div class="card-container">

          <div class="card" >
          <div class="card-image">
            <img src="<?= $card1['card_image']?>" alt="">
          </div>
          <div class="card-content">
            <div class="blog-details">
              <h6><?= $card1['name']?></h6>
              <p><?= $card1['profession']?></p>
    
              <div class="icon-text"><span class="icon"><i class="fas fa-dot-circle"></i><?= $card1['sereni']?></span></div>
              <div class="icon-text"><span class="icon"><i class="fas fa-phone"></i><?= $card1['phone']?></span></div>
              <div class="icon-text"><span class="icon"><i class="fas fa-dot-circle"></i><?= $card1['kaifiyat']?></span></div>
            </div>
          </div>
        </div>
        
      </div>
      </div>

        <?php


    }
    ?>
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