<?php
    $filename = $_FILES["filename"]["name"];
    $filetmp = $_FILES["filename"]["tmp_name"];
    $pathDir = "./uploads/";
    $targetFilePath = $pathDir . $filename;
    $fileType = pathinfo($targetFilePath , PATHINFO_EXTENSION); // to find file type;
    include "config.php";
    // move_uploaded_file($filetmp, $targetFilePath);
    // $sql = "INSERT INTO images (file_name, uploaded_on) VALUES ('{$filename}', NOW())";
    // $result = mysqli_query( $conn , $sql);
    if(!empty($filename)){ //file name ထဲတွင် empty မဖြစ်နေလျှင် အောက်က code ကို run ပါ
        if(move_uploaded_file($filetmp, $targetFilePath)){ // image file သည် ပတ်လမ်းကြောင်းထဲသို့ ရောက်သွားမှသာ database ထဲသို့ ပို့ပေးပါ
            $sql = "INSERT INTO images (file_name, uploaded_on) VALUES ('{$filename}', NOW())"; // အခုလက်ရှိအချိန်ဖြင့် ဖိုင်အား data base ထဲတွင်သိမ်းပါ
            $result = mysqli_query( $conn , $sql);
        }
    }
    
    
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