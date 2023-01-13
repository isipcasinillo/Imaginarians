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

  <nav class="navbar" id="navbar">
      <div class="navbar-content-wrapper">
        <div> 
          <img class="imaginuity-logo"src="<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/imaginuity-logo.png" />  
        </div>
        <div class="navbar-menu-wrapper">  
          <h2 class="brand"> Brand Experience /</h2>
          <h2 class="media"> Media /</h2>
          <h2 class="technology"> Technology /</h2>
          <img class="imaginuity-icons" id="minibar-icon" src="<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/menu-icon.png" /> 
          <img class="imaginuity-icons"src="<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/search-icon.png" />  
          <img class="imaginuity-icons phone-icon"src="<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/phone-icon.png" />  
          <button>
            <a href="#"> > Let's Connect</a>
          </button> 
        </div>
      </div>
      
      <div id="minibar"class="navbar-mini-menu-wrapper hidden">  
          <h2 class="brand"> Brand Experience /</h2>
          <h2 class="media"> Media /</h2>
          <h2 class="technology"> Technology /</h2>
      </div>

  <nav>

</header>



<div id="content" class="content" class="site-content">
	
