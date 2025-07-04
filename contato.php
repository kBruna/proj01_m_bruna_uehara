<?php
    $page = "contato";
    $css_file = "css/form.css";
    @include('header.php');
?>
        <main>
            <section>
                <article id="forms" class="contat">
                    <img src="./img/473533605_18390862147100097_591300106323218751_n.jpg" />
                    <div id="forms2">
                        <h2>Contato</h2>
                        <form id="contato" name="contato">
                            <div id="f_fill">
                                <p><label for="f_name">Nome:</label>
                                    <input type="text" id="f_name" name="f_name" placeholder="Seu Nome" minlength="3" required>
                                    <span  id="req_nome">*</span>
                                </p>
                            </div>
                            <div id="f_fill">
                                <p><label for="f_email">Email:</label>
                                    <input type="email" id="f_email" name="f_email" placeholder="Seu Email" minlength="4" required>
                                    <span id="req_email">*</span>
                                </p>
                            </div>
                            <div id="f_fill_column">
                                <p>Tenho interesse em:
                                    <span id="req_check">*</span>
                                </p>
                                <div id="f_field">
                                    <p>
                                        <input type="checkbox" id="curso_acrilica" name="tipo_curso[]" value="Acrilica">
                                        <label for="curso_acrilica">Curso de Acrílica</label>
                                    </p><p>
                                        <input type="checkbox" id="curso_aquarela" name="tipo_curso[]" value="Aquarela">
                                        <label for="curso_aquarela">Curso de Aquarela</label>
                                    </p><p>
                                        <input type="checkbox" id="curso_ceramica" name="tipo_curso[]" value="Ceramica">
                                        <label for="curso_ceramica">Curso de Cerâmica</label>
                                    </p><p>
                                        <input type="checkbox" id="curso_desenho" name="tipo_curso[]" value="Desenho">
                                        <label for="curso_desenho">Curso de Desenho Completo</label>
                                    </p><p>
                                        <input type="checkbox" id="curso_gouache" name="tipo_curso[]" value="Gouache">
                                        <label for="curso_gouache">Curso de Gouache</label>
                                    </p><p>
                                        <input type="checkbox" id="curso_poeticas" name="tipo_curso[]" value="Poeticas">
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
                                        <input type="radio" id="r_insta" name="f_radio" value="instagram" required>
                                        <label for="r_insta">Instagram</label>
                                    </p><p>
                                        <input type="radio" id="r_face" name="f_radio" value="facebook">
                                        <label for="r_face">Facebook</label>
                                    </p><p>
                                        <input type="radio" id="r_google" name="f_radio" value="google">
                                        <label for="r_google">Google</label>
                                    </p><p>
                                        <input type="radio" id="r_amigo" name="f_radio" value="amigo">
                                        <label for="r_amigo">Recomendação de amigos/conhecidos</label>
                                    </p><p>
                                        <input type="radio" id="r_outros" name="f_radio" value="outros">
                                        <label for="r_outros">Outros</label>
                                    </p><p id="f_outros">
                                        <!-- <input type="text" id="input_outros" name="f_radio" placeholder="Outros" minlength="4"> -->
                                    </p>
                                </div>
                            </div>
                            <div id="f_submit">
                                <input type="submit" class="f_button" value="Enviar">
                            </div>
                        </form>
                    </div>
                </article>
            </section>
        </main>
        <script src="./js/script.js"></script>
<?php
    @include('footer.php');
?>