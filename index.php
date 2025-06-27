<?php
    $page = "index";
    @include('header.php');
?>
        <header>
            <div id="banner">
                <p class="title">Venha fazer uma aula experi&shy;mental!</p>
                <a class="action" href="contato.php">Entre em Contato ></a>
            </div>
        </header>
        <main>
            <section id="video_tag">
                <h2>Demonstração</h2>
                <video src="./media/videoplayback.mp4" autoplay="autoplay" loop="1" controls="controls"></video>
            </section>
            <section>
                <h2>Podcast com a nossa professora Aniely Mussoi</h2>
                <audio controls>
                    <source src="media/maria_maria.mp3" type="audio/mpeg" />
                    Seu navegador não suporta o elemento áudio.
                </audio>
            </section>
            <section>
                <article>
                    <h2>Galeria dos Alunos</h2>
                    <div id="cursos">
                        <img src="./img/483603569_18399354310100097_5946361371048850352_n.jpg" alt="aquarela" title="Aquarela"/>
                        <img src="./img/485496061_18401144017100097_2414758004460266668_n.jpg" alt="desenho" title="Desenho"/>
                        <img src="./img/474575606_18392412538100097_8566621324409241625_n.jpg" alt="acrilica" title="Acrilica"/>
                        <img src="./img/486314749_18402110575100097_7187298695041164190_n.jpg" alt="gouache" title="Gouache"/>
                        <img src="./img/489555783_18404551534100097_1690503322712388930_n.jpg" alt="ceramica" title="Cerâmica"/>
                        <img src="./img/476200344_18394151002100097_8252950221528793060_n.jpg" alt="poeticas Visuais" title="Poéticas Visuais"/>
                        <img src="./img/475563448_18393471781100097_7685095510590983675_n.jpg" alt="acrilica" title="Acrilica"/>
                        <img src="./img/476466705_18394636639100097_7482749357210500776_n.jpg" alt="aquarela" title="Aquarela"/>
                        <img src="./img/485225440_18400900213100097_1391877197320153402_n.jpg" alt="acrilica" title="Acrilica"/>
                        <img src="./img/489912013_18404720158100097_8260968703041383320_n.jpg" alt="desenho" title="Desenho"/>
                    </div>
                </article>
            </section>
            <section id="professor">
                <article>
                    <h2>Os nossos professores</h2>
                    <div class="container_prof">
                        <div class="prof1"><img src="./img/1.jpg" title="Aniely"/></div>
                        <div class="prof2"><img src="./img/2.jpg" title="Isa"/></div>
                        <div class="prof3"><img src="./img/3.jpg" title="Lincoln"/></div>
                        <div class="prof4"><img src="./img/4.jpg" title="Amanda"/></div>
                    </div>
                </article>
            </section>
            <section id="filosofia">
                <article>
                    <h2>NOSSA FILOSOFIA DE ENSINO</h2>
                    <h2 id="txt2">"HÁ ESCOLAS QUE SÃO GAIOLAS.<br>HÁ ESCOLAS QUE SÃO ASAS"</h2>
                    <div id="texto_filosofia">
                        <figure>
                            <img id="rubens" src="./img/RubemAlves.jpg">
                            <figcaption>Rubens Alves</figcaption>
                        </figure>
                        <blockquote>
                            <p>
                                "Escolas que são gaiolas existem para que os pássaros desaprendam a arte do vôo. Pássaros engaiolados são pássaros sob controle. Engaiolados, o seu dono pode levá-los para onde quiser. Pássaros engaiolados têm um dono. Deixaram de ser pássaros. Porque a essência dos pássaros é o vôo."
                            </p><p>
                                "Escolas que são asas não amam pássaros engaiolados. O que eles amam são pássaros em vôo. Existem para dar aos pássaros coragem para voar. Ensinar o vôo, isso elas não podem fazer, porque o vôo já nasce dentro dos pássaros. O vôo não pode ser ensinado. Só pode ser encorajado."
                            </p>
                            <p id="sign">Rubens Alves</p>
                        </blockquote>
                    </div>
                    <div class="quote">
                        <p>
                            A escola acredita que cada aluno deve desenvolver um estilo próprio de traço, paleta de cores, gestualidade e forma de trabalhar. Muito mais importante que a própria técnica, estimulamos o aluno a encontrar no seu trabalho o que vem por trás dela. Essa consciência artística é estimulado a pesquisa, experimentação de diversos campos e não tornar refém do professor.
                        </p><p>
                            Dentro deste aspecto baseamos a nossa filosofia em três áreas de ensino: a dimensão da técnica, a dimensão político social e a dimensão humana. Por meio desses pilares o aluno encontrará seu verdadeiro significado no trabalho.
                        </p>
                    </div>
                    <br>
                </article>
            </section>
            <section id="nosso_canal">
                <article>
                    <h2>Nosso Canal</h2>
                    <div id="video">
                        <div class="video_container">
                            <iframe name="quadro_main" src="https://www.youtube.com/embed/_NnHrfAGyiw?si=CVp10XlYiFk2qrPd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="links_video">
                            <a href="https://www.youtube.com/embed/_NnHrfAGyiw?si=CVp10XlYiFk2qrPd" title="Apresentacao" target="quadro_main">&#9654; Apresentação</a>
                            <a href="https://www.youtube.com/embed/RW51uxb_amU?si=31slKuDnFNhib8Ut" title="Live Guará Estúdio" target="quadro_main">&#9654; Live Guará Estúdio #01</a>
                            <a href="https://www.youtube.com/embed/FAF1YVHoDM8?si=RJIidNzjU2ePLmDa" title="Retrospectiva 2021" target="quadro_main">&#9654; Retrospectiva 2021</a>
                            <a href="https://www.youtube.com/embed/UDdTsslMPNU?si=H6iQ8nxtgcKDb8Nz" title="Retrospectiva 2020" target="quadro_main">&#9654; Retrospectiva 2020</a>
                            <a href="https://www.youtube.com/embed/XGJgUj_omyE?si=xL9pa5vUJ6ZtI26E" title="Retrospectiva 2021" target="quadro_main">&#9654; Retrospectiva 2021</a>
                        </div>
                    </div>
                </article>
            </section>
            <br>
        </main>
<?php
    @include('footer.php');
?>