<?php
/**
 * Services overview (post type archive). Prototype: services.html.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

get_header();

harbour_page_hero( array(
	'crumbs'  => array(
		array( 'label' => __( 'Home', 'harbour-tree-care' ), 'url' => home_url( '/' ) ),
		array( 'label' => __( 'Services', 'harbour-tree-care' ) ),
	),
	'eyebrow' => __( 'Tree surgery services', 'harbour-tree-care' ),
	'heading' => __( 'Everything a tree needs, from a single branch to a whole plot.', 'harbour-tree-care' ),
	'lead'    => __( "From a single overhanging limb to a whole plot cleared for building. Everything below is quoted after a free site visit, includes the clear-up, and is carried out by our own team — we don't subcontract.", 'harbour-tree-care' ),
	'buttons' => array(
		array( 'label' => __( 'Book a free site visit', 'harbour-tree-care' ), 'href' => home_url( '/contact/' ), 'class' => 'btn-primary' ),
		array( 'label' => harbour_business( 'phone_yard' ), 'href' => harbour_tel_href( harbour_business( 'phone_yard' ) ), 'class' => 'btn-ghost' ),
	),
) );
?>

<section class="section">
	<div class="wrap">
		<div class="cards">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<a class="card reveal" href="<?php the_permalink(); ?>">
					<h3><?php the_title(); ?></h3>
					<p><?php echo esc_html( get_the_excerpt() ); ?></p>
					<span class="link-arrow"><?php the_title(); ?> &rarr;</span>
				</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php
harbour_cta_band( array(
	'heading' => __( 'Not sure which one you need?', 'harbour-tree-care' ),
	'text'    => __( 'Tell us the problem, not the solution — most people who ring saying "cut it down" leave with a reduction quote instead.', 'harbour-tree-care' ),
	'button_label' => __( 'Book a free visit', 'harbour-tree-care' ),
) );

get_footer();
