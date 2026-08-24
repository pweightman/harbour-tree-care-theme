<?php
/**
 * Order logs page: firewood products + the delivery-request form.
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
			array( 'label' => __( 'Order logs', 'harbour-tree-care' ) ),
		),
		'eyebrow' => __( 'Seasoned firewood', 'harbour-tree-care' ),
		'heading' => __( 'Order logs for local delivery.', 'harbour-tree-care' ),
		'lead'    => __( 'Hardwood from our own tree work, split and seasoned at the yard. Choose a load and send a request — we deliver locally and take payment on delivery.', 'harbour-tree-care' ),
		'buttons' => array(),
	)
);

$products = function_exists( 'harbour_firewood_products' ) ? harbour_firewood_products() : array();
?>
<section class="section">
	<div class="wrap">
		<div class="split">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'What we sell', 'harbour-tree-care' ); ?></p>
				<h2><?php esc_html_e( 'Loads and prices', 'harbour-tree-care' ); ?></h2>
				<?php if ( $products ) : ?>
					<div class="stack">
						<?php foreach ( $products as $p ) : ?>
							<div class="side-card">
								<h3 style="margin-bottom:.2em"><?php echo esc_html( $p['name'] ); ?>
								<?php
								if ( ! empty( $p['price'] ) ) :
									?>
									<span class="muted" style="font-family:var(--f-body);font-weight:600"><?php echo esc_html( $p['price'] ); ?></span><?php endif; ?></h3>
								<?php
								if ( ! empty( $p['description'] ) ) :
									?>
									<p class="small muted mb-0"><?php echo esc_html( $p['description'] ); ?></p><?php endif; ?>
								<?php
								if ( 'out' === ( $p['availability'] ?? 'in' ) ) :
									?>
									<p class="small mb-0" style="color:var(--amber-dk)"><?php esc_html_e( 'Currently out of stock', 'harbour-tree-care' ); ?></p>
									<?php
elseif ( 'low' === ( $p['availability'] ?? '' ) ) :
	?>
									<p class="small mb-0"><?php esc_html_e( 'Low stock', 'harbour-tree-care' ); ?></p><?php endif; ?>
							</div>
						<?php endforeach; ?>
					</div>
				<?php else : ?>
					<p class="lead"><?php esc_html_e( 'Give the yard a ring for current loads and prices.', 'harbour-tree-care' ); ?></p>
				<?php endif; ?>
				<p class="small muted" style="margin-top:var(--s-5)"><?php esc_html_e( 'Delivery is local, by the load. Enter your postcode in the form and we\'ll confirm we cover you.', 'harbour-tree-care' ); ?></p>
			</div>
			<div>
				<?php
				if ( function_exists( 'harbour_render_log_order_form' ) ) {
					harbour_render_log_order_form();
				} else {
					echo '<div class="form-card"><p>' . esc_html__( 'Log ordering is unavailable — please ring the yard.', 'harbour-tree-care' ) . '</p></div>';
				}
				?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
