<?php
    $part = "upgambar/";
    if(isset($_POST["uploadfile"])){
        if($_FILES["flGAMBAR"]["error"]==0){
            $flname = $part . basename($_FILES["flGAMBAR"]["name"]);
            move_uploaded_file($_FILES["flGAMBAR"]["tmp_name"], $flname);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<Form action="latihan03.php"method="POST" enctype="multipart/form-data">

    <div>
        Upload Gambar
        <input type="file" name="flGAMBAR">

    </div>

    <div>
        <input type="hidden" name="uploadfile" value="OK">
        <button type="sumbit">Upload Gambar</button>
    </div>

</Form>

</body>
</html>