<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
    <meta charset="utf-8">

    <!-- Google Chrome Frame for IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title(''); ?></title>

    <!-- mobile meta (hooray!) -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <!--[if IE]>
            <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <![endif]-->
    <!-- or, set /favicon.ico for IE10 win -->
    <meta name="msapplication-TileColor" content="#f01d4f">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- wordpress head functions -->
    <?php wp_head(); ?>
    <!-- end of wordpress head -->

</head>

<body <?php body_class(); ?>>
    
    <div class="outer-container">
        <div class="mobile-nav">
            <ul>
                <?php 
                
                $menu_items = get_nav_menu_items('main-nav');
                foreach($menu_items as $menu_item) {
                    echo '<li';
                    if(isset($post->ID) && $post->ID == $menu_item->object_id) {
                        echo ' class="selected"';
                    }
                        echo '><span class="bottom"><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></span></li>';
                }
                ?>
            </ul>
        </div>
        <div class="row header">
            <div class="columns large-5 small-8">
                <h1><span>Erin</span> <span>Svalstad</span></h1>
            </div>
            <div class="columns large-7 small-4 text-right nav">
                <a class="mobile-nav-link" href="#">Menu</a>
                <ul>
                    <?php 
                    
                    $menu_items = get_nav_menu_items('main-nav');
                    foreach($menu_items as $menu_item) {
                        echo '<li';
                        if(isset($post->ID) && $post->ID == $menu_item->object_id) {
                            echo ' class="selected"';
                        }
                            echo '><span class="bottom"><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></span></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="hr clear-fix"></div>
        <div class="row tagline">
            <div class="columns large-5">
                <span>Make-up artist</span>
            </div>
        </div>

            
