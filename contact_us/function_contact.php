<?php

function contact_us($db){

$sql = "SELECT * FROM `work_plan`";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
?>