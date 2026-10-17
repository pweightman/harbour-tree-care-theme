<?php
/**
 * Terms of service. Standalone legal page (slug: terms).
 *
 * Static legal copy lives in the template so it is version-controlled and
 * reviewable; business details come from the plugin settings.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

get_header();

$harbour_email = harbour_business( 'email' );
$harbour_addr  = harbour_business( 'addr_line1' ) . ', ' . harbour_business( 'addr_line2' ) . ', ' . harbour_business( 'addr_county' ) . ' ' . harbour_business( 'addr_post' );

harbour_page_hero(
	array(
		'crumbs'  => array(
			array(
				'label' => __( 'Home', 'harbour-tree-care' ),
				'url'   => home_url( '/' ),
			),
			array( 'label' => __( 'Terms', 'harbour-tree-care' ) ),
		),
		'eyebrow' => __( 'Legal', 'harbour-tree-care' ),
		'heading' => __( 'Terms of service', 'harbour-tree-care' ),
		'lead'    => __( 'The terms that apply to using this website and to the tree work we quote for and carry out.', 'harbour-tree-care' ),
		'buttons' => array(),
	)
);
?>
<section class="section">
	<div class="wrap wrap-narrow">
		<div class="prose">
			<p><em><?php esc_html_e( 'Last updated: 17 October 2026.', 'harbour-tree-care' ); ?></em></p>

			<h2>About these terms</h2>
			<p>These terms cover two things: your use of this website, and the basis on which <?php echo esc_html( harbour_business( 'name' ) ); ?> Ltd (&ldquo;we&rdquo;, &ldquo;us&rdquo;) quotes for and carries out tree work. The detail of any particular job &mdash; the work, the price and the timing &mdash; is set out in the written quote we give you, which takes precedence if anything differs from these general terms.</p>

			<h2>Using this website</h2>
			<p>We keep the information on this site accurate and up to date, and the guidance here is offered in good faith. It is general information, not advice for your particular tree &mdash; every job needs a look in person. Any prices or ranges shown are a guide only; the price for your job is the one in your written quote. The content, images and wording on this site belong to us; please don&rsquo;t copy or reuse them without permission.</p>

			<h2>Quotes</h2>
			<p>Quotes are free and come with no obligation. We give a written, fixed price after visiting the site and seeing the work, and that price includes clearing up and taking the arisings away unless we say otherwise. A quote is valid for 30 days unless we state a different period. It assumes reasonable access and the conditions we saw on the day; if the job turns out to be materially different, or extra work comes to light once we start, we&rsquo;ll stop and agree any change with you before carrying on.</p>

			<h2>Your responsibilities</h2>
			<ul>
				<li>You confirm that you own the trees, or that you have the owner&rsquo;s permission for the work.</li>
				<li>You&rsquo;re responsible for pointing out boundaries, and for any agreement needed with neighbours over shared or overhanging trees.</li>
				<li>Please tell us about anything we can&rsquo;t see &mdash; underground pipes and cables, septic tanks, overhead lines, soft ground, and the like.</li>
				<li>We&rsquo;ll need safe, clear access on the day. If we can&rsquo;t get to the work as expected, we may need to reschedule.</li>
			</ul>

			<h2>Protected trees</h2>
			<p>Many trees in Leicestershire are covered by a Tree Preservation Order or sit in a conservation area, and working on them without consent is a criminal offence. We check the council register as part of our visit and can submit an application on your behalf, but the legal responsibility for getting consent rests with the tree&rsquo;s owner. We won&rsquo;t carry out work that needs consent until it&rsquo;s in place.</p>

			<h2>Carrying out the work</h2>
			<p>We work to recognised arboricultural practice (including British Standard BS&nbsp;3998 for tree work). We check for Tree Preservation Orders, conservation areas, nesting birds and other protected species before we start, and we work around them where the law requires &mdash; which occasionally means rescheduling. Safety comes before the schedule: severe weather or an unsafe situation may mean we postpone.</p>

			<h2>Prices and payment</h2>
			<p>The quoted price is fixed for the work described in the quote. If VAT applies, it will be shown on your quote. Payment is due on completion of the work unless we&rsquo;ve agreed something different with you in writing.</p>

			<h2>Changing or cancelling</h2>
			<p>If you need to change or cancel a booking, please let us know as soon as you can. Where you&rsquo;re a consumer and you booked away from our premises, you have a legal right to cancel within 14 days; if you&rsquo;d like us to start the work within that period, just ask and we can.</p>

			<h2>Insurance and liability</h2>
			<p>The business carries liability insurance, and certificates are available on request. We carry out all work with reasonable care and skill. Nothing in these terms limits our liability for death or personal injury caused by our negligence, for fraud, or for anything else that can&rsquo;t be limited by law. Subject to that, we&rsquo;re not liable for problems caused by information that wasn&rsquo;t shared with us (such as hidden services), by matters outside our reasonable control, or for indirect losses.</p>

			<h2>If something&rsquo;s wrong</h2>
			<p>If you&rsquo;re not happy with any part of the work, tell us as soon as possible and we&rsquo;ll do our best to put it right. Email <a href="mailto:<?php echo esc_attr( $harbour_email ); ?>"><?php echo esc_html( $harbour_email ); ?></a> or call <?php echo esc_html( harbour_business( 'phone_yard' ) ); ?>.</p>

			<h2>Governing law</h2>
			<p>These terms are governed by the law of England and Wales, and any disputes are subject to the courts of England and Wales.</p>

			<h2>Contact</h2>
			<p><?php echo esc_html( harbour_business( 'name' ) ); ?> Ltd<br>
			<?php echo esc_html( $harbour_addr ); ?><br>
			<a href="mailto:<?php echo esc_attr( $harbour_email ); ?>"><?php echo esc_html( $harbour_email ); ?></a> &middot; <?php echo esc_html( harbour_business( 'phone_yard' ) ); ?></p>
		</div>
		<?php
		if ( trim( get_the_content() ) ) :
			echo '<div class="prose">';
			the_content();
			echo '</div>';
		endif;
		?>
	</div>
</section>
<?php
get_footer();
