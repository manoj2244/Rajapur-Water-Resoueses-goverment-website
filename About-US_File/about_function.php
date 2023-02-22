<?php

function card($db){

$sql = "SELECT * FROM `ex_project_chief`";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
?>
<?php

function card1($db){

$sql = "SELECT * FROM `ex_employee`";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
?>
<?php

function card2($db){

$sql = "SELECT * FROM `employee_details`";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
?>
