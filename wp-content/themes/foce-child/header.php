<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
        
        <nav id="site-navigation" class="main-navigation">
            <!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>-->
            <div class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            </div>
            <div class="menu-burger">
                <button id="nav-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <ul class="nav-menu">
                    <li class="site-logo"><img src="<?php echo get_template_directory_uri() . '/assets/images/small-logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants"></li>
                    <li class="titles-burger purple-cat"><a href="#story">Histoire</a></li>
                    <li class="titles-burger random-flower"><a href="#characters">Personnages</a></li>
                    <li class="titles-burger black-cat"><a href="#place">Lieu</a></li>
                    <li class="titles-burger orange-cat"><a href="#studio">Studio Koukaki</a></li>
                    <li id="small-title"><a href="#">Studio Koukaki</a></li>
                </ul>
            </div>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
</div>
   