<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$adminEmail = "musa@mail.ru";
$adminParol = "12345";
if($_POST){
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];

    if($email != "" and $sifre != "") {

        if($email == $adminEmail and $sifre == $adminParol) {
            echo "Tebrikler bilgiler dogrudur!";
        } else{
            echo "Bilgiler xetalidir";
        }

    }else{

       echo "butun saheleri doldurun";
    }

}
?>
    
    <form method="post" action="">

        <label>EMAIL</label>
        <input type="text" name="email"> <br>
        <label>SIFRE</label>
        <input type="text" name="sifre"> <br><br>
        <input type="submit" value="SEND">
    </form>
</body>
</html>