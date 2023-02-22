<?php
require('../include/database.php');

$insert=5;
$update=5;

session_start();
$_SESSION['email']="sdsads";
if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `contact_us` WHERE `sno` = $sno";
  $result = mysqli_query($db, $sql);
}
if(isset($_GET['delete1'])){
  $sno = $_GET['delete1'];
  $delete = true;
  $sql = "DELETE FROM `contact_form` WHERE `sno` = $sno";
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


  
  
     $sql="UPDATE `contact_us` SET `location` = '$title',`phone`='$title1',`email`='$title2',`map`='$title3',`web_link`='$title4' WHERE `contact_us`.`sno` = $news_id";
  
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
  
  

  
      
  
  $sql="INSERT INTO `contact_us` (`location`, `phone`, `email`, `map`,`web_link`) VALUES ('$title', '$title1', '$title2', '$title3','$title4')";

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

  <title>Rajapur Irrigation</title>
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
  <
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
        <label for="title">स्थान</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="">
      </div>
      <div class="form-group">
        <label for="title1">फोन नं.</label>
        <input type="text" class="form-control" id="title1" name="title1" aria-describedby="emailHelp" value="">
      </div>
      <div class="form-group">
        <label for="title2">इ-मैल
         </label>
        <input type="text" class="form-control" id="title2" name="title2" aria-describedby="emailHelp" value="">
      </div>
      <div class="form-group">
              <label for="desc">Map Url</label>
              <textarea class="form-control" id="title3" name="title3" rows="3" value=""></textarea>
            </div> 
         <div class="form-group">
        <label for="title2">Domain name
         </label>
        <input type="text" class="form-control" id="title4" name="title4" aria-describedby="emailHelp" value="">
         </div>
     
                    <button type="submit" class="btn btn-primary my-2">Update</button>
                  </form>
                    </div>
                  
                  </div>
                </div>
              </div><!-- End Basic Modal-->
           



              <div class="modal fade" id="editModal1" tabindex="-1">
                <div class="modal-dialog modal-fullscreen">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Show Message Details</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                                  <form action="" method="POST" enctype="multipart/form-data">

                                  <input type="hidden" name="snoEdit" id="snoEdit">
                                  
                                  <div class="form-group">
        <label for="title">	fullname</label>
        <input type="text" class="form-control" id="titles" name="titles" aria-describedby="emailHelp" value="">
      </div>
      <div class="form-group">
        <label for="title1">email.</label>
        <input type="text" class="form-control" id="title1s" name="title1s" aria-describedby="emailHelp" value="">
      </div>
      <div class="form-group">
        <label for="title2">phone
         </label>
        <input type="text" class="form-control" id="title2s" name="title2s" aria-describedby="emailHelp" value="">
      </div>
      <div class="form-group">
              <label for="desc">subject</label>
              <textarea class="form-control" id="title3s" name="title3s" rows="3" value=""></textarea>
            </div> 
            <img src="" style="width:100px;height:100px;object-fit:cover;" id="img">
         <div class="form-group">
        <label for="title2">options
         </label>
        <input type="text" class="form-control" id="title4s" name="title4s" aria-describedby="emailHelp" value="">
         </div>
         <div class="form-group">
              <label for="desc">Messages</label>
              <textarea class="form-control" id="title5s" name="title5s" rows="3" value=""></textarea>
            </div> 
         <div class="form-group">
        <label for="title2">submit_date
         </label>
        <input type="text" class="form-control" id="title6s" name="title6s" aria-describedby="emailHelp" value="">
         </div>
     
                   
                  </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     
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
          <li class="breadcrumb-item active">contact_us</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

   
    <div class="container my-4">
    <h2>Add Contact Details</h2>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title">स्थान</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="title1">फोन नं.</label>
        <input type="text" class="form-control" id="title1" name="title1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="title2">इ-मैल
         </label>
        <input type="text" class="form-control" id="title2" name="title2" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
              <label for="desc">Map Url</label>
              <textarea class="form-control" id="title3" name="title3" rows="3"></textarea>
            </div> 
         <div class="form-group">
        <label for="title2">Domain name
         </label>
        <input type="text" class="form-control" id="title4" name="title4" aria-describedby="emailHelp">
      </div>
     
      <button type="submit" class="btn btn-primary my-2">Add</button>
    </form>
  </div>

  
  <div class="container my-4">

    <table class="table" id="myTable">
      <thead>
        <tr>
          <th width="5%" scope="col">S.No</th>
          <th width="15%" scope="col">स्थान</th>
          <th width="15%" scope="col">फोन नं.</th>
          <th width="15%" scope="col">इ-मैल</th>
          <th width="" scope="col">map</th>
          <th width="" scope="col">domain Name</th>
        
          <th   width=""  scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `contact_us`";
          $result = mysqli_query($db, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['location'] . "</td>
            <td>".$row['phone']. "</td>
            <td>".$row['email']. "</td>
            <td>".$row['map']. "</td>
            
            <td>".$row['web_link']. "</td>
            <td> <button class='edit btn btn-sm btn-primary'id=".$row['sno'].">Edit</button><button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button></td>
          </tr>";
        } 
          ?>


      </tbody>
    </table>


  </div>

  <div class="container my-4"id="all">


  <h2>Showing Messages From Visitors</h2>

<table class="table" id="myTable1">
  <thead>
    <tr>
      <th width="5%" scope="col">S.No</th>
      <th width="10%" scope="col">	fullname</th>
      <th width="10%" scope="col">email</th>
      <th width="" scope="col">phone</th>
      <th width="" scope="col">subject</th>
      <th width="" scope="col">file</th>
      <th width="" scope="col">options</th>
      <th width="10%" scope="col">message</th>
      <th width="" scope="col">submit_date</th>
    
      <th   width=""  scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $sql = "SELECT * FROM `contact_form`ORDER BY sno DESC";
      $result = mysqli_query($db, $sql);
      $sno = 0;
      while($row = mysqli_fetch_assoc($result)){
        $sno = $sno + 1;
        echo "<tr>
        <th scope='row'>". $sno . "</th>
        <td>". $row['fullname'] . "</td>
        <td>".$row['email']. "</td>
        <td>".$row['phone']. "</td>
        <td>".substr($row['subject'],0,30). "</td>
        
        <td> <img src='".$row['image']."' style='width:100px;height:100px;object-fit:cover;'></td>
        <td>".$row['options']. "</td>
        <td>".substr($row['messege'],0,200). "</td>
        <td>".$row['submit_date']. "</td>
        <td style='display:none';>".$row['image']. "</td>
        <td> <button class='edit1 btn btn-sm btn-primary'id=".$row['sno'].">View</button><button class='delete1 btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button></td>
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
        title4 = tr.getElementsByTagName("td")[4].innerText;
      
        
      
     
       var titleedit=document.getElementById('title');
       var titleedit1=document.getElementById('title1');
       var titleedit2=document.getElementById('title2');
       var titleedit3=document.getElementById('title3');
       var titleedit4=document.getElementById('title4');
             var snoEdit=document.getElementById('snoEdit');
        titleedit.value=title;
        titleedit1.value=title1;
        titleedit2.value=title2;
        titleedit3.value=title3;
        titleedit4.value=title4;
       
       
        snoEdit.value = e.target.id;
       
        $('#editModal').modal('toggle');
      })
    })
  edit1 = document.getElementsByClassName('edit1');
    Array.from(edit1).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        titles = tr.getElementsByTagName("td")[0].innerText;
        title1s = tr.getElementsByTagName("td")[1].innerText;
        title2s = tr.getElementsByTagName("td")[2].innerText;
        title3s = tr.getElementsByTagName("td")[3].innerText;
       // title4s= tr.getElementsByTagName("td")[4].innerText;
        title5s= tr.getElementsByTagName("td")[5].innerText;
        title6s= tr.getElementsByTagName("td")[6].innerText;
        title7s= tr.getElementsByTagName("td")[7].innerText;
        title8s= tr.getElementsByTagName("td")[8].innerText;
      
        
      
     
       var titleedits=document.getElementById('titles');
       var titleedit1s=document.getElementById('title1s');
       var titleedit2s=document.getElementById('title2s');
       var titleedit3s=document.getElementById('title3s');
       var titleedit4s=document.getElementById('title4s');
       var titleedit5s=document.getElementById('title5s');
       var titleedit6s=document.getElementById('title6s');
       var img=document.getElementById('img');
     
      
        titleedits.value=titles;
        titleedit1s.value=title1s;
        titleedit2s.value=title2s;
        titleedit3s.value=title3s;
        titleedit4s.value=title5s;
        titleedit5s.value=title6s;
        titleedit6s.value=title7s;
        img.src=title8s;
     
      
      
       
        snoEdit.value = e.target.id;
       
        $('#editModal1').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this data!")) {
          console.log("yes");
          window.location = `/admin/contact_us.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })

     deletes = document.getElementsByClassName('delete1');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this Message!")) {
          console.log("yes");
          window.location = `/admin/contact_us.php?delete1=${sno}`;
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
  <script>
    $(document).ready(function () {
      $('#myTable1').DataTable();

    });
  </script>

