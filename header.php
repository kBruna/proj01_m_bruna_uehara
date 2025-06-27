<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial=scale=1.0" />
        <link rel="shortcut icon" href="./img/logo.png" />
        <title>Guará Estúdio</title>
        <link rel="stylesheet" href="./css/estilos.css" />
        <link rel="stylesheet" href="<?php echo $css_file; ?>" />
        <script src="./js/script.js" defer></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hepta+Slab:wght@1..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    </head>
    <body>
        <nav id="topo">
            <div class="container">
                <div id="logo">
                    <img src="./img/logo.png" width="40px" height="40px" title="logo" />
                    <h1><span id="guara">GUARÁ</span><span id="estudio"> estúdio</span></h1>
                </div>
                <div id="menu">
                    <ul id="menu_itens">
                        <li><a <?php echo ($page =='index') ? "class='active'" : ""; ?> href="index.php">Home</a></li>
                        <li><a <?php echo ($page =='calendario') ? "class='active'" : ""; ?>href="#">Calendário</a></li>
                        <li><a <?php echo ($page =='contato') ? "class='active'" : ""; ?>href="contato.php">Contato</a></li>
                        <li><a <?php echo ($page =='login') ? "class='active'" : ""; ?>href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>