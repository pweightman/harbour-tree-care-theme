<?php
/**
 * About page. Prototype: about.html.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

get_header();
$img = get_template_directory_uri() . '/assets/img';

harbour_page_hero( array(
	'crumbs'  => array(
		array( 'label' => __( 'Home', 'harbour-tree-care' ), 'url' => home_url( '/' ) ),
		array( 'label' => __( 'About', 'harbour-tree-care' ) ),
	),
	'eyebrow' => __( 'About us', 'harbour-tree-care' ),
	'heading' => __( 'One family, one yard, forty-nine years.', 'harbour-tree-care' ),
	'lead'    => __( 'Harbour Tree Care has been looking after trees in Leicestershire since 1977. Same family, same village, same standards — which in this trade is rarer than it should be.', 'harbour-tree-care' ),
	'buttons' => array(),
) );
?>
<section class="section">
	<div class="wrap">
		<div class="split">
			<div class="split-media reveal">
				<div class="arch">
					<img src="<?php echo esc_url( $img . '/crew.jpg' ); ?>" width="1200" height="1600" alt="<?php esc_attr_e( 'The Harbour Tree Care team on site in Leicestershire', 'harbour-tree-care' ); ?>" loading="lazy" decoding="async">
				</div>
				<div class="media-note"><b>1977</b><span><?php esc_html_e( 'Roy Harbour starts out', 'harbour-tree-care' ); ?></span></div>
			</div>
			<div class="reveal">
				<p class="eyebrow"><?php esc_html_e( 'The short version', 'harbour-tree-care' ); ?></p>
				<h2><?php esc_html_e( 'Roy started it. Neil runs it.', 'harbour-tree-care' ); ?></h2>
				<p><?php esc_html_e( 'Roy Harbour set up on his own in 1977. No website, no van livery, no marketing — just a saw, a ladder and whatever work came through the door of a small Leicestershire village. It grew the way that kind of business grows: one satisfied customer telling another.', 'harbour-tree-care' ); ?></p>
				<p><?php esc_html_e( "His son Neil runs it today, from the same yard at Ashby Magna, with a small crew who've worked together long enough to read each other without shouting. Between them they've pruned, felled, ground and cleared their way through several generations of the county's trees, and replanted a fair few.", 'harbour-tree-care' ); ?></p>
				<p><?php esc_html_e( "We're not the biggest tree firm in Leicestershire and we've never tried to be. We're the one that's still here when the tree grows back.", 'harbour-tree-care' ); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="section bg-cream">
	<div class="wrap">
		<div class="measure" style="margin-bottom:var(--s-7)">
			<p class="eyebrow"><?php esc_html_e( 'How we work', 'harbour-tree-care' ); ?></p>
			<h2><?php esc_html_e( "Four things we're stubborn about.", 'harbour-tree-care' ); ?></h2>
		</div>
		<div class="steps">
			<div class="step reveal"><h3><?php esc_html_e( 'We quote what the tree needs', 'harbour-tree-care' ); ?></h3><p><?php esc_html_e( "Not what would make the biggest invoice. If a crown lift solves it, we'll quote a crown lift, even when you came asking for a fell.", 'harbour-tree-care' ); ?></p></div>
			<div class="step reveal"><h3><?php esc_html_e( "We don't top trees", 'harbour-tree-care' ); ?></h3><p><?php esc_html_e( "It's quick, it's cheap and it wrecks the tree permanently. Anyone who'll do it to your beech will do it to their own reputation.", 'harbour-tree-care' ); ?></p></div>
			<div class="step reveal"><h3><?php esc_html_e( 'We clear up properly', 'harbour-tree-care' ); ?></h3><p><?php esc_html_e( 'Chipped, logged, raked, gone. The clear-up is in the price, not a line item we spring on you afterwards.', 'harbour-tree-care' ); ?></p></div>
			<div class="step reveal"><h3><?php esc_html_e( 'We use our own crew', 'harbour-tree-care' ); ?></h3><p><?php esc_html_e( "No subcontracting the climb to whoever's free that week. The people who quote the job are the people who do it.", 'harbour-tree-care' ); ?></p></div>
		</div>
	</div>
</section>

<section class="section">
	<div class="wrap wrap-narrow">
		<p class="eyebrow"><?php esc_html_e( 'Qualifications & cover', 'harbour-tree-care' ); ?></p>
		<h2><?php esc_html_e( 'The paperwork', 'harbour-tree-care' ); ?></h2>
		<?php
		// Editable body: accreditations/insurance go here once evidenced.
		if ( trim( get_the_content() ) ) :
			echo '<div class="prose">';
			the_content();
			echo '</div>';
		endif;
		?>
		<p><?php
			printf(
				/* translators: 1: company name, 2: company number, 3: address. */
				esc_html__( '%1$s Ltd is registered in England, company number %2$s, with its yard at %3$s.', 'harbour-tree-care' ),
				esc_html( harbour_business( 'name' ) ),
				esc_html( harbour_business( 'company_no' ) ),
				esc_html( harbour_business( 'addr_line1' ) . ', ' . harbour_business( 'addr_line2' ) . ', ' . harbour_business( 'addr_county' ) . ' ' . harbour_business( 'addr_post' ) )
			);
		?></p>
	</div>
</section>

<?php
harbour_cta_band( array(
	'heading' => __( 'Gardens, farms, estates and building sites.', 'harbour-tree-care' ),
	'text'    => __( 'Roughly half our work is domestic; the rest is farms, estates, schools, parish councils, managing agents and developers. Tell us about a job.', 'harbour-tree-care' ),
	'button_label' => __( 'Talk to us about a job', 'harbour-tree-care' ),
) );

get_footer();
