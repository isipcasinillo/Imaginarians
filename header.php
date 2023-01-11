<?php
/**
 * The header for our theme
 *
 */
?>
<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Company">
  <title>Imaginarians</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
<!-- THIS WAS ADDED TO TEST -->
<header id="fixedNav" class="top">
	
  <nav >
    <img id="navbar" class="navbar" src="<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/navbar-desktop.png" alt="navbar desktop view">
    <img id="navbar" class="navbar-mini" src="<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/navbar-mobile.jpg" alt="navbar mobile view">
  </nav>

</header>

<div id="content" class="content" class="site-content">
	
