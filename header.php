<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>
	</head>

  <?php

    if( is_front_page() ):
      $homepage_classes = array( 'homepage', 'my-class', 'extra-class' );
    else:
      $homepage_classes = array( 'no-homepage');
    endif;

  ?>

	<body <?php body_class( $homepage_classes ); ?> >

		<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
