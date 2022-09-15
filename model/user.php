<?php

class User{
    public $id;
    public $name;
    public $email;
    public $password;
    public $user_type;

    public function __construct($id=null,$name=null,$email=null,$password=null,$user_type)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->user_type = $user_type;
    }

    public static function logIn($user, mysqli $connection)
    {
       $query = "SELECT * FROM user_form WHERE email='$user->email' && password='$user->password'";

        return $connection->query($query);
    }
}

?>