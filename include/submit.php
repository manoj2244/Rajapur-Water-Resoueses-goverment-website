<?php

session_start();

if($_SERVER["REQUEST_METHOD"]=='POST')
{
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql = "SELECT * FROM `login`";
    $result = mysqli_query($db, $sql);
     $row = mysqli_num_rows($result);
    
            $row = mysqli_fetch_assoc($result);
            if($email!=$row['email'] && $password==$row['passwords']){
              echo ' <script>alert("incorrect email");</script>';

            }
            else if($password!=$row['passwords']&& $email==$row['email']){
              echo ' <script>alert("incorrect password");</script>';

            }
            else if($email!=$row['email']&& $password=!$row['passwords']){
              echo ' <script>alert("incorrect password and password");</script>';

            }
            else if($email==$row['email']&& $password==$row['passwords']){
              $_SESSION['isuserlogin']=true;
              $_SESSION['email']=$email;
              header('location:../admin/index.php');
            }
            else{

              echo ' <script>alert("All details Are Incorrect!!");</script>';

            }

          }   
?>


