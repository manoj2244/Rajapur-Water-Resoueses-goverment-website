


<?php

require('../include/database.php');

session_start();

if($_SERVER["REQUEST_METHOD"]=='POST'){


  $fullname=mysqli_real_escape_string($db,$_POST['full_name']);
  $email=mysqli_real_escape_string($db,$_POST['email']);
  $phone=mysqli_real_escape_string($db,$_POST['phone']);
  $subject=mysqli_real_escape_string($db,$_POST['subject']);
  $option=mysqli_real_escape_string($db,$_POST['type']);
  $image=$_FILES['file'];
  $filename=$image['name'];
  $filepath=$image['tmp_name'];
  $fileerror=$image['error'];
  
      $destfile='../contact_us/upload/' .$filename;
      move_uploaded_file($filepath, $destfile);
  
  $message=mysqli_real_escape_string($db,$_POST['message']);

  $sql="INSERT INTO `contact_form` (`fullname`, `email`, `phone`, `subject`, `image`, `options`, `messege`, `submit_date`) VALUES ('$fullname', '$email', '$phone', '$subject', '$destfile', '$option', '$message', current_timestamp())";

  $result=mysqli_query($db,$sql);


  if($result){

   $_SESSION['msg']="submitted sucessfully";
   header('location:../contact_us/contact_us.php');
  }

}


  ?>

