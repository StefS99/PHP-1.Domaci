<?php
include 'connect.php';

if(isset($_POST['updateId'])){
    $user_id = $_POST['updateId'];


    $sql ="SELECT * FROM crud WHERE id=$user_id";

    $result = mysqli_query($connection,$sql);
    $response=array();
    while($row=mysqli_fetch_assoc($result)){

        $response = $row;
    }

    echo json_encode($response);

}else{
    $response['status'] = 200; //Kod za u redu
    $response['message'] ="Nelavildno ili podaci nisu nađeni";
}


//Update naredbe

if(isset($_POST['hiddendata'])){   //Dovoljno je samo za id da proverimo, jer je on jedinstven
    $uniqueid=$_POST['hiddendata'];
    $naziv=$_POST['updateName'];
    $marka=$_POST['updateName2'];
    $prodavac=$_POST['updateProdavac'];
    $cena=$_POST['updateCena'];

    $sql = "UPDATE crud SET naziv='$naziv',marka='$marka',prodavac='$prodavac',cena='$cena' WHERE id='$uniqueid'";  //Samo onaj id koji je poslat, za njegovu tabelu izmeni podatke

    $result=mysqli_query($connection,$sql);
}
?>