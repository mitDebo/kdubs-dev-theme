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
		<div class="site-layout">
			<main class="site-main">
