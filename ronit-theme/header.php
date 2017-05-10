<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ronit-Theme</title>
        <link rel="icon" href="wp-content/themes/ronit-theme/img/icon.png">
        <?php wp_head(); ?>
    </head>

    <body>

        <h1>Welcome to rasmusronit.me!</h1>
        <div id="navbar">
            <?php wp_nav_menu(array('theme-location'=='primary')); ?>
        </div>