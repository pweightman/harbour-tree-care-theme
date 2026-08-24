<?php
/**
 * Navigation walkers that output the prototype's exact markup.
 *
 * Desktop: a .nav-list with hover/focus-within dropdowns (.submenu), a caret on
 * parents, and an optional <small> description drawn from the menu item's
 * Description field. Keyboard operation comes from :focus-within in the CSS —
 * focusing a parent link reveals its submenu, putting the child links in the
 * tab order — enhanced with aria-expanded in site.js.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

/**
 * Desktop primary-nav walker.
 */
class Harbour_Nav_Walker extends Walker_Nav_Menu {

	/**
	 * @param string   $output Passed by reference.
	 * @param int      $depth  Depth of menu item.
	 * @param stdClass $args   Wp_nav_menu args.
	 */
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<ul class="submenu">';
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</ul>';
	}

	/**
	 * @param string   $output Passed by reference.
	 * @param WP_Post  $item   Menu item.
	 * @param int      $depth  Depth.
	 * @param stdClass $args   Args.
	 * @param int      $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$has_children = in_array( 'menu-item-has-children', (array) $item->classes, true );
		$current      = in_array( 'current-menu-item', (array) $item->classes, true )
			|| in_array( 'current-menu-parent', (array) $item->classes, true );

		$url   = ! empty( $item->url ) ? $item->url : '#';
		$title = apply_filters( 'the_title', $item->title, $item->ID );

		if ( 0 === $depth ) {
			$output .= sprintf(
				'<li%s>',
				$current ? ' aria-current="page"' : ''
			);
			$caret = $has_children
				? ' <svg class="caret" viewBox="0 0 10 10" aria-hidden="true" focusable="false"><path d="M2 4l3 3 3-3"/></svg>'
				: '';
			$aria = $has_children ? ' aria-haspopup="true" aria-expanded="false"' : '';
			$output .= sprintf(
				'<a href="%s"%s>%s%s</a>',
				esc_url( $url ),
				$aria,
				esc_html( $title ),
				$caret
			);
		} else {
			$desc  = ! empty( $item->description ) ? '<small>' . esc_html( $item->description ) . '</small>' : '';
			$output .= '<li>';
			$output .= sprintf(
				'<a href="%s">%s%s</a>',
				esc_url( $url ),
				esc_html( $title ),
				$desc
			);
		}
	}

	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= '</li>';
	}
}

/**
 * Mobile primary-nav walker: a single flat list, children prefixed and given a
 * .sub class, matching the prototype's #mnav markup.
 */
class Harbour_Mobile_Nav_Walker extends Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		// Flattened: no nested <ul>.
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$url    = ! empty( $item->url ) ? $item->url : '#';
		$title  = apply_filters( 'the_title', $item->title, $item->ID );
		$is_sub = $depth > 0;
		$prefix = $is_sub ? '&mdash; ' : '';

		$output .= sprintf(
			'<li class="%s"><a href="%s">%s%s</a></li>',
			$is_sub ? 'sub' : '',
			esc_url( $url ),
			$prefix,
			esc_html( $title )
		);
	}

	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		// Closed in start_el.
	}
}
