<?php
require('../include/database.php');


$insert=5;
$update=5;
session_start();
$_SESSION['email']="sdsads";


if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `total_progress` WHERE `sno` = $sno";
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
   // $title5=mysqli_real_escape_string($db,$_POST['title5']);
    $title6=mysqli_real_escape_string($db,$_POST['title6']);
    $title7=mysqli_real_escape_string($db,$_POST['title7']);
    $title8=mysqli_real_escape_string($db,$_POST['title8']);
    $title9=mysqli_real_escape_string($db,$_POST['title9']);
  

    
  
  
    $sql="UPDATE `total_progress` SET `Periodicity` = '$title', `Periodic Rs` = '$title1', `P.Cumulative Rs` = '$title2', `Target Rs` = '$title3', `Periodic` = '$title4', `Yearly` = '$title6', `P_Periodic` = '$title7', `P_Cumulative` = '$title8', `Remarks` = '$title9' WHERE `total_progress`.`sno` = $news_id";
    
    

  
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
 // $title5=mysqli_real_escape_string($db,$_POST['title5']);
  $title6=mysqli_real_escape_string($db,$_POST['title6']);
  $title7=mysqli_real_escape_string($db,$_POST['title7']);
  $title8=mysqli_real_escape_string($db,$_POST['title8']);
  $title9=mysqli_real_escape_string($db,$_POST['title9']);
 
  
  

  
  $sql="INSERT INTO `total_progress` (`Periodicity`, `Periodic Rs`, `P.Cumulative Rs`, `Target Rs`, `Periodic`, `Yearly`, `P_Periodic`, `P_Cumulative`, `Remarks`) VALUES ('$title', '$title1', '$title2', '$title3', '$title4', '$title6', '$title7', '$title8', '$title9');";

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
                      <h5 class="modal-title">Edit Photo</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                                  <form action="" method="POST" enctype="multipart/form-data">

                                  <input type="hidden" name="snoEdit" id="snoEdit">
                                  
                                  <div class="form-group">
        <label for="title">Periodicity</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="">
      </div>
      <div class="form-group">
        <label for="title1">Periodic Rs	</label>
        <input type="text" class="form-control" id="title1" name="title1" aria-describedby="emailHelp"  value="">
      </div>
      <div class="form-group">
        <label for="title2">P. Cumulative Rs</label>
        <input type="text" class="form-control" id="title2" name="title2" aria-describedby="emailHelp" value="">
      </div>
      <div class="form-group">
        <label for="title3">Target Rs	</label>
        <input type="text" class="form-control" id="title3" name="title3" aria-describedby="emailHelp" value="">
      </div>
      <div class="form-group">
        <label for="title3">Percentage periodic</label>
        <input type="text" class="form-control" id="title4" name="title4" aria-describedby="emailHelp" value="">
      </div>
   

      <div class="form-group">
        <label for="">Percentage yearly	</label>
        <input type="text" class="form-control" id="title6" name="title6" value="">
        
      </div>
      <div class="form-group">
        <label for="text">physical Periodic	</label>
        <input type="text" class="form-control" id="title7" name="title7" value="">
        
      </div>
      <div class="form-group">
        <label for="text">physical Cumulative	</label>
        <input type="text" class="form-control" id="title8" name="title8" value="">
        
      </div>
      <div class="form-group">
        <label for="text">Remarks</label>
        <input type="text" class="form-control" id="title9" name="title9" value="">
        
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
      <h1>Navigation Section</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Total Achievement</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

   
    <div class="container my-4">
    <h2>Add  details</h2>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title">Periodicity</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="title1">Periodic Rs	</label>
        <input type="text" class="form-control" id="title1" name="title1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="title2">P. Cumulative Rs</label>
        <input type="text" class="form-control" id="title2" name="title2" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="title3">Target Rs	</label>
        <input type="text" class="form-control" id="title3" name="title3" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="title3">Percentage periodic</label>
        <input type="text" class="form-control" id="title4" name="title4" aria-describedby="emailHelp">
      </div>
   

      <div class="form-group">
        <label for="">Percentage yearly	</label>
        <input type="text" class="form-control" id="title6" name="title6">
        
      </div>
      <div class="form-group">
        <label for="text">physical Periodic	</label>
        <input type="text" class="form-control" id="title7" name="title7">
        
      </div>
      <div class="form-group">
        <label for="text">physical Cumulative	</label>
        <input type="text" class="form-control" id="title8" name="title8">
        
      </div>
      <div class="form-group">
        <label for="text">Remarks</label>
        <input type="text" class="form-control" id="title9" name="title9">
        
      </div>
     
      <button type="submit" class="btn btn-primary my-2">Add</button>
    </form>
  </div>

  
  <div class="container my-4">

    <table class="table" id="myTable">
      <thead>
        <tr>
          <th width="5%" scope="col">S.No</th>
          <th width="5%" scope="col">Periodicity</th>
          <th width="" scope="col">Periodic Rst</th>
          <th width="" scope="col">P. Cumulative Rs	</th>
          <th width="" scope="col">Target Rs	</th>
          <th width="" scope="col">percentage Periodic</th>
          <th width="" scope="col">percentage Yearly</th>
          <th width="" scope="col">physical Periodic</th>
          <th width="" scope="col">physical Cumulative</th>
          <th width="" scope="col">Remarks</th>
         

          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `total_progress`";
          $result = mysqli_query($db, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['Periodicity'] . "</td>
            <td>".$row['Periodic Rs']. "</td>
            <td>".$row['P.Cumulative Rs']. "</td>
            <td>".$row['Target Rs']. "</td>
            <td>".$row['Periodic']. "</td>
            <td>".$row['Yearly']. "</td>
            <td>".$row['P_Periodic']. "</td>
            <td>".$row['P_Cumulative']. "</td>
            <td>".$row['Remarks']. "</td>
            
         
            <td> <button class='edit btn btn-sm btn-primary'id=".$row['sno'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button></td>
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
        title5 = tr.getElementsByTagName("td")[5].innerText;
        title6 = tr.getElementsByTagName("td")[6].innerText;
        title7 = tr.getElementsByTagName("td")[7].innerText;
        title8 = tr.getElementsByTagName("td")[8].innerText;
      
        
      
     
       var titleedit=document.getElementById('title');
       var titleedit1=document.getElementById('title1');
       var titleedit2=document.getElementById('title2');
       var titleedit3=document.getElementById('title3');
       var titleedit4=document.getElementById('title4');
       var titleedit6=document.getElementById('title6');
       var titleedit7=document.getElementById('title7');
       var titleedit8=document.getElementById('title8');
       var titleedit9=document.getElementById('title9');
    
      
        titleedit.value=title;
        titleedit1.value=title1;
        titleedit2.value=title2;
        titleedit3.value=title3;
        titleedit4.value=title4;
        titleedit6.value=title5;
        titleedit7.value=title6;
        titleedit8.value=title7;
        titleedit9.value=title8;
      
        
      
       
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
          window.location = `/admin/total_achivement.php?delete=${sno}`;
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

