<!doctype html>
<html <? language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="<? bloginfo( 'description' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><? bloginfo( 'name' ) ?></title>
	<? wp_head(); ?>
</head>
<body>
<div class="container">
    <nav class="blog-nav">
			<?php
			wp_nav_menu( array(
					'menu'              => 'primary',
					'theme_location'    => 'primary',
					'depth'             => 3,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker())
			);
			?>
    </nav>

