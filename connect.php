<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "automobilcrud";

$connection = new mysqli($host,$user,$pass,$db); //3.je lozinka, ako je imamo

if(!$connection){
    die(mysqli_error($connection));  //Ako se nismo povezali, kaži da se nismo povezali!
}

?>