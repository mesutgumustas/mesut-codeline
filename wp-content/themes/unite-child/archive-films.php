<?php
/*
	Archive page for films 
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">
			<?php 
				$custom_args = array(
					'post_type' => 'films',
				);

				$custom_query = new WP_Query( $custom_args ); ?>

			<?php if ( $custom_query->have_posts() ) : ?>

			<!-- the loop -->
			<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header page-header">
					<h2 class="entry-title "><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</header><!-- .entry-header -->
				<div class="entry-content">
					<p><?php echo wp_trim_words( get_the_content(), 10, '...' ); ?></p>
				</div><!-- .entry-content -->
				<ul class="list-inline">
					<?php $terms = wp_get_post_terms($post->ID, 'country');
						if ($terms) {
							echo '<li> <strong>Country: </strong>';
							$out = array();
							foreach ($terms as $term) {
								$out[] = '<a class="' .$term->slug .'" href="' .get_term_link( $term->slug, 'country') .'">' .$term->name .'</a>';
							}
							echo join( ', ', $out ) ."</li>";
						} 
					?>
					<?php $terms = wp_get_post_terms($post->ID, 'genre');
						if ($terms) {
							echo '<li> <strong>Genre: </strong>';
							$out = array();
							foreach ($terms as $term) {
								$out[] = '<a class="' .$term->slug .'" href="' .get_term_link( $term->slug, 'genre') .'">' .$term->name .'</a>';
							}
							echo join( ', ', $out ) ."</li>";
						} 
					?>
					<?php if( get_field('ticket_price') ): ?>
						<li><strong>Ticket price: </strong><?php the_field('ticket_price'); ?></li>
					<?php endif; ?>
					<?php if( get_field('release_date') ): 
					?>
						<li><strong>Release date: </strong><?php  the_field('release_date'); ?></li>
					<?php endif; ?>
				</ul>
				<a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>
				<hr class="section-divider">
			</article>
			<?php endwhile; ?>
				<!-- end of the loop -->
			<?php else:  ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
          <?php wp_reset_postdata(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
