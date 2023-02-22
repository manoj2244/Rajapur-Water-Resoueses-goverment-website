<?php
require('../include/database.php');
include('../include/submit.php');




if (isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 1;
  }
  
  $post_per_page = 12;
  $show_page = ($page - 1) * $post_per_page;

?>



 



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../favicon.png" rel="icon">
    <!-- custome styling -->
    <link rel="stylesheet" href="./gallery.css?<?php echo time(); ?>">
        <link rel="stylesheet" href="./css/lightbox.css?<?php echo time(); ?>">

    <!-- Owl carosel -->


    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Main_CSS/all.css">
    <!-- AOS Library -->
    <link rel="stylesheet" href="../Main_CSS/aos.css">
   
    <title>Gallery Photos-RIMO</title>
</head>

<body>

<?php

require('../include/flash_news1.php');
?>


    <!-- ------------------------------------logo images and flags section------------------------------------ -->

   
    <?php

include('../include/logo_images.php');

?>

    <!-- --------------------- section of navigation bar ------------------ -->
    <?php

    include_once('../include/navigation.php');

    ?>
    <div class="sub-menu-header">
        <ul>
            <li class="active">
                <a href="/index.php<?=$languages?>"><i class="fas fa-home"></i></a>
            </li>
            <li><a href="#"><?=$top_nav[$language][5]?>&nbsp;&nbsp; &nbsp; &nbsp;/</a></li>
            <li><a href="#"><?=$gallery[$language][0]?> </a></li>



        </ul>
    </div>

      <!-- login-form -->


  <?php

include('../include/login_form.php');

?>


    <!-- ---------------------------main -content---------------------------------------------------- -->
    <div class="main-about-content">
        <div class="about-content">
            <div class="title">
                <h4><i class="fas fa-image"></i>&nbsp;
                <?=$gallery[$language][0]?> 

                </h4>

                <div>
                    <div class="gallery-container">

                        <div class="photo-gallery">

                            <div class="gallery-content">

                                 <?php
                                 $sql = "SELECT * FROM `gallery`ORDER BY image_no DESC LIMIT $show_page,$post_per_page";
                                 $result = mysqli_query($db, $sql);
                                 //$redirect_page="./open_image.php";
                                 while ($row = mysqli_fetch_assoc($result)) {

                                    ?>
                                   <a href="<?=$row['images_name']?>" data-lightbox="mygallery" data-title="<?=$row['image_title']?>" id="openimg">
                                      
                                     <div class="gallery-images">
                                    <img src="<?=$row['images_name']?>" alt="">
                                    

                                    <p><?=$row['image_title']?></p>
                                </div>
                                   </a>
                                    

                                    <?php

                                 }

                                    ?>

 



                        </div>


                    </div>

                </div>

                <?php









?>





<?php

$sql = "SELECT * FROM `gallery`";
$result = mysqli_query($db, $sql);
$total_news = mysqli_num_rows($result);
$total_news_page = ceil($total_news / $post_per_page);


if ($page <= 0 || $page > $total_news_page) {
  echo "There is no any data";
}




?>
<div class="pagination">

  <?php
  $actual_page_prev = $page - 1;

  if ($page > 1) {
    $prev = "";
    $prev_next_class = "";
  } else {
    $prev = "dissable";
    $prev_class = "prev_next1";
  }

  if ($page == 1) {
    $actual_page_prev = 1;
  }
  $actual_page_next = $page + 1;

  if ($page < $total_news_page) {
    $next = "";
    $prev_next_class = "";
  } else {
    $next = "dissable";
    $prev = "";

    $next_class = "prev_next2";
    

  }

  if ($page == $total_news_page) {
    $actual_page_next = $page;
  }


  ?>

  <a href="?page=<?= $actual_page_prev ?>" class="<?= $prev_class ?>"><i class="fas fa-chevron-left <?= $prev ?>" style="color: black;"></i></a>


  <?php

  for ($page = 1; $page <= $total_news_page; $page++) {
  ?>

    <a class="pages" href="?page=<?= $page ?>"><?= $page ?></a>

  <?php

  }

  ?>

  <a href="?page=<?= $actual_page_next ?>" class="<?= $next_class ?>"><i class="fas fa-chevron-right <?= $next ?>"></i></a>




</div>

            </div>

        </div>
    </div>
    </div>


    <!-- ------------------------footer section------------------------------------- -->

    <?php

    include_once('../include/footer.php');

    ?>
    <script src="./js/lightbox-plus-jquery.min.js"></script>
  <?php

    include_once('../include/script.php');

    ?>


</body>

</html>