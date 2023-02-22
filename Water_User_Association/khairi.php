<?php
require('../include/database.php');
include('../include/submit.php');


if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}

$post_per_page = 2;
$show_page = ($page - 1) * $post_per_page;

?>

<?php
require('./water_user_function.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../favicon.png" rel="icon">
  <!-- custome styling -->
  <link rel="stylesheet" href="./kulopani samiti.css?<?php echo time(); ?>">

  <!-- Owl carosel -->


  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Main_CSS/all.css">
  <!-- AOS Library -->
  <link rel="stylesheet" href="../Main_CSS/aos.css">

  <title>Khairichandra-RIMO</title>
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
      <li><a href="#"><?=$top_nav[$language][2]?> &nbsp;&nbsp; &nbsp; &nbsp;/</a></li>
     
      <li><a href="#"><?=$water_user[$language][0]?></a></li>


    </ul>
  </div>

  <?php

include('../include/login_form.php');

?>


  <?php
  $badkapath_water = water_user($db);
  ?>


  <!-- ---------------------------main -content---------------------------------------------------- -->
  <div class="main-about-content">
    <div class="about-content">
      <div class="title">


        <div class="table1">
          <?php

          foreach ($badkapath_water as $badka_water) {
          ?>


            <div class="table-details">
              <h4>
                <?= $badka_water['content_heading'] ?>

              </h4>
                   <div class="table-scroll">



              <table>
                <caption style="color: black;padding-bottom: 10px;"><?= $badka_water['content_heading'] ?></caption>
                <tr class="main">
                  <th width="">S.No</th>
                  <th width="30%">Name, Cast</th>
                  <th width="30%">Address</th>
                  <th width="20%">Designation</th>
                  <th width="20%">Contact No.</th>
                  <th width="">Photo</th>


                </tr>

                <?php

                $badkapath_user_sub = water_user_sub($db);

                ?>

                <?php

               $sno=0;
                foreach ($badkapath_user_sub as $badkapath_user) {
                  $sno = $sno + 1;

                ?>

                  <tr>
                    <td class="date"><?= $sno?></td>
                    <td><?= $badkapath_user['fullname'] ?></td>
                    <td id="table"><?= $badkapath_user['address'] ?></td>
                    <td><?= $badkapath_user['designation'] ?></td>
                    <td><?= $badkapath_user['contact'] ?></td>
                    <td><img id="img" src="<?= $badkapath_user['profile'] ?>" alt=""></td>

                  </tr>

                <?php


                }

                ?>


              </table>
              </div>
            </div>

          <?php
          }

          ?>


        </div>

       
<?php

$sql = "SELECT * FROM `main_content`";
$result = mysqli_query($db, $sql);
$total_news = mysqli_num_rows($result);
$total_news_page = ceil($total_news / $post_per_page);


if ($page <= 0 || $page > $total_news_page) {

  ?>
 <div class="no-data">
   <b><i class="fas fa-frown" style="font-size: 22px;margin-bottom:20px;margin-top:20px"></i></b>

 <h3><?='There is no any data!'?></h3>



 </div>

 <?php
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