<?php
session_start();

require('../include/database.php');



if($_SERVER["REQUEST_METHOD"]=='POST')

{
    $sql = "SELECT * FROM `login`";
$result = mysqli_query($db, $sql);
$row = @mysqli_fetch_assoc($result);


  $newpassword=mysqli_real_escape_string($db,$_POST['newpassword']);
  $renewpassword=mysqli_real_escape_string($db,$_POST['renewpassword']);
  $currpass=mysqli_real_escape_string($db,$_POST['password']);


  $currentpass=$row['passwords'];

  if($currentpass!=$currpass&& $newpassword==$renewpassword){

    $_SESSION['msg1']="invalid current password";
    header('location:users-profile.php');


  }
  else if($newpassword!=$renewpassword && $currentpass==$currpass){
    $_SESSION['msg2']="doesnot matched your password";
    header('location:users-profile.php');

  }
  else if($newpassword==$renewpassword && $currentpass==$currpass){

    $sql="UPDATE `login` SET `passwords` = '$renewpassword' WHERE `login`.`id` = 1;";
    $result=mysqli_query($db,$sql);
    $_SESSION['msg3']="sucessfully submitted";
    header('location:users-profile.php');
  }
  
 else{
    $_SESSION['msg4']="sucessfully submitted";
    header('location:users-profile.php');

 }

}




?>