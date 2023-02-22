<?php
require('../include/database.php');


$insert=5;
$update=5;
session_start();
$_SESSION['email']="sdsads";


if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `work_plan` WHERE `sno` = $sno";
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
  $title10=mysqli_real_escape_string($db,$_POST['title10']);
  $title11=mysqli_real_escape_string($db,$_POST['title11']);
  $title12=mysqli_real_escape_string($db,$_POST['title12']);
  $title13=mysqli_real_escape_string($db,$_POST['title13']);
  $title14=mysqli_real_escape_string($db,$_POST['title14']);
  $title15=mysqli_real_escape_string($db,$_POST['title15']);
  $title16=mysqli_real_escape_string($db,$_POST['title16']);
  $title17=mysqli_real_escape_string($db,$_POST['title17']);
  $title18=mysqli_real_escape_string($db,$_POST['title18']);
  

    
  
  
    $sql="UPDATE `work_plan` SET `bibaran`='$title',`pariman`='$title1',`1_1`='$title2',`1_2`='$title3',`1_3`='$title4',`1_4`='$title6',`2_1`='$title7',`2_2`='$title8',`2_3`='$title9',`2_4`='$title10',`3_1`='$title11',`3_2`='$title12',`3_3`='$title13',`3_4`='$title14',`mansir_progress`='$title15',`till_mansir`='$title16',`complete`='$title17',`cause`='$title18' WHERE `work_plan`.`sno` = $news_id;";
  
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
  $title10=mysqli_real_escape_string($db,$_POST['title10']);
  $title11=mysqli_real_escape_string($db,$_POST['title11']);
  $title12=mysqli_real_escape_string($db,$_POST['title12']);
  $title13=mysqli_real_escape_string($db,$_POST['title13']);
  $title14=mysqli_real_escape_string($db,$_POST['title14']);
  $title15=mysqli_real_escape_string($db,$_POST['title15']);
  $title16=mysqli_real_escape_string($db,$_POST['title16']);
  $title17=mysqli_real_escape_string($db,$_POST['title17']);
  $title18=mysqli_real_escape_string($db,$_POST['title18']);
  
  

  
  $sql="INSERT INTO `work_plan` (`bibaran`, `pariman`, `1_1`, `1_2`, `1_3`, `1_4`, `2_1`, `2_2`, `2_3`, `2_4`, `3_1`, `3_2`, `3_3`, `3_4`, `mansir_progress`, `till_mansir`, `complete`, `cause`) VALUES ('$title', '$title1', '$title2', '$title3', '$title4', '$title6', '$title7', '$title8', '$title9', '$title10', '$title11', '$title12', '$title13', '$title14', '$title15', '$title16', '$title17', '$title18')";

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
        <label for="title">विवरण</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="">
      </div>
      <div class="form-group">
        <label for="title1">परिमाण	</label>
        <input type="text" class="form-control" id="title1" name="title1" aria-describedby="emailHelp" value="">
      </div>
      <div class="form-group">
        <label for="title2">प्रथम चौमासिक 1</label>
        <input type="text" class="form-control" id="title2" name="title2" aria-describedby="emailHelp" value="">
      </div>
      <div class="form-group">
        <label for="title3">प्रथम चौमासिक 2	</label>
        <input type="text" class="form-control" id="title3" name="title3" aria-describedby="emailHelp" value="">
      </div>
      <div class="form-group">
        <label for="title3">प्रथम चौमासिक 3</label>
        <input type="text" class="form-control" id="title4" name="title4" aria-describedby="emailHelp" value="">
      </div>
   

      <div class="form-group">
        <label for="">प्रथम चौमासिक 4</label>
        <input type="text" class="form-control" id="title6" name="title6" value="">
        
      </div>
      <div class="form-group">
        <label for="text">दोस्रो चौमासिक 1</label>
        <input type="text" class="form-control" id="title7" name="title7" value="">
        
      </div>
      <div class="form-group">
        <label for="text">दोस्रो चौमासिक 2</label>
        <input type="text" class="form-control" id="title8" name="title8" value="">
        
      </div>
      <div class="form-group">
        <label for="text">दोस्रो चौमासिक 3	</label>
        <input type="text" class="form-control" id="title9" name="title9" value="">
        
      </div>
      <div class="form-group">
        <label for="text">दोस्रो चौमासिक 4	</label>
        <input type="text" class="form-control" id="title10" name="title10" value="">
        
      </div>
      <div class="form-group">
        <label for="text">तेस्रो चौमासिक 1</label>
        <input type="text" class="form-control" id="title11" name="title11" value="">
        
      </div>
      <div class="form-group">
        <label for="text">तेस्रो चौमासिक 2</label>
        <input type="text" class="form-control" id="title12" name="title12" value="">
        
      </div>
      <div class="form-group">
        <label for="text">तेस्रो चौमासिक 3</label>
        <input type="text" class="form-control" id="title13" name="title13" value="">
        
      </div>
      <div class="form-group">
        <label for="text">तेस्रो चौमासिक 4</label>
        <input type="text" class="form-control" id="title14" name="title14" value="">
        
      </div>
      <div class="form-group">
        <label for="text">	मंग्सीर महिनाको प्रगति</label>
        <input type="text" class="form-control" id="title15" name="title15" value="">
        
      </div>
      <div class="form-group">
        <label for="text">मंग्सीर महिना सम्मको प्रगति</label>
        <input type="text" class="form-control" id="title16" name="title16" value="">
        
      </div>
      <div class="form-group">
        <label for="text">सम्पन्न कार्यहरु</label>
        <input type="text" class="form-control" id="title17" name="title17" value="">
        
      </div>
      <div class="form-group">
        <label for="text">प्रगति कम हुनुका कारणहरु</label>
        <input type="text" class="form-control" id="title18" name="title18" value="">
        
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
          <li class="breadcrumb-item active">Work Plan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

   
    <div class="container my-4">
    <h2>Add  details</h2>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title">विवरण</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="title1">परिमाण	</label>
        <input type="text" class="form-control" id="title1" name="title1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="title2">प्रथम चौमासिक 1</label>
        <input type="text" class="form-control" id="title2" name="title2" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="title3">प्रथम चौमासिक 2	</label>
        <input type="text" class="form-control" id="title3" name="title3" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="title3">प्रथम चौमासिक 3</label>
        <input type="text" class="form-control" id="title4" name="title4" aria-describedby="emailHelp">
      </div>
   

      <div class="form-group">
        <label for="">प्रथम चौमासिक 4</label>
        <input type="text" class="form-control" id="title6" name="title6">
        
      </div>
      <div class="form-group">
        <label for="text">दोस्रो चौमासिक 1</label>
        <input type="text" class="form-control" id="title7" name="title7">
        
      </div>
      <div class="form-group">
        <label for="text">दोस्रो चौमासिक 2</label>
        <input type="text" class="form-control" id="title8" name="title8">
        
      </div>
      <div class="form-group">
        <label for="text">दोस्रो चौमासिक 3	</label>
        <input type="text" class="form-control" id="title9" name="title9">
        
      </div>
      <div class="form-group">
        <label for="text">दोस्रो चौमासिक 4	</label>
        <input type="text" class="form-control" id="title10" name="title10">
        
      </div>
      <div class="form-group">
        <label for="text">तेस्रो चौमासिक 1</label>
        <input type="text" class="form-control" id="title11" name="title11">
        
      </div>
      <div class="form-group">
        <label for="text">तेस्रो चौमासिक 2</label>
        <input type="text" class="form-control" id="title12" name="title12">
        
      </div>
      <div class="form-group">
        <label for="text">तेस्रो चौमासिक 3</label>
        <input type="text" class="form-control" id="title13" name="title13">
        
      </div>
      <div class="form-group">
        <label for="text">तेस्रो चौमासिक 4</label>
        <input type="text" class="form-control" id="title14" name="title14">
        
      </div>
      <div class="form-group">
        <label for="text">	मंग्सीर महिनाको प्रगति</label>
        <input type="text" class="form-control" id="title15" name="title15">
        
      </div>
      <div class="form-group">
        <label for="text">मंग्सीर महिना सम्मको प्रगति</label>
        <input type="text" class="form-control" id="title16" name="title16">
        
      </div>
      <div class="form-group">
        <label for="text">सम्पन्न कार्यहरु</label>
        <input type="text" class="form-control" id="title17" name="title17">
        
      </div>
      <div class="form-group">
        <label for="text">प्रगति कम हुनुका कारणहरु</label>
        <input type="text" class="form-control" id="title18" name="title18">
        
      </div>
      <button type="submit" class="btn btn-primary my-2">Add</button>
    </form>
  </div>

  
  <div class="container my-4">

    <table class="table" id="myTable">
      <thead>
        <tr>
          <th width="5%" scope="col">S.No</th>
          <th width="5%" scope="col">विवरण</th>
          <th width="5%" scope="col">परिमाण</th>
          <th width="5%" scope="col">प्रथम चौमासिक 1</th>
          <th width="5%" scope="col">प्रथम चौमासिक 2</th>
          <th width="5%" scope="col">प्रथम चौमासिक 3</th>
          <th width="5%" scope="col">प्रथम चौमासिक 4</th>
          <th width="5%" scope="col">दोस्रो चौमासिक 1</th>
          <th width="5%" scope="col">दोस्रो चौमासिक 2</th>
          <th width="5%" scope="col">दोस्रो चौमासिक 3</th>
          <th width="5%" scope="col">दोस्रो चौमासिक 4</th>
          <th width="5%" scope="col">तेस्रो चौमासिक 1</th>
          <th width="5%" scope="col">तेस्रो चौमासिक 2</th>
          <th width="5%" scope="col">तेस्रो चौमासिक 3</th>
          <th width="5%" scope="col">तेस्रो चौमासिक 4</th>
          <th width="5%" scope="col">मंग्सीर महिनाको प्रगति</th>
          <th width="5%" scope="col">मंग्सीर महिना सम्मको प्रगति</th>
          <th width="5%" scope="col">सम्पन्न कार्यहरु</th>
          <th width="5%" scope="col">प्रगति कम हुनुका कारणहरु</th>
          
         
          
         
          

          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `work_plan`";
          $result = mysqli_query($db, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['bibaran'] . "</td>
            <td>". $row['pariman'] . "</td>
            <td>". $row['1_1'] . "</td>
            <td>". $row['1_2'] . "</td>
            <td>". $row['1_3'] . "</td>
            <td>". $row['1_4'] . "</td>
            <td>". $row['2_1'] . "</td>
            <td>". $row['2_2'] . "</td>
            <td>". $row['2_3'] . "</td>
            <td>". $row['2_4'] . "</td>
            <td>". $row['3_1'] . "</td>
            <td>". $row['3_2'] . "</td>
            <td>". $row['3_3'] . "</td>
            <td>". $row['3_4'] . "</td>
            <td>". $row['mansir_progress'] . "</td>
            <td>". $row['till_mansir'] . "</td>
            <td>". $row['complete'] . "</td>
            <td>". $row['cause'] . "</td>
            
            
         
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
        title9 = tr.getElementsByTagName("td")[9].innerText;
        title10 = tr.getElementsByTagName("td")[10].innerText;
        title11 = tr.getElementsByTagName("td")[11].innerText;
        title12 = tr.getElementsByTagName("td")[12].innerText;
        title13 = tr.getElementsByTagName("td")[13].innerText;
        title14 = tr.getElementsByTagName("td")[14].innerText;
        title15 = tr.getElementsByTagName("td")[15].innerText;
        title16 = tr.getElementsByTagName("td")[16].innerText;
        title17 = tr.getElementsByTagName("td")[17].innerText;
        

        
      
     
       var titleedit=document.getElementById('title');
       var titleedit1=document.getElementById('title1');
       var titleedit2=document.getElementById('title2');
       var titleedit3=document.getElementById('title3');
       var titleedit4=document.getElementById('title4');
       var titleedit6=document.getElementById('title6');
       var titleedit7=document.getElementById('title7');
       var titleedit8=document.getElementById('title8');
       var titleedit9=document.getElementById('title9');
       var titleedit10=document.getElementById('title10');
       var titleedit11=document.getElementById('title11');
       var titleedit12=document.getElementById('title12');
      // var titleedit12=document.getElementById('title12');
       var titleedit13=document.getElementById('title13');
       var titleedit14=document.getElementById('title14');
       var titleedit15=document.getElementById('title15');
       var titleedit16=document.getElementById('title16');
       var titleedit17=document.getElementById('title17');
       var titleedit18=document.getElementById('title18');
      
        titleedit.value=title;
        titleedit1.value=title1;
        titleedit2.value=title2;
        titleedit3.value=title3;
        titleedit4.value=title4;
        titleedit6.value=title5;
        titleedit7.value=title6;
        titleedit8.value=title7;
        titleedit9.value=title8;
        titleedit10.value=title9;
        titleedit11.value=title10;
        titleedit12.value=title11;
        titleedit13.value=title12;
        titleedit14.value=title13;
        titleedit15.value=title14;
        titleedit16.value=title15;
        titleedit17.value=title16;
        titleedit18.value=title17;
        
      
       
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
          window.location = `/admin/work_plan.php?delete=${sno}`;
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

