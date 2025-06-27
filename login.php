<?php
    //Session Start
    session_start();
    $_SESSION['msg'] = "";


    //Header
    $page = "login";
    $css_file = "/css/login.css";
    @include('header.php');


    //Data.php -> root data
    include("data.php");

    
    //DB Create or Connect
    include_once("db_connect.php");
?>
    <main>
        <section>
            <h2>Contato - Envios</h2>
        </section>
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
        <section>
            <article id="data">
                <!-- <p><b>ID: </b><?= $id ?></p> -->
                <p><b>Nome: </b><?= $nome ?></p>
                <p><b>Email: </b><?= $email ?></p>
                <p><b>Interesses: </b><?= $curso ?></p>
                <p><b>Como conheceu: </b><?= $rede ?></p>
            </article>
        </section>
        <?php
                    }
                    $_SESSION['msg']="";
                }
                catch(PDOException $e) {
                $_SESSION['msg']="Consulta falha".$e->getMessage();
            }

            $conx = null;
        ?>
        </section>
    </main>
<?php
    //Footer
    @include('footer.php');
?>