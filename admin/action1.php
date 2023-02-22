<?php
require('../include/database.php');

session_start();

if(isset($_GET['delete1'])){
    $sno = $_GET['delete1'];
    $delete = true;
    $sql = "DELETE FROM `kulopani_prag` WHERE `content_id` = $sno";
    $result = mysqli_query($db, $sql);
    header('location:water_badlapur.php');
  }

if($_SERVER["REQUEST_METHOD"]=='POST'){

    
  if (isset( $_POST['snoEdit1'])){
   

    $news_id=$_POST['snoEdit1'];
    $title=mysqli_real_escape_string($db,$_POST['titl']);
    $sql="UPDATE `kulopani_prag` SET `content_heading` = '$title' WHERE `kulopani_prag`.`content_id` = '$news_id';
    ";
    $result=mysqli_query($db,$sql);
    if($result){  $_SESSION['msg1']="your data has been updated sucessfully";
        header('location:water_badlapur.php');

    }
   


  }
  else{     
    $title=mysqli_real_escape_string($db,$_POST['titl']);
    $sql="INSERT INTO `kulopani_prag` (`content_heading`) VALUES ('$title')";
    
  $result=mysqli_query($db,$sql);
  if($result){
      $_SESSION['msg']="your data has been inserted sucessfully";
    echo '<script>

    alert("your data has been inserted sucessfullyfdg");
    </script>';

  }
  

  header('location:water_badlapur.php');
  }

}
?>