<?php

function water_user($db){

$sql = "SELECT * FROM `main_content`";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
?>
<?php

function water_user_sub($db){

$sql = "SELECT * FROM `badkapath_table`ORDER BY unique_id ASC";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        
        return $data;
    }

    
?>







<?php

function water_user_samanya($db,$show_page,$post_per_page){

$sql = "SELECT * FROM `mul_samanya`LIMIT $show_page,$post_per_page";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
?>
<?php

function water_user_sub_samanya($db,$heading){

$sql = "SELECT * FROM `mul_samanya_table` WHERE content_id=$heading";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        
        return $data;
    }

    
?>
<?php

function water_user_mul($db,$show_page,$post_per_page){

$sql = "SELECT * FROM `mul_samiti`LIMIT $show_page,$post_per_page";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
?>
<?php

function water_user_sub_mul($db,$heading){

$sql = "SELECT * FROM `mul_samiti_table` WHERE content_id=$heading";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        
        return $data;
    }

    
?>
<!-- praganna -->

<?php

function water_user_mul_prag($db,$show_page,$post_per_page){

$sql = "SELECT * FROM `mul_samiti_prag`LIMIT $show_page,$post_per_page";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
?>
<?php

function water_user_sub_mul_prag($db,$heading){

$sql = "SELECT * FROM `mul_samiti_prag_table` WHERE content_id=$heading";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        
        return $data;
    }

    
?>

<?php

function water_user_mul_samanya_prag($db,$show_page,$post_per_page){

$sql = "SELECT * FROM `mul_samanya_prag`LIMIT $show_page,$post_per_page";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
?>
<?php

function water_user_sub_mul_samanya_prag($db,$heading){

$sql = "SELECT * FROM `mul_samanya_prag_table` WHERE content_id=$heading";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        
        return $data;
    }

    
?>







<?php

function water_user_kulopani_prag($db){

$sql = "SELECT * FROM `kulopani_prag`";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
?>
<?php

function water_user_sub_kulopani_prag($db){

$sql = "SELECT * FROM `kulopani_prag_table`ORDER BY unique_id ASC";
$result = mysqli_query($db, $sql);


$data= array();

        while($row = mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        
        return $data;
    }

    
?>