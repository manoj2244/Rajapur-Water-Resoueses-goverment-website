<?php



$server="localhost";
$username="rimodwrigov_rimodwrigov";
$password="@rimobardiya";
$database="rimodwrigov_home_database";


$db= mysqli_connect($server,$username,$password,$database);
mysqli_set_charset($db,'utf8');

if(!$db)
{
    echo die(mysqli_connect_error());
}
?>