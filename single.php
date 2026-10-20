<?php
/**
 * Single post template. Reuses the index page's title/meta styling
 * (entry-title, entry-meta, entry-date) and adds the full post
 * content plus an optional featured image, matching kdubs.dev's
 * post order: title, then image, then byline, then content.
 */
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-entry' ); ?>>

		<h1 class="entry-title"><?php the_title(); ?></h1>

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry-thumbnail">
				<?php the_post_thumbnail( 'large' ); ?>
			</div>
		<?php endif; ?>

		<h4 class="entry-meta">
			<svg class="entry-meta-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
				<circle cx="12" cy="8" r="4" fill="currentColor"/>
				<path d="M4 20c0-4.4 3.6-8 8-8s8 3.6 8 8" fill="currentColor"/>
			</svg>
			<?php the_author(); ?> -
			<span class="entry-date"><?php echo esc_html( get_the_date( 'd/m/Y' ) ); ?></span>
		</h4>

		<div class="entry-content">
			<?php the_content(); ?>
		</div>

	</article>

<?php endwhile; ?>

<?php
get_footer();
