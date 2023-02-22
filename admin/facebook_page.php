<?php
require('../include/database.php');
$insert=5;
$update=5;
session_start();
$_SESSION['email']="sdsads";

if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `facbook_page` WHERE `id` = $sno";
  $result = mysqli_query($db, $sql);
}

if($_SERVER["REQUEST_METHOD"]=='POST'){

  if (isset( $_POST['snoEdit'])){

    $image_no=$_POST['snoEdit'];

    $title=mysqli_real_escape_string($db,$_POST['title']);


    // $image=$_FILES['file'];
    // $filename=$image['name'];
    // $filepath=$image['tmp_name'];
    // $fileerror=$image['error'];
    // if($fileerror==0){
    //     $destfile='../Information And News/news_file/' .$filename;
    //     move_uploaded_file($filepath, $destfile);
    // }
    // else{
    //   $sql = "SELECT * FROM `video` WHERE `video_id`=$image_no";
    //   $result = mysqli_query($db, $sql);
    //   $row = @mysqli_fetch_assoc($result);

    //   $destfile=$row['images_name'];
    //   move_uploaded_file($destfile,$destfile);
     
  
    // }
  
  
    $sql="UPDATE `facbook_page` SET `facbook_page_name` = '$title' WHERE `facbook_page`.`id` = $image_no;";
  
    $result=mysqli_query($db,$sql);
  
  
    if($result){
  
    $update=1;
    }
    else{
      $update=0;
    }




  }
  else{

    $title=mysqli_real_escape_string($db,$_POST['title']);

//   $image=$_FILES['file'];
//   $filename=$image['name'];
//   $filepath=$image['tmp_name'];
//   $fileerror=$image['error'];
//   if($fileerror==0){
    //   $destfile='../gallery file/gallery_images/' .$filename;
    //   move_uploaded_file($filepath, $destfile);
      
  $sql="INSERT INTO `facbook_page` (`facbook_page_name`) VALUES ('$title')";

  $result=mysqli_query($db,$sql);
  if($result){
    $insert=1;
    }
    else{
      $insert=0;
    }

  }
 
  
  ?>

  <?php
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rajapur Irrigation Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
 <link href="assets/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

   <!-- Basic Modal -->
           
              <div class="modal fade" id="editModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                                  <form action="" method="POST" enctype="multipart/form-data">

                                  <input type="hidden" name="snoEdit" id="snoEdit">

                                 

                   
                    
                    <div class="form-group">
                      <label for="title">ADD Link</label>
                      <textarea class="form-control" id="title" name="title" rows="3" value=""></textarea>

                      
                    </div>

                    <button type="submit" class="btn btn-primary my-2">Update link</button>
                  </form>
                    </div>
                  
                  </div>
                </div>
              </div><!-- End Basic Modal-->
<?php

include('../admin/includes/navbar.php');

?>


<?php

include('../admin/includes/leftside.php');

?>




  <main id="main" class="main">

  <?php



  if($insert==1){
    echo "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
    Your link has been inserted successfully
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  if($insert==0){
   echo" <div class='alert alert-danger alert-dismissible fade show' role='alert'>
    Your link is not added sucessfully!
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  if($update==1){
    echo "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
    Your link has been updated successfully
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  if($update==0){
   echo" <div class='alert alert-danger alert-dismissible fade show' role='alert'>
    Your photo is not updated sucessfully!
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }


  ?>

    <div class="pagetitle">


      <h1>Gallery Section</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">footer section</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

   
    <div class="container my-4">
    <h2>Add a facebook page</h2>
    <form action="" method="POST" enctype="multipart/form-data">
     

      <div class="form-group">
        <label for="title">Add link</label>
        <input type="text" class="form-control" id="title" name="title">
        
      </div>
      <button type="submit" class="btn btn-primary my-2">Add link</button>
    </form>
  </div>

  
  <div class="container my-4">

    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          
          <th scope="col">facebook page</th>
        

         

          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `facbook_page`";
          $result = mysqli_query($db, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno  . "</th>
            <td>".$row['facbook_page_name'] . "</td>
           
         
            
            <td> <button class='edit btn btn-sm btn-primary'id=".$row['id'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['id'].">Delete</button></td>
          </tr>";
        } 
        
          ?>



      </tbody>
    </table>
    
  </div>
  


  </main><!-- End #main -->
 
  <!-- ======= Footer ======= -->


  <?php

include('../admin/includes/footer.php');

?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>

<script>
  edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        title_image = tr.getElementsByTagName("td")[0].innerText;
       
     
       var titleedit=document.getElementById('title');
       titleedit.value=title_image;
      
       
        snoEdit.value = e.target.id;
   
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this link!")) {
          console.log("yes");
          window.location = `/admin/facebook_page.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })

    
    </script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>

