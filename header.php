<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wereldbouw
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wereldbouw' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-header-content">
			<div class="site-branding">
				<div class="site-branding-logo">
					<?php the_custom_logo()	?>
				</div>
				<?php if (is_front_page()):	?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else:	?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif ?>
			</div><!-- .site-branding -->

			<div class="site-header-inner">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wereldbouw' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div> <!-- .site-header-inner -->

		</div><!-- .site-header-content -->

		<?php if (is_front_page()): ?>
			<div class="site-header-overlay-area">
				<?php the_custom_header_markup(); ?>

				<div class="site-header-overlay-content">
					<aside class="site-header-widget-area">
						<div class="header-widget-area-inner">
							<?php dynamic_sidebar( 'sidebar-2' ); ?>
						</div>
					</aside>
				</div> <!-- .site-header-overlay-content -->
			</div> <!-- .site-header-overlay-area -->
		<?php endif ?>
	</header><!-- #masthead -->
