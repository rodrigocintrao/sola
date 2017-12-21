<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sola - Fórum de Teologia Reformada</title>
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">
    <script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <header id="header">
        <section class="logo">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <a href="<?php bloginfo('url'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo Sola Fórum Teológico Reformado" class="full-width">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <nav class="nav text-uppercase">
            <span class="menu-mobile hidden-md hidden-lg">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <span class="text-uppercase">menu</span>
            </span>
            <div class="container">
                <div class="menu">
                    <?php wp_nav_menu(array('menu'=>'menu')); ?>
                </div>
            </div>
        </nav>
        <section class="slider">
            <div class="container">
                <div class="slider-title text-center text-uppercase">
                    <h2><span style="font-size: 12px; display: block;">tema:</span><span>Escatologia</span></h2>
                    <div class="eschatological-position">
                        <div class="row">
                            <div class="col-sm-6">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                Amilenismo
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                Pós-Milenismo
                            </div>
                        </div>
                    </div>                    
                </div>
                <p class="text-center"><span class="text-uppercase">Sola - Fórum de Teologia Reformada -</span> Porto Alegre - RS<br>
                17 de Março de 2018</p>
                <div class="text-center">
                    <a href="<?php bloginfo('url'); ?>/inscricoes" class="btn btn-primary btn-lg">Fazer Inscrição</a>
                </div>
            </div>
        </section>
    </header>
