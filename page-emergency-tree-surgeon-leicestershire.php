<?php
/**
 * Emergency / storm-damage page. Ported from prototype/service-emergency.html.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

get_header();

$tel_yard   = harbour_tel_href( harbour_business( 'phone_yard' ) );
$tel_mobile = harbour_tel_href( harbour_business( 'phone_mobile' ) );

harbour_page_hero(
	array(
		'crumbs'  => array(
			array(
				'label' => __( 'Home', 'harbour-tree-care' ),
				'url'   => home_url( '/' ),
			),
			array( 'label' => __( 'Emergency call-out', 'harbour-tree-care' ) ),
		),
		'eyebrow' => __( 'Emergency & storm damage', 'harbour-tree-care' ),
		'heading' => __( 'Tree down? Call the mobile now.', 'harbour-tree-care' ),
		'lead'    => __( "Storm-damaged, fallen or dangerous trees dealt with fast across Leicestershire and the East Midlands. Ring Neil on the mobile and we'll tell you straight away whether it's a today job or a next-week job.", 'harbour-tree-care' ),
		'buttons' => array(
			array(
				'label' => sprintf( /* translators: %s: mobile number. */ __( 'Call %s', 'harbour-tree-care' ), harbour_business( 'phone_mobile' ) ),
				'href'  => $tel_mobile,
				'class' => 'btn-primary btn-lg',
			),
			array(
				'label' => sprintf( /* translators: %s: yard number. */ __( 'Or the yard: %s', 'harbour-tree-care' ), harbour_business( 'phone_yard' ) ),
				'href'  => $tel_yard,
				'class' => 'btn-ghost btn-lg',
			),
		),
	)
);
?>
<section class="trust-strip">
	<div class="wrap">
		<div class="trust-item"><b>1977</b><span><?php esc_html_e( 'Established', 'harbour-tree-care' ); ?></span></div>
		<div class="trust-item"><b><?php esc_html_e( 'Local', 'harbour-tree-care' ); ?></b><span><?php esc_html_e( 'Based near Lutterworth', 'harbour-tree-care' ); ?></span></div>
		<div class="trust-item"><b><?php esc_html_e( 'Fast', 'harbour-tree-care' ); ?></b><span><?php esc_html_e( 'Rapid local response', 'harbour-tree-care' ); ?></span></div>
		<div class="trust-item"><b><?php esc_html_e( 'Insured', 'harbour-tree-care' ); ?></b><span><?php esc_html_e( 'Fully covered', 'harbour-tree-care' ); ?></span></div>
	</div>
</section>

<section class="section">
	<div class="wrap">
		<div class="two-col">
			<div class="prose">
				<h2><?php esc_html_e( 'What counts as an emergency', 'harbour-tree-care' ); ?></h2>
				<p><?php esc_html_e( "Some tree problems can wait for a quote and a booked date. Others can't. Ring us straight away if:", 'harbour-tree-care' ); ?></p>
				<ul>
					<li><?php echo wp_kses_post( __( 'A tree or large limb has <strong>come down</strong> — across a drive, a road, a garden, a car or a building', 'harbour-tree-care' ) ); ?></li>
					<li><?php echo wp_kses_post( __( 'A tree is <strong>leaning, split or partly uprooted</strong> after high wind and could come down further', 'harbour-tree-care' ) ); ?></li>
					<li><?php echo wp_kses_post( __( 'A branch is <strong>hung up</strong> in the canopy, caught but not fallen — a "widow-maker" waiting to drop', 'harbour-tree-care' ) ); ?></li>
					<li><?php echo wp_kses_post( __( 'A tree has come down on, or is threatening, <strong>power lines</strong> (see the safety note below — call the network operator first)', 'harbour-tree-care' ) ); ?></li>
					<li><?php echo wp_kses_post( __( 'Storm damage is <strong>blocking access</strong> or putting people at risk', 'harbour-tree-care' ) ); ?></li>
				</ul>

				<div class="callout">
					<p><?php echo wp_kses_post( __( '<strong>Before you ring us, stay safe.</strong> Keep well back from a fallen or leaning tree — there can be huge stored tension in bent limbs and trapped trunks. <strong>Never approach a tree touching power lines.</strong> If a tree is on power lines or has brought cables down, call the electricity network emergency line on <strong>105</strong> (free, UK-wide) first, and keep everyone away until they\'ve made it safe. If anyone is hurt or a road is blocked and dangerous, call <strong>999</strong>.', 'harbour-tree-care' ) ); ?></p>
				</div>

				<h2><?php esc_html_e( 'What happens when you call', 'harbour-tree-care' ); ?></h2>
				<p><?php esc_html_e( "You'll get a straight answer, not a call centre. Tell us what's happened, where you are, and — if it's safe to — send a photo. We'll tell you honestly whether it needs dealing with today or whether it's safe to leave for a day or two, and roughly what it'll cost. We're not going to talk you into an emergency call-out you don't need.", 'harbour-tree-care' ); ?></p>
				<p><?php esc_html_e( 'Because we\'re a local firm based near Lutterworth, we can usually get to jobs across south Leicestershire and the borders quickly — and after a big storm we work through the list as fast as we safely can.', 'harbour-tree-care' ); ?></p>

				<h2><?php esc_html_e( 'Insurance claims', 'harbour-tree-care' ); ?></h2>
				<p><?php esc_html_e( "If the damage is going through your home insurance, we can help with what they'll need — photographs, a description of the work and an itemised invoice.", 'harbour-tree-care' ); ?></p>

				<h2><?php esc_html_e( 'After the emergency', 'harbour-tree-care' ); ?></h2>
				<p>
				<?php
				printf(
					/* translators: 1: felling page link, 2: stump grinding page link. */
					wp_kses_post( __( 'Once the immediate danger is dealt with, there\'s often follow-up work — a damaged tree that needs a proper %1$s, a %2$s to grind, or a survey of nearby trees that took a battering. We\'ll sort the urgent part first and quote the rest calmly afterwards.', 'harbour-tree-care' ) ),
					'<a href="' . esc_url( home_url( '/services/tree-felling-removal/' ) ) . '">' . esc_html__( 'removal', 'harbour-tree-care' ) . '</a>',
					'<a href="' . esc_url( home_url( '/services/stump-grinding/' ) ) . '">' . esc_html__( 'stump', 'harbour-tree-care' ) . '</a>'
				);
				?>
				</p>
			</div>

			<aside class="sidebar">
				<div class="side-card" style="background:var(--forest);color:var(--cream);border-color:var(--forest)">
					<h3 style="color:var(--cream)"><?php esc_html_e( 'Call us now', 'harbour-tree-care' ); ?></h3>
					<p class="small" style="color:#D8E2F0"><?php esc_html_e( "Fastest way to reach us in an emergency is Neil's mobile.", 'harbour-tree-care' ); ?></p>
					<a class="btn btn-primary" href="<?php echo esc_attr( $tel_mobile ); ?>" style="width:100%"><?php echo esc_html( harbour_business( 'phone_mobile' ) ); ?></a>
					<p class="small" style="margin-top:1rem;color:#D8E2F0"><?php esc_html_e( 'Yard line:', 'harbour-tree-care' ); ?> <a href="<?php echo esc_attr( $tel_yard ); ?>" style="color:#fff"><?php echo esc_html( harbour_business( 'phone_yard' ) ); ?></a></p>
				</div>
				<div class="side-card">
					<h3><?php esc_html_e( 'Useful numbers', 'harbour-tree-care' ); ?></h3>
					<ul>
						<li><?php echo wp_kses_post( __( '<strong>105</strong> — power cut / lines down (free)', 'harbour-tree-care' ) ); ?></li>
						<li><?php echo wp_kses_post( __( '<strong>999</strong> — injury or immediate danger', 'harbour-tree-care' ) ); ?></li>
						<li><?php esc_html_e( 'Local council — trees on public roads', 'harbour-tree-care' ); ?></li>
					</ul>
				</div>
				<div class="side-card">
					<h3><?php esc_html_e( 'Related', 'harbour-tree-care' ); ?></h3>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/services/tree-felling-removal/' ) ); ?>"><?php esc_html_e( 'Felling & removal', 'harbour-tree-care' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/services/stump-grinding/' ) ); ?>"><?php esc_html_e( 'Stump grinding', 'harbour-tree-care' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/services/tree-surveys-reports/' ) ); ?>"><?php esc_html_e( 'Surveys & reports', 'harbour-tree-care' ); ?></a></li>
					</ul>
				</div>
			</aside>
		</div>
	</div>
</section>

<section class="section-sm bg-ink grain">
	<div class="wrap">
		<div class="band" style="background:transparent;padding:0">
			<div>
				<h2><?php esc_html_e( "Don't wait it out — call.", 'harbour-tree-care' ); ?></h2>
				<p><?php esc_html_e( 'A leaning or hung-up tree only gets more dangerous. One phone call tells you where you stand.', 'harbour-tree-care' ); ?></p>
			</div>
			<div class="btn-row">
				<a class="btn btn-primary btn-lg" href="<?php echo esc_attr( $tel_mobile ); ?>"><?php printf( /* translators: %s: mobile number. */ esc_html__( 'Call %s', 'harbour-tree-care' ), esc_html( harbour_business( 'phone_mobile' ) ) ); ?></a>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
