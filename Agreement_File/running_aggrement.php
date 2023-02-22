  
  <?php

require('../include/database.php');
include('../include/submit.php');

require('./Agreement_function.php');


if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}

$post_per_page = 1;
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
  <link rel="stylesheet" href="./aggrement.css?<?php echo time(); ?>">

  <!-- Owl carosel -->


  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Main_CSS/all.css">
  <!-- AOS Library -->
  <link rel="stylesheet" href="../Main_CSS/aos.css">

    <title>Running Aggrement-RIMO</title>
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
          <li><a href="#"><?=$agree[$language][1]?>  &nbsp;&nbsp; &nbsp; &nbsp;/</a></li>
         
          
          
        </ul>
      </div>


      <?php

include('../include/login_form.php');

?>


<?php

$agreement=running_agree($db, $show_page, $post_per_page);
?>


      <!-- ---------------------------main -content---------------------------------------------------- -->
      <div class="main-about-content">
        <div class="about-content">
            <div class="title">

            <?php


          foreach($agreement as $agree){

            ?>

            <h4>
            <?=$agree['content_heading']?>

          </h4>
           
          <div class="table1">
                  
              <div class="table-details">

                  <table>
                      <caption style="color: black;padding-bottom: 10px;"></caption>
                    <tr class="main">
                      <th colspan="2" width="50%"><?=$agree['table_heading']?></th>
                     
                      

                    </tr>
                    <tr>
                      
                      <td class="date"width="20%">Name of project</td>
                      <td  width="20%" id="table"><?=$agree['name_of_project']?></td>
                      
      
                    </tr>
                    <tr>
                      
                      <td class="date" width="20%">Name of work</td>
                      <td  width="20%" id="table"><?=$agree['name_of_work']?></td>
                      
      
                    </tr>
                    <tr>
                      
                      <td  class="date"width="20%">Contract identification number</td>
                      <td  width="20%" id="table"><?=$agree['Contracts identification numbers']?></td>
                      
      
                    </tr>
                    <tr>
                      
                      <td class="date"width="20%">Name and address of contractor</td>
                      <td  width="20%" id="table"><?=$agree['Names ands addresss of contractor']?></td>
                      
      
                    </tr>
                    <tr>
                      
                      <td class="date"width="20%">Date of agreement</td>
                      <td  width="20%" id="table"><?=$agree['Dates of agreement']?></td>
                      
      
                    </tr>
                    <tr>
                      
                      <td  class="date"width="20%">Amount of Agreement (Inc VAT/VO)</td>
                      <td  width="20%" id="table"><?=$agree['Amount of Agreement']?></td>
                      
      
                    </tr>
                    <tr>
                      
                      <td  class="date"width="20%">Date of completion</td>
                      <td  width="20%" id="table"><?=$agree['Dates of completion']?></td>
                      
      
                    </tr>
                    <tr>
                      
                      <td class="date"width="20%">Actual Expenditure (inc VAT,price escalation)</td>
                      <td  width="20%" id="table"><?=$agree['Actual Expenditure']?></td>
                      
      
                    </tr>
                    <tr>
                      
                      <td class="date"width="20%">Contractors liability status</td>
                      <td  width="20%" id="table"><?=$agree['Contractors']?></td>
                      
      
                    </tr>
                    <tr>
                      
                      <td class="date"width="20%">Current status</td>
                      <td  width="20%" id="table"><?=$agree['Current statuss']?></td>
                      
      
                    </tr>
                    <tr>
                      
                      <td class="date"width="20%">Major works completed</td>
                      <td  width="20%" id="table"><?=$agree['Major works completed']?></td>
                      
      
                    </tr>
                  
                  
                  </table>
              </div>
              
             
            
                </div>
      
              
      </div>


      <?php

          }

            ?>



       
<?php

$sql = "SELECT * FROM `running_agree`";
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