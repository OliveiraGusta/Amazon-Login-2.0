<?php

Class User
{
    private $pdo;
    public $msgError = "";

    //conexão
    public function connection($name, $host, $user, $password)
    {
        global $msgError;
        global $pdo;
        try{
            $pdo = new PDO("mysql:dbname=".$name.";host=".$host, $user, $password);
        } catch (PDOException $e){
            $msgError = $e->getMessage();
        }
    }
    //cadastro
    public function register($name, $email, $cpf, $password)
    {
        global $pdo;
        //verificar se já existe o email
        $sql = $pdo->prepare("SELECT id_user FROM users WHERE email = :e");
        $sql ->bindValue (":e", $email);
        $sql ->execute();
        if($sql->rowCount() > 0) //rowCount, contador de linhas do id_user
        {
            return false;
        }
        else{
            //Cadastro
            $sql = $pdo->prepare("INSERT INTO users (name, email, cpf, password) 
            VALUES ():n, :e, :c, :p");
            $sql->bindValue (":n", $name);
            $sql->bindValue (":e", $email);
            $sql->bindValue (":c", $cpf);
            $sql->bindValue (":p", md5($password));
            $sql->execute();
            return true;
        }
        
    }

    //login
    public function login($email, $password)
    {
        global $pdo;

        $sql = $pdo->prepare("SELECT id_user FROM users WHERE email = :e AND password = :p");
        $sql->bindValue (":e", $email);
        $sql->bindValue (":p", md5($password));
        $sql->execute();
        if($sql->rowCount() > 0) //rowCount, contador de linhas do id_user
        {
           //ENTRAR
           $data = $sql->fetch();
           session_start();
           $_SESSION ['id_user'] = $data['id_user'];
           return true;//LOGADO
        }
        else
        {
            return false;//não foi possivel logar
        }

    }

}
?>