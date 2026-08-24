<?php
/**
 * Header: top bar, sticky masthead, primary + mobile navigation.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#1D4230">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'harbour-tree-care' ); ?></a>

<div class="topbar">
	<div class="wrap">
		<div class="tb-left"><?php esc_html_e( 'Family-run tree surgeons near Lutterworth · Established 1977', 'harbour-tree-care' ); ?></div>
		<div class="tb-right">
			<a href="<?php echo esc_attr( harbour_tel_href( harbour_business( 'phone_yard' ) ) ); ?>"><?php echo esc_html( harbour_business( 'phone_yard' ) ); ?></a>
			<a href="<?php echo esc_attr( harbour_tel_href( harbour_business( 'phone_mobile' ) ) ); ?>"><?php echo esc_html( harbour_business( 'phone_mobile' ) ); ?></a>
			<a href="mailto:<?php echo esc_attr( harbour_business( 'email' ) ); ?>"><?php echo esc_html( harbour_business( 'email' ) ); ?></a>
		</div>
	</div>
</div>

<header class="site-header">
	<div class="wrap">
		<?php if ( has_custom_logo() ) : ?>
			<div class="brand"><?php the_custom_logo(); ?></div>
		<?php else : ?>
			<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( harbour_business( 'name' ) . ' — home' ); ?>">
				<?php echo harbour_brand_svg( 'brand-mark' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped — static SVG. ?>
				<span class="brand-fallback">
					<strong><?php echo esc_html( harbour_business( 'name' ) ); ?></strong>
					<span><?php printf( esc_html__( 'Est. %s', 'harbour-tree-care' ), esc_html( harbour_business( 'established' ) ) ); ?></span>
				</span>
			</a>
		<?php endif; ?>

		<nav class="nav" aria-label="<?php esc_attr_e( 'Main', 'harbour-tree-care' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'nav-list',
				'depth'          => 2,
				'walker'         => new Harbour_Nav_Walker(),
				'fallback_cb'    => false,
			) );
			?>
		</nav>

		<div class="header-cta">
			<a class="header-phone" href="<?php echo esc_attr( harbour_tel_href( harbour_business( 'phone_yard' ) ) ); ?>">
				<span><?php esc_html_e( 'Call the yard', 'harbour-tree-care' ); ?></span>
				<strong><?php echo esc_html( harbour_business( 'phone_yard' ) ); ?></strong>
			</a>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get a free quote', 'harbour-tree-care' ); ?></a>
		</div>

		<button class="burger" aria-label="<?php esc_attr_e( 'Menu', 'harbour-tree-care' ); ?>" aria-expanded="false" aria-controls="mnav">
			<span></span><span></span><span></span>
		</button>
	</div>
</header>

<div class="mobile-nav" id="mnav">
	<div class="wrap">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'container'      => false,
			'items_wrap'     => '<ul>%3$s</ul>',
			'depth'          => 2,
			'walker'         => new Harbour_Mobile_Nav_Walker(),
			'fallback_cb'    => false,
		) );
		?>
	</div>
</div>

<main id="main">
