<?php
/**
 * Single article (Advice post).
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	$pid         = get_the_ID();
	$advice_url  = get_permalink( (int) get_option( 'page_for_posts' ) );
	$is_firewood = function_exists( 'harbour_is_firewood_post' ) && harbour_is_firewood_post( $pid );

	harbour_page_hero(
		array(
			'crumbs'  => array(
				array(
					'label' => __( 'Home', 'harbour-tree-care' ),
					'url'   => home_url( '/' ),
				),
				array(
					'label' => __( 'Advice', 'harbour-tree-care' ),
					'url'   => $advice_url,
				),
				array( 'label' => get_the_title() ),
			),
			'eyebrow' => __( 'Advice', 'harbour-tree-care' ),
			'heading' => get_the_title(),
			'lead'    => '',
			'buttons' => array(),
		)
	);
	?>
	<section class="section">
		<div class="wrap wrap-narrow">
			<p class="post-meta small muted">
				<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
				<?php if ( get_the_modified_date( 'Ymd' ) > get_the_date( 'Ymd' ) ) : ?>
					· <?php /* translators: %s: last updated date. */ printf( esc_html__( 'updated %s', 'harbour-tree-care' ), esc_html( get_the_modified_date() ) ); ?>
				<?php endif; ?>
				· <?php /* translators: %d: reading time in minutes. */ printf( esc_html__( '%d min read', 'harbour-tree-care' ), absint( harbour_reading_time( $pid ) ) ); ?>
			</p>

			<?php if ( has_post_thumbnail() ) : ?>
				<figure class="article-hero-img">
				<?php
				the_post_thumbnail(
					'large',
					array(
						'fetchpriority' => 'high',
						'decoding'      => 'async',
					)
				);
				?>
													</figure>
			<?php endif; ?>

			<div class="prose article-body"><?php the_content(); ?></div>

			<?php if ( $is_firewood ) : ?>
				<div class="article-cta">
					<h3><?php esc_html_e( 'Ready for a load of seasoned logs?', 'harbour-tree-care' ); ?></h3>
					<p><?php esc_html_e( 'Hardwood from our own tree work, split and seasoned, delivered locally.', 'harbour-tree-care' ); ?></p>
					<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/order-logs/' ) ); ?>"><?php esc_html_e( 'Order logs', 'harbour-tree-care' ); ?></a>
				</div>
			<?php else : ?>
				<div class="article-cta">
					<h3><?php esc_html_e( 'Need a hand with this?', 'harbour-tree-care' ); ?></h3>
					<p><?php esc_html_e( 'Free site visit, written fixed price, everything cleared away.', 'harbour-tree-care' ); ?></p>
					<div class="btn-row">
						<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get a free quote', 'harbour-tree-care' ); ?></a>
						<a class="btn btn-ghost" href="<?php echo esc_attr( harbour_tel_href( harbour_business( 'phone_yard' ) ) ); ?>"><?php /* translators: %s: phone number. */ printf( esc_html__( 'Call %s', 'harbour-tree-care' ), esc_html( harbour_business( 'phone_yard' ) ) ); ?></a>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<?php
	// Related advice — 3 recent in the same category, excluding this post.
	$cats    = wp_get_post_categories( $pid );
	$related = get_posts(
		array(
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'posts_per_page' => 3,
			'post__not_in'   => array( $pid ),
			'category__in'   => $cats ? $cats : array( 0 ),
			'orderby'        => 'date',
			'order'          => 'DESC',
		)
	);
	if ( $related ) :
		?>
		<section class="section bg-cream">
			<div class="wrap">
				<div class="sec-head reveal"><div class="measure"><p class="eyebrow"><?php esc_html_e( 'More advice', 'harbour-tree-care' ); ?></p><h2><?php esc_html_e( 'Related reading', 'harbour-tree-care' ); ?></h2></div></div>
				<div class="cards post-grid">
					<?php
					foreach ( $related as $r ) {
						harbour_post_card( $r ); }
					?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php
	// JSON-LD (BlogPosting + BreadcrumbList + LocalBusiness graph) is emitted by
	// harbour-core's schema.php, so nothing is output here.

endwhile;

get_footer();
