<?php
//include 'connect.php'; //Može samo ako je u istom folderu!!!
require "../connect.php";

extract($_POST);  //Pomoći će nam da izvezemo sve ono što je definisano u ajaxu

if(isset($_POST['nameSend']) && 
   isset($_POST['markeSend']) && 
   isset($_POST['prodavacSend']) && 
   isset($_POST['cenaSend'])){ //Proveravamo POST zahtev za slanje za svaki

    $sql = "INSERT INTO crud(naziv, marka, prodavac, cena) VALUES('$nameSend', '$markeSend', '$prodavacSend', '$cenaSend')"; //Svaka vrednost će se uneti istim redom unetim za kolone u tableli //Svaki unos u tabelu će biti jedinstven za svakog korisnika //handler je naziv naše tabele //piše u vrhu phpmyadmina

    $result = mysqli_query($connection,$sql); //konekcija sa bazom i ono šta šaljemo bazi

    if($result){
        echo "Success";
    }else{
        echo $result;
        echo "Failed";
    }

}



?>