<?php



if(!isset( $_GET['work_id'])){

  echo  " This page cannot be access with out news Id <br> Go back <a href='./information.php'>This page</a>";
  exit;
  

}
$id=$_GET['work_id'];


require('../include/database.php');


$sql="UPDATE extra_work SET view=view+1 WHERE `id`=$id";
$result = mysqli_query($db, $sql);



require('../include/database.php');
require('./function_news.php');
include('../include/submit.php');



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../favicon.png" rel="icon">
  <!-- custome styling -->
  <link rel="stylesheet" href="./information.css?<?php echo time(); ?>">

  <!-- Owl carosel -->


  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Main_CSS/all.css">
  <!-- AOS Library -->
  <link rel="stylesheet" href="../Main_CSS/aos.css">

  <title>Information Activites-RIMO</title>
</head>

<body>

<?php

include('../include/flash_news1.php');

?>
<!-- ------------------------------------logo images and flags section------------------------------------ -->



  <!-- ------------------------------------logo images and flags section------------------------------------ -->


  <?php

include('../include/logo_images.php');

?>
  <?php

  include_once('../include/navigation.php');

  ?>
  <!-- login-form -->


<?php
include('../include/login_form.php');
?>
<?php
 $work_id = $_GET['work_id'];
?>
  <div class="sub-menu-header">
    <ul>
      <li class="active">
        <a href="../index.php<?=$languages?>"><i class="fas fa-home"></i></a>
      </li>
      <?php
      $row = mysqli_fetch_assoc($result);
      ?>
      <li><a href="">सुचना तथा समाचार&nbsp;&nbsp;&nbsp;/</a></li>
      <?php
      $sql = "SELECT * FROM `extra_work` WHERE id=$work_id";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_assoc($result);
      ?>
      <li><a href=""><?= $row['content_heading'] ?></a></li>
    </ul>
  </div>
  <!-- ---------------------------main -content---------------------------------------------------- -->
  <div class="main-about-content">
    <div class="about-content">
      <div class="title">
        <div class="news-information">
          <div class="news-table">
            <?php
            $work_id = $_GET['work_id'];
            $sql = "SELECT * FROM `extra_work` WHERE id=$work_id";
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>
            <h4><?= $row['content_heading'] ?></h4>
            <div class="push_details">
              <small><a href="#" title="">Admin</a></small>
              <small><a href="#" title="" ><?= $row['date'] ?></a></small>
              <small><a href="#" title=""><i class="fas fa-eye"></i>
              <?= $row['view'] ?></a></small>
            </div>
            <div class="post-sharing">
              <a download="" href="download.php?img=<?= $row['image']?>"><i class="fas fa-download"></i>
                  डाउनलोड</a>
            </div>
            <div class="pdffile ">
              <img src="<?= $row['image']?>"style="width:100%; height:52.5rem;">
            </div>
            <p><?=$row['image_desc']?></p>
          </div>
          <?php
$news=fetch_function($db);

?>

<div class="information">
  <h4> <i class="fas fa-newspaper"></i> सूचना तथा समाचार</h4>
  <div class="information-content1">
   

    <?php
    $redirect_page = "news.php";

    foreach($news as $n){

      ?>
       <div class="information-content">

      <a href="<?= $redirect_page ?>?news_id=<?= $n['News_id'] ?>"><i class="fas fa-file"></i> <?= $n['News_title'] ?></a>
      <b><?= $n['date'] ?></b>
    </div>
    




        <?php
            }
        ?>      
        <?php
        $news1=fetch_function1($db);
        ?>

            </div>
            <?php

include('../include/language.php');
            ?>
            <h4> <i class="fas fa-tasks"></i> <?=$news[$language][13]?></h4>
            <div class="information-content1">

            <?php
    $redirect_page = "extra_work.php";

    foreach($news1 as $n1){
    
      ?>
       <div class="information-content">

       <a href="<?= $redirect_page ?>?work_id=<?= $n1['id'] ?>"><i class="fas fa-file"></i> <?= $n1['content_heading'] ?></a>
      <b><?= $n1['date'] ?></b>



    </div>
    
<?php
    }
?>


            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- ------------------------footer section------------------------------------- -->

  <?php

  include_once('../include/footer.php');

  ?>

<?php

include_once('../include/script.php');

?>


</body>

</html>