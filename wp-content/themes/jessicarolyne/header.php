<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1e465a"/>
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body id="topo">
    <header>
        <div class="container-fluid menu-principal">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <span class='nome'>jessicarolyne</span>
                    <br>
                    <span class="funcao">Web Developer</span>
                </a>
                <!-- <img src="<?php bloginfo('template_url')?>/assets/images/logo.png" alt="jessicarolyne - web developer"> -->
            </div>
            <div class="menu-wrapper">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-principal',
                    'menu_class' => 'navbar-nav grid',
                    'container_class' => 'menu',
                    'fallback_cb' => false,
                ));
                ?>
                <div class="fechar">Fechar</div>
            </div>
        </div>
    </header>
