<?php

function fetch_function( $db)
{


  $sql = "SELECT * FROM `flash_news`LIMIT 0,4";
  $result = mysqli_query($db, $sql);

  while ($row = mysqli_fetch_assoc($result)){
      $data[]=$row;

  }
  return $data;

}
?>
<?php

function fetch_function1($db)
{


  $sql = "SELECT * FROM `extra_work`LIMIT 0,4";
  $result = mysqli_query($db, $sql);

  while ($row = mysqli_fetch_assoc($result)){
      $data[]=$row;

  }
  return $data;

}
?>
  