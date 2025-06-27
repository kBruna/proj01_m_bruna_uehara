<?php
    //Error Debug - DELETAR DEPOIS
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //Iniciar Sessão
    session_start();
    $_SESSION['msg'] ?? "";


    //Data.php -> root data
    include("data.php");


    //Create DataBase
    require_once("db_connect.php");


    //Variable Cleaning
    $nome = strtoupper(trim(strip_tags($_POST['f_name'] ?? '')));
    $email = trim(filter_var($_POST['f_email'] ?? '', FILTER_SANITIZE_EMAIL));
    $cursos_array = $_POST['tipo_curso'] ?? [];
    $cursos_array = is_array($cursos_array) ? $cursos_array : [$cursos_array];
    $cursos = implode(", ", array_map('strip_tags', $cursos_array));
    $radio = trim(strip_tags($_POST['f_radio'] ?? ''));


    //Include
    try {
        $ins = $conx->prepare("
        INSERT INTO `$db`.`$tb` (nome, email, curso, rede) 
        VALUES (:nome, :email, :curso, :rede)");

        $ins->bindParam(':nome', $nome);
        $ins->bindParam(':email', $email);
        $ins->bindParam(':curso', $cursos);
        $ins->bindParam(':rede', $radio);
        $ins->execute();

        $msg = "Interesse enviado! Aguarde o nosso contato!";
        $_SESSION['msg'] = $msg;
    }
    catch(PDOException $e) {
        $msg = "Erro na inclusão: </ br>".$e->getMessage();
        $_SESSION['msg'] = $msg;

    }

    header("Location:contato2.php");
    exit();
?>