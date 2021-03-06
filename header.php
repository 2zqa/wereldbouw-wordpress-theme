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

	<?php if (is_front_page()): ?>
	<header id="masthead" class="site-header site-header-image" style="background-image: linear-gradient(rgba(255, 255, 255, 0.5) 0%, transparent 25%), url(<?= htmlspecialchars(header_image()) ?>);">
	<?php else: ?>
	<header id="masthead" class="site-header">
	<?php endif ?>
		<div class="site-header-content">
			<div class="site-branding">
				<?php the_custom_logo()	?>
			</div><!-- .site-branding -->

			<div class="site-header-inner">
				<div class="site-titles">
					<?php if (is_front_page()):	?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else:	?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif ?>

					<?php
					$wereldbouw_description = get_bloginfo( 'description', 'display' );
					if ( $wereldbouw_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $wereldbouw_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif ?>
				</div> <!-- .site-subtitle -->
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
		<a class="site-header-scrolldown" href="#primary"><img src="<?= get_theme_file_uri('assets/images/scroll.svg'); ?>" /></a>
		<?php endif ?>
	</header><!-- #masthead -->
