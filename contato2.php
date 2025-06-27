<?php
    session_start();
    $page = "contato";
    $css_file = "css/form.css";
    @include('header.php');
?>
    <main>
        <section>
            <article id="forms">
                <img src="./img/473533605_18390862147100097_591300106323218751_n.jpg" />
                <div id="forms2">
                    <h2>Contato</h2>
                    <?php
                        if (isset($_SESSION['msg'])) {
                            echo "<p class='msg'>{$_SESSION['msg']}</p>";
                            unset($_SESSION['msg']);
                        }
                    ?>
                </div>
            </article>
        </section>
    </main>
<?php
    @include('footer.php');
    exit();
?>