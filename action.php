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
   