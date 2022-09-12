<?php 
    require "../connect.php";

    session_start();

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);

        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);

        $user_type = $_POST['user_type'];

        $select = "SELECT * FROM user_form WHERE email='$email' && password='$password'";
        
        $result = mysqli_query($connection, $select);

        if(mysqli_num_rows($result)>0){               //Ispisaće komentar kao alertify 
            $row = mysqli_fetch_array($result);

            if($row['user_type']=='admin'){

                $_SESSION['admin_name'] = $row['name'];
                header('location:../index.php');

            }elseif($row['user_type']=='user'){

                $_SESSION['user_name'] = $row['name'];
                header('location:../index.php');
            }
        }else{
            $error[] = 'Uneli ste pogrešan mail ili lozinku';
        }
    };

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login forma</title>
    <link rel="stylesheet" href="../css/style-auth.css">
</head>
<body>

<div class="form-container">
    <form action="" method="post">
        <h3>Prijavite se</h3>

        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>

        <input type="email" name="email" required placeholder="Unesite email">
        <input type="password" name="password" required placeholder="Unesite lozinku">

        <input type="submit" name="submit" value="Prijava" class="form-btn">
        <p>Nemate nalog? <a href="../auth/register.php">Registrujte se</a></p>
    </form>
</div>
    
</body>
</html>