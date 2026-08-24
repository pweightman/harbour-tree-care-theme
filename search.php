<?php
/**
 * Search results.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

get_header();

harbour_page_hero( array(
	'eyebrow' => __( 'Search', 'harbour-tree-care' ),
	/* translators: %s: search query. */
	'heading' => sprintf( __( 'Results for “%s”', 'harbour-tree-care' ), get_search_query() ),
	'lead'    => '',
	'buttons' => array(),
) );
?>
<section class="section">
	<div class="wrap wrap-narrow">
		<div style="margin-bottom:var(--s-6)"><?php get_search_form(); ?></div>
		<?php if ( have_posts() ) : ?>
			<div class="stack">
				<?php while ( have_posts() ) : the_post(); ?>
					<article <?php post_class( 'search-result' ); ?>>
						<h2 style="font-size:var(--t-xl)"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p class="muted"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 40 ) ); ?></p>
						<a class="link-arrow" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'harbour-tree-care' ); ?> &rarr;</a>
					</article>
					<hr>
				<?php endwhile; ?>
			</div>
			<?php the_posts_pagination( array( 'mid_size' => 1 ) ); ?>
		<?php else : ?>
			<p class="lead"><?php esc_html_e( 'Nothing matched that search. Try a different term, or ring the yard and just ask.', 'harbour-tree-care' ); ?></p>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();
