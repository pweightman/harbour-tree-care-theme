<?php
/**
 * Single area page. Structure ported from prototype/area-hinckley.html.
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
			array( 'label' => __( 'Areas', 'harbour-tree-care' ), 'url' => get_post_type_archive_link( 'area' ) ),
			array( 'label' => get_the_title() ),
		),
		'eyebrow' => __( 'Tree surgeons in ', 'harbour-tree-care' ) . get_the_title(),
		'heading' => function_exists( 'harbour_hero_heading' ) ? harbour_hero_heading( $pid ) : get_the_title(),
		'lead'    => get_the_excerpt(),
		'buttons' => array(
			array( 'label' => __( 'Book a free site visit', 'harbour-tree-care' ), 'href' => home_url( '/contact/' ), 'class' => 'btn-primary' ),
			array( 'label' => sprintf( __( 'Call %s', 'harbour-tree-care' ), harbour_business( 'phone_yard' ) ), 'href' => harbour_tel_href( harbour_business( 'phone_yard' ) ), 'class' => 'btn-ghost' ),
		),
	) );
	?>

	<section class="section">
		<div class="wrap">
			<div class="two-col">
				<div class="prose"><?php the_content(); ?></div>

				<aside class="sidebar">
					<?php harbour_quote_card( get_the_title() . __( ' enquiries', 'harbour-tree-care' ), __( "Send a photo and a postcode and we'll tell you roughly where you stand before we even come out.", 'harbour-tree-care' ) ); ?>

					<?php
					$services = get_posts( array( 'post_type' => 'service', 'posts_per_page' => 6, 'orderby' => 'menu_order title', 'order' => 'ASC' ) );
					if ( $services ) :
						?>
						<div class="side-card">
							<h3><?php printf( esc_html__( 'Services in %s', 'harbour-tree-care' ), esc_html( get_the_title() ) ); ?></h3>
							<ul>
								<?php foreach ( $services as $svc ) : ?>
									<li><a href="<?php echo esc_url( get_permalink( $svc ) ); ?>"><?php echo esc_html( get_the_title( $svc ) ); ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>
				</aside>
			</div>
		</div>
	</section>

	<?php
	harbour_cta_band( array(
		'heading' => sprintf( __( 'Got a tree in %s that needs looking at?', 'harbour-tree-care' ), get_the_title() ),
		'text'    => __( "Free visit, written quote, no pressure. If it doesn't need the work, we'll say so.", 'harbour-tree-care' ),
	) );

endwhile;

get_footer();
