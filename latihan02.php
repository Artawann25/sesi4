<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>

<?php

    if(isset($_POST["txUSER"])){
        $usr = $_POST["txUSER"];
        if($usr==""){
            echo "<div/><h3 style='color:red;padding:5px;'>User Nama Belum Diisikan</h3></div>";
        }
    }
?>

<form action="latihan02.php"method="POST">
    <div>
    user name
    <input type="text"id="txUSER"name="txUSER"required>
    </div>

    <div>
        Password
        <input type="pasword"id="txPASKEY"name="txPASKEY">
    </div>

    <div>
        <button type="submit"> Login </button>
        <a href="daftar.php"> Daftar </button>
    </div>
    
</form>

</body>
</html>