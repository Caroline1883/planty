<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div id="wrapper" class="hfeed">
            <header id="header" role="banner">
                <div id="branding">
                    <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                        <a href="index.php"><img class="logo" src="http://localhost/planty/wp-content/uploads/2023/05/Logo.png" alt="Logo Planty" id="logo"></a>
                    </div>
                </div>
                <nav id="menu" class="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <label for="toggle">☰</label>
                    <input type="checkbox" id="toggle">
                    <div class="menu_responsive">
                        <?php wp_nav_menu( 
                            array( 'theme_location' => 'main-menu', 
                           'link_before' => '<div itemprop="name" class="menu-item">', 
                           'link_after' => '</div>' ) ); ?>
                    </div>
                </nav>
            </header>
        <div id="container">
            <main id="content" role="main">