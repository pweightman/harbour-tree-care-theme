<?php
/**
 * Contact page. Prototype: contact.html. Uses the harbour-core enquiry form.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

get_header();

harbour_page_hero(
	array(
		'crumbs'  => array(
			array(
				'label' => __( 'Home', 'harbour-tree-care' ),
				'url'   => home_url( '/' ),
			),
			array( 'label' => __( 'Contact', 'harbour-tree-care' ) ),
		),
		'eyebrow' => __( 'Get in touch', 'harbour-tree-care' ),
		'heading' => __( 'Tell us about the tree.', 'harbour-tree-care' ),
		'lead'    => __( "The quickest route to a price is a couple of photos and a postcode. We'll come and look, usually within a few days, and put a fixed price in writing. Free, and no obligation either way.", 'harbour-tree-care' ),
		'buttons' => array(),
	)
);
?>
<section class="section">
	<div class="wrap">
		<div class="split">
			<div>
				<div class="side-card" style="margin-bottom:var(--s-5)">
					<h3><?php esc_html_e( 'Call us', 'harbour-tree-care' ); ?></h3>
					<p class="small muted"><?php esc_html_e( 'Neil usually answers the mobile; the yard line is best in working hours.', 'harbour-tree-care' ); ?></p>
					<ul>
						<li><a href="<?php echo esc_attr( harbour_tel_href( harbour_business( 'phone_yard' ) ) ); ?>"><strong><?php echo esc_html( harbour_business( 'phone_yard' ) ); ?></strong></a> &mdash; <?php esc_html_e( 'yard', 'harbour-tree-care' ); ?></li>
						<li><a href="<?php echo esc_attr( harbour_tel_href( harbour_business( 'phone_mobile' ) ) ); ?>"><strong><?php echo esc_html( harbour_business( 'phone_mobile' ) ); ?></strong></a> &mdash; <?php esc_html_e( 'Neil, mobile', 'harbour-tree-care' ); ?></li>
						<li><a href="mailto:<?php echo esc_attr( harbour_business( 'email' ) ); ?>"><strong><?php echo esc_html( harbour_business( 'email' ) ); ?></strong></a></li>
					</ul>
				</div>
				<div class="side-card" style="margin-bottom:var(--s-5)">
					<h3><?php esc_html_e( 'Where we are', 'harbour-tree-care' ); ?></h3>
					<p class="small mb-0">
						<?php echo esc_html( harbour_business( 'name' ) ); ?> Ltd<br>
						<?php echo esc_html( harbour_business( 'addr_line1' ) ); ?><br>
						<?php echo esc_html( harbour_business( 'addr_line2' ) ); ?><br>
						<?php echo esc_html( harbour_business( 'addr_county' ) ); ?><br>
						<?php echo esc_html( harbour_business( 'addr_post' ) ); ?>
					</p>
				</div>
				<div class="side-card">
					<h3><?php esc_html_e( 'Hours', 'harbour-tree-care' ); ?></h3>
					<p class="small mb-0"><?php echo wp_kses( harbour_business( 'hours' ), array( 'br' => array() ) ); ?></p>
					<p class="small muted mb-0" style="margin-top:.8rem"><?php esc_html_e( 'Storm damage and dangerous trees — ring the mobile any time.', 'harbour-tree-care' ); ?></p>
				</div>
			</div>
			<div>
				<?php
				if ( function_exists( 'harbour_render_enquiry_form' ) ) {
					harbour_render_enquiry_form();
				} else {
					get_template_part( 'parts/quote-form-placeholder' );
				}
				?>
			</div>
		</div>
	</div>
</section>

<section class="section-sm bg-cream">
	<div class="wrap">
		<div style="border:1px solid var(--stone);border-radius:var(--radius-lg);overflow:hidden">
			<div class="map-placeholder" style="aspect-ratio:21/7;display:grid;place-items:center;background:linear-gradient(135deg,var(--stone),var(--stone-dk));color:var(--ink-70);font-size:var(--t-sm);text-align:center;padding:2rem">
				<span><?php /* translators: 1: address line, 2: postcode. */ printf( esc_html__( 'Map of the yard at %1$s, %2$s', 'harbour-tree-care' ), esc_html( harbour_business( 'addr_line1' ) ), esc_html( harbour_business( 'addr_post' ) ) ); ?><br><span class="small"><?php esc_html_e( 'Loads as a static image with click-to-load, so the page stays fast and sets no third-party cookies before consent.', 'harbour-tree-care' ); ?></span></span>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
