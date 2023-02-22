
<?php
function getimages_slide($db)
{


    
    $sql = "SELECT * FROM `main_carosel`";
    $result = mysqli_query($db, $sql);
     $row = mysqli_num_rows($result);
     $data= array();

            while($row = mysqli_fetch_assoc($result)){
                $data[]=$row;
            }
            return $data;
        

           
        }
?>
<?php
function get_card($db)
{


    
    $sql = "SELECT * FROM `card_details`";
    $result = mysqli_query($db, $sql);
     $row = mysqli_num_rows($result);
     $data= array();

            while($row = mysqli_fetch_assoc($result)){
                $data[]=$row;
            }
            return $data;
        

           
        }
?>
<?php
function get_card1($db)
{


    
    $sql = "SELECT * FROM `english_card`";
    $result = mysqli_query($db, $sql);
     $row = mysqli_num_rows($result);
     $data= array();

            while($row = mysqli_fetch_assoc($result)){
                $data[]=$row;
            }
            return $data;
        

           
        }
?>