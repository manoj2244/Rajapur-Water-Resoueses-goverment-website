<?php

require('../include/database.php');
include('../include/language.php');


include('../include/submit.php');



require('./function_news.php');

if(isset($_SESSION['error'])){
  echo ' <script>alert("file doesnot exist!!");</script>';
  unset($_SESSION['error']);
}




if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}

$post_per_page = 5; 
$show_page = ($page - 1) * $post_per_page;
$sno=(($page - 1) * $post_per_page)+1;



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

  <title>Information/News-RIMO</title>
</head>

<body>


  <?php

  include('../include/flash_news1.php');

  ?>
  <!-- ------------------------------------logo images and flags section------------------------------------ -->
  <?php

include('../include/logo_images.php');

?>


  <?php

  include_once('../include/navigation.php');

  ?> <div class="sub-menu-header">
    <ul>
      <li class="active">
        <a href="/index.php<?=$languages?>"><i class="fas fa-home"></i></a>
      </li>


      <li><a href="#"><?=$top_nav[$language][4]?>&nbsp;&nbsp;&nbsp;/</a></li>


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



        <div class="news-information">
          <div class="news-table">
            <div class="table1">
              <div class="table-details">

                <table>
                  <caption style="color: black;padding-bottom: 10px;"></caption>
                  <tr class="main">

                  <th width="5%" style="color: white;font-weight: 600;"><?=$news[$language][2]?></th>
                <th width="45%" style="color: white;"><?=$news[$language][3]?></th>
                <th width="15%" style="color: white;"><?=$news[$language][4]?></th>
                <th width="10%" style="color: white;"><?=$news[$language][5]?></th>
                <th width="10%" style="color: white;"></th>

                  </tr>


                  <?php
                  
                 


                  $sql = "SELECT * FROM `flash_news` ORDER BY News_id DESC LIMIT $show_page,$post_per_page"; //limitation show pages inthe screen
                  $result = mysqli_query($db, $sql);
                  $redirect_page = "news.php";
                  
                  
                  while ($row = mysqli_fetch_assoc($result)) {
                    

                  ?>


                    <tr>

                      <td><?=$sno?></td>
                      <td><a href="<?= $redirect_page ?>?news_id=<?= $row['News_id'] ?>"><?= $row['News_title'] ?></a></td>
                      <td><?= $row['date'] ?></td>
                      <td>Admin</td>
                      <td><a href="download.php?file=<?= $row['pdf_file']?>"> <i class="fas fa-download"></i></a></td>

                    </tr>
                  <?php
                  $sno++;
                  ?>
                  <?php

                  }

                  ?>







                </table>

                <?php

                $sql = "SELECT * FROM `flash_news`";
                $result = mysqli_query($db, $sql);
                $total_news = mysqli_num_rows($result);
                $total_news_page = ceil($total_news / $post_per_page);


                if ($page <= 0 || $page > $total_news_page) {
                  echo "There is no any data";
                }




                ?>
              

              </div>
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

<a href="?page=<?= $actual_page_prev ?>" class="<?= $prev_class ?>"><i class="fas fa-chevron-left <?= $prev ?>"></i></a>


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

          <?php

          $news=fetch_function($db);

          ?>

          <div class="information">
            <h4> <i class="fas fa-newspaper"></i><?=$top_nav[$language][4]?></h4>
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
            <h4> <i class="fas fa-tasks"></i><?=$news[$language][13]?></h4>
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