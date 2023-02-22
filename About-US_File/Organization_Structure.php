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

    <title>Organization Structure-RIMO</title>
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
          <li><a href="#"><?=$About[$language][1]?></a></li>
        </ul>
      </div>
    

      
          <!-- login-form -->


  <?php

include('../include/login_form.php');

?>

      <!---------------------------------------organzization images---------------------- -->
       <?php

$sql = "SELECT * FROM `organization`";
$result = mysqli_query($db, $sql);
 $row = mysqli_fetch_assoc($result);

       ?>
      <div class="organization_image">
         <img src="<?=$row['photo']?>" alt="">
        
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