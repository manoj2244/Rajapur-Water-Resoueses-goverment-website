<?php
require('../include/database.php');


$insert=5;
$update=5;
session_start();
$_SESSION['email']="sdsads";

if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `ex_project_chief` WHERE `card_id` = $sno";
  $result = mysqli_query($db, $sql);
}

if($_SERVER["REQUEST_METHOD"]=='POST'){

  if (isset( $_POST['snoEdit'])){
    

    $news_id=$_POST['snoEdit'];

 

    
    $title=mysqli_real_escape_string($db,$_POST['title']);
    $title1=mysqli_real_escape_string($db,$_POST['title1']);
    $title2=mysqli_real_escape_string($db,$_POST['title2']);
    $title3=mysqli_real_escape_string($db,$_POST['title3']);
    $title4=mysqli_real_escape_string($db,$_POST['title4']);

    $image=$_FILES['file'];
    $filename=$image['name'];
    $filepath=$image['tmp_name'];
    $fileerror=$image['error'];
    if($fileerror==0){
        $destfile='../About-US_File/card_images/' .$filename;
        move_uploaded_file($filepath, $destfile);
    }
    else{
      $sql = "SELECT * FROM `ex_project_chief` WHERE `card_id`=$news_id";
      $result = mysqli_query($db, $sql);
      $row = @mysqli_fetch_assoc($result);

      $destfile=$row['card_image'];
      move_uploaded_file($destfile,$destfile);
     
  
    }
  
  
    $sql="UPDATE `ex_project_chief` SET `name` = '$title',`profession`='$title1',`sereni`='$title2',`phone`='$title3', `kaifiyat`='$title4',`card_image` = '$destfile' WHERE `ex_project_chief`.`card_id` = $news_id;";
  
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
  $title1=mysqli_real_escape_string($db,$_POST['title1']);
  $title2=mysqli_real_escape_string($db,$_POST['title2']);
  $title3=mysqli_real_escape_string($db,$_POST['title3']);
  $title4=mysqli_real_escape_string($db,$_POST['title4']);
  
  

  $image=$_FILES['file'];
  $filename=$image['name'];
  $filepath=$image['tmp_name'];
  $fileerror=$image['error'];
  if($fileerror==0){
      $destfile='../About-US_File/card_images/' .$filename;
      move_uploaded_file($filepath, $destfile);
      
  
  $sql="INSERT INTO `ex_project_chief` (`name`, `profession`, `sereni`, `phone`,`kaifiyat`,`card_image`) VALUES ('$title', '$title1', '$title2', '$title3','$title4','$destfile')";

  $result=mysqli_query($db,$sql);
  if($result){
    $insert=1;
    }
    else{
      $insert=0;
    }

  }
  else{
    echo '<script>

    alert("your file is not uploaded! try again!!");
    </script>';

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
                      <h5 class="modal-title">Edit Photo</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                                  <form action="" method="POST" enctype="multipart/form-data">

                                  <input type="hidden" name="snoEdit" id="snoEdit">
                                  
                     <div class="form-group">
        <label for="title">नाम</label>
        <input type="text" class="form-control" id="title" name="title" value="">
      </div>
      <div class="form-group">
        <label for="title1">पद</label>
        <input type="text" class="form-control" id="title1" name="title1" value="">
      </div>
      <div class="form-group">
        <label for="title2">श्रेणी</label>
        <input type="text" class="form-control" id="title2" name="title2" value="">
      </div>
      <div class="form-group">
        <label for="title3">मोबाइल नं.</label>
        <input type="text" class="form-control" id="title3" name="title3" value="">
      </div>
      <div class="form-group">
        <label for="title3">कैफियत</label>
        <input type="text" class="form-control" id="title4" name="title4" value="">
      </div>
   
      <img src="" style="width:100px;height:100px;object-fit:cover;" id="img">
      <div class="form-group">
        <label for="file">फोटो</label>
        <input type="file" class="form-control" id="file" name="file">
        
      </div>

                      <p id="file1"></p>
                      
                    </div>
                    <button type="submit" class="btn btn-primary my-2">Update</button>
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
    Your data has been inserted successfully
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  if($insert==0){
   echo" <div class='alert alert-danger alert-dismissible fade show' role='alert'>
    Your data is not added sucessfully!
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  if($update==1){
    echo "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
    Your data has been updated successfully
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  if($update==0){
   echo" <div class='alert alert-danger alert-dismissible fade show' role='alert'>
    Your data is not updated sucessfully!
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }


  ?>

    <div class="pagetitle">
      <h1>Introduction Section</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">ex_project_chief</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

   
    <div class="container my-4">
    <h2>Add a Ex_project_chief Details</h2>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title">नाम</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="title1">पद</label>
        <input type="text" class="form-control" id="title1" name="title1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="title2">श्रेणी</label>
        <input type="text" class="form-control" id="title2" name="title2" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="title3">मोबाइल नं.</label>
        <input type="text" class="form-control" id="title3" name="title3" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="title3">कैफियत</label>
        <input type="text" class="form-control" id="title4" name="title4" aria-describedby="emailHelp">
      </div>
   

      <div class="form-group">
        <label for="file">फोटो</label>
        <input type="file" class="form-control" id="file" name="file">
        
      </div>
      <button type="submit" class="btn btn-primary my-2">Add</button>
    </form>
  </div>

  
  <div class="container my-4">

    <table class="table" id="myTable">
      <thead>
        <tr>
          <th width="5%" scope="col">S.No</th>
          <th width="" scope="col">नाम</th>
          <th width="" scope="col">पद</th>
          <th width="" scope="col">श्रेणी</th>
          <th width="" scope="col">मोबाइल नं.</th>
          <th width="" scope="col">फोटो</th>
          <th width="" scope="col">कैफियत</th>
          
         
          

          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `ex_project_chief`";
          $result = mysqli_query($db, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['name'] . "</td>
            <td>".$row['profession']. "</td>
            <td>".$row['sereni']. "</td>
            <td>".$row['phone']. "</td>
            
            <td> <img src='".$row['card_image']."' style='width:100px;height:100px;object-fit:cover;'></td>
            
            <td>".$row['kaifiyat']. "</td>
            <td style='display:none';>".$row['card_image']. "</td>



           
            <td> <button class='edit btn btn-sm btn-primary'id=".$row['card_id'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['card_id'].">Delete</button></td>
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
        title = tr.getElementsByTagName("td")[0].innerText;
        title1 = tr.getElementsByTagName("td")[1].innerText;
        title2 = tr.getElementsByTagName("td")[2].innerText;
        title3 = tr.getElementsByTagName("td")[3].innerText;
        title4 = tr.getElementsByTagName("td")[5].innerText;
        title5 = tr.getElementsByTagName("td")[6].innerText;
        
      
     
       var titleedit=document.getElementById('title');
       var titleedit1=document.getElementById('title1');
       var titleedit2=document.getElementById('title2');
       var titleedit3=document.getElementById('title3');
       var titleedit4=document.getElementById('title4');
       var img=document.getElementById('img');
        titleedit.value=title;
        titleedit1.value=title1;
        titleedit2.value=title2;
        titleedit3.value=title3;
        titleedit4.value=title4;
        img.src=title5;
      
       
        snoEdit.value = e.target.id;
       
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this data!")) {
          console.log("yes");
          window.location = `/admin/ex_project.php?delete=${sno}`;
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

