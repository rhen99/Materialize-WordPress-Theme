<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <?php wp_head();?>
    <style>
        .showcase{
            background: #333 url(<?php echo get_theme_mod('showcase_image'); ?>) no-repeat center center / cover;
        }
    </style>
</head>
<body <?php body_class(); ?>>
     <main>
                <nav class="pink darken-4">
                    <div class="nav-wrapper container main-navigation" role="navigation">
                        <a href="<?php echo home_url(); ?>" class="brand-logo"><?php _e('LAGS'); ?></a>
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        <?php
                            wp_nav_menu( array(
		        'menu'              => 'primary',
		        'menu_id' 			=> 'primary-menu',
		        'theme_location'    => 'primary',
		        'depth'             =>  2,
		        'container'         => 'div',
		        'menu_class' 		=> 'right hide-on-med-and-down',
				'walker'			=>	new Materialize_Walker_Nav_Menu(),
            )); 
            
            wp_nav_menu( array(
		        'menu'              => 'primary',
		        'menu_id' 			=> 'mobile-demo',
		        'theme_location'    => 'primary',
		        'depth'             =>  2,
		        'container'         => 'div',
		        'menu_class' 		=> 'side-nav',
				'walker'			=>	new Materialize_Walker_Nav_Menu(),
		    ));
                         ?>
                    </div>
                </nav>
               <?php if(!is_singular()): ?>
                 <section class="showcase">
                    <div class="showcase-inner">
                        <h1><?php echo get_theme_mod('showcase_heading', 'Showcase Heading') ?></h1>
                        <p class="flow-text"><?php echo get_theme_mod('showcase_secondary', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, corrupti.'); ?></p>
                        <div class="action">
                            <a href="#main-area" id="action" class="btn pink darken-4 white-text"><?php echo get_theme_mod('showcase_btn_text', 'Read More'); ?></a>
                        </div>
                    </div>
                </section>
               <?php endif; ?>
        <section class="container" id="main-area">
              <div class="row">
        