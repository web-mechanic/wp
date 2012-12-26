<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</body>
    <head>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
        <meta charset=<?php bloginfo('charset'); ?>
        <meta http-equiv="X-UA-Compatible"<?php wp_enqueue_style('nom_pour_appeler_la_feuille'); ?>>
        <title>Portfolio de Thomas Lissens</title>
        <meta name="description" content="">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <meta name="google-site-verification" content="aY0z0xRiNnhDw0UGfKwhV1-JwuuKq_lq9q2i21GwXXY" /> 
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>

    </head>

    <body>
        <h1 class="hiddentitle">portfolio de Thomas Lissens</h1>
            <section>
                <h1 class="hiddentitle">Header</h1>
                        <header class="Warptop">
                            <h2 class="hiddentitle">Logo du site</h2>  
                                <a class="loga"  href="http://ptfwp.dreamdesgn.com/home/"><img id="logo" src="http://ptfwp.dreamdesgn.com/wp-content/uploads/2012/10/logo.png" width="360" height="64" title="Web Mechanic logo" alt="Web Mechanic"></a>
                        <nav class="first">
                            <h2 class="hiddentitle">Menu de navigation principale</h2>
                                 <?php wp_nav_menu('header_menu'); ?>
                        </nav>
                    </header>
            </section>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->