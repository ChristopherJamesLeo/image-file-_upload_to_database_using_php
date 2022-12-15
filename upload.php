<?php
    $filename = $_FILES["filename"]["name"];
    $filetmp = $_FILES["filename"]["tmp_name"];
    $pathDir = "./uploads/";
    $targetFilePath = $pathDir . $filename;
    $fileType = pathinfo($targetFilePath , PATHINFO_EXTENSION); // to find file type;
    include "config.php";
    move_uploaded_file($filetmp, $targetFilePath);
    $sql = "INSERT INTO images (file_name, uploaded_on) VALUES ('{$filename}', NOW())";
    $result = mysqli_query( $conn , $sql);
    
    
    
    // if(!empty($_FILES["filename"]["name"])){
    //     $allowFormat = array("png","jpg","jpeg","gif");
    //     if(in_array($fileType, $allowFormat)){
        
    //         if(move_uploaded_file($filetmp, $targetFilePath)){
    //             $sql = "INSERT INTO images (file_name, uploaded_on) VALUES ('{$filename}', NOW())";
    //             $result = mysqli_query( $conn , $sql);
    //         }else {
    //             echo "fail upload";
    //         }
    //     } else {
    //         echo "fail";
    //     }
    // }else{
    //     echo "try again";
    // }




?>