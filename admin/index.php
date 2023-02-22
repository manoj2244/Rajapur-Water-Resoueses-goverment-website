<?php
session_start();
require('../include/database.php');


if(!isset($_SESSION['email'])){
 
  header('location:../index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

<?php

include('../admin/includes/navbar.php');

?>

<?php

include('../admin/includes/leftside.php');

?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Messages <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-chat-text"></i>
                    </div>
                    <?php

$sql = "SELECT * FROM `contact_form`";
$result = mysqli_query($db, $sql);
$row1 = mysqli_num_rows($result);
?>
                    <div class="ps-3">
                      <h6><?=$row1?></h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Today</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>
                <?php

$sql = "SELECT * FROM `website_visitor`";
$result = mysqli_query($db, $sql);
$row = @mysqli_fetch_assoc($result);
      ?>

                <div class="card-body">
                  <h5 class="card-title">Website Visitors <span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=$row['counter_visitor']?></h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Total</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->

            
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

             

                <div class="card-body">
                  <h5 class="card-title text-center" style="font-size: 24px;">Welcome To Admin Panel of This Website</h5>

                  <div class="d-flex">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height:50px">
                      <i class="bi bi-card-text"></i>
                    </div>
                    <div class="ps-3">
                      <h6 style="font-size: 21px;">Introduction</h6>
                      <p class="text-success small pt-1 fw-bold text-justify" style="letter-spacing:0.5px;line-height:1.7; font-size:15px;">यो कार्यालय (साबिक बबइ राजापुर सिंचाइ व्यवस्थापन डिभिजन हाल राजापुर सिंचाइ व्यवस्थापन कार्यालय) उर्जा, जलश्रोत
तथा सिंचाइ मन्त्रालय मातहतको जलस्रोत तथा सिंचाइ विभाग अन्तर्गत रहेको छ । यो कार्यालयको स्थापनाको मुख्य उद्देश्य
भनेको राजापुर सिंचाइ प्रणाली (14880 हे.) को सम्पूर्ण कमाण्ड क्षेत्रमा बर्षैभरी भरपर्दो सिंचाइ सुविधा उपलब्ध गराइ बाली
विविधिकरणमा जोड दिदै बालीको उत्पादकत्व वृद्धि गरी कृषकको जीवनस्तरमा सुधार गर्नु रहेको छ । यो कार्यालय (साबिक
बबइ राजापुर सिंचाइ व्यवस्थापन डिभिजन हाल राजापुर सिंचाइ व्यवस्थापन कार्यालय) जलश्रोत तथा सिंचाइ विभागको
सिंचाइ व्यवस्थापन महाशाखा मातहत रहेको छ । यो कार्यालय (साबिक बबइ राजापुर सिंचाइ व्यवस्थापन डिभिजन हाल
राजापुर सिंचाइ व्यवस्थापन कार्यालय) हाल आफ्नो भवन नरहेका कारण बर्दियाको सदरमुकाम गुलरियामा अवस्थित छ । यस
कार्यालयको कार्य क्षेत्र राजापुर न.पा. र गेरुवा गा.पा. पर्दछ । हाल यस कार्यालयले राजापुर क्षेत्रमा आफ्नो कार्यालय निर्माणको
प्रकृया अघि बढाएको छ । कार्यालय अन्तर्गत नयाँ संरचना निर्माण, संरचना मर्मत सुधार एवं आधुनीकिकरण, जल व्यवस्थापन,
नहर संचालन तथा रेखदेख, पानी मापन, आकस्मिक मर्मत सुधार, नदी कटान नियन्त्रण, संस्थागत विकास सम्वन्धि कार्यहरु,
अत्यावश्यक संरचना सुधार आदि कार्यहरु गर्दै आएको छ ।</p>

                    </div>
                  </div>

                </div>
              </div> 





            </div> 
            
            <!-- End Customers Card -->

            

            

           

          </div>
        </div><!-- End Left side columns -->

        <?php

include('../admin/includes/rightside.php');

?>

     

      </div>
    </section>
  </main><!-- End #main -->


<?php

include('../admin/includes/footer.php');

?>