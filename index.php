<?php
/**
 * Blog index -- the most recent posts, title + date on each, same as
 * kdubs.dev's homepage.
 */
get_header();
?>

<?php if ( have_posts() ) : ?>

	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-entry' ); ?>>

			<a href="<?php the_permalink(); ?>" class="entry-title-link">
				<h3 class="entry-title"><?php the_title(); ?></h3>
			</a>

			<h4 class="entry-meta">
				<svg class="entry-meta-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
					<circle cx="12" cy="8" r="4" fill="currentColor"/>
					<path d="M4 20c0-4.4 3.6-8 8-8s8 3.6 8 8" fill="currentColor"/>
				</svg>
				<?php the_author(); ?> -
				<span class="entry-date"><?php echo esc_html( get_the_date( 'd/m/Y' ) ); ?></span>
			</h4>

			<div class="entry-body">

				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" class="entry-thumbnail-link">
						<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'entry-thumbnail-img' ) ); ?>
					</a>
				<?php endif; ?>

				<div class="entry-excerpt">
					<?php the_excerpt(); ?>
				</div>

			</div>

		</article>
	<?php endwhile; ?>

	<?php
	the_posts_pagination(
		array(
			'prev_text' => __( '&laquo; Newer', 'kdubsdev' ),
			'next_text' => __( 'Older &raquo;', 'kdubsdev' ),
		)
	);
	?>

<?php else : ?>

	<p><?php esc_html_e( 'Nothing found.', 'kdubsdev' ); ?></p>

<?php endif; ?>

<?php
get_footer();
