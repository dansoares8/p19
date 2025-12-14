<?php include('config.php'); ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logomarca</title>

    <!-- meta seo --> 
     <meta name="description" content="Daniel Informática, Serviços em Informática, Atendimento em Brasilândia de Minas-MG">
     <meta name="keywords" content="Daniel Informática, Brasilândia de Minas-MG, Serviços em Informática, Desenvolvimento Web, Programação Web, Manutenção, Formatação, Limpeza, Computadores, Impressoras, Notebooks">

     <!-- link css --> 
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/font-awesome.min.css">

    <!-- link google fonts --> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="center">
            <div class="logo left"><a href="<?php echo INCLUDE_PATH; ?>">Logomarca</a><br></div>
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Principal</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>                
                <ul>
                    <li><a href="index.php">Principal</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div><!-- center -->
    </header><!-- menu desktop e mobile -->


    <?php 
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';

        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        } else {
            include('pages/404.php');
        }
    ?>


    <footer>
        <h3 class="rodape-title">Daniel Informática</h3>
        <p>Todos os Direitos Reservados &copy; <?php echo date('Y'); ?></p>
    </footer>


    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <script src="<?php echo INCLUDE_PATH; ?>assets/js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>assets/js/script.js"></script>


</body>
</html>