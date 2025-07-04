<?php
    //Session Start
    session_start();


    //Error Debug - DELETAR DEPOIS
    ini_set('display_errors', 1);
    error_reporting(E_ALL);


    //Header
    $page = "login";
    $css_file = "./css/login.css";
    @include('header.php');


    //Data.php -> root data
    include("data.php");

    
    //DB Create or Connect
    include_once("db_connect.php");
?>
    <main>
        <script src="./js/form.js" defer></script>
        <section>
            <h2>Contato</h2>
            <?php
                $check_db = "SELECT COUNT(*) FROM $tb";
                $stmt = $conx->query($check_db);
                $count = $stmt->fetchColumn();

                if($count == 0) {
                    echo "<center><p>Tabela vazia</p></center>";
                }
                else {
            ?>
            <div style="overflow=x:auto">
                <table id="form_print">
                    <tr id="data">
                        <th><b>Data</b></th>
                        <th><b>Nome</b></th>
                        <th><b>Email</b></th>
                        <th><b>Interesses</b></th>
                        <th><b>Como conheceu</b></th>
                        <th><b>Opções</b></th>
                    </tr>
                    <?php
                        //Print DB
                        try {
                            $sel = "SELECT * FROM $db.$tb ORDER BY id ASC";
                            $result = $conx->query($sel);

                            while($linha = $result->fetch(PDO::FETCH_ASSOC)){
                                $id = $linha['id'];
                                $nome = $linha['nome'];
                                $email = $linha['email'];
                                $curso = $linha['curso'];
                                $rede = $linha['rede'];
                                $data = $linha['data'];
                        ?>
                    <tr>
                        <input type="hidden" id="<?= $id ?>" value="<?= $nome ?>">
                        <td><?= $data ?></td>
                        <td><?= $nome ?></td>
                        <td><?= $email ?></td>
                        <td><?= $curso ?></td>
                        <td><?= $rede ?></td>
                        <td id="cont_icons">
                            <?php
                                echo
                            "<a href='edit.php?id=$id' alt='Editar'><img id='icons' src='./img/icon_edit.png' ></a>";
                                echo
                            "<a href='#' id='exclude' class='$id' alt='Excluir'><img id='icons' src='./img/icon_trash.png' ></a>";
                            ?>
                        </td>
                    </tr>
                <?php
                            }
                            if (isset($_SESSION['msg'])) {
                                $message = addslashes($_SESSION['msg']);
                                echo "<script>alert('$message');</script>";
                                unset($_SESSION['msg']);
                            }
                        }
                        catch(PDOException $e) {
                        $_SESSION['msg']="Consulta falha".$e->getMessage();
                    }
                    $conx = null;
                }
                ?>
                </table>
            </div>
        </section>
    </main>
    <?php
        if (isset($_SESSION['return'])) {
            $return = addslashes($_SESSION['return']);
            echo "<script>alert('$return');</script>";
            unset($_SESSION['return']);
        }
        unset($_SESSION['msg']);
    ?>
    </body>
</html>