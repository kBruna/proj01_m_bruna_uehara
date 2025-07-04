<?php

    include_once('data.php');

    //Try Connecting
    try {
        $conx = new PDO("mysql:host=$host", $user, $pass);
        $conx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Check DB
        $create_db = "CREATE DATABASE IF NOT EXISTS $db";

        $conx->exec($create_db);

        // $_SESSION['msg'] = "Banco criado com sucesso..."; //DELETAR DEPOIS

    }
    catch(PDOException $e) {
        echo $db."Falha na criação do Banco:<br>".$e->getMessage();

        // $_SESSION['msg'] = "O Banco já existe!"; //DELETAR DEPOIS
    }

    //Try Connection Again
    try {
        $conx = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $conx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        // echo $db."Falha na conexão...".$e->getMessage();
    }

    //Conexão OK
    if($conx){
        try {
            $create_db = "CREATE TABLE $db.$tb(
                `id`    INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                `data`  DATE DEFAULT CURRENT_TIMESTAMP,
                `hora`  TIME DEFAULT CURRENT_TIMESTAMP,
                `nome`  VARCHAR(60) NOT NULL,
                `email` VARCHAR(60) NOT NULL,
                `curso` VARCHAR(100) NOT NULL,
                `rede`  VARCHAR(30) NOT NULL);
                ENGINE=InnoDB DEFAULT CHARSET=latin1";
            
            $conx->exec($create_db);
            // $_SESSION['msg']="Banco e tabela criados!";   //DELETAR DEPOIS
        }
        catch(PDOException $e) {
            // $_SESSION['msg']="Falha na tabela:<br>".$e->getMessage();
        }
    }
?>