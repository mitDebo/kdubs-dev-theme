<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="site-menu-backdrop"></div>

<div class="site-menu" aria-hidden="true">
	<button type="button" class="site-menu-close" aria-label="<?php esc_attr_e( 'Close menu', 'kdubsdev' ); ?>">
		<svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
			<path d="M5 5 L19 19 M19 5 L5 19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
		</svg>
	</button>

	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-menu-avatar">
		<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/avatar.png' ); ?>" alt="">
	</a>

	<p class="site-menu-name">Kelly <strong>Weaver</strong></p>

	<p class="site-menu-job">Software Engineer</p>

	<nav class="site-menu-nav" aria-label="<?php esc_attr_e( 'Primary', 'kdubsdev' ); ?>">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'site-menu-list',
				'fallback_cb'    => false,
			)
		);
		?>
	</nav>
</div>

<div class="site-wrap">

	<div class="top-colors" aria-hidden="true">
		<?php
		$kdubsdev_banner_colors = array( 'c1', 'c2', 'c3', 'c1', 'c2' );
		foreach ( $kdubsdev_banner_colors as $kdubsdev_banner_color ) :
			?>
			<span class="top-colors-segment top-colors-<?php echo esc_attr( $kdubsdev_banner_color ); ?>"></span>
			<?php
		endforeach;
		?>
	</div>

	<div class="site-content-box">
		<div class="site-topbar">
			<button type="button" class="site-menu-toggle" aria-haspopup="true" aria-expanded="false">
				<svg class="site-menu-toggle-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
					<path d="M3 6h18M3 12h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
				</svg>
				<?php esc_html_e( 'Menu', 'kdubsdev' ); ?>
			</button>

			<p class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</p>
		</div>

		<div class="site-layout">
			<main class="site-main">
