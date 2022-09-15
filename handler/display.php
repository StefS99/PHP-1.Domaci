<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
</body>
</html>


<?php
//include 'connect.php';
require "../connect.php";

if(isset($_POST['displaySend'])){ //Proveravamo POST zahtev za slanje za svaki
    if($_POST['displaySend'] == true){
        $table = '<div class="row">
        ';                                  //Ovaj deo html-a ćemo spojiti sa donjim preko .

        $sql ="SELECT * FROM crud";
        $result=mysqli_query($connection,$sql);
        //$brojac=1;
        while($row=mysqli_fetch_assoc($result)){  //Hvataće sve do god bude imalo iz baze
            $id=$row['id'];
            $naziv=$row['naziv'];
            $marka=$row['marka'];
            $prodavac=$row['prodavac'];
            $cena=$row['cena'];
            
            $table.= '
                <div class="column">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">'.$naziv.'</h5>
                            <p class="card-text">Marka: '.$marka.'</p>
                            <p class="card-text">Prodavac: '.$prodavac.'</p>
                            <hr class="mt-0 mb-2">
                            <h6 class="mb-0"> Cena: <span class="font-highlight">'.$cena.' € </span>
                            </h6>
                            <br>
                            <td>
                                <button class="btn btn-info" onClick = "GetDetails('.$id.')">Izmeni</button>
                                <button class="btn btn-danger" onClick = "DeleteAutomobil('.$id.')">Obriši</button>
                            </td>
                        </div>
                    </div>
                </div>
            ';
        // $brojac++; //Uvećavaće broj za id za 1 i u slučaju da obrišemo takođe će ih lepo poređati, samo dodamo '.$brojac.' negde u html da se vidi kao id
        }

        $table.='</div>';  // . služi za konkatenaciju
        echo $table;
    }
}  

?>

