
<?php
// Program to display complete URL	
	
if(isset($_SERVER['HTTPS']) &&
			$_SERVER['HTTPS'] === 'on')
	$link = "https";
	else
		$link = "http";

// Here append the common URL
// characters.
$link .= "://";
	
// Append the host(domain name,
// ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];
	
// Append the requested resource
// location to the URL
$link .= $_SERVER['PHP_SELF'];
	
// Display the link

?>




<?php



$language="";

if((isset($_GET['lang']) && $_GET['lang']=='np') || !isset($_GET['lang'])){
  $language='np';
}
else{
  $language='en';
}
  require('./include/database.php');
  $sql="UPDATE website_visitor SET counter_visitor=counter_visitor+1";
  $result = mysqli_query($db, $sql);

?>



<?php
  
   require('./include/main_function.php')
?>
  
  <?php

session_start();

if($_SERVER["REQUEST_METHOD"]=='POST')
{
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql = "SELECT * FROM `login`";
    $result = mysqli_query($db, $sql);
     $row = mysqli_num_rows($result);
    
            $row = mysqli_fetch_assoc($result);
            if($email!=$row['email'] && $password==$row['passwords']){
              echo ' <script>alert("incorrect email");</script>';

            }
            else if($password!=$row['passwords']&& $email==$row['email']){
              echo ' <script>alert("incorrect password");</script>';

            }
            else if($email!=$row['email']&& $password=!$row['passwords']){
              echo ' <script>alert("incorrect password and password");</script>';

            }
            else if($email==$row['email']&& $password==$row['passwords']){
              $_SESSION['isuserlogin']=true;
              $_SESSION['email']=$email;
              header('location:./admin/index.php');
            }
            else{

              echo ' <script>alert("All details Are Incorrect!!");</script>';

            }

          }   
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="favicon.png" rel="icon">

  <!-- custome styling -->
  <link rel="stylesheet" href="Main_CSS/main_css.css?<?php echo time(); ?>">

  <!-- Owl carosel -->
  <link rel="stylesheet" href="Main_CSS/owl.carousel.min.css">
  <link rel="stylesheet" href="Main_CSS/owl.theme.default.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/Main_CSS/all.css">
  <!-- AOS Library -->
  <link rel="stylesheet" href="Main_CSS/aos.css">
  <link rel="stylesheet" href="/gallery_file/css/lightbox.css?<?php echo time(); ?>">


 <style>

   #welcome{
    position: fixed;
  top:0%;
  left: 0;
  min-height: 100vh;
  width: 100% !important;
  background-color: rgba(0, 0, 0, 0.7);
  z-index: 0;
  text-align: center;
  display: flex;
  justify-content: center;
  

  opacity:0;
  
  
  font-family: var(--worksans);
  transition:all 1s ease-in-out;
  transition: opacity 0.8s ease;
  
   }
   .welcome1{
     height: 36rem;
     width: 35rem;
     background-color: white;
     box-shadow: 0 .2rem .4rem 0 rgb(0 0 0 / 16%), 0px .2rem 1rem 0 rgb(0 0 0 / 12%);
     border-radius: .5rem;
     margin-top: 3.0rem;
    
     
   }
   .welcome1 p{
     font-size: 2.2rem;
     margin-top: 2.5rem;
     margin-bottom: 1.2rem;
   }
   .wel-img img{
     height:19.0rem;
     width: 35.0rem;
     object-fit: contain;
   }
   .welcome2{
    text-align: right;
   
    margin-right: 1.9rem;
    transition:all 0.3s;
    
   }
   .welcome2:hover{
   cursor: pointer;
   color:green;
   
    
   }
   #welcome .active1{
     top: 0;
     transition: all 0.3s;
   }
   @media(max-width:468px){
       .welcome1{
           
           margin-left:1rem;
       }
         
       
   }


 </style>

  <title>Rajapur Irrigation</title>


</head>
<body>

<div class="welcome" id="welcome">
   <div class="welcome1">
  <div class="welcome2"><i class="fas fa-times" id="form-close1" style="text-align: right; margin-top:1.2rem;font-size:2rem"></i></div>
  
     <p>राजापुर सिंचाइ व्यवस्थापन कार्यालयकाे यस वेभसाइटमा यहाँहरुलाइ हार्दिक स्वागत छ !</p>
     <hr>
     <div class="wel-img">
         <img src="/Assets/Home_Images/welcome1.gif" alt="">
     </div>

   </div>
</div>


<?php
include_once('./include/news_flash.php');


?>


  <!-- ------------------------------------logo images and flags section------------------------------------ -->

  <?php
include_once('./include/logo_images1.php');



?>

<?php

if($language=='en'){
  $languages="?lang=$language";
}
else
{
  $languages="";
}

?>

 <!-- --------------------- section of navigation bar ------------------ -->
 <div class="navigation">
  
  <div class="toggle-collapse">
    <div class="language-collapse">
    <a href="<?=$link?>?lang=en"><img style="margin-right:5px;"  src="./Assets/Home_Images/en.png" alt="">En</a>
      <a href="<?=$link?>?lang=np"><img style="margin-top:-1px;"  src="./Assets/Home_Images/nep.png" alt="">Np</a>
  
    </div>
    <div onclick="toggle()" class="toggle-icon">
      <i class="fas fa-bars"></i>
    </div>
  </div>
    <div class="navbar" id="navbar">
      <ul>
        <li class="active">
          <a href="/index.php<?=$languages?>" id="active"><i class="fas fa-home"></i></a>
        </li>
        <li id="sub-menu" onclick="toggle1()">
          <a href="#"><?=$top_nav[$language][0]?>
            <i class="fas fa-angle-down" style="margin-left:10px; font-size:12px;"></i></a>
          <div class="sub-menu">
            <div class="arrow"></div>
            <ul class="dropdown arrow-top">
              <li class="">
                <a href="/About-US_File/introduction.php<?=$languages?>"><?=$About[$language][0]?></a>
              </li>
              <li class="">
                <a href="/About-US_File/Organization_Structure.php<?=$languages?>"><?=$About[$language][1]?></a>
              </li>
              <li class="">
                <a href="/About-US_File/Citizen_Charter.php<?=$languages?>"><?=$About[$language][2]?></a>
              <li class="">
                <a href="/About-US_File/Employee_Detail.php<?=$languages?>"><?=$About[$language][3]?></a>
              </li>
              <li class="">
                <a href="/About-US_File/Ex_Project_Chief.php<?=$languages?>"><?=$About[$language][4]?></a>
              </li>
              <li class="">
                <a href="/About-US_File/Ex Employee.php<?=$languages?>"><?=$About[$language][5]?></a>
              </li>
            </ul>
          </div>
          <div class="sub-menu1" id="sub-menu1">
            <div class="arrow"></div>
            <ul class="dropdown arrow-top">
              <li class="">
                <a href="/About-US_File/introduction.php<?=$languages?>"><?=$About[$language][0]?></a>
              </li>
              <li class="">
                <a href="/About-US_File/Organization_Structure.php<?=$languages?>"><?=$About[$language][1]?></a>
              </li>
              <li class="">
                <a href="/About-US_File/Citizen_Charter.php<?=$languages?>"><?=$About[$language][2]?></a>
              <li class="">
                <a href="/About-US_File/Employee_Detail.php<?=$languages?>"><?=$About[$language][3]?></a>
              </li>
              <li class="">
                <a href="/About-US_File/Ex_Project_Chief.php<?=$languages?>"><?=$About[$language][4]?></a>
              </li>
              <li class="">
                <a href="/About-US_File/Ex Employee.php<?=$languages?>"><?=$About[$language][5]?></a>
              </li>
            </ul>
          </div>
        </li>
        <li onclick="toggle2()">
          <a href="#"><?=$top_nav[$language][1]?>
            <i class="fas fa-angle-down" style="margin-left:10px; font-size:12px;"></i></a>
          <div class="sub-menu">
            <div class="arrow"></div>
            <ul class="dropdown arrow-top">
            <li><a href="/Irrigation_Project/budokulo.php<?=$languages?>"><?=$irrigation[$language][0]?></a> </li>
              <li><a href="/Irrigation_Project/tapara.php<?=$languages?>"><?=$irrigation[$language][1]?></a> </li>
              <li><a href="/Irrigation_Project/manau.php<?=$languages?>"><?=$irrigation[$language][2]?></a> </li>
              <li><a href="/Irrigation_Project/khairi.php<?=$languages?>"><?=$irrigation[$language][3]?></a> </li>



            </ul>
          </div>
          <div class="sub-menu1" id="sub-menu2">
            <div class="arrow"></div>
            <ul class="dropdown arrow-top">
            <li><a href="/Irrigation_Project/budokulo.php<?=$languages?>"><?=$irrigation[$language][0]?></a> </li>
              <li><a href="/Irrigation_Project/tapara.php<?=$languages?>"><?=$irrigation[$language][1]?></a> </li>
              <li><a href="/Irrigation_Project/manau.php<?=$languages?>"><?=$irrigation[$language][2]?></a> </li>
              <li><a href="/Irrigation_Project/khairi.php<?=$languages?>"><?=$irrigation[$language][3]?></a> </li>



            </ul>
          </div>
        </li>
        <li onclick="toggle3()">
          <a href="#"><?=$top_nav[$language][2]?>
            <i class="fas fa-angle-down" style="margin-left:10px; font-size:12px;"></i></a>
          <div class="sub-menu">
            <div class="arrow"></div>
            <ul class="dropdown arrow-top">
              
               
                   
            <li class="hover-me">
                      <a href="/Water_User_Association/khairi.php<?=$languages?>"><?=$water_user[$language][0]?></a>
                    </li>
                    <li class="hover-me"><a href="/Water_User_Association/badlapur.php<?=$languages?>"><?=$water_user[$language][1]?></a></li>
                   
              
            </ul>
          </div>
          <div class="sub-menu1" id="sub-menu3">
            <div class="arrow"></div>
            <ul class="dropdown arrow-top">
              
               
                   
            <li class="hover-me">
                      <a href="/Water_User_Association/khairi.php<?=$languages?>"><?=$water_user[$language][0]?></a>
                    </li>
                    <li class="hover-me"><a href="./Water-User_Association/badlapur.php<?=$languages?>"><?=$water_user[$language][1]?></a></li>
                   
              
            </ul>
          </div>
        </li>
        <li onclick="toggle4()">
          <a href="#"><?=$top_nav[$language][3]?>
            <i class="fas fa-angle-down" style="margin-left:10px; font-size:12px;"></i></a>
          <div class="sub-menu">
            <div class="arrow"></div>
            <ul class="dropdown arrow-top">
            <li class="hover-me"><a href="/Agreement_File/complete_aggrerment.php<?=$languages?>"><?=$agree[$language][0]?> </i></a>
             
             </li>
             <li class="hover-me"><a href="/Agreement_File/running_aggrement.php<?=$languages?>"><?=$agree[$language][1]?></i></a>
            
             </li>
             
              <li class="hover-me"><a href="/Agreement_File/Agreement_Achievement.php<?=$languages?>"><?=$agree[$language][2]?></a></li>
              <li class="hover-me"><a href="/Agreement_File/Total_Progress.php<?=$languages?>"><?=$agree[$language][3]?></a></li>
              <li class="hover-me"><a href="/Agreement_File/Work-Plan.php<?=$languages?>"><?=$agree[$language][4]?></a></li>
            </ul>

          </div>
          <div class="sub-menu1" id="sub-menu4">
            <div class="arrow"></div>
            <ul class="dropdown arrow-top">
            <li class="hover-me"><a href="/Agreement_File/complete-aggrerment.php<?=$languages?>"><?=$agree[$language][0]?> </i></a>
             
             </li>
             <li class="hover-me"><a href="/Agreement_File/running_aggrement.php<?=$languages?>"><?=$agree[$language][1]?></i></a>
            
             </li>
             
              <li class="hover-me"><a href="/Agreement_File/Agreement_Achievement.php<?=$languages?>"><?=$agree[$language][2]?></a></li>
              <li class="hover-me"><a href="/Agreement_File/Total_Progress.php<?=$languages?>"><?=$agree[$language][3]?></a></li>
              <li class="hover-me"><a href="/Agreement_File/Work_Plan.php<?=$languages?>"><?=$agree[$language][4]?></a></li>
            </ul>

          </div>
        </li>
        <li>
          <a href="/Information_And_News/information.php<?=$languages?>"><?=$top_nav[$language][4]?></a>

        </li>
        <li onclick="toggle5()">
          <a href="#"><?=$top_nav[$language][5]?> <i class="fas fa-angle-down" style="margin-left:10px; font-size:12px;"></i></a>
          
          <div class="sub-menu">
            <div class="arrow"></div>
            <ul class="dropdown arrow-top">
            <li><a href="/gallery_file/images.php<?=$languages?>"><?=$gallery[$language][0]?></a></li>
              <li><a href="/gallery_file/video.php<?=$languages?>"><?=$gallery[$language][1]?></a></li>



            </ul>
          </div>
          <div class="sub-menu1" id="sub-menu5">
            <div class="arrow"></div>
            <ul class="dropdown arrow-top">
            <li><a href="/gallery_file/images.php<?=$languages?>"><?=$gallery[$language][0]?></a></li>
              <li><a href="/gallery_file/video.php<?=$languages?>"><?=$gallery[$language][1]?></a></li>



            </ul>
          </div>
        </li>
        <li>
          <a href="/contact_us/contact_us.php<?=$languages?>"><?=$top_nav[$language][6]?></a>
        </li>

        <li>

          <a href="#" id="login-btn"> <small><i class="fas fa-user" style="color:#fff;
            font-size: 17px;"></i></small> <?=$top_nav[$language][7]?></a>
        </li>

      </ul>
    </div>
   
  </div>
  <?php

  



  include_once('./include/login_form1.php');

  ?>



  <!-- -------------------- start slider section ----------------- -->

  <?php

$images=getimages_slide($db);


?>

  <section>
  <div class="main-container">
  <div class="container">
    <div class="owl-carousel owl-theme">
  
  <?php
  
  foreach($images as $image){
      ?>
     <div class="slide slide-2" style="background-image: url('<?= substr($image['slide_name'],1)?>');
">
        <div class="slide-content">
          <h4><?= $image['title']?></h4>
        </div>
      </div>
    <?php
  }
?>
    </div>
    
    <div class="owl-navigation">
      <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
      <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
    </div>
  
    
    </div> 
    
    

    <?php
    
    if($language=='en'){
         $card=get_card1($db);
    }
    else{
         $card=get_card($db);
    }
   


?>
    <div class="card-container">
   <?php

   foreach($card as $cd){

    ?>

    <div class="card" data-aos="fade-right" data-aos-delay="500" data-toggle="tooltip" data-placement="top">
    <div class="card-image">
      <img src="<?=substr($cd['photo'],1)?>" alt="">
    </div>
    <div class="card-content">
      <div class="blog-details">
        <h6><?=$cd['name']?></h6>
        <p><?=$cd['post']?></p>

        <div class="icon-text"><span class="icon"><i class="fas fa-phone"></i><?=$cd['phone']?></span></div>
        
        <div class="icon-text"><span class="icon"><i class="fas fa-paper-plane"></i> <?=$cd['email']?></span></div>
      </div>
    </div>
  </div>

  <?php
     
   }

   ?>

  </div>

  </div>
</section>

<?php
if($language=='en'){
    ?>
    <style>
      @media(max-width:468px){
          
    .About-container .row .content h2::before {
  
      top: 5.9rem !important;
      }
      }
    </style>
    
    <?php
    
}

?>

<?php



// $row_intro=intro($db_intro);
 $sql = "SELECT * FROM `main_intro`";
 $result = mysqli_query($db, $sql);
 $row_intro = @mysqli_fetch_assoc($result);
 


?>

<div class="About-container">
    <div class="row">

      <div class="About-content" data-aos="fade-up" data-aos-delay="700">
        <div class="content">
          <span class=""><?=$home[$language][0]?></span>
          <h2 class=""><?=$home[$language][1]?></h2>


          <h4><?=$home[$language][2]?></h4>
          <div class="line1"></div>
          <p class="text-justify"><?= substr($row_intro['introduction'],0,2300)?>....</p>
          <button class="btn-explore">
            <a class="effect1" href="/About-US_File/introduction.php<?=$languages?>"><i class="fas fa-eye"></i>
            <?=$home[$language][3]?>

            </a>

          </button>

        </div>


      </div>
      <div class="About-card" data-aos="fade-up" data-aos-delay="700">
       
        <div class="Details">
          <img src="<?=substr($row_intro['photo'],1)?>" alt="">
        </div>

      </div>

    </div>
    
  </div>

  <hr style="margin-left: 15px;margin-right:15px;border-top: 1px solid rgba(0,0,0,.1);    margin-top: 1rem;
    margin-bottom: 1rem;


">




<div class="table-section" data-aos="fade-up" data-aos-delay="700">
    <div class="table-container">
      <div class="left-table">
        <div class="left-table-content">
          <div class="table-details">

           <div class="gallery-title">
          <h4> <i class="fas fa-newspaper"></i>&nbsp;
          <?=$news[$language][0]?>
          </h4>
        </div>
        <div class="table-scroll">
            <table>
              <tr class="main">
                <th width="5%" style="color: white;font-weight: 600;"><?=$news[$language][2]?></th>
                <th width="45%" style="color: white;"><?=$news[$language][3]?></th>
                <th width="15%" style="color: white;"><?=$news[$language][4]?></th>
                <th width="10%" style="color: white;"><?=$news[$language][5]?></th>
                <th width="10%" style="color: white; font-size:0;"></th>
              </tr>
              <?php

$sql = "SELECT * FROM `flash_news` ORDER BY News_id DESC LIMIT 0,6"; //limitation show pages inthe screen
$result = mysqli_query($db, $sql);
$redirect_page = "/Information_And_News/news.php";

$sno=0;
while ($row = mysqli_fetch_assoc($result)) {
  $sno=$sno+1;

  ?>

  <tr>
                <td class="date"><?=$sno?></td>
                <td class="td"><a href="<?= $redirect_page ?>?news_id=<?= $row['News_id'] ?>"> <?=$row['News_title']?></a></td>
                <td style="text-align: start;"><?=$row['date']?></td>
                <td>Admin</td>
                <td style="text-align: center;"><a href="./Information_And_News/download.php?file=<?= $row['pdf_file']?>"> <i class="fas fa-download"></i></a></td>

              </tr>

              <?php

}
  


?>
              
             
            </table>

        </div>
            <div class="explore-more">
              <a href="/Information_And_News/information.php<?=$languages?>" class="effect2"> <?=$news[$language][12]?> <i class="fas fa-long-arrow-alt-right" style="background-color: transparent;color:black;"></i></a>

            </div>
          </div>
        </div>

      </div>
      <aside class="right-table">
        <div class="right-table-content">
          <h2><?=$news[$language][1]?></h2>
          <ul>
            <li><a href="#"><i class="fas fa-file"></i><?=$news[$language][6]?></a>
              <small><i class="fas fa-chevron-right"></i></small>
            </li>
            <li><a href="./contact_us/contact_us.php"><i class="fas fa-map-marker-alt"></i><?=$news[$language][7]?></a>
              <small><i class="fas fa-chevron-right"></i></small>
            </li>
            <li><a href="#"><i class="fas fa-gavel"></i><?=$news[$language][8]?></a>
              <small><i class="fas fa-chevron-right"></i></small>
            </li>
            <li><a href="./Information_And_News/information.php"><i class="fas fa-newspaper"></i><?=$news[$language][9]?></a>
              <small><i class="fas fa-chevron-right"></i></small>
            </li>
            <li><a href="#footer"><i class="fas fa-link"></i><?=$news[$language][10]?></a>
              <small><i class="fas fa-chevron-right"></i></small>
            </li>
            <li><a href="./contact_us/contact_us.php"><i class="fas fa-comments"></i><?=$news[$language][11]?></a>
              <small><i class="fas fa-chevron-right"></i></small>
            </li>
          </ul>
      
        </div>
      </aside>
    </div>
  </div>

<div class="gallery" data-aos="fade-up" data-aos-delay="700">
    <div class="gallery-container">
      <h3><?=$top_nav[$language][5]?></h3>
      <h2><?=$home[$language][1]?></h2>
      <div class="photo-gallery">
      <div class="gallery-title">
          <h4> <i class="fas fa-image"></i>&nbsp;
          <?=$gallery[$language][0]?>
          </h4>
        </div>

        <div class="gallery-content">

        
        <?php
          $sql = "SELECT * FROM `gallery`ORDER BY image_no DESC LIMIT 0,4";
          $result = mysqli_query($db, $sql);
         // $redirect_page="/gallery file/open_image.php";
          while ($row = mysqli_fetch_assoc($result)) {

            ?>
           
         <a href="<?=$row['images_name']?>" data-lightbox="mygallery" data-title="<?=$row['image_title']?>" id="openimg">
              <div class="gallery-images">
            <img src="<?=substr($row['images_name'],1)?>" alt="">
           

            <p id="image_title"><?=$row['image_title']?></p>
        </div>

        </a>

            <?php

          }

            ?>


       
        </div>

      </div>
      <div class="explore-mores">
        <a href="/gallery_file/images.php" class="effect2"> <?=$news[$language][12]?> <i
            class="fas fa-long-arrow-alt-right"></i></a>

      </div>
      <div class="video-gallery">
        <div class="gallery-title">
          <h4> <i class="fas fa-video"></i>&nbsp;
            &nbsp;
            <?=$gallery[$language][1]?>

          </h4>
        </div>

        <div class="gallery-content">

        <?php
        $sql = "SELECT * FROM `video`ORDER BY video_id DESC LIMIT 0,4";
        $result = mysqli_query($db, $sql);
      //  $redirect_page="/gallery file/open_image.php";
        while ($row = mysqli_fetch_assoc($result)) {

          ?>
            <div class="gallery-images">
            <iframe width="300" height="200" src="<?=$row['url']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <div class="button">
              <div class="gallery-btn">
              <a href="<?= $row['url']?>" style="color: #fff;"> <?=$gallery[$language][2]?></a>
              </div>
          </div>
      </div>

          <?php

        }

          ?>

   
        </div>

      </div>
      <div class="explore-mores">
        <a href="/gallery_file/video.php" class="effect2"> <?=$news[$language][12]?> <i class="fas fa-long-arrow-alt-right"></i></a>

      </div>
    </div>

  </div>
    
   
  <!-- ------------------------footer section------------------------------------- -->
<?php


 include_once('include/footer1.php');

?>

<!-- <script src="https://kit.fontawesome.com/77e536a68d.js" crossorigin="anonymous"></script> -->
  <!-- jquery file -->
  <script src="/gallery_file/js/lightbox-plus-jquery.min.js"></script>
  <script src="/javascript/jquery.min.js"></script>
  <!-- custume javascript file -->
  

  <!--  Owl carousel javascript file -->
  <script src="/javascript/owl.carousel.min.js"></script>
  <!-- AOS js file -->
  <script src="/javascript/aos.js"></script>
  <script src="/javascript/all.js"></script>
  <script src="./javascript/main.js"></script>

  
  <script>
    

    var nav = document.querySelector('#navbar');
    function toggle(myvalue){
     
        nav.classList.toggle('collapse');
     
      
    }
    var nav1 = document.querySelector('#sub-menu1');
    function toggle1(){
       nav1.classList.toggle('collapses');  
    }
    var nav2 = document.querySelector('#sub-menu2');
    function toggle2(){
       nav2.classList.toggle('collapses'); 
    }
    var nav3 = document.querySelector('#sub-menu3');
    function toggle3(){
       nav3.classList.toggle('collapses');  
    }
    var nav4 = document.querySelector('#sub-menu4');
    function toggle4(){
       nav4.classList.toggle('collapses'); 
    }
    var nav5 = document.querySelector('#sub-menu5');
    function toggle5(){
       nav5.classList.toggle('collapses'); 
    }



  </script>
<?php
 
 if(!isset($_SESSION['active'])){
      $_SESSION['active']="dfhy";
     ?>
     <script>



  
//let formclose= document.querySelector('#form-close');

  var welcome= document.getElementById('welcome');


  function show(){
    var welcome= document.getElementById('welcome');
    // welcome.classList.add('active1');

       
       //welcome.style.top="0%";
       welcome.style.opacity="1";
       welcome.style.zIndex="216";
       
       
       
      // welcome.style.transition="all 0.3s"
  }

  setTimeout(show,2000);

  let formclose1= document.querySelector('.welcome2');
    formclose1.addEventListener('click',()=>{
   
        welcome.style.zIndex="0";
          welcome.style.opacity="0";
});






</script> 
<?php
     
 }
 
 ?>
 
 

</body>

</html>