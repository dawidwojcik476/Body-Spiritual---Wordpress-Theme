<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Body Spiritual - Arkadiusz Mazurkiewicz</title>

    <script src="https://kit.fontawesome.com/84e5dea409.js" crossorigin="anonymous">
    </script>
    <?php wp_head(); ?>
</head>

<body>
    <div class="body-container">
        <header class="header">
            <div class="header__logo">
                <a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" alt="Logo Arkadiusz Mazurkiewicz"></a>
            </div>
            <div class="header__descript">
                <h1>ARKADIUSZ MAZURKIEWICZ BODY SPIRITUALITY</h1>
            </div>
            <nav class="header__nav">
                <div class="nav__hamburger">
                    <p>
                        Menu
                    </p> <i class="fas fa-bars"></i>
                </div>


                <?php
                wp_nav_menu(array(
                    'theme_location' => 'top_menu',
                    'menu' => 'main-menu',
                    'container' => 'ul',
                    'menu_class' => 'nav__list'
                ))

                ?>
            </nav>
        </header>