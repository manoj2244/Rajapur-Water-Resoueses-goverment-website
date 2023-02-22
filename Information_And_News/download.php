
<?php

session_start();
if(!empty($_GET['file'])){
    $fileName  = basename($_GET['file']);
    $filePath  = "./news_file/".$fileName;  
    if(!empty($fileName) && file_exists($filePath)){
        //define header
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        //read file 
        readfile($filePath);
        exit;
    }
    else{
        $_SESSION['error']="file is not found";
        header('location:information.php');
    }

}

?>
<?php
if(!empty($_GET['img'])){
    $fileName  = basename($_GET['img']);
    $filePath  = "./extra_file/".$fileName;
    
    if(!empty($fileName) && file_exists($filePath)){
        //define header
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        //read file 
        readfile($filePath);
        exit;
    }


    else{
        $_SESSION['error']="file is not found";
        header('location:information.php');
    }
 
}

?>
