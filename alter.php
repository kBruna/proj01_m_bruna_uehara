<?php
    //Session Start
    session_start();

    //Get id
    $id = $_SESSION['id'];

    //Error Debug - DELETAR DEPOIS
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    //Data.php -> root data
    include_once("data.php");

    
    //DB Create or Connect
    require_once("db_connect.php");

    //POST
    //Variable Cleaning
    // $id = filter_var($_POST['id'] ?? '', FILTER_VALIDATE_INT);
    $nome = strtoupper(trim(strip_tags($_POST['f_name'] ?? '')));
    $email = strtolower(trim(filter_var($_POST['f_email'] ?? '', FILTER_SANITIZE_EMAIL)));
    $cursos_array = $_POST['tipo_curso'] ?? [];
    $cursos_array = is_array($cursos_array) ? $cursos_array : [$cursos_array];
    $cursos = implode(", ", array_map('strip_tags', $cursos_array));
    $radio = trim(strip_tags($_POST['f_radio'] ?? ''));

    //Include
    try {
        $upd = $conx->prepare("
        UPDATE `$db`.`$tb` SET nome = :nome, email = :email, curso = :curso, rede = :rede WHERE id = :id");
        $upd->bindParam(':id', $id);
        $upd->bindParam(':nome', $nome);
        $upd->bindParam(':email', $email);
        $upd->bindParam(':curso', $cursos);
        $upd->bindParam(':rede', $radio);
        $upd->execute();

        $_SESSION['msg'] = "Mensagem editada com sucesso!";
        header("Location:login.php");
    }
    catch(PDOException $e) {
        $_SESSION['msg'] = "Erro na edição: </ br>".$e->getMessage();
        header("Location:login.php");
    }
    $conx = null;
    exit();
?>