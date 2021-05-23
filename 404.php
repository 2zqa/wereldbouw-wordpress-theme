<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Wereldbouw
 */

get_header();
?>

	<main id="primary" class="site-main single">

		<section class="error-404 not-found">
			<header class="page-header page-hero">
				<div class="page-hero-text">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wereldbouw' ); ?></h1>
				</div>
			</header><!-- .page-header -->

			<div class="entry-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wereldbouw' ); ?></p>
			
				<?php get_search_form() ?>

				<?php the_widget( 'WP_Widget_Pages' ) ?>
			</div>

		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
