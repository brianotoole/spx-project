<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spx-dev
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-2 col-xs-12">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" class="logo" rel="logo">
      </div>
      <div class="col-md-7 col-sm-10 col-xs-12 col-md-offset-1">
        <?php wp_nav_menu( array( 'menu_name' => 'primary' ) ); ?>
      </div>
      <div class="col-md-2 hidden-sm">
	    <a href="#" class="btn primary wider push-up">Subscribe</a>
      </div>
    </div>
  </div>
</header>

	<div id="content" class="site-content">
