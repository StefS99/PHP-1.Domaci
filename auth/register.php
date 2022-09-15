<?php 
    require "../connect.php";
    
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);

        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);

        $user_type = $_POST['user_type'];

        $select = "SELECT * FROM user_form WHERE email='$email' && password='$password'";
        
        $result = mysqli_query($connection, $select);

        if(mysqli_num_rows($result)>0){               //Ispisaće komentar kao alertify 
            $error[]  = 'Korisnik već postoji';  

        }else{

            if($password != $cpassword){
                $error[]  = 'Lozinke se ne poklapaju';
            }else{
                $insert = "INSERT INTO user_form(name,email,password, user_type) VALUES('$name','$email','$password','$user_type')";
                mysqli_query($connection, $insert);
                header('location:../auth/login.php'); //Nakon izvršenog nas pošalji na login formu
            }
        }
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register forma</title>
    <link rel="stylesheet" href="../css/style-auth.css">
</head>
<body>

<div class="form-container">
    <form action="" method="post">
        <h3>Registrujte se</h3>

        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>

        <input type="text" name="name" required placeholder="Unesite vaše ime">
        <input type="email" name="email" required placeholder="Unesite email">
        <input type="password" name="password" required placeholder="Unesite lozinku">
        <input type="password" name="cpassword" required placeholder="Potvrdite lozinku">

        <select name="user_type">
            <option value="user">Korisnik</option>
            <option value="admin">Admin</option>
        </select>

        <input type="submit" name="submit" value="Registracija" class="form-btn">
        <p>Već imate nalog? <a href="../auth/login.php">Prijavite se</a></p>
    </form>
</div>
    
</body>
</html>