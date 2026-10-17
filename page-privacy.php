<?php
/**
 * Privacy policy. Standalone legal page (slug: privacy).
 *
 * Static legal copy lives in the template so it is version-controlled and
 * reviewable; business details come from the plugin settings. Editor content,
 * if any, is appended after the copy.
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
			array( 'label' => __( 'Privacy', 'harbour-tree-care' ) ),
		),
		'eyebrow' => __( 'Legal', 'harbour-tree-care' ),
		'heading' => __( 'Privacy policy', 'harbour-tree-care' ),
		'lead'    => __( 'How we collect, use and protect your information when you contact us or use this website.', 'harbour-tree-care' ),
		'buttons' => array(),
	)
);
?>
<section class="section">
	<div class="wrap wrap-narrow">
		<div class="prose">
			<p><em><?php esc_html_e( 'Last updated: 17 October 2026.', 'harbour-tree-care' ); ?></em></p>

			<h2>Who we are</h2>
			<p>This website is run by <?php echo esc_html( harbour_business( 'name' ) ); ?> Ltd (&ldquo;we&rdquo;, &ldquo;us&rdquo;, &ldquo;our&rdquo;), a family tree-surgery business registered in England, company number <?php echo esc_html( harbour_business( 'company_no' ) ); ?>, based at <?php echo esc_html( $harbour_addr ); ?>. We are the data controller for the personal information described below.</p>
			<p>If you have any questions about this policy or your information, email us at <a href="mailto:<?php echo esc_attr( $harbour_email ); ?>"><?php echo esc_html( $harbour_email ); ?></a> or call <?php echo esc_html( harbour_business( 'phone_yard' ) ); ?>.</p>

			<h2>The information we collect</h2>
			<ul>
				<li><strong>When you send an enquiry</strong> &mdash; through our contact form, by email or by phone &mdash; we collect your name, phone number, email address, postcode, the type of work you need, anything you tell us about the job, and any photos you choose to send.</li>
				<li><strong>When you visit the website</strong>, our hosting provider records standard technical information (such as your IP address and browser type) in server logs, which keeps the site secure and running.</li>
				<li><strong>With your consent</strong>, we use Google Analytics to understand how the site is used (for example which pages are visited, and roughly which area visitors come from). No analytics cookies are set until you accept them using the cookie banner.</li>
			</ul>
			<p>We don&rsquo;t ask for, or want, any special-category data (such as health information) &mdash; please don&rsquo;t include it in your messages.</p>

			<h2>Why we use it, and our lawful basis</h2>
			<ul>
				<li><strong>To answer your enquiry, give you a quote, and arrange and carry out the work.</strong> Our lawful basis is taking steps at your request before entering into a contract, and our legitimate interest in running and quoting for our business.</li>
				<li><strong>To keep records of the work we&rsquo;ve done</strong> and meet our accounting and tax obligations. Our lawful basis is our legal obligations and legitimate interest.</li>
				<li><strong>For website analytics.</strong> Our lawful basis is your consent, which you can withdraw at any time.</li>
				<li><strong>To keep the website secure.</strong> Our lawful basis is our legitimate interest in protecting the site.</li>
			</ul>

			<h2>Who we share it with</h2>
			<p>We don&rsquo;t sell your information or share it for marketing. We do use a small number of trusted suppliers who process information on our behalf, under appropriate agreements:</p>
			<ul>
				<li><strong>Our website host</strong> (Reforest Hosting), which stores the website and its server logs.</li>
				<li><strong>Cloudflare</strong>, which delivers the website quickly and helps protect it from attacks.</li>
				<li><strong>Resend</strong>, which delivers your enquiry to us by email.</li>
				<li><strong>Google</strong>, for website analytics &mdash; only if you&rsquo;ve accepted analytics cookies.</li>
			</ul>
			<p>Where a job involves a protected tree, we may &mdash; with your knowledge &mdash; submit an application to your local council on your behalf. We may also share information where we&rsquo;re required to by law.</p>

			<h2>Cookies</h2>
			<p>We use a small number of essential cookies that are needed for the site to work and to remember your cookie choice. Analytics cookies are only set once you accept them on the cookie banner, and you can change your mind at any time by clearing the banner choice in your browser. Blocking cookies won&rsquo;t stop you using the site.</p>

			<h2>How long we keep it</h2>
			<p>We keep enquiry details for as long as we need them to deal with your enquiry and any work that follows, and then for a reasonable period afterwards for our business and accounting records, after which they are deleted. If an enquiry doesn&rsquo;t lead to any work, we delete the details once we no longer need them.</p>

			<h2>Your rights</h2>
			<p>Under UK data protection law you have the right to ask us to:</p>
			<ul>
				<li>give you a copy of the information we hold about you;</li>
				<li>correct anything that&rsquo;s wrong;</li>
				<li>delete it, or restrict or object to how we use it;</li>
				<li>withdraw your consent to analytics at any time.</li>
			</ul>
			<p>To exercise any of these, email <a href="mailto:<?php echo esc_attr( $harbour_email ); ?>"><?php echo esc_html( $harbour_email ); ?></a>. If you&rsquo;re unhappy with how we&rsquo;ve handled your information, you can complain to the Information Commissioner&rsquo;s Office at <a href="https://ico.org.uk/" rel="nofollow">ico.org.uk</a>, though we&rsquo;d appreciate the chance to put things right first.</p>

			<h2>Security</h2>
			<p>We take reasonable steps to keep your information safe. No method of sending information over the internet is completely secure, so please bear that in mind when emailing us sensitive details.</p>

			<h2>Changes to this policy</h2>
			<p>We may update this policy from time to time. The date at the top shows when it was last changed.</p>

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
