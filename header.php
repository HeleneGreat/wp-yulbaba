<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link>
    <?php wp_head(); ?>
</head>
<body>

    <header>
        <div id="bandeau" class="flex space-between container" >
            <div id="identity">
                <?php the_custom_logo() ;?>
                <h4><?php bloginfo('description') ;?></h4>
            </div> 
            <div id="header-right flex">
                <div id="recherche" class="flex">
                    <?php if(function_exists('dynamic_sidebar')){
                        dynamic_sidebar('searchbar'); } ?>
                </div>
            

            
                <div id="site-navigation" class="main-navigation" role="navigation">
                    <image class="menu-toggle" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/burger_icon.png"/>

                    <?php if(has_nav_menu('principal')): ?>
                    <?php wp_nav_menu(
                        array(
                            'theme_location'=>'principal',
                            'container'=>'nav',
                            'container_class'=>'monmenu',
                            'menu_class' => 'nav-menu'
                            )
                        ); ?>
                    <?php endif; ?> 
                </div>


               




            </div>
        </div>
    </header>
