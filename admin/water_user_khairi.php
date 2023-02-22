<?php
require('../include/database.php');
session_start();

$_SESSION['email']="sdsads";
if(isset($_SESSION['msg'])){
    
  echo '<script>

  alert("your data has been inserted sucessfully");
  </script>';
  unset($_SESSION['msg']);
}

if(isset($_SESSION['msg1'])){
    
  echo '<script>

  alert("your data has been updated sucessfully");
  </script>';
  unset($_SESSION['msg1']);
}


$insert=5;
$update=5;


if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `badkapath_table` WHERE `table_id` = $sno";
  $result = mysqli_query($db, $sql);
}


if($_SERVER["REQUEST_METHOD"]=='POST'){



  if (isset( $_POST['snoEdit'])){
    

    $news_id=$_POST['snoEdit'];

 

    
    //$title=mysqli_real_escape_string($db,$_POST['title']);
    $title1=mysqli_real_escape_string($db,$_POST['title1']);
    $title2=mysqli_real_escape_string($db,$_POST['title2']);
    $title3=mysqli_real_escape_string($db,$_POST['title3']);
    $title4=mysqli_real_escape_string($db,$_POST['title4']);
    $title5=mysqli_real_escape_string($db,$_POST['select']);

    $image=$_FILES['file'];
    $filename=$image['name'];
    $filepath=$image['tmp_name'];
    $fileerror=$image['error'];
    if($fileerror==0){
        $destfile='../Water_User_Association/water_user_assets/' .$filename;
        move_uploaded_file($filepath, $destfile);
    }
    else{
      $sql = "SELECT * FROM `badkapath_table` WHERE `card_id`=$news_id";
      $result = mysqli_query($db, $sql);
      $row = @mysqli_fetch_assoc($result);

      $destfile=$row['card_image'];
      move_uploaded_file($destfile,$destfile);
     
  
    }
  
  
    $sql="UPDATE `badkapath_table` SET `fullname`='$title1',`address`='$title2',`designation`='$title3', `contact`='$title4',`profile` = '$destfile',`unique_id`='$title5' WHERE `badkapath_table`.`table_id` = $news_id;";
  
    $result=mysqli_query($db,$sql);
  
  
    if($result){
  
    $update=1;
    }
    else{
      $update=0;
    }




  }
  else{

  //$title=mysqli_real_escape_string($db,$_POST['title']);
  $title1=mysqli_real_escape_string($db,$_POST['title1']);
  $title2=mysqli_real_escape_string($db,$_POST['title2']);
  $title3=mysqli_real_escape_string($db,$_POST['title3']);
  $title4=mysqli_real_escape_string($db,$_POST['title4']);
  $title5=mysqli_real_escape_string($db,$_POST['select']);
  
  

  $image=$_FILES['file'];
  $filename=$image['name'];
  $filepath=$image['tmp_name'];
  $fileerror=$image['error'];
  if($fileerror==0){
      $destfile='../Water_User_Association/water_user_assets/' .$filename;
      move_uploaded_file($filepath, $destfile);
      
  
  $sql="INSERT INTO `badkapath_table` (`fullname`, `address`, `designation`,`contact`,`profile`,`unique_id`) VALUES ('$title1', '$title2', '$title3','$title4','$destfile','$title5')";

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
  <script>
      function post(){
      
        var d=document.getElementById("select");
        var display=d.options[d.selectedIndex].text;

        var e=document.getElementById("title100").value=display;
       
      }
    </script>
  <script>
      function post1(){
      
        var p=document.getElementById("select1");
        var display1=p.options[p.selectedIndex].text;
        console.log(display1)


        var e=document.getElementById("title3").value=display1;
        
       
      }
    </script>

<style>
  select{
    border-color: green;
    border-width: 2px;
    width: 18%;
    padding: 0.2rem;
    
    margin-left: 1rem;
  
    margin-top: 1rem;
    margin-bottom: 1rem;
    
  }
</style>

</head>

<body>

   <!-- Basic Modal -->
           
              <div class="modal fade" id="editModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit data</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                                  <form action="" method="POST" enctype="multipart/form-data">

                                  <input type="hidden" name="snoEdit" id="snoEdit">
                                 
                     <div class="form-group">
        <label for="title">नाम</label>
        <input type="text" class="form-control" id="title1" name="title1" value="">
      </div>
      <div class="form-group">
        <label for="title1">Address</label>
        <input type="text" class="form-control" id="title2" name="title2" value="">
      </div>
      <div class="form-group">
        <label for="title2">पद</label>
        <select name="select" id="select1" onchange="post1();";>
        <option value="1">अध्यक्ष</option>
        <option value="2">उपाध्यक्ष</option>
        <option value="3">सचिव</option>
        <option value="4">कोषाध्यक्ष</option>
        <option value="5">सदस्य</option>
      </select>
      
        <input type="text" class="form-control" id="title3" name="title3" value="77">
      </div>
      <div class="form-group">
        <label for="title3">मोबाइल नं.</label>
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
             <!-- End Basic Modal-->
           
              <div class="modal fade" id="editModal1" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit data</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                                  <form action="./action.php" method="POST">

                                  <input type="hidden" name="snoEdit1" id="snoEdit1">
                                 
                     <div class="form-group">
        <label for="titl">Main Heading</label>
        <input type="text" class="form-control" id="titl" name="titl" value="">
      </div>
      
                      
                    </div>
                    <button type="submit" class="btn btn-primary my-2">Update</button>
                  </form>
                    </div>
                    
                  </div>
                </div>
             <!-- End Basic Modal-->
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
          <li class="breadcrumb-item active">Water User Association / Khairi Chandrapur</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="container my-4">
    <h2>Add a Main Heading</h2>
    <form action="./action.php" method="POST">

    <div class="form-group">
        <label for="titl"> Main Heading</label>
        <input type="text" class="form-control" id="titl" name="titl" aria-describedby="emailHelp">
      </div>

      <button type="submit" class="btn btn-primary my-2" name="submit">Add</button>
    </form>
  </div>

  <div class="container my-4">

    <table class="table" id="myTable">
      <thead>
        <tr>
          <th width="15%" scope="col">Heading No</th>
          <th width="50%" scope="col">Heading</th>
         
         
          
         
          

          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `main_content`";
          $result = mysqli_query($db, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno. "</th>
            <td>". $row['content_heading'] . "</td>

            <td> <button class='edit1 btn btn-sm btn-primary'id=".$row['content_id'].">Edit</button> <button class='delete1 btn btn-sm btn-primary' id=d".$row['content_id'].">Delete</button></td>
          </tr>";
        } 
          ?>


      </tbody>
    </table>
  </div>

   
    <div class="container my-4">
    <h2>Add a Detail</h2>
    
    <form action="" method="POST" enctype="multipart/form-data">

      <div class="form-group">
        <label for="title">नाम</label>
    
        <input type="text" class="form-control" id="title1" name="title1" aria-describedby="emailHelp">
      </div>
     
      <div class="form-group">
        <label for="title2">Address</label>
        <input type="text" class="form-control" id="title2" name="title2" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="title1">पद</label>
        <select name="select" id="select" onchange="post();";>
        <option value="1">अध्यक्ष</option>
        <option value="2">उपाध्यक्ष</option>
        <option value="3">सचिव</option>
        <option value="4">कोषाध्यक्ष</option>
        <option value="5">सदस्य</option>
      </select>
        <input type="text" class="form-control" id="title100" name="title3" aria-describedby="emailHelp" value="">
      </div>
      <div class="form-group">
        <label for="title3">मोबाइल नं.</label>
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
          <th width="15%" scope="col">नाम</th>
         
          <th width="" scope="col">Address</th>
          <th width="" scope="col">पद</th>
          <th width="" scope="col">मोबाइल नं.</th>
          <th width="" scope="col">फोटो</th>
         
          
         
          

          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `badkapath_table`";
          $result = mysqli_query($db, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
          
            <td>". $row['fullname'] . "</td>
            <td>".$row['address']. "</td>
            <td>".$row['designation']. "</td>
            <td>".$row['contact']. "</td>
            
            <td> <img src='".$row['profile']."' style='width:100px;height:100px;object-fit:cover;'></td>
        
            <td style='display:none';>".$row['profile']. "</td>



           
            <td> <button class='edit btn btn-sm btn-primary'id=".$row['table_id'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['table_id'].">Delete</button></td>
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
        //title = tr.getElementsByTagName("td")[0].innerText;
        title1 = tr.getElementsByTagName("td")[0].innerText;
        title2 = tr.getElementsByTagName("td")[1].innerText;
        title3 = tr.getElementsByTagName("td")[2].innerText;
        title4 = tr.getElementsByTagName("td")[3].innerText;
      //  title5 = tr.getElementsByTagName("td")[5].innerText;
        title5 = tr.getElementsByTagName("td")[5].innerText;
        
      
     
      // var titleedit=document.getElementById('title');
       var titleedit1=document.getElementById('title1');
       var titleedit2=document.getElementById('title2');
       var titleedit3=document.getElementById('title3');
       var titleedit4=document.getElementById('title4');
       var img=document.getElementById('img');
        //titleedit.value=title;
        titleedit1.value=title1;
        titleedit2.value=title2;
        titleedit3.value=title3;
        titleedit4.value=title4;
        img.src=title5;
      
       
        snoEdit.value = e.target.id;
       
        $('#editModal').modal('toggle');
      })
    });
  edit = document.getElementsByClassName('edit1');
    Array.from(edit).forEach((element) => {
      element.addEventListener("click", (e) => {
       
        tr = e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[0].innerText;
        
        
      
     
       var titleedit=document.getElementById('titl');
     
        titleedit.value=title;
       
       
        snoEdit1.value = e.target.id;
       
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
          window.location = `/admin/water_user_khairi.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
    delete1 = document.getElementsByClassName('delete1');
    Array.from(delete1).forEach((element) => {
      element.addEventListener("click", (e) => {
       
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this data!")) {
          console.log("yes");
          window.location = `/admin/action.php?delete1=${sno}`;
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

