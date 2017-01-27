<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
    <title><?php wp_title('|', true, 'right');?>Motoki Naito</title>
    <?php wp_head();?>
</head>
<body>
<div id="loader-wrapper"></div>
<div id="wrapper">
    	<div class="loading-bar"></div>
    	<div class="cover"></div>
    	<div class="cover2"></div>
	<header>
		<nav class="navbar">
		<h1 class="logo"><a href="<?php bloginfo('url');?>"><?php bloginfo('title');?></a></h1>

        <?php $defaults = array(
            'theme_location'  => 'primary-menu',
            'container'       => '',
            'menu_class'      => 'nav',
            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
            );
        wp_nav_menu( $defaults );?>
		</nav>
	</header>
