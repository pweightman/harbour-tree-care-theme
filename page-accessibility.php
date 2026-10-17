<?php
/**
 * Accessibility statement. Standalone legal page (slug: accessibility).
 *
 * Static copy lives in the template so it is version-controlled and reviewable;
 * business details come from the plugin settings.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

get_header();

$harbour_email = harbour_business( 'email' );

harbour_page_hero(
	array(
		'crumbs'  => array(
			array(
				'label' => __( 'Home', 'harbour-tree-care' ),
				'url'   => home_url( '/' ),
			),
			array( 'label' => __( 'Accessibility', 'harbour-tree-care' ) ),
		),
		'eyebrow' => __( 'Legal', 'harbour-tree-care' ),
		'heading' => __( 'Accessibility statement', 'harbour-tree-care' ),
		'lead'    => __( 'We want this website to be usable by as many people as possible, whatever their ability or the device they use.', 'harbour-tree-care' ),
		'buttons' => array(),
	)
);
?>
<section class="section">
	<div class="wrap wrap-narrow">
		<div class="prose">
			<p><em><?php esc_html_e( 'Last updated: 17 October 2026.', 'harbour-tree-care' ); ?></em></p>

			<h2>Our commitment</h2>
			<p>We built this website to be straightforward to read and use for everyone, and we aim to meet the Web Content Accessibility Guidelines (WCAG) 2.2 at level AA as closely as we reasonably can.</p>

			<h2>What we&rsquo;ve done</h2>
			<p>Across the site we&rsquo;ve tried to make sure that:</p>
			<ul>
				<li>pages use clear, structured headings so they&rsquo;re easy to navigate and read with a screen reader;</li>
				<li>everything works with a keyboard, not just a mouse, with a visible focus outline;</li>
				<li>images that carry meaning have text descriptions;</li>
				<li>text and background colours have enough contrast to be read comfortably;</li>
				<li>text reflows and stays readable when you zoom in or use a small screen;</li>
				<li>animations are kept gentle and are reduced if your device asks for less motion.</li>
			</ul>

			<h2>Known limitations</h2>
			<p>We keep working to improve things. If some older content or a document we link to isn&rsquo;t as accessible as it should be, let us know and we&rsquo;ll fix it or get you the information another way.</p>

			<h2>If you need help, or a different format</h2>
			<p>If there&rsquo;s something on the site you can&rsquo;t access, or you&rsquo;d like information in a different format &mdash; large print, plain text, or read out over the phone &mdash; just get in touch and we&rsquo;ll sort it out.</p>

			<h2>Telling us about a problem</h2>
			<p>We welcome feedback on the accessibility of this site. If you come across a problem, please email <a href="mailto:<?php echo esc_attr( $harbour_email ); ?>"><?php echo esc_html( $harbour_email ); ?></a> or call <?php echo esc_html( harbour_business( 'phone_yard' ) ); ?>, and tell us what you were trying to do and what went wrong. We&rsquo;ll get back to you.</p>
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
