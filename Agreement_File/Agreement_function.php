<?php

function agreement($db){

$sql = "SELECT * FROM `agree_achivement`";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
?>
<?php

function complete_badkha($db,$show_page,$post_per_page){

$sql = "SELECT * FROM `complete_badkha`LIMIT $show_page,$post_per_page";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
?>
<?php

function running_agree($db,$show_page,$post_per_page){

$sql = "SELECT * FROM `running_agree`LIMIT $show_page,$post_per_page";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
?>


<!-- total progress -->

<?php

function total_progress($db){

$sql = "SELECT * FROM `total_progress`";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
?>



<!-- work_plan -->
<?php

function work_plan($db){

$sql = "SELECT * FROM `work_plan`";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
?>


