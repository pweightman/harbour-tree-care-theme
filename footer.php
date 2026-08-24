<?php
/**
 * Footer: link columns, contact, sticky mobile action bar.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;
?>
</main>

<footer class="site-footer">
	<div class="wrap">
		<div class="footer-grid">
			<div class="footer-brand">
				<div class="footer-wordmark">
					<?php echo harbour_brand_svg( 'footer-mark' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped — static SVG. ?>
					<span>
						<strong><?php echo esc_html( harbour_business( 'name' ) ); ?></strong>
						<em><?php printf( esc_html__( 'Est. %s', 'harbour-tree-care' ), esc_html( harbour_business( 'established' ) ) ); ?></em>
					</span>
				</div>
				<p class="small"><?php esc_html_e( 'Family-run arborists and tree surgeons based at Ashby Magna near Lutterworth. Established in 1977 by Roy Harbour, run today by his son Neil.', 'harbour-tree-care' ); ?></p>
				<div class="socials">
					<?php if ( harbour_business( 'facebook' ) ) : ?>
						<a href="<?php echo esc_url( harbour_business( 'facebook' ) ); ?>" aria-label="<?php esc_attr_e( 'Facebook', 'harbour-tree-care' ); ?>"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M13.5 22v-8h2.7l.4-3.1h-3.1V8.9c0-.9.25-1.5 1.55-1.5H16.7V4.6c-.3 0-1.3-.13-2.47-.13-2.45 0-4.13 1.5-4.13 4.24v2.19H7.4V14h2.7v8z"/></svg></a>
					<?php endif; ?>
					<?php if ( harbour_business( 'instagram' ) ) : ?>
						<a href="<?php echo esc_url( harbour_business( 'instagram' ) ); ?>" aria-label="<?php esc_attr_e( 'Instagram', 'harbour-tree-care' ); ?>"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2.2c3.2 0 3.6 0 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.25.07 1.62.07 4.81s0 3.56-.07 4.81c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.25.06-1.62.07-4.85.07s-3.6 0-4.85-.07c-1.17-.05-1.8-.25-2.23-.41a3.8 3.8 0 0 1-1.38-.9 3.8 3.8 0 0 1-.9-1.38c-.16-.42-.36-1.06-.41-2.23C2.2 15.56 2.2 15.19 2.2 12s0-3.56.07-4.81c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41C8.44 2.2 8.8 2.2 12 2.2m0 3.13A6.67 6.67 0 1 0 18.67 12 6.67 6.67 0 0 0 12 5.33m0 11A4.33 4.33 0 1 1 16.33 12 4.33 4.33 0 0 1 12 16.33m6.93-11.2a1.56 1.56 0 1 1-1.55-1.56 1.56 1.56 0 0 1 1.55 1.56"/></svg></a>
					<?php endif; ?>
				</div>
			</div>

			<div>
				<h4><?php esc_html_e( 'Services', 'harbour-tree-care' ); ?></h4>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer_services',
					'container'      => false,
					'items_wrap'     => '<ul>%3$s</ul>',
					'depth'          => 1,
					'fallback_cb'    => false,
				) );
				?>
			</div>

			<div>
				<h4><?php esc_html_e( 'Areas covered', 'harbour-tree-care' ); ?></h4>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer_areas',
					'container'      => false,
					'items_wrap'     => '<ul>%3$s</ul>',
					'depth'          => 1,
					'fallback_cb'    => false,
				) );
				?>
			</div>

			<div>
				<h4><?php esc_html_e( 'Get in touch', 'harbour-tree-care' ); ?></h4>
				<ul>
					<li><a href="<?php echo esc_attr( harbour_tel_href( harbour_business( 'phone_yard' ) ) ); ?>"><?php echo esc_html( harbour_business( 'phone_yard' ) ); ?></a> <span class="muted"><?php esc_html_e( '(yard)', 'harbour-tree-care' ); ?></span></li>
					<li><a href="<?php echo esc_attr( harbour_tel_href( harbour_business( 'phone_mobile' ) ) ); ?>"><?php echo esc_html( harbour_business( 'phone_mobile' ) ); ?></a> <span class="muted"><?php esc_html_e( '(Neil)', 'harbour-tree-care' ); ?></span></li>
					<li><a href="mailto:<?php echo esc_attr( harbour_business( 'email' ) ); ?>"><?php echo esc_html( harbour_business( 'email' ) ); ?></a></li>
					<li style="margin-top:1rem">
						<?php echo esc_html( harbour_business( 'addr_line1' ) ); ?><br>
						<?php echo esc_html( harbour_business( 'addr_line2' ) ); ?><br>
						<?php echo esc_html( harbour_business( 'addr_county' ) ); ?><br>
						<?php echo esc_html( harbour_business( 'addr_post' ) ); ?>
					</li>
					<li style="margin-top:1rem"><?php echo wp_kses( harbour_business( 'hours' ), array( 'br' => array() ) ); ?></li>
				</ul>
			</div>
		</div>

		<div class="footer-bottom">
			<div>
				<?php
				printf(
					/* translators: 1: year, 2: company name, 3: company number */
					esc_html__( '© %1$s %2$s Ltd · Registered in England No. %3$s', 'harbour-tree-care' ),
					esc_html( date_i18n( 'Y' ) ),
					esc_html( harbour_business( 'name' ) ),
					esc_html( harbour_business( 'company_no' ) )
				);
				?>
			</div>
			<div>
				<a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php esc_html_e( 'Privacy', 'harbour-tree-care' ); ?></a> ·
				<a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><?php esc_html_e( 'Terms', 'harbour-tree-care' ); ?></a> ·
				<a href="<?php echo esc_url( home_url( '/accessibility/' ) ); ?>"><?php esc_html_e( 'Accessibility', 'harbour-tree-care' ); ?></a>
			</div>
		</div>
	</div>
</footer>

<div class="action-bar">
	<a class="btn btn-dark" href="<?php echo esc_attr( harbour_tel_href( harbour_business( 'phone_yard' ) ) ); ?>"><?php esc_html_e( 'Call now', 'harbour-tree-care' ); ?></a>
	<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Free quote', 'harbour-tree-care' ); ?></a>
</div>

<?php wp_footer(); ?>
</body>
</html>
