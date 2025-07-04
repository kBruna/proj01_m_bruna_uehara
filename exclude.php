<?php
    //Session Start
    session_start();
    // $_SESSION['return'] = "";

    //Error Debug - DELETAR DEPOIS
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //Data.php -> root data
    include("data.php");

    
    //DB Create or Connect
    include_once("db_connect.php");


    //Get
    $id = $_GET['id'];

    try {
        $del = $conx->prepare("DELETE FROM $db.$tb WHERE id = :id");
        $del->bindParam(':id', $id);
        $del->execute();
        $_SESSION['return'] = "Registro excluído com sucesso!";
        header("Location:login.php");
        exit();
    }
    catch(PDOException $e) {
        $_SESSION['return'] = "Error -".$e->getMessage();
        header("Location:login.php");
        exit();
    }

    $conx = null;
    ?>
