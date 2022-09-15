<?php
    @include "../connect.php";

    $table ='';

    if(isset($_POST['query'])){
        $search = $_POST['query'];

        $stmt = $connection->prepare("SELECT * FROM crud WHERE naziv LIKE CONCAT('%',?,'%') OR marka LIKE CONCAT('%',?,'%')");
        $stmt ->bind_param("ss",$search,$search);
    }else{
        $stmt -> $connection->prepare("SELECT * FROM crud");
    }

    $stmt->execute();
    $result=$stmt->get_result();

    if($result->num_rows>0){
        
        $table = '<div class="row">
        ';                                  //Ovaj deo html-a ćemo spojiti sa donjim preko .

        while($row=$result->fetch_assoc()){  //Hvataće sve do god bude imalo iz baze
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
        }

        $table.='</div>'; 
        echo $table;
    }else{
        echo"<h3>Nije pronađeno podudaranje</h3>";
    }

?>