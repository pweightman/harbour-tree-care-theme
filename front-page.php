<?php
/**
 * Front page. Ported section by section from prototype/index.html, in the
 * Harbour blue brand. Business facts come from harbour_business(); the enquiry
 * form markup is rendered here but wired to harbour-core in Phase 4.
 *
 * Content still to verify before launch is listed in CONTENT-TO-VERIFY.md.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

$img        = get_template_directory_uri() . '/assets/img';
$u_services = home_url( '/tree-surgery-leicestershire/' );
$u_areas    = home_url( '/areas/' );
$u_contact  = home_url( '/contact/' );
$u_about    = home_url( '/about/' );
$u_logs     = home_url( '/order-logs/' );
$tel_yard   = harbour_tel_href( harbour_business( 'phone_yard' ) );
$tel_mobile = harbour_tel_href( harbour_business( 'phone_mobile' ) );

get_header();
?>

<!-- ================= HERO ================= -->
<section class="hero">
	<div class="hero-media">
		<?php
		harbour_picture(
			'hero-climber',
			array(
				'alt'    => '',
				'width'  => 1200,
				'height' => 1600,
				'eager'  => true,
			)
		);
		?>
	</div>
	<div class="wrap hero-inner">
		<span class="hero-badge"><b><?php /* translators: %s: year the firm was established. */ printf( esc_html__( 'Est. %s', 'harbour-tree-care' ), esc_html( harbour_business( 'established' ) ) ); ?></b> <?php esc_html_e( 'Two generations of the Harbour family', 'harbour-tree-care' ); ?></span>
		<h1><?php esc_html_e( 'Tree surgeons in Leicestershire,', 'harbour-tree-care' ); ?> <em><?php esc_html_e( 'family-run since 1977', 'harbour-tree-care' ); ?></em>.</h1>
		<p class="lead"><?php esc_html_e( 'Pruning, felling, stump grinding and site clearance from a family firm near Lutterworth. Free site visit, fixed written price, everything cleared before we leave.', 'harbour-tree-care' ); ?></p>
		<div class="btn-row">
			<a class="btn btn-primary btn-lg" href="<?php echo esc_url( $u_contact ); ?>"><?php esc_html_e( 'Get a free quote', 'harbour-tree-care' ); ?></a>
			<a class="btn btn-ghost btn-lg" href="<?php echo esc_attr( $tel_yard ); ?>"><?php /* translators: %s: phone number. */ printf( esc_html__( 'Call %s', 'harbour-tree-care' ), esc_html( harbour_business( 'phone_yard' ) ) ); ?></a>
		</div>
		<ul class="hero-points">
			<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg> <?php esc_html_e( 'Free, no-obligation quotes', 'harbour-tree-care' ); ?></li>
			<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg> <?php esc_html_e( 'Qualified climbers, fully insured', 'harbour-tree-care' ); ?></li>
			<li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg> <?php esc_html_e( 'Every last twig chipped and cleared', 'harbour-tree-care' ); ?></li>
		</ul>
	</div>
</section>

<!-- ================= TRUST STRIP ================= -->
<section class="trust-strip">
	<div class="wrap">
		<div class="trust-item"><b>1977</b><span><?php esc_html_e( 'Established', 'harbour-tree-care' ); ?></span></div>
		<div class="trust-item"><b>49</b><span><?php esc_html_e( 'Years on the tools', 'harbour-tree-care' ); ?></span></div>
		<div class="trust-item"><b>5</b><span><?php esc_html_e( 'Counties covered', 'harbour-tree-care' ); ?></span></div>
		<div class="trust-item"><b><?php esc_html_e( 'Free', 'harbour-tree-care' ); ?></b><span><?php esc_html_e( 'Site visits & quotes', 'harbour-tree-care' ); ?></span></div>
	</div>
</section>

<!-- ================= SERVICES ================= -->
<section class="section">
	<div class="wrap">
		<div class="sec-head reveal">
			<div class="measure">
				<p class="eyebrow"><?php esc_html_e( 'What we do', 'harbour-tree-care' ); ?></p>
				<h2><?php esc_html_e( 'Everything a tree needs, from a single branch to a whole plot.', 'harbour-tree-care' ); ?></h2>
				<p class="lead mb-0"><?php esc_html_e( "Domestic gardens, farms, estates, schools, developers and managing agents. If it has bark on it, we've dealt with it.", 'harbour-tree-care' ); ?></p>
			</div>
			<a class="btn btn-ghost" href="<?php echo esc_url( $u_services ); ?>"><?php esc_html_e( 'All services', 'harbour-tree-care' ); ?></a>
		</div>

		<div class="cards">
			<a class="card reveal" href="<?php echo esc_url( $u_services ); ?>">
				<div class="card-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21V9"/><path d="M12 13L6 7"/><path d="M12 15l6-6"/><path d="M9 3.5A2.5 2.5 0 1 1 6.5 6"/><path d="M15 3.5A2.5 2.5 0 1 0 17.5 6"/></svg></div>
				<h3><?php esc_html_e( 'Pruning & crown reduction', 'harbour-tree-care' ); ?></h3>
				<p><?php esc_html_e( 'Reducing, thinning, lifting and reshaping — cut properly, at the right point, so the tree heals and keeps its natural form. The job most often done badly by someone else.', 'harbour-tree-care' ); ?></p>
				<span class="link-arrow"><?php esc_html_e( 'See how we prune', 'harbour-tree-care' ); ?> &rarr;</span>
			</a>

			<a class="card reveal" href="<?php echo esc_url( $u_services ); ?>">
				<div class="card-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21v-4"/><path d="M12 17L5 15l3-3-3-1 3-3-2-1 6-4 6 4-2 1 3 3-3 1 3 3-7 2z"/></svg></div>
				<h3><?php esc_html_e( 'Felling & tree removal', 'harbour-tree-care' ); ?></h3>
				<p><?php esc_html_e( "Straight fells where there's room, and section-by-section dismantling with ropes and rigging where there isn't — over conservatories, greenhouses and next door's fence.", 'harbour-tree-care' ); ?></p>
				<span class="link-arrow"><?php esc_html_e( 'Removing a tree', 'harbour-tree-care' ); ?> &rarr;</span>
			</a>

			<a class="card reveal" href="<?php echo esc_url( $u_services ); ?>">
				<div class="card-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 18h16"/><path d="M8 18v-4h8v4"/><path d="M9 14c0-2 6-2 6 0"/><path d="M12 14V6"/><circle cx="12" cy="10" r="1.2"/></svg></div>
				<h3><?php esc_html_e( 'Stump grinding', 'harbour-tree-care' ); ?></h3>
				<p><?php esc_html_e( 'Ground out below the surface so you can turf it, plant it, pave it or build on it. No trip hazard, no regrowth, no rotting stump quietly feeding honey fungus.', 'harbour-tree-care' ); ?></p>
				<span class="link-arrow"><?php esc_html_e( 'Grinding out stumps', 'harbour-tree-care' ); ?> &rarr;</span>
			</a>

			<a class="card reveal" href="<?php echo esc_url( $u_services ); ?>">
				<div class="card-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 20h18"/><path d="M5 20V9l5-4 5 4v11"/><path d="M15 20v-6h4v6"/><path d="M9 20v-4h2v4"/></svg></div>
				<h3><?php esc_html_e( 'Site & plot clearance', 'harbour-tree-care' ); ?></h3>
				<p><?php esc_html_e( 'Overgrown gardens, self-set scrub, hedge lines and whole development plots taken back to bare ground and left ready for the groundworkers.', 'harbour-tree-care' ); ?></p>
				<span class="link-arrow"><?php esc_html_e( 'Clearing a site', 'harbour-tree-care' ); ?> &rarr;</span>
			</a>

			<a class="card reveal" href="<?php echo esc_url( $u_services ); ?>">
				<div class="card-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="3" width="14" height="18" rx="2"/><path d="M9 3.5h6v2H9z"/><path d="M9 10h6"/><path d="M9 14h6"/><path d="M9 18h3"/></svg></div>
				<h3><?php esc_html_e( 'Tree surveys & reports', 'harbour-tree-care' ); ?></h3>
				<p><?php esc_html_e( 'Condition and safety inspections, and written reports for planning applications, mortgage queries, insurers and managing agents.', 'harbour-tree-care' ); ?></p>
				<span class="link-arrow"><?php esc_html_e( 'Survey & report work', 'harbour-tree-care' ); ?> &rarr;</span>
			</a>

			<a class="card reveal" href="<?php echo esc_url( $u_logs ); ?>">
				<div class="card-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="7" cy="9" r="3.2"/><circle cx="16" cy="8" r="3"/><circle cx="11.5" cy="16" r="3.4"/><path d="M7 9h0M16 8h0M11.5 16h0"/></svg></div>
				<h3><?php esc_html_e( 'Seasoned firewood', 'harbour-tree-care' ); ?></h3>
				<p><?php esc_html_e( 'Hardwood logs from our own tree work, seasoned properly and delivered locally. Barn-dried, split, and low enough in moisture to actually burn.', 'harbour-tree-care' ); ?></p>
				<span class="link-arrow"><?php esc_html_e( 'Order logs', 'harbour-tree-care' ); ?> &rarr;</span>
			</a>
		</div>
	</div>
</section>

<!-- ================= HERITAGE SPLIT ================= -->
<section class="section bg-cream">
	<div class="wrap">
		<div class="split">
			<div class="split-media reveal">
				<div class="arch">
					<?php
					harbour_picture(
						'crew',
						array(
							'alt'    => __( 'The Harbour Tree Care team on site in Leicestershire', 'harbour-tree-care' ),
							'width'  => 1200,
							'height' => 1600,
						)
					);
					?>
				</div>
				<div class="media-note">
					<b>1977</b>
					<span><?php esc_html_e( 'Roy Harbour starts out', 'harbour-tree-care' ); ?></span>
				</div>
			</div>
			<div class="reveal">
				<p class="eyebrow"><?php esc_html_e( "Who you're calling", 'harbour-tree-care' ); ?></p>
				<h2><?php esc_html_e( 'Roy started it. Neil runs it. Same yard, same standards.', 'harbour-tree-care' ); ?></h2>
				<p><?php esc_html_e( 'Roy Harbour set up on his own in 1977 with a saw, a ladder and a reputation to build. His son Neil runs the business today, out of the same yard at Ashby Magna, with a small team that has been together long enough to know what each other is doing forty feet up.', 'harbour-tree-care' ); ?></p>
				<p><?php esc_html_e( "That matters more than it sounds. Tree work is one of the few trades where the mistakes are permanent — a badly topped tree never recovers its shape, and a rushed fell takes the fence with it. Almost fifty years in one place means we're still here when the tree grows back, and we quote accordingly.", 'harbour-tree-care' ); ?></p>
				<ul class="hero-points" style="color:var(--ink)">
					<li style="color:var(--ink)"><svg viewBox="0 0 24 24" fill="none" stroke="var(--moss)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg> <?php esc_html_e( 'No sales visit, no pressure', 'harbour-tree-care' ); ?></li>
					<li style="color:var(--ink)"><svg viewBox="0 0 24 24" fill="none" stroke="var(--moss)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg> <?php esc_html_e( 'Written quote, fixed price', 'harbour-tree-care' ); ?></li>
				</ul>
				<div class="btn-row" style="margin-top:1.5rem">
					<a class="btn btn-dark" href="<?php echo esc_url( $u_about ); ?>"><?php esc_html_e( 'Our story since 1977', 'harbour-tree-care' ); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ================= PROCESS ================= -->
<section class="section bg-forest grain">
	<div class="wrap">
		<div class="measure reveal" style="margin-bottom:var(--s-7)">
			<p class="eyebrow"><?php esc_html_e( 'How it works', 'harbour-tree-care' ); ?></p>
			<h2><?php esc_html_e( 'Four steps, no surprises.', 'harbour-tree-care' ); ?></h2>
			<p class="lead mb-0"><?php esc_html_e( "The bit most people worry about is the mess and the money. Here's exactly how both are handled.", 'harbour-tree-care' ); ?></p>
		</div>
		<div class="steps">
			<div class="step reveal">
				<h3><?php esc_html_e( 'You call or message', 'harbour-tree-care' ); ?></h3>
				<p><?php esc_html_e( "Tell us roughly what you've got. Photos help. If it's urgent — storm damage, a tree on a roof — say so and we'll prioritise it.", 'harbour-tree-care' ); ?></p>
			</div>
			<div class="step reveal">
				<h3><?php esc_html_e( 'We come and look', 'harbour-tree-care' ); ?></h3>
				<p><?php esc_html_e( 'Free site visit, usually within a few days. We assess the tree, check for TPOs and conservation areas, and tell you what it genuinely needs — which is sometimes less than you expected.', 'harbour-tree-care' ); ?></p>
			</div>
			<div class="step reveal">
				<h3><?php esc_html_e( 'Written quote, fixed price', 'harbour-tree-care' ); ?></h3>
				<p><?php esc_html_e( 'A clear written quote covering the work, the clear-up and the disposal. No day-rate creep, no "while we\'re here" extras.', 'harbour-tree-care' ); ?></p>
			</div>
			<div class="step reveal">
				<h3><?php esc_html_e( 'Job done, ground cleared', 'harbour-tree-care' ); ?></h3>
				<p><?php esc_html_e( 'We turn up on the agreed day, do the work, chip and log everything, rake the ground and leave. You should have to look twice to see we were there.', 'harbour-tree-care' ); ?></p>
			</div>
		</div>
	</div>
</section>

<!-- ================= URGENT BAND ================= -->
<section class="section-sm">
	<div class="wrap">
		<div class="band reveal">
			<div>
				<h2><?php esc_html_e( 'Storm damage or a tree down?', 'harbour-tree-care' ); ?></h2>
				<p><?php esc_html_e( 'Split limbs, a trunk on the shed, a tree leaning over the road after a gale — call the mobile and Neil will tell you straight away whether it\'s a today job or a next-week job.', 'harbour-tree-care' ); ?></p>
			</div>
			<div class="btn-row">
				<a class="btn btn-primary btn-lg" href="<?php echo esc_attr( $tel_mobile ); ?>"><?php /* translators: %s: phone number. */ printf( esc_html__( 'Call %s', 'harbour-tree-care' ), esc_html( harbour_business( 'phone_mobile' ) ) ); ?></a>
			</div>
		</div>
	</div>
</section>

<!-- ================= TESTIMONIALS ================= -->
<section class="section">
	<div class="wrap">
		<div class="sec-head reveal">
			<div class="measure">
				<p class="eyebrow"><?php esc_html_e( 'What people say', 'harbour-tree-care' ); ?></p>
				<h2><?php esc_html_e( 'Most of our work still comes from the last job.', 'harbour-tree-care' ); ?></h2>
			</div>
		</div>
		<div class="quotes">
			<?php
			$harbour_reviews = array(
				'100% recommend. A great job cutting down a 65ft tree in our garden.',
				'What a team. They really know what they are doing — great price too!',
				'All debris was removed and the garden and drive left tidy.',
			);
			foreach ( $harbour_reviews as $quote ) :
				?>
				<div class="quote reveal">
					<div class="stars" aria-label="<?php esc_attr_e( '5 out of 5', 'harbour-tree-care' ); ?>">
						<?php for ( $star = 0; $star < 5; $star++ ) : ?>
							<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l3 6.5 7 .9-5 4.8 1.3 7L12 17.8 5.7 21.2 7 14.2 2 9.4l7-.9z"/></svg>
						<?php endfor; ?>
					</div>
					<blockquote>&ldquo;<?php echo esc_html( $quote ); ?>&rdquo;</blockquote>
					<footer><?php esc_html_e( 'Google review', 'harbour-tree-care' ); ?></footer>
				</div>
			<?php endforeach; ?>
		</div>
		<p class="small muted center" style="margin-top:var(--s-6)"><?php esc_html_e( 'Reviews from across Leicestershire. Once the Google Business Profile is claimed, these show live with names and ratings.', 'harbour-tree-care' ); ?></p>
	</div>
</section>

<!-- ================= AREAS ================= -->
<section class="section bg-forest grain">
	<div class="wrap">
		<div class="split">
			<div class="reveal">
				<p class="eyebrow"><?php esc_html_e( 'Where we work', 'harbour-tree-care' ); ?></p>
				<h2><?php esc_html_e( 'Based at Ashby Magna. Out across five counties.', 'harbour-tree-care' ); ?></h2>
				<p class="lead"><?php esc_html_e( "We're ten minutes from Lutterworth, fifteen from Hinckley and twenty from Leicester, so most of our work is within about a half-hour drive of the yard. We go further for bigger jobs, surveys and estate work.", 'harbour-tree-care' ); ?></p>
				<ul class="area-list" style="margin-top:var(--s-5)">
					<?php
					$harbour_areas = array( 'Hinckley', 'Lutterworth', 'Leicester', 'Rugby', 'Market Harborough', 'Nuneaton', 'Broughton Astley', 'Blaby', 'Narborough', 'Countesthorpe' );
					foreach ( $harbour_areas as $area ) :
						?>
						<li><a href="<?php echo esc_url( $u_areas ); ?>"><?php echo esc_html( $area ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="reveal">
				<div style="border:1px solid #ffffff26;border-radius:var(--radius-lg);overflow:hidden;background:#ffffff0d">
					<div style="aspect-ratio:4/3;display:grid;place-items:center;color:#9BB0D6;font-size:var(--t-sm);text-align:center;padding:2rem">
						<span><?php esc_html_e( 'Coverage map', 'harbour-tree-care' ); ?><br><span class="small"><?php esc_html_e( 'Static map of the LE17 catchment — generated for launch, not an embedded Google iframe (keeps the page fast and cookie-free).', 'harbour-tree-care' ); ?></span></span>
					</div>
					<div style="padding:var(--s-5);border-top:1px solid #ffffff26">
						<strong style="font-family:var(--f-display);font-size:var(--t-lg)"><?php echo esc_html( harbour_business( 'name' ) ); ?> Ltd</strong>
						<p class="small mb-0" style="color:#B9C4D8;margin-top:.4rem"><?php echo esc_html( harbour_business( 'addr_line1' ) . ', ' . harbour_business( 'addr_line2' ) . ', ' . harbour_business( 'addr_county' ) . ' ' . harbour_business( 'addr_post' ) ); ?><br><?php esc_html_e( 'Leicestershire · Warwickshire · Northamptonshire · Nottinghamshire · Derbyshire', 'harbour-tree-care' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ================= FIREWOOD ================= -->
<section class="section bg-cream">
	<div class="wrap">
		<div class="split reverse">
			<div class="split-media reveal">
				<div class="arch" style="aspect-ratio:4/3;border-radius:var(--radius-lg)">
					<?php
					harbour_picture(
						'firewood-logs',
						array(
							'alt'    => __( 'Split seasoned hardwood logs at the Harbour Tree Care yard', 'harbour-tree-care' ),
							'width'  => 1200,
							'height' => 1600,
						)
					);
					?>
				</div>
			</div>
			<div class="reveal">
				<p class="eyebrow"><?php esc_html_e( 'Seasoned firewood', 'harbour-tree-care' ); ?></p>
				<h2><?php esc_html_e( "The timber doesn't go to waste. It goes in your log burner.", 'harbour-tree-care' ); ?></h2>
				<p><?php esc_html_e( "Every tree we take down becomes something. The good hardwood is cut, split and seasoned at the yard until it's dry enough to burn cleanly — then delivered locally by the load.", 'harbour-tree-care' ); ?></p>
				<p><?php esc_html_e( "Order early. By November everyone wants logs at once, and properly seasoned wood can't be rushed.", 'harbour-tree-care' ); ?></p>
				<div class="pricebox">
					<div><b><?php esc_html_e( 'Bulk bag', 'harbour-tree-care' ); ?></b><span><?php esc_html_e( 'Price on request', 'harbour-tree-care' ); ?></span></div>
					<div><b><?php esc_html_e( 'Half load', 'harbour-tree-care' ); ?></b><span><?php esc_html_e( 'Price on request', 'harbour-tree-care' ); ?></span></div>
					<div><b><?php esc_html_e( 'Full load', 'harbour-tree-care' ); ?></b><span><?php esc_html_e( 'Price on request', 'harbour-tree-care' ); ?></span></div>
				</div>
				<a class="btn btn-dark" href="<?php echo esc_url( $u_logs ); ?>"><?php esc_html_e( 'Order logs', 'harbour-tree-care' ); ?></a>
			</div>
		</div>
	</div>
</section>

<!-- ================= FAQ ================= -->
<section class="section">
	<div class="wrap">
		<div class="split" style="align-items:start">
			<div class="reveal">
				<p class="eyebrow"><?php esc_html_e( 'Common questions', 'harbour-tree-care' ); ?></p>
				<h2><?php esc_html_e( 'The things people ask before they ring.', 'harbour-tree-care' ); ?></h2>
				<p class="lead"><?php esc_html_e( "If yours isn't here, just call. We'd rather answer it on the phone than have you guess.", 'harbour-tree-care' ); ?></p>
				<a class="btn btn-ghost" href="<?php echo esc_url( $u_contact ); ?>" style="margin-top:1rem"><?php esc_html_e( 'Ask us something', 'harbour-tree-care' ); ?></a>
			</div>
			<div class="faq reveal">
				<details open>
					<summary><?php esc_html_e( 'Do I need permission to work on my tree?', 'harbour-tree-care' ); ?></summary>
					<p><?php esc_html_e( "Sometimes. If the tree has a Tree Preservation Order on it, or your property is in a conservation area, you need the council's consent before work starts — and doing it without can mean a serious fine. We check this as part of the site visit and tell you where you stand before anyone climbs anything.", 'harbour-tree-care' ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'Will you clear up afterwards?', 'harbour-tree-care' ); ?></summary>
					<p><?php esc_html_e( "Yes, and it's in the quoted price. Brash goes through the chipper, cordwood goes back to the yard for firewood, and the ground gets raked. Removing the arisings is part of the job, not an add-on.", 'harbour-tree-care' ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'How much does tree work cost?', 'harbour-tree-care' ); ?></summary>
					<p><?php esc_html_e( "It depends almost entirely on access and risk rather than the size of the tree. A big oak in an open field can be cheaper than a modest conifer wedged between a conservatory and a neighbour's shed. That's why we come and look rather than quoting over the phone — and why the visit is free.", 'harbour-tree-care' ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'Are you insured?', 'harbour-tree-care' ); ?></summary>
					<p><?php esc_html_e( 'Yes — we carry public liability and employer\'s liability insurance, with certificates available on request.', 'harbour-tree-care' ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'When is the best time to prune?', 'harbour-tree-care' ); ?></summary>
					<p><?php esc_html_e( "For most broadleaf trees, late autumn through winter while they're dormant. Some species are fussier — cherries and plums are better pruned in summer to avoid silver leaf, and oak has restricted periods for disease reasons. Bird nesting season runs roughly March to August and we work around it by law.", 'harbour-tree-care' ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'How far do you travel?', 'harbour-tree-care' ); ?></summary>
					<p><?php esc_html_e( 'Most jobs are within about thirty minutes of Ashby Magna — Lutterworth, Hinckley, Leicester, Rugby, Market Harborough and the villages between. For larger contracts, surveys and estate work we cover Leicestershire, Warwickshire, Northamptonshire, Nottinghamshire and Derbyshire.', 'harbour-tree-care' ); ?></p>
				</details>
			</div>
		</div>
	</div>
</section>

<!-- ================= QUOTE FORM ================= -->
<section class="section bg-forest grain" id="quote">
	<div class="wrap">
		<div class="split">
			<div class="reveal">
				<p class="eyebrow"><?php esc_html_e( 'Free quote', 'harbour-tree-care' ); ?></p>
				<h2><?php esc_html_e( 'Tell us about the tree.', 'harbour-tree-care' ); ?></h2>
				<p class="lead"><?php esc_html_e( "Send a couple of photos and a rough idea of what you're after. We'll come and look, usually within a few days, and give you a written price. No charge and no obligation either way.", 'harbour-tree-care' ); ?></p>
				<div style="margin-top:var(--s-6);display:grid;gap:var(--s-4)">
					<a class="link-arrow" href="<?php echo esc_attr( $tel_yard ); ?>"><?php /* translators: %s: phone number. */ printf( esc_html__( 'Or call the yard on %s', 'harbour-tree-care' ), esc_html( harbour_business( 'phone_yard' ) ) ); ?> &rarr;</a>
					<a class="link-arrow" href="<?php echo esc_attr( $tel_mobile ); ?>"><?php /* translators: %s: phone number. */ printf( esc_html__( "Neil's mobile: %s", 'harbour-tree-care' ), esc_html( harbour_business( 'phone_mobile' ) ) ); ?> &rarr;</a>
				</div>
			</div>
			<div class="reveal">
				<?php
				// The functional enquiry form (nonce, validation, upload, storage) is
				// provided by harbour-core in Phase 4 and rendered via a template tag.
				// Until then, render the prototype markup as a visual placeholder.
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

<?php
get_footer();
