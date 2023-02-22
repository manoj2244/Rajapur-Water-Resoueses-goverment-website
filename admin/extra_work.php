<?php
require('../include/database.php');
$insert=5;
$update=5;
session_start();
$_SESSION['email']="sdsads";

if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `extra_work` WHERE `id` = $sno";
  $result = mysqli_query($db, $sql);
}

if($_SERVER["REQUEST_METHOD"]=='POST'){

  if (isset( $_POST['snoEdit'])){

    $news_id=$_POST['snoEdit'];

    $title=mysqli_real_escape_string($db,$_POST['title']);
    $title1=mysqli_real_escape_string($db,$_POST['title1']);
    $image_desc=mysqli_real_escape_string($db,$_POST['description']);


    $image=$_FILES['file'];
    $filename=$image['name'];
    $filepath=$image['tmp_name'];
    $fileerror=$image['error'];
    if($fileerror==0){
        $destfile='../Information_And_News/extra_file/' .$filename;
        move_uploaded_file($filepath, $destfile);
    }
    else{
      $sql = "SELECT * FROM `extra_work` WHERE `id`=$news_id";
      $result = mysqli_query($db, $sql);
      $row = @mysqli_fetch_assoc($result);

      $destfile=$row['image'];
      move_uploaded_file($destfile,$destfile);
     
  
    }
  
  
    $sql="UPDATE `extra_work` SET `content_heading` = '$title', `image` = '$destfile',`image_desc`='$image_desc',`date`='$title1' WHERE `extra_work`.`id` = $news_id;";
  
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
  $image_desc=mysqli_real_escape_string($db,$_POST['description']);

  $image=$_FILES['file'];
  $filename=$image['name'];
  $filepath=$image['tmp_name'];
  $fileerror=$image['error'];
  if($fileerror==0){
      $destfile='../Information_And_News/extra_file/' .$filename;
      move_uploaded_file($filepath, $destfile);
      
  $sql="INSERT INTO `extra_work` (`content_heading`, `image`,image_desc, `posted_at`,`date`,`view`) VALUES ('$title', '$destfile','$image_desc',current_timestamp(),'$title1','0')";

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

  <title>Rajaupur Irrigation Dashboard</title>
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
                      <h5 class="modal-title">Edit News</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                                  <form action="" method="POST" enctype="multipart/form-data">

                                  <input type="hidden" name="snoEdit" id="snoEdit">
                    <div class="form-group">
                      <label for="titles">News-title</label>
                      <input type="text" class="form-control" id="title" name="title" value="">
                    </div>
                    
                    <div class="form-group">
                      <label for="titles">Date</label>
                      <input type="text" class="form-control" id="title1" name="title1" value="">
                    </div>

                    <div class="form-group">
                        <label for="file">Add File</label>
                        <input type="file" class="form-control" id="file" name="file">
                        <p id="file1"></p>
                        
                    </div>

                    <div class="form-group">
                    <label for="desc">image description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" value=""></textarea>
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
    Your task has been inserted successfully
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  if($insert==0){
   echo" <div class='alert alert-danger alert-dismissible fade show' role='alert'>
    Your task is not added sucessfully!
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  if($update==1){
    echo "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
    Your task has been updated successfully
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  if($update==0){
   echo" <div class='alert alert-danger alert-dismissible fade show' role='alert'>
    Your task is not updated sucessfully!
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }


  ?>

    <div class="pagetitle">


      <h1>Extra Work Section</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">extra_work</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

   
    <div class="container my-4">
    <h2>Add a Extra_work</h2>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="title">Date</label>
        <input type="text" class="form-control" id="title1" name="title1" aria-describedby="emailHelp">
      </div>

      <div class="form-group my-2">
        <label for="file">Add File</label>
        <input type="file" class="form-control" id="file" name="file">

     
        
      </div>
      
      <div class="form-group my-2">
        <label for="desc">image description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary my-2">Add</button>
    </form>
  </div>

  
  <div class="container my-4">

    <table class="table" id="myTable" >
      <thead>
        <tr>
          <th scope="col" width="5%">S.No</th>
          <th scope="col" width="">Title</th>
          <th scope="col" width="">Extra_File</th>
          <th scope="col" width="">Date</th>
          <th scope="col" width="30%">Image description</th>

          <th scope="col" width="15%">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `extra_work`";
          $result = mysqli_query($db, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['content_heading'] . "</td>
            <td>".substr($row['image'],-14) . "</td>
            <td>".$row['date'] . "</td>
            <td>".substr($row['image_desc'],0,200) . "</td>
            

            <td> <button class='edit btn btn-sm btn-primary'id=".$row['id'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['id'].">Del</button></td>
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
        file = tr.getElementsByTagName("td")[1].innerText;
        title1 = tr.getElementsByTagName("td")[2].innerText;
        desc = tr.getElementsByTagName("td")[3].innerText;
     
       var titleedit=document.getElementById('title');
       var fileedit=document.getElementById('file1');
       var description=document.getElementById('description');
       var titleedit1=document.getElementById('title1');
        titleedit.value=title;
        titleedit1.value=title1;
        description.value=desc;
        fileedit.innerText=file;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this Extra work!")) {
          console.log("yes");
          window.location = `/admin/extra_work.php?delete=${sno}`;
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

