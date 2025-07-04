<?php
    //Session Start
    session_start();
    // $_SESSION['msg']= "";


    //Error Debug - DELETAR DEPOIS
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    //Page info - header
    $page = "login";
    $css_file = "css/form2.css";
    @include('header.php');


    //Data.php -> root data
    include("data.php");

    
    //DB Create or Connect
    include_once("db_connect.php");


    //Get id
    $id = $_GET['id'];


    try {
        $cons = $conx->prepare("SELECT * FROM $db.$tb WHERE id = :id");
        $cons->bindParam(':id', $id);
        $cons->execute();

        $linha = $cons->fetch(PDO::FETCH_ASSOC);

        $nome = $linha['nome'];
        $email = $linha['email'];
        $rede = $linha['rede'];
        $curso = $linha['curso'];

        $_SESSION['msg'] = "Registro localizado!";
        $_SESSION['id'] = $id;
    }
    catch(PDOException $e){
        $msg = "Registro não localizado... -".$e->getMessage();
        $_SESSION['msg'] = $msg;
        header("Location:login.php");
    }
?>
        <main>
            <section>
                <article id="forms" class="edit">
                    <h2 id="titulo">Editar Contato</h2>
                    <form id="contato" name="contato">
                        <div id="f_fill">
                            <p><label for="f_name">Nome:</label>
                                <input type="text" id="f_name" name="f_name" value=<?= $nome ?> minlength="3" required>
                                <span  id="req_nome">*</span>
                            </p>
                        </div>
                        <div id="f_fill">
                            <p><label for="f_email">Email:</label>
                                <input type="email" id="f_email" name="f_email" value=<?= $email ?> minlength="4" required>
                                <span id="req_email">*</span>
                            </p>
                        </div>
                        <div id="f_fill_column">
                            <p>Tenho interesse em:
                                <span id="req_check">*</span>
                            </p>
                            <!-- <p><?= $curso ?></p> -->
                            <div id="f_field">
                                <p>
                                    <input type="checkbox" id="curso_acrilica" name="tipo_curso[]" value="Acrilica" <?php if (strpos($curso, "Acrilica") !== false) { echo "checked"; }?> >
                                    <label for="curso_acrilica">Curso de Acrílica</label>
                                </p><p>
                                    <input type="checkbox" id="curso_aquarela" name="tipo_curso[]" value="Aquarela" <?php if (strpos($curso, "Aquarela") !== false) { echo "checked"; }?> >
                                    <label for="curso_aquarela">Curso de Aquarela</label>
                                </p><p>
                                    <input type="checkbox" id="curso_ceramica" name="tipo_curso[]" value="Ceramica" <?php if (strpos($curso, "Ceramica") !== false) { echo "checked"; }?> >
                                    <label for="curso_ceramica">Curso de Cerâmica</label>
                                </p><p>
                                    <input type="checkbox" id="curso_desenho" name="tipo_curso[]" value="Desenho" <?php if (strpos($curso, "Desenho") !== false) { echo "checked"; }?>>
                                    <label for="curso_desenho">Curso de Desenho Completo</label>
                                </p><p>
                                    <input type="checkbox" id="curso_gouache" name="tipo_curso[]" value="Gouache" <?php if (strpos($curso, "Gouache") !== false) { echo "checked"; }?> >
                                    <label for="curso_gouache">Curso de Gouache</label>
                                </p><p>
                                    <input type="checkbox" id="curso_poeticas" name="tipo_curso[]" value="Poeticas" <?php if (strpos($curso, "Poeticas") !== false) { echo "checked"; }?> >
                                    <label for="curso_poeticas">Curso de Poéticas Visuais</label>
                                </p>
                            </div>
                        </div>
                        <div id="f_fill_column">
                            <p>Como ficou sabendo da gente?
                                <span id="req_radio">*</span>
                            </p>
                                <div id="f_field">
                                <p>
                                    <input type="radio" id="r_insta" name="f_radio" value="instagram" <?php if ('instagram' == $rede) { echo "checked"; } ?> required>
                                    <label for="r_insta">Instagram</label>
                                </p><p>
                                    <input type="radio" id="r_face" name="f_radio" value="facebook" <?php if ('facebook' == $rede) { echo "checked"; } ?> >
                                    <label for="r_face">Facebook</label>
                                </p><p>
                                    <input type="radio" id="r_google" name="f_radio" value="google" <?php if ('google' == $rede) { echo "checked"; } ?> >
                                    <label for="r_google">Google</label>
                                </p><p>
                                    <input type="radio" id="r_amigo" name="f_radio" value="amigo" <?php if ('amigo' == $rede) { echo "checked"; } ?> >
                                    <label for="r_amigo">Recomendação de amigos/conhecidos</label>
                                </p><p>
                                    <input type="radio" id="r_outros" name="f_radio" value="outros" <?php if ('outros' == $rede) { echo "checked"; } ?> >
                                    <label for="r_outros">Outros</label>
                                </p>
                                <input type="hidden" id="id" class="<?= $nome ?>" value="<?= $id ?>" name="hidden">
                            </div>
                        </div>
                        <div id="f_submit">
                            <input type="button" onclick="history.go(-1);" value="Cancelar">
                            <input type="submit" class="f_button" value="Enviar">
                        </div>
                    </form>
                </article>
            </section>
        </main>
        <script src="./js/script.js"></script>
    </body>
</html>