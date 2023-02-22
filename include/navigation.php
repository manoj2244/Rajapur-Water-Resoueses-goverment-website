

<?php

require('../include/language.php');

$language="";

if((isset($_GET['lang']) && $_GET['lang']=='np') || !isset($_GET['lang'])){
  $language='np';
}
else{
  $language='en';
}


?>
  <!-- --------------------- section of navigation bar ------------------ -->
  
  <?php

if($language=='en'){
  $languages="?lang=$language";
}
else
{
  $languages="";
}
?>
  
 <div class="navigation">
  
  <div class="toggle-collapse">
    <div class="language-collapse">
    <a href="<?=$link?>?lang=en"><img style="margin-right:5px;"  src="../Assets/Home_Images/en.png" alt="">En</a>
      <a href="<?=$link?>?lang=np"><img style="margin-top:-1px;"  src="../Assets/Home_Images/nep.png" alt="">Np</a>
  
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
                    <li class="hover-me"><a href="/Water_User_Association/badlapur.php<?=$languages?>"><?=$water_user[$language][1]?></a></li>
                   
              
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
              <li class="hover-me"><a href="/Agreement_File/Work_Plan.php<?=$languages?>"><?=$agree[$language][4]?></a></li>
            </ul>

          </div>
          <div class="sub-menu1" id="sub-menu4">
            <div class="arrow"></div>
            <ul class="dropdown arrow-top">
            <li class="hover-me"><a href="/Agreement_File/complete_aggrerment.php<?=$languages?>"><?=$agree[$language][0]?> </i></a>
             
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