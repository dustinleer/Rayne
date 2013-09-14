<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php bloginfo( 'name' ) ?> <?php wp_title( '|', true, 'left' ); ?></title>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="container">
        <div id="left-side">
            <div id="logo">
                <a href="<?php echo get_option('home'); ?>/">T</a>
            </div>
            <div id="navigation">
                <?php wp_nav_menu( array('theme_location'  => 'navigation') ) ?>
            </div>
        </div>
        <div id="right-side">
            <div id="top">
                <a id="travis-taylor-small-pic" href="<?php echo get_permalink( 8 ); ?>"><?php echo wp_get_attachment_image( 28 ); ?></a>
                <h1><a href="<?php echo get_permalink( 8 ); ?>">Travis Taylor</a></h1>
                <h2><span>WordPress</span> | <span>Entrepreneur</span> | <span>Father</span></h2>
                <div id="social-icons">
                    <?php wp_nav_menu( array('theme_location'  => 'social') ) ?>
                </div>
            </div>