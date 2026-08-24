<?php
/**
 * Areas overview (post type archive). Prototype: areas.html.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

get_header();

harbour_page_hero( array(
	'crumbs'  => array(
		array( 'label' => __( 'Home', 'harbour-tree-care' ), 'url' => home_url( '/' ) ),
		array( 'label' => __( 'Areas covered', 'harbour-tree-care' ) ),
	),
	'eyebrow' => __( 'Where we work', 'harbour-tree-care' ),
	'heading' => __( 'Based at Ashby Magna. Out across five counties.', 'harbour-tree-care' ),
	'lead'    => __( "Most weeks we're within half an hour of the yard — Lutterworth, Hinckley, Leicester, Rugby, Market Harborough and the villages in between. For larger contracts, surveys and estate work we travel further.", 'harbour-tree-care' ),
	'buttons' => array(
		array( 'label' => __( 'Check if we cover you', 'harbour-tree-care' ), 'href' => home_url( '/contact/' ), 'class' => 'btn-primary' ),
	),
) );
?>

<section class="section">
	<div class="wrap">
		<div class="sec-head">
			<div class="measure">
				<p class="eyebrow"><?php esc_html_e( 'Main towns', 'harbour-tree-care' ); ?></p>
				<h2><?php esc_html_e( 'Where most of our work happens.', 'harbour-tree-care' ); ?></h2>
				<p class="lead mb-0"><?php esc_html_e( "Each has its own page, with local detail, the relevant council's TPO process and reviews from that area.", 'harbour-tree-care' ); ?></p>
			</div>
		</div>
		<div class="cards">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<a class="card reveal" href="<?php the_permalink(); ?>">
					<h3><?php the_title(); ?></h3>
					<p><?php echo esc_html( get_the_excerpt() ); ?></p>
					<span class="link-arrow"><?php printf( esc_html__( 'Tree surgeons in %s', 'harbour-tree-care' ), esc_html( get_the_title() ) ); ?> &rarr;</span>
				</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php
harbour_cta_band( array(
	'heading' => __( "Not sure if you're in range?", 'harbour-tree-care' ),
	'text'    => __( "Send your postcode. If we can't help, we'll usually know someone local who can.", 'harbour-tree-care' ),
	'button_label' => __( 'Ask us', 'harbour-tree-care' ),
) );

get_footer();
