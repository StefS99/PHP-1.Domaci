<?php
include 'connect.php';

if(isset($_POST['updateId'])){
    $user_id=$_POST['updateId'];

    $sql="SELECT * FROM crud WHERE id=$user_id";

    $result = mysqli_query($connection,$sql);
    $response=array();
    while($row=mysqli_fetch_assoc($result)){

        $response = $row;
    }

    echo json_encode($response);

}
?>