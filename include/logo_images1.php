<?php

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

if($language=='en')
{
    ?>
    <style>
    
    .text3 h3{
  position: relative;
  font-weight: normal;
  color: #de0013;
  margin: 0rem;
  background: none;
  
  font-size:2rem;
  line-height:3.5rem;
  letter-spacing:0rem !important;
  
}

</style>
<?php
}

?>
<div class="main-logo">
    <div class="images">
      <div class="logo">
        <img src="./Assets/Home_Images/np-logo1.jpg" alt="mt everest">
      </div>
      <div class="text">
                <div class="text1">
                    <h5 ><?=$logo[$language][0]?></h5>
                </div>
                <div class="text2">
                    <h4 ><?=$logo[$language][1]?></h4>
                </div>
                <div class="text3">
                <h3 style=""><?=$logo[$language][2]?></h3>
                </div>
                     <div class="text4">
                        <h2 ><?=$logo[$language][3]?></h2>
                    </div>
                    <div class="text5">
                        <p><?=$logo[$language][4]?></p>
                    </div>

                
            </div>
      <div class="flag">
        <img src="./Assets/Home_Images/flag.gif" alt="flag">
      </div>

    </div>
  </div>