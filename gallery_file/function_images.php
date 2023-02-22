<?php

function getimages($db)
{


    
    $sql = "SELECT * FROM `gallery`";
    $result = mysqli_query($db, $sql);

  
    $data= array();

            while($row = mysqli_fetch_assoc($result)){
                $data[]=$row;
            }
            return $data;
        }
?>
<?php

function getimages_one($db,$img_no)
{


    
    $sql = "SELECT * FROM `gallery` WHERE image_no=$img_no ";
    $result = mysqli_query($db, $sql);
     $row = mysqli_fetch_assoc($result);
     
     
     return $row['images_name'];

           
        }
?>
<?php

function getimages_row($db)
{


    
    $sql = "SELECT * FROM `gallery`";
    $result = mysqli_query($db, $sql);
     $row = mysqli_num_rows($result);
     return $row;

           
        }
?>
<?php

