<?php
/**
 * Generic page: hero from the title, then the editable content.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();

	harbour_page_hero( array(
		'crumbs'  => array(
			array( 'label' => __( 'Home', 'harbour-tree-care' ), 'url' => home_url( '/' ) ),
			array( 'label' => get_the_title() ),
		),
		'heading' => get_the_title(),
		'lead'    => has_excerpt() ? get_the_excerpt() : '',
		'buttons' => array(),
	) );
	?>
	<section class="section">
		<div class="wrap wrap-narrow">
			<div class="prose"><?php the_content(); ?></div>
		</div>
	</section>
	<?php
endwhile;

get_footer();
