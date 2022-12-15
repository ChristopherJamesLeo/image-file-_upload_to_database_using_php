<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="filename">
    <input type="submit" name="submit" value="Upload">
</form>
<div class="container">
    <?php
        include "./config.php";
        $sql = "SELECT * FROM images";
        $result = mysqli_query( $conn , $sql );
        if(mysqli_num_rows($result) > 0){
            while( $row = mysqli_fetch_assoc($result)){
                $imgPath = "./uploads/".$row["file_name"];
                ?>
                <img src="<?php echo $imgPath ?>" alt="">
                <?php
            }
        }
    ?>
</div>
</body>
</html>