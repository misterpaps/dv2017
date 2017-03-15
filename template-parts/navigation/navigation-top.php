<?php
/**
 * Displays top navigation
 *
 * @package DV_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Top Menu', 'dvseventeen' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php echo dvseventeen_get_svg( array( 'icon' => 'bars' ) ); echo dvseventeen_get_svg( array( 'icon' => 'close' ) ); _e( 'Menu', 'dvseventeen' ); ?></button>
	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>

	<?php if ( ( dvseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo dvseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'dvseventeen' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->
