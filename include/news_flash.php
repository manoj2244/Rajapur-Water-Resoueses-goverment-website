
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

require('./include/database.php');
require('./include/language.php');

$language="";

if((isset($_GET['lang']) && $_GET['lang']=='np') || !isset($_GET['lang'])){
  $language='np';
}
else{
  $language='en';
}


?>

<?php

if($language=='np'){
  ?>
  <style>
  
  @import url('../Main_CSS/fonts.css');



/* declaration of font family  */
:root {

  --anton: 'Anton', sans-serif;
  --baloobhai: 'Baloo Bhaina 2', cursive;
  --josefins: 'Josefin', sans-serif;
  --mulish: 'Mulish', sans-serif;
  --oxygen: 'oxygen', sans-serif;
  --poppins: 'Poppins', sans-serif;
  --roboto: 'Roboto', sans-serif;
  --worksans: 'worksans', sans-serif;
  --Abel: 'Abel', cursive;
  --roboto: 'Roboto', sans-serif;
  --oswald: 'Oswald';
  --livvic: 'livvic';
  --lexend: 'lexend';
}
  .flash-box .titles {
    color: #fff;
    font-size: 1.5rem;
    letter-spacing: 0.1rem;
    text-align: center;
    text-transform: uppercase;
    font-family:var(--poppins);
  }
  .flash-box::before,
.flash-box::after {
  content: "";
  width: 0;
  position: absolute;
  border-width: 3.0rem;
  border-style: solid;
  top: 0;
  z-index: -1;
  left: 9.7rem;

}

@media(max-width:468px){
      .flash-box .titles {
    
    font-size: 2rem;
    

  }
  .flash-box .titles {
  margin-left: 40%;

}
    
    
}
  </style>

  <?php
}

?>
  
<div class="language">
    <div class="language-content">
    
      <a href="<?=$link?>?lang=en"><img style="margin-right:5px;"  src="./Assets/Home_Images/en.png" alt="">En</a>
      <a href="<?=$link?>?lang=np"><img style="margin-top:-1px;"  src="./Assets/Home_Images/nep.png" alt="">Np</a>
  

    

    </div>
  </div>

  <div class="news-container">

    <div class="flash-box">
      <p class="titles"><?=$notice[$language][0]?></p>
    </div>





    <div class="news" style="paddding:6px 15px;">
      <marquee behavior="" direction="" onmouseover="this.stop();" onmouseout="this.start();">


        <?php
          $redirect_page="../Information_And_News/news.php";

        $sql = "SELECT * FROM `flash_news` ORDER BY News_id DESC";
        $result = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_assoc($result)) {

          ?>
          <small><i class="fas fa-bullhorn" style="color:#ffc107;font-size:12px;"></i></small>
            <a class="text-light" href="<?=$redirect_page?>?news_id=<?=$row['News_id']?>">
             <?=$row['News_title']?>
            </a>

            <?php
        }




        ?>

      </marquee>
    </div>



  </div>
 