<?php
/**
 * Fallback template. The front page and archives arrive in later phases;
 * this keeps the chrome renderable and any stray URL from white-screening.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="wrap section">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( 'stack' ); ?>>
				<h1 class="mb-0"><?php the_title(); ?></h1>
				<div class="measure"><?php the_content(); ?></div>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<p class="eyebrow"><?php esc_html_e( 'Harbour Tree Care', 'harbour-tree-care' ); ?></p>
		<h1><?php bloginfo( 'name' ); ?></h1>
		<p class="lead measure"><?php esc_html_e( 'Theme chrome is in place. Page templates land in the next phases.', 'harbour-tree-care' ); ?></p>
	<?php endif; ?>
</div>
<?php
get_footer();
