<?php
    add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
    function theme_enqueue_styles()
    {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array('parent-style'), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    }

    add_filter( 'wp_nav_menu_items', 'add_admin_to_nav_menu', 10, 2);
    function add_admin_to_nav_menu( $items, $args ) {
    if (is_user_logged_in() && $args->theme_location==='main-menu') {
        while ( false !== ( $item_pos = strpos ( $items, '<li', 10 ) ) ) 
            {
                 $items_array[] = substr($items, 0, $item_pos);
                 $items = substr($items, $item_pos);
             }
            $items_array[] = $items;
            array_splice($items_array, 1, 0, '<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="'.get_admin_url().'" itemprop="url"><div itemprop="name" class="menu-item">Admin</div></a></li>'); 
            $items = implode('', $items_array);
    }   
    return $items;
    }

    add_theme_support( 
        'custom-logo',
        array(
        'flex-height'          => true,
        'flex-width'           => true,
        'unlink-homepage-logo' => true, 
        )
        );


?>