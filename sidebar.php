<?php
/**
 * Sidebar: a search box and a short list of recent posts.
 */
?>
<aside class="site-sidebar">

	<div class="widget widget-search">
		<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<label for="site-search-input"><?php esc_html_e( 'Search', 'kdubsdev' ); ?></label>
			<div class="search-form-row">
				<input
					type="search"
					id="site-search-input"
					class="search-field"
					name="s"
					value="<?php echo esc_attr( get_search_query() ); ?>"
				>
				<button type="submit" class="search-submit"><?php esc_html_e( 'Search', 'kdubsdev' ); ?></button>
			</div>
		</form>
	</div>

	<div class="widget widget-recent-posts">
		<h2 class="widget-title"><?php esc_html_e( 'Recent Posts', 'kdubsdev' ); ?></h2>
		<ul>
			<?php
			$kdubsdev_recent_posts = new WP_Query(
				array(
					'posts_per_page'      => 5,
					'post_status'         => 'publish',
					'ignore_sticky_posts' => true,
					'no_found_rows'       => true,
				)
			);

			if ( $kdubsdev_recent_posts->have_posts() ) :
				while ( $kdubsdev_recent_posts->have_posts() ) :
					$kdubsdev_recent_posts->the_post();
					?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</ul>
	</div>

</aside>
