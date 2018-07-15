<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-aa">
 *
 * @package Township Lite
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="main-bodybox">
  <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','township-lite'); ?></a></div>

  <?php 
    $slide_one = absint( get_theme_mod( 'township_lite_slidersettings-page-1' ) );
    $slide_two = absint( get_theme_mod( 'township_lite_slidersettings-page-1' ) );
    $slide_three = absint( get_theme_mod( 'township_lite_slidersettings-page-1' ) );
    $slide_four = absint( get_theme_mod( 'township_lite_slidersettings-page-1' ) );

    if($slide_one == '' && $slide_two == '' &&  $slide_three == '' &&  $slide_four == ''){
      $header_no_absolute = '';
    }
    else{
      $header_no_absolute = 'yes';
    }
  ?>
  <div id="header" <?php if($header_no_absolute == 'yes'){ echo 'class="header-slider"'; } else{ echo 'class="header-noslider"'; } ?> > 

      <div class="container">
        <div class="logo col-md-6 col-sm-6 wow bounceInDown">
            <?php township_lite_the_custom_logo(); ?>
            <?php if ( is_front_page() && is_home() ) : ?>
              <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php else : ?>
              <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php endif;

            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
              <p class="site-description"><?php echo esc_html( $description ); ?></p>
            <?php endif; ?>
        </div><?php /** logo **/ ?>      
      <div class="col-md-6 col-sm-6   ">
        <div class="top-contact">
          <?php if(esc_url( get_theme_mod( 'township_lite_contact','' ) ) != '') { ?>
            <span class="call"><i class="fa fa-phone" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('township_lite_contact',__('(518) 356-5373','township-lite') )); ?></span>
           <?php } ?>
           <?php if(esc_url( get_theme_mod( 'township_lite_email','' ) ) != '') { ?>
            <span class="email_corporate"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('township_lite_email',__('support@vwthemes.com','township-lite')) ); ?></span>
          <?php } ?>
        </div>
        <div class="social-media">
           <?php if(esc_url( get_theme_mod( 'township_lite_youtube_url','' ) ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'township_lite_youtube_url','' ) ); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
          <?php } ?>
          <?php if(esc_url( get_theme_mod( 'township_lite_facebook_url','' ) ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'township_lite_facebook_url','' ) ); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <?php } ?>
          <?php if(esc_url( get_theme_mod( 'township_lite_twitter_url','' ) ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'township_lite_twitter_url','' ) ); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <?php } ?>
          <?php if(esc_url( get_theme_mod( 'township_lite_rss_url','' ) ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'township_lite_rss_url','' ) ); ?>"><i class="fa fa-rss" aria-hidden="true"></i></a>
          <?php } ?>
        </div>
      </div>
    </div>
      <div class="menubox nav">
        <div class="container">
          <div class="mainmenu">
  		      <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
          </div><?php /** nav  **/ ?>
        </div>
      </div><?php /** menubox **/ ?>
      <div class="clear"></div>

  </div><?php /** header **/ ?>