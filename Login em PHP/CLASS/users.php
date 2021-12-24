<?php

Class User{

    private $pdo;
    public $msgError = "";

    public function connection($name, $host, $user, $password){
        global $pdo;
        global $msgError;

        try{
            $pdo = new PDO("mysql:dbname=" .$name.";host=".$host,$user,$password);
        } catch(PDOException $e){
            $msgError =  $e ->getMessage ();
        } 
    }


    public function register($name, $email, $cpf,$password){
        global $pdo; 

        $sql= $pdo ->prepare("SELECT id_user FROM user WHERE email = :e"); 
        $sql->bindValue(":e", $email);
        $sql->execute();

            if($sql->rowCount() > 0){
                return false;
            }
            else{
                $sql= $pdo->prepare("INSERT INTO users(name, email, cpf, password) VALUES (:n, :e, :c, :p)");
                $sql->bindValue(":n", $name);
                $sql->bindValue(":e", $email);
                $sql->bindValue(":c", $cpf);
                $sql->bindValue(":p", md5($password));
                $sql->execute();
                return true;
        }


    }

    public function login($email,$password){
        global $pdo;
        
        $sql = $pdo ->prepare("SELECT id_user FROM users WHERE email = :e password :p");
        $sql->bindValue(" :e", $email);
        $sql->bindValue(" :p", md5($password));
        $sql->execute();
            
            if($sql->rowCount() > 0){
                $data = $sql->fetch();
                session_start();
                $_SESSION['id_user'] = $data['id_user'];
                return true;

            }
            else{
                return false;
            }
    }
}



?>