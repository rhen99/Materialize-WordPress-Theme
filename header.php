<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <?php wp_head();?>
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
            
            
        <section class="container">
              <div class="row">
        