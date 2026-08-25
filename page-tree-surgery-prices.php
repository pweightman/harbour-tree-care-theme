<?php
/**
 * Prices page. Ported from prototype/prices.html.
 *
 * NOTE: the price ranges are placeholders (£— to £—) awaiting Neil's real
 * figures — do not link this page publicly until they're filled in.
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
			array( 'label' => __( 'Prices', 'harbour-tree-care' ) ),
		),
		'eyebrow' => __( 'What tree work costs', 'harbour-tree-care' ),
		'heading' => __( 'Tree surgery prices in Leicestershire.', 'harbour-tree-care' ),
		'lead'    => __( "You shouldn't have to ring three firms to find out roughly what a job costs. Every tree is different, so these are honest ranges rather than fixed quotes — enough to tell you whether you're in the right ballpark before we come and look.", 'harbour-tree-care' ),
		'buttons' => array(
			array(
				'label' => __( 'Get a fixed quote', 'harbour-tree-care' ),
				'href'  => home_url( '/contact/' ),
				'class' => 'btn-primary',
			),
			array(
				'label' => harbour_business( 'phone_yard' ),
				'href'  => harbour_tel_href( harbour_business( 'phone_yard' ) ),
				'class' => 'btn-ghost',
			),
		),
	)
);

$rows    = array(
	array( __( 'Crown lift on a garden tree', 'harbour-tree-care' ), '£— to £—' ),
	array( __( 'Crown reduction, medium tree', 'harbour-tree-care' ), '£— to £—' ),
	array( __( 'Hedge trimming, per session', 'harbour-tree-care' ), '£— to £—' ),
	array( __( 'Small conifer / fruit tree removal', 'harbour-tree-care' ), '£— to £—' ),
	array( __( 'Large tree dismantled over a garden', 'harbour-tree-care' ), '£— to £—' ),
	array( __( 'Stump grinding, per stump', 'harbour-tree-care' ), '£— to £—' ),
	array( __( 'Emergency call-out', 'harbour-tree-care' ), '£— to £—' ),
);
$related = array(
	'tree-pruning-crown-reduction' => __( 'Pruning & crown reduction', 'harbour-tree-care' ),
	'tree-felling-removal'         => __( 'Felling & removal', 'harbour-tree-care' ),
	'stump-grinding'               => __( 'Stump grinding', 'harbour-tree-care' ),
	'hedge-cutting'                => __( 'Hedge cutting', 'harbour-tree-care' ),
	'seasoned-firewood'            => __( 'Seasoned firewood', 'harbour-tree-care' ),
);
?>
<section class="section">
	<div class="wrap">
		<div class="two-col">
			<div class="prose">
				<h2><?php esc_html_e( 'Rough guide prices', 'harbour-tree-care' ); ?></h2>
				<table>
					<thead><tr><th><?php esc_html_e( 'Job', 'harbour-tree-care' ); ?></th><th><?php esc_html_e( 'Typical range', 'harbour-tree-care' ); ?></th></tr></thead>
					<tbody>
						<?php foreach ( $rows as $r ) : ?>
							<tr><td><?php echo esc_html( $r[0] ); ?></td><td><?php echo esc_html( $r[1] ); ?></td></tr>
						<?php endforeach; ?>
					</tbody>
				</table>

				<h2><?php esc_html_e( "Why we can't just quote over the phone", 'harbour-tree-care' ); ?></h2>
				<p><?php echo wp_kses_post( __( "The single biggest thing that moves the price isn't the size of the tree — it's access and risk. A big oak in an open field, where we can fell it and chip it alongside, is often <em>cheaper</em> than a modest conifer wedged between a conservatory and next door's shed, where every piece has to be roped down and barrowed out through the house. Two trees the same height can be a morning's work or a two-day job depending entirely on what's around them.", 'harbour-tree-care' ) ); ?></p>
				<p><?php esc_html_e( 'That\'s why the honest answer is a free visit and a fixed written price, rather than a number plucked over the phone that changes when we arrive.', 'harbour-tree-care' ); ?></p>

				<h2><?php esc_html_e( 'What the price always includes', 'harbour-tree-care' ); ?></h2>
				<ul>
					<li><?php echo wp_kses_post( __( '<strong>The clear-up.</strong> Chipping, logging and raking the ground — it\'s in the quote, never sprung on you afterwards', 'harbour-tree-care' ) ); ?></li>
					<li><?php echo wp_kses_post( __( '<strong>A fixed price.</strong> The number on the quote is the number on the invoice. If we hit something genuinely unexpected, we stop and talk to you before it costs anything', 'harbour-tree-care' ) ); ?></li>
					<li><?php echo wp_kses_post( __( '<strong>The checks.</strong> We look for TPOs and conservation-area rules as part of the visit, so you don\'t get caught out', 'harbour-tree-care' ) ); ?></li>
				</ul>

				<h2><?php esc_html_e( 'Ways to keep the cost down', 'harbour-tree-care' ); ?></h2>
				<ul>
					<li><?php echo wp_kses_post( __( '<strong>Combine jobs.</strong> Grinding a stump while we\'re already on site for the removal is cheaper than a separate call-out', 'harbour-tree-care' ) ); ?></li>
					<li><?php echo wp_kses_post( __( '<strong>Keep the logs.</strong> If you\'ve a wood burner, ask us to leave the cordwood cut — free fuel instead of us hauling it away', 'harbour-tree-care' ) ); ?></li>
					<li><?php echo wp_kses_post( __( '<strong>Book off-season.</strong> Winter is quieter for pruning and often easier to schedule', 'harbour-tree-care' ) ); ?></li>
					<li><?php echo wp_kses_post( __( "<strong>Don't leave it.</strong> A small problem now is cheaper than a big, dangerous one in three years", 'harbour-tree-care' ) ); ?></li>
				</ul>
			</div>

			<aside class="sidebar">
				<?php harbour_quote_card( __( 'Get a fixed price', 'harbour-tree-care' ), __( "Send a couple of photos and a postcode. We'll come and look, and put a firm number in writing — free, no obligation.", 'harbour-tree-care' ) ); ?>
				<div class="side-card">
					<h3><?php esc_html_e( 'Priced services', 'harbour-tree-care' ); ?></h3>
					<ul>
						<?php foreach ( $related as $slug => $label ) : ?>
							<li><a href="<?php echo esc_url( home_url( '/services/' . $slug . '/' ) ); ?>"><?php echo esc_html( $label ); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</aside>
		</div>
	</div>
</section>
<?php
harbour_cta_band(
	array(
		'heading'      => __( 'Want a firm number for your job?', 'harbour-tree-care' ),
		'text'         => __( 'The guide gets you in the ballpark. A free site visit gets you a fixed price.', 'harbour-tree-care' ),
		'button_label' => __( 'Get a free quote', 'harbour-tree-care' ),
	)
);

get_footer();
