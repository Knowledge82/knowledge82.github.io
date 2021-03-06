<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cachorros</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/linea/styles.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skins/<?php 
                                                                                        $options = get_option('sample_theme_options');
                                                                                        echo $options['selectinput']; 
                                                                                        ?>.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />
    
    <?php wp_head(); ?>
</head>
<body>

<div class="loader">
    <div class="loader_inner"></div>
</div>

<header class="main_head main_color_bg" data-z-index="1" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/bg.jpg" data-position="center center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo_container">
                    <?php dynamic_sidebar('logo'); ?>
                </div>
                <button class="toggle_mnu">
						<span class="sandwich">
							<span class="sw-topper"></span>
							<span class="sw-bottom"></span>
							<span class="sw-footer"></span>
						</span>
                </button>
                <nav class="top_mnu">
                    <ul>
                        <li><a href="#about">Quienes somos</a></li>
                        <li><a href="#portfolio">Nuestros cachorros</a></li>
                        <li><a href="#contacts">Contactos</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="top_wrapper">
        <div class="top_descr">
            <div class="section_header">
                <h1><?php bloginfo('name'); ?></h1>
                <p><?php bloginfo('description'); ?></p>
            </div>
        </div>
    </div>
</header>