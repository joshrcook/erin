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
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- wordpress head functions -->
    <?php wp_head(); ?>
    <!-- end of wordpress head -->

</head>

<body <?php body_class(); ?> ondragstart="return false" onselectstart="return false">
    
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
            <div class="columns large-6 small-8">
                <a href="<?php echo site_url('/'); ?>">
                    <h1><span>Erin</span> <span>Svalstad</span></h1>
                </a>
            </div>
            <div class="columns large-6 small-4 text-right nav">
                <a class="mobile-nav-link" href="#" onclick="event.preventDefault ? event.preventDefault() : event.returnValue = false;">Menu</a>
                <ul>
                    <?php 
                    
                    $menu_items = get_nav_menu_items('main-nav');
                    if($menu_items) {
                    foreach($menu_items as $menu_item) {
                        echo '<li';
                        if(isset($post->ID) && $post->ID == $menu_item->object_id) {
                            echo ' class="selected"';
                        }
                            echo '><span class="bottom"><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></span></li>';
                    }
                } // endif
                    ?>
                </ul>
            </div>
        </div>
        <div class="hr"></div>
        <div class="row tagline">
            <div class="columns">
                <span>Make-up artist</span>
            </div>
        </div>

            
