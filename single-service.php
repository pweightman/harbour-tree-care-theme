<?php
/**
 * Single service page. Structure ported from prototype/service-pruning.html.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	$pid = get_the_ID();

	harbour_page_hero( array(
		'crumbs'  => array(
			array( 'label' => __( 'Home', 'harbour-tree-care' ), 'url' => home_url( '/' ) ),
			array( 'label' => __( 'Services', 'harbour-tree-care' ), 'url' => get_post_type_archive_link( 'service' ) ),
			array( 'label' => get_the_title() ),
		),
		'eyebrow' => get_the_title(),
		'heading' => function_exists( 'harbour_hero_heading' ) ? harbour_hero_heading( $pid ) : get_the_title(),
		'lead'    => get_the_excerpt(),
	) );
	?>

	<section class="section">
		<div class="wrap">
			<div class="two-col">
				<div class="prose"><?php the_content(); ?></div>

				<aside class="sidebar">
					<?php harbour_quote_card( __( 'Free site visit', 'harbour-tree-care' ), __( "We'll tell you what the tree needs — sometimes less than you thought — and put a fixed price in writing.", 'harbour-tree-care' ) ); ?>

					<?php
					$others = get_posts( array(
						'post_type'      => 'service',
						'posts_per_page' => 6,
						'post__not_in'   => array( $pid ),
						'orderby'        => 'menu_order title',
						'order'          => 'ASC',
					) );
					if ( $others ) :
						?>
						<div class="side-card">
							<h3><?php esc_html_e( 'Related services', 'harbour-tree-care' ); ?></h3>
							<ul>
								<?php foreach ( $others as $o ) : ?>
									<li><a href="<?php echo esc_url( get_permalink( $o ) ); ?>"><?php echo esc_html( get_the_title( $o ) ); ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>

					<?php
					$areas = get_posts( array( 'post_type' => 'area', 'posts_per_page' => 5, 'orderby' => 'menu_order title', 'order' => 'ASC' ) );
					if ( $areas ) :
						?>
						<div class="side-card">
							<h3><?php esc_html_e( 'In your area', 'harbour-tree-care' ); ?></h3>
							<ul>
								<?php foreach ( $areas as $a ) : ?>
									<li><a href="<?php echo esc_url( get_permalink( $a ) ); ?>"><?php echo esc_html( get_the_title( $a ) ); ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>
				</aside>
			</div>
		</div>
	</section>

	<?php
	if ( function_exists( 'harbour_reviews_render' ) ) {
		$reviews_html = harbour_reviews_render( array( 'count' => 3 ) );
		if ( $reviews_html ) {
			echo '<section class="section"><div class="wrap"><div class="sec-head reveal"><div class="measure"><p class="eyebrow">' . esc_html__( 'What people say', 'harbour-tree-care' ) . '</p><h2>' . esc_html__( 'From customers across Leicestershire.', 'harbour-tree-care' ) . '</h2></div></div>';
			echo $reviews_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			echo '</div></section>';
		}
	}
	?>

	<?php if ( function_exists( 'harbour_get_faq' ) && harbour_get_faq( $pid ) ) : ?>
		<section class="section bg-cream">
			<div class="wrap wrap-narrow">
				<p class="eyebrow center"><?php esc_html_e( 'Questions', 'harbour-tree-care' ); ?></p>
				<h2 class="center" style="margin-bottom:var(--s-7)"><?php esc_html_e( 'Asked most often', 'harbour-tree-care' ); ?></h2>
				<?php harbour_render_faq( $pid ); ?>
			</div>
		</section>
	<?php endif; ?>

	<?php
	harbour_cta_band( array(
		'heading' => get_the_title() . __( ' — get a free quote', 'harbour-tree-care' ),
		'text'    => __( 'Free site visit, written fixed price, everything cleared away. No obligation either way.', 'harbour-tree-care' ),
	) );

endwhile;

get_footer();
