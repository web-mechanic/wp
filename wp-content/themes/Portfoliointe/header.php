<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!--[if lt IE 9]><script src="<?php echo get_bloginfo('template_directory') ;?>/scripts/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script><![endif]-->
<head>
    <title><?php if ( is_home() ) { bloginfo('name');} ?><?php if ( is_archive() && !is_category() ) { echo ('Archives');} ?> <?php wp_title(''); ?></title>
    <meta name="author" content="Thomas Lissens">
    <meta name="robots" content="index,follow" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="google-site-verification" content="aY0z0xRiNnhDw0UGfKwhV1-JwuuKq_lq9q2i21GwXXY" /> 
    <meta name="keywords" content="webdesign, portfolio, thomas lissens, web, print, belgique, liege"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Portfolio de Thomas Lissens - Infographiste spécialisé dans le web mais aussi actif dans la 2d.">
    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory') ;?>/img/favicon.ico">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
</head>
<body <?php if (is_page(37)) { echo 'onload="initialize()"'; }  ?> >
    <header class="Warptop"> 
        <h1 class="hiddentitle">portfolio de Thomas Lissens</h1>         
        <a class="loga"  href="http://ptfwp.dreamdesgn.com/home/"><img class="logo" src="http://ptfwp.dreamdesgn.com/wp-content/uploads/2012/10/logo.png" width="360" height="64" title="Web Mechanic logo" alt="Portfolio de Thomas Lissens"></a>
        <nav class="first" role="navigation">
            <h2 class="hiddentitle">Menu de navigation principale</h2>
            <?php wp_nav_menu('header_menu'); ?>
        </nav>
    </header>
<!--[if lt IE 8]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->