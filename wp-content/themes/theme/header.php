<!doctype html>
<html <? language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="<? bloginfo('description') ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><? bloginfo('name') ?></title>
    <? wp_head(); ?>
</head>
<body>
<div class="main">
    <header>
    <div class="row">
        <div class="col-sm-3">
            <a class="logo" rel="home" href="<?echo get_home_url();?>">
                <img src="<? echo get_template_directory_uri()?>/img/logo-2.png">
            </a>
        </div>
        <div class="col-sm-9">
            <h2>Одиссея Разума</h2>
        </div>
    </div>
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle"
                    data-toggle="collapse" data-target="#example-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <?php
        wp_nav_menu(array(
                'menu' => 'primary',
                'theme_location' => 'primary',
                'depth' => 3,
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'example-navbar-collapse',
                'menu_class' => 'nav navbar-nav',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker())
        );
        ?>
    </nav>
    </header>
    <div class="main_content">
