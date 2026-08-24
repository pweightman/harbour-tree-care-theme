<?php
/**
 * 404.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

get_header();

harbour_page_hero( array(
	'eyebrow' => __( 'Page not found', 'harbour-tree-care' ),
	'heading' => __( "That page has come down.", 'harbour-tree-care' ),
	'lead'    => __( "The page you were after isn't here. Try the services or areas we cover, or just give the yard a ring.", 'harbour-tree-care' ),
	'buttons' => array(
		array( 'label' => __( 'Our services', 'harbour-tree-care' ), 'href' => get_post_type_archive_link( 'service' ) ?: home_url( '/' ), 'class' => 'btn-primary' ),
		array( 'label' => sprintf( __( 'Call %s', 'harbour-tree-care' ), harbour_business( 'phone_yard' ) ), 'href' => harbour_tel_href( harbour_business( 'phone_yard' ) ), 'class' => 'btn-ghost' ),
	),
) );
?>
<section class="section">
	<div class="wrap wrap-narrow">
		<?php get_search_form(); ?>
	</div>
</section>
<?php
get_footer();
