<?php

function badkapath($db){

$sql = "SELECT * FROM `badkapath`";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
?>
<?php

function badkapath_sub_heading($db,$heading){

$sql = "SELECT * FROM `sub_heading_details`WHERE headind_id=$heading";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        
        return $data;
    }

    
?>