<?php
include('../include/language.php');
require('database.php');
?>
  <!-- ------------------------footer section------------------------------------- -->
<style>
    @screen(max-width:468px){
          footer .move-up {
    position: absolute;
    right: 6%;
    top: 85%;
  }
.footer-social-link .copyright p {
    margin-right:8rem;
}
.footer-social-link{
    font-size:0rem;
    
    
}
.bottom-footer{
    display:block !important;
}
.footer-social-link {
     padding-bottom: 0rem !important; 
     padding-top: 2rem !important;
     text-align: start !important;
    }
    .footer-social-link .social-link {
     padding-bottom: 0rem;
    }

    }
</style>
  <footer id="footer">

    <div class="slant-2"></div>
    <div class="footer-section">
      <div class="footer-content">

      <div class="footer-middle-content footer-left" data-aos="fade-down" data-aos-delay="500">
          <h3 class=""><?=$footer[$language][0]?></h3>
          
                  <?php

        $sql = "SELECT * FROM `facbook_page`";
        $result = mysqli_query($db, $sql);
        $row = @mysqli_fetch_assoc($result)

            ?>
          <?=$row['facbook_page_name']?>

        </div>


        
        <div class="footer-left-content footer-left" data-aos="fade-right" data-aos-delay="400">
          <h3 class=""><?=$footer[$language][1]?></h3>
          <ul class="">
            <?php
              $sql = "SELECT * FROM `useful_link`";
              $result = mysqli_query($db, $sql);
               $row = mysqli_num_rows($result);
          
                      while($row = mysqli_fetch_assoc($result))
                      {
                        ?>
                                             <span><i class="fas fa-angle-double-right"></i></span><li><a href="<?=$row['link']?>" target="_blank"><?=$row['web-name']?></a></li>
                    

                        <?php
                      }

            ?>
              
          
    
          </ul>
        </div>

        
  
        <div class="footer-last-content footer-left" data-aos="fade-left" data-aos-delay="400">
          <h3><?=$footer[$language][2]?></h3>
          <ul class="">
            <li>
              <p style="text-align: center; font-size:1.3rem;"><?=$logo[$language][0]?></p>
               <p style="font-size: 1.3rem; text-align:center;"> <?=$logo[$language][1]?></p>
                <p style="text-align: center; font-size:1.6rem;letter-spacing:0.05rem;"><?=$logo[$language][2]?></p>
                <p style="font-size: 1.9rem; text-align:center;"><?=$logo[$language][3]?></p>
                <p style="text-align: center;font-size:1.3rem;"><?=$logo[$language][4]?></p>
          </p>

            </li>
            
            <?php

$sql = "SELECT * FROM `contact_us`";
$result = mysqli_query($db, $sql);
$row = @mysqli_fetch_assoc($result);

    ?>


            
            <li style="text-align: center;">



              <small><i class="fas fa-envelope"></i></small>

              <a href="#" title="Mail Address">
                <?=$row['email']?>
              </a>



            </li>
            <li style="text-align: center;">

              <small><i class="fas fa-phone"></i></small>
              <a href="#" title="Give us call">
                <?=$row['phone']?>
              </a>


            </li>
            <li style="text-align: center;">

              <small><i class="fas fa-globe"></i></small>
              <a href="#" title="Give us call">
                <?= $row['web_link']?>
              </a>


            </li>
          </ul>
        </div>
      </div>
      
      <div class="bottom-footer">
      <div class="footer-social-link">
        <div class="social-link">
          <a href="https://www.facebook.com" class=""><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com" class=""><i class="fab fa-twitter"></i></a>
          <a href="https://www.googleplus.com" class=""><i class="fab fa-google-plus-g"></i></a>
          <a href="https://www.youtube.com" class=""><i class="fab fa-youtube"></i></a>
        </div>
        <div class="copyright">
          <p class="">
          <?=$footer[$language][3]?> &copy; <script>
              document.write(new Date().getFullYear());
            </script> <?=$footer[$language][4]?>
          </p>

        </div>
      </div>
           <div class="footer-social-link">
       
        <div class="copyright">
          <p class="">
         Cryptware Consultancy Pvt. Ltd
          </p>

        </div>
         <div class="social-link">
          <a href="https://www.facebook.com/manoj.nepali.5891" class=""><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.youtube.com/channel/UC35eDf7e97ZCqi2r2rRVtRA" class=""><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <?php

$sql = "SELECT * FROM `website_visitor`";
$result = mysqli_query($db, $sql);
$row = @mysqli_fetch_assoc($result);
      ?>
      <div class="counter">
        
      <p><?=$footer[$language][5]?> <strong><span id="mycounter" style="color:#e9e2e2!important;"><?=$row['counter_visitor']?></span></strong><?=$footer[$language][6]?></p>
      </div>

      </div>
      <div class="move-up">
        <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
      </div>
    </div>
  </footer>




