<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Elite Creative Agency
 */

get_header(); ?>

<section id="wrapper-404">
	<div class="container">
		<div class="inner-content py-5">
			<h1><?php esc_html_e('404','PMS Company'); ?></h1>
			<p><?php esc_html_e( 'Ops! Something happened...', 'elite-creative-agency' ); ?></p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="boxed-btn reload"><?php esc_html_e( 'Home', 'elite-creative-agency' ); ?></a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
