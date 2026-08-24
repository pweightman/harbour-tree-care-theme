<?php
/**
 * Template helpers.
 *
 * Business facts are OWNED by the harbour-core plugin's settings. These helpers
 * read those settings and fall back to safe defaults so the theme still renders
 * (and never white-screens) when the plugin is inactive. Templates must call
 * these helpers rather than hardcoding any phone number, address or email.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

/**
 * Merged business details: harbour-core settings over theme fallbacks.
 *
 * @param string|null $key Optional key to fetch a single value.
 * @return mixed Array of all details, or a single value, or '' if unknown.
 */
function harbour_business( ?string $key = null ) {
	static $data = null;

	if ( null === $data ) {
		// Fallback defaults (from the approved prototype). Authoritative values
		// come from harbour-core once its settings screen exists (Phase 4).
		$defaults = array(
			'name'         => 'Harbour Tree Care',
			'established'  => '1977',
			'company_no'   => '08834201',
			'phone_yard'   => '01455 230643',
			'phone_mobile' => '07815 835588',
			'email'        => 'info@harbourtreecare.co.uk',
			'addr_line1'   => 'Ashby Magna',
			'addr_line2'   => 'Lutterworth',
			'addr_county'  => 'Leicestershire',
			'addr_post'    => 'LE17 5NJ',
			'hours'        => 'Mon&ndash;Fri 7.30am&ndash;5.30pm<br>Sat 8am&ndash;1pm',
			'facebook'     => 'https://www.facebook.com/harbourtreecare',
			'instagram'    => 'https://www.instagram.com/raharbourtree',
		);

		$settings = get_option( 'harbour_core_settings', array() );
		$business = ( is_array( $settings ) && ! empty( $settings['business'] ) && is_array( $settings['business'] ) )
			? $settings['business']
			: array();

		// Only let non-empty plugin values override defaults.
		$data = $defaults;
		foreach ( $business as $k => $v ) {
			if ( '' !== $v && null !== $v ) {
				$data[ $k ] = $v;
			}
		}
	}

	if ( null === $key ) {
		return $data;
	}

	return $data[ $key ] ?? '';
}

/**
 * A phone number as a tel: href, UK-normalised (+44, leading 0 dropped).
 *
 * @param string $number Human-formatted number, e.g. "01455 230643".
 * @return string tel: URI.
 */
function harbour_tel_href( string $number ): string {
	$digits = preg_replace( '/\D+/', '', $number );
	if ( str_starts_with( $digits, '0' ) ) {
		$digits = '44' . substr( $digits, 1 );
	}
	return 'tel:+' . $digits;
}

/**
 * The Harbour roundel brand mark as inline SVG.
 *
 * @param string $class CSS class for the <svg>.
 * @return string SVG markup (already escaped/static).
 */
function harbour_brand_svg( string $class = 'brand-mark' ): string {
	return sprintf(
		'<svg class="%s" viewBox="0 0 44 44" aria-hidden="true" focusable="false">'
		. '<circle cx="22" cy="22" r="21" fill="none" stroke="currentColor" stroke-width="1.5" opacity=".28"/>'
		. '<path d="M22 34V19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>'
		. '<path d="M22 24l-5-5M22 21l5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>'
		. '<path d="M15 15a4 4 0 1 1 4-4M29 15a4 4 0 1 0-4-4" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"/>'
		. '</svg>',
		esc_attr( $class )
	);
}

/**
 * Render a page hero (breadcrumbs, eyebrow, h1, lead, optional buttons).
 *
 * @param array $args eyebrow, heading, lead, crumbs[], buttons[]|null.
 */
function harbour_page_hero( array $args ): void {
	$args = wp_parse_args( $args, array(
		'eyebrow'  => '',
		'heading'  => '',
		'lead'     => '',
		'crumbs'   => array(),
		'buttons'  => null, // null = default quote+call; array() = none.
	) );
	?>
	<section class="page-hero grain">
		<div class="wrap">
			<?php if ( $args['crumbs'] ) : ?>
				<ol class="crumbs">
					<?php
					$last = count( $args['crumbs'] ) - 1;
					foreach ( $args['crumbs'] as $i => $crumb ) :
						if ( $i === $last || empty( $crumb['url'] ) ) :
							echo '<li>' . esc_html( $crumb['label'] ) . '</li>';
						else :
							echo '<li><a href="' . esc_url( $crumb['url'] ) . '">' . esc_html( $crumb['label'] ) . '</a></li>';
						endif;
					endforeach;
					?>
				</ol>
			<?php endif; ?>
			<?php if ( $args['eyebrow'] ) : ?><p class="eyebrow"><?php echo esc_html( $args['eyebrow'] ); ?></p><?php endif; ?>
			<h1><?php echo esc_html( $args['heading'] ); ?></h1>
			<?php if ( $args['lead'] ) : ?><p class="lead"><?php echo esc_html( $args['lead'] ); ?></p><?php endif; ?>
			<?php
			$buttons = $args['buttons'];
			if ( null === $buttons ) {
				$buttons = array(
					array( 'label' => __( 'Get a free quote', 'harbour-tree-care' ), 'href' => home_url( '/contact/' ), 'class' => 'btn-primary' ),
					array( 'label' => sprintf( __( 'Call %s', 'harbour-tree-care' ), harbour_business( 'phone_yard' ) ), 'href' => harbour_tel_href( harbour_business( 'phone_yard' ) ), 'class' => 'btn-ghost' ),
				);
			}
			if ( $buttons ) :
				echo '<div class="btn-row">';
				foreach ( $buttons as $b ) {
					printf( '<a class="btn %s" href="%s">%s</a>', esc_attr( $b['class'] ), esc_url( $b['href'] ), esc_html( $b['label'] ) );
				}
				echo '</div>';
			endif;
			?>
		</div>
	</section>
	<?php
}

/**
 * Render the recurring call-to-action band.
 *
 * @param array $args heading, text, button_label, button_href.
 */
function harbour_cta_band( array $args ): void {
	$args = wp_parse_args( $args, array(
		'heading'      => __( 'Got a tree that needs looking at?', 'harbour-tree-care' ),
		'text'         => __( 'Free visit, written quote, no pressure. If it doesn\'t need the work, we\'ll say so.', 'harbour-tree-care' ),
		'button_label' => __( 'Request a quote', 'harbour-tree-care' ),
		'button_href'  => home_url( '/contact/' ),
	) );
	?>
	<section class="section-sm">
		<div class="wrap">
			<div class="band reveal">
				<div>
					<h2><?php echo esc_html( $args['heading'] ); ?></h2>
					<p><?php echo esc_html( $args['text'] ); ?></p>
				</div>
				<div class="btn-row">
					<a class="btn btn-primary btn-lg" href="<?php echo esc_url( $args['button_href'] ); ?>"><?php echo esc_html( $args['button_label'] ); ?></a>
				</div>
			</div>
		</div>
	</section>
	<?php
}

/**
 * Sidebar "quote" card, reused on service/area pages.
 *
 * @param string $heading Card heading.
 * @param string $blurb   Small text.
 */
function harbour_quote_card( string $heading, string $blurb ): void {
	?>
	<div class="side-card">
		<h3><?php echo esc_html( $heading ); ?></h3>
		<p class="small muted"><?php echo esc_html( $blurb ); ?></p>
		<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="width:100%"><?php esc_html_e( 'Request a quote', 'harbour-tree-care' ); ?></a>
		<p class="small mb-0" style="margin-top:1rem"><a href="<?php echo esc_attr( harbour_tel_href( harbour_business( 'phone_yard' ) ) ); ?>"><?php echo esc_html( harbour_business( 'phone_yard' ) ); ?></a></p>
	</div>
	<?php
}
