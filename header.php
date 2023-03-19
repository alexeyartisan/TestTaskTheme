<!DOCTYPE html>

<html <?php language_attributes(); ?>>

  <head>
    <title><?php bloginfo( 'name' ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header id="masthead" class="site-header">
      <div class="container">
        <?php if ( !function_exists( 'the_custom_logo' ) || !has_custom_logo() ) : ?>
          <span class="site-header__title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <?php bloginfo( 'name' ); ?>
            </a>
          </span>
        <?php endif; ?>

        <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
          <div class="site-header__branding">
            <?php the_custom_logo(); ?>
          </div>
        <?php endif; ?>

        <?php if ( has_nav_menu( 'tt-primary-menu' ) ) : ?>
          <nav id="site-navigation" class="site-header__navigation">
            <?php
              wp_nav_menu([
                'theme_location'  => 'tt-primary-menu', 
                'container'       => '',
                'menu_class'      => 'site-header__tt-primary-menu'
              ]);
            ?>
            <a href="" class="site-header__mobile-close"><img src="<?php echo get_template_directory_uri() . '/assets/img/close.png' ?>"></a>
          </nav>
          <a href="#" class="site-header__mobile-toggle">
            <span></span>
            <span></span>
            <span></span>
          </a>
        <?php endif; ?>
      </div>
    </header>

    <div id="primary" class="content-area">
      <main id="main" class="entry-site-main">
    