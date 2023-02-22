

<?php

require('../include/database.php');
include('../include/language.php');
include('../include/submit.php');


if(isset($_SESSION['msg'])){
   echo' <script>alert("Sucessfully Submitted")</script>';
   unset($_SESSION['msg']);
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../favicon.png" rel="icon">
    <!-- custome styling -->
    <link rel="stylesheet" href="./contact_us.css?<?php echo time(); ?>">

    <!-- Owl carosel -->


    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Main_CSS/all.css">
    <!-- AOS Library -->
    <link rel="stylesheet" href="../Main_CSS/aos.css">

    <title>Contact Us-RIMO</title>
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
  
  <?php

include('../include/login_form.php');

?>

    <div class="sub-menu-header">
        <ul>
            <li class="active">
                <a href="../index.php<?=$languages?>"><i class="fas fa-home"></i></a>
            </li>
            <li><a href=""><?=$top_nav[$language][6]?></a></li>




        </ul>
    </div>

    <?php

$sql = "SELECT * FROM `contact_us`";
$result = mysqli_query($db, $sql);
$row = @mysqli_fetch_assoc($result)

    ?>


    <!-- ---------------------------main -content---------------------------------------------------- -->
    <div class="main-about-content">
        <div class="about-content">
            <div class="title">

                <div class="main-contact-us">
                    <div class="contact-us">
                        <div class="heading-contact-us">
                            <div class="location">
                                <i class="fas fa-map-marker-alt" style="color: #d72a2a;"></i>
                                <h3><?=$contact[$language][0]?></h3>
                                <h3><?=$row['location']?></h3>
                            </div>
                            <div class="phone">
                                <i class="fas fa-phone" style="color: green;"></i>
                                <h3><?=$contact[$language][1]?></h3>
                                <h3><?=$row['phone']?></h3>
                            </div>
                            <div class="email">
                                <i class="fas fa-envelope" style="color: blue;"></i>
                                <h3><?=$contact[$language][2]?></h3>
                                <h3><?=$row['email']?></h3>
                            </div>
                        </div>
                        <div id="main-form">
                            <div class="contact-form">
                                <form action="action.php" method="post" enctype="multipart/form-data">
                                    <div class="name-div">
                                        <label for="full_name">Full Name * </label>
                                        <input type="text" class="form-control" name="full_name" id="full_name"
                                            placeholder="Full Name" value="" required>

                                            
                                    </div>
                                    <div class="emaill-div">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email" value="">
                                    </div>
                                    <div class="phone-div">
                                        <label for="phone">Phone *</label>
                                        <input type="text" class="form-control" name="phone" id="phone"
                                            placeholder="Phone" value=""required>
                                    </div>
                                    <div class="subject-div">
                                        <label for="subject">Subject *</label>
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject" value="" required>
                                    </div>
                                    <div class="row">
                                    <div class="file-div" style="width: 45%;">
                                        <label for="file">File</label>
                                        <input style="font-size: 1.5rem;" type="file" class="form-control" name="file" id="file" placeholder="File"
                                            value="">
                                    </div>
                                    <div class="type-div" style="margin-left: 27px;">
                                        <label for="type">Type * </label>
                                        <select style="font-size: 1.5rem;" name="type" id="type" class="form-control" required>
                                            <option value="">-- कृपया प्रतिक्रियाको प्रकार छान्नुहोस् --</option>
                                            <option value="निर्माण कार्य सम्बन्धित ">निर्माण कार्य सम्बन्धित </option>
                                            <option value="गुनासो सम्बन्धित">गुनासो सम्बन्धित</option>
                                            <option value="सेवा सम्बन्धित">सेवा सम्बन्धित </option>
                                            <option value="कार्यालयको कार्यक्रम सम्बन्धित">कार्यालयको कार्यक्रम सम्बन्धित </option>
                                            <option value="अन्य">अन्य </option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="message-div" style="margin-top: 12px;">
                                        <label for="message" style="display: block;">Message</label>
                                        <textarea name="message"  style="width: 100%;height:180px; margin-top: 13px; outline: none; border-radius: 5px; border: 1px solid #ced4da; padding: 12px; font-size: 14px;" class="form-control" id="message" cols="30" rows="10" placeholder="write message"></textarea>
                
                                    </div>
                                    <div class="button-div">
                                        <button class="btn btn-success" type="submit" name="name">Submit</button>
                        
                                    </div>
                                </form>
                            </div>
                            <div class="contact-map" style="overflow: hidden;">
                                <?=$row['map']?>

                            </div>
                        </div>
                    </div>
                </div>




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