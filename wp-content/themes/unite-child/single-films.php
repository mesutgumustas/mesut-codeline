<?php
/*
	This is single view for films
*/
get_header();
?>

<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header page-header">
					<?php 
						if ( of_get_option( 'single_post_image', 1 ) == 1 ) :
							the_post_thumbnail( 'unite-featured', array( 'class' => 'thumbnail' )); 
						endif;
					?>
					<h1 class="entry-title "><?php the_title(); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
				
				<ul class="list-group">
					<?php $terms = wp_get_post_terms($post->ID, 'country');
						if ($terms) {
							echo '<li class="list-group-item"> <strong>Country: </strong>';
							$out = array();
							foreach ($terms as $term) {
								$out[] = '<a class="' .$term->slug .'" href="' .get_term_link( $term->slug, 'country') .'">' .$term->name .'</a>';
							}
							echo join( ', ', $out ) ."</li>";
						} 
					?>
					<?php $terms = wp_get_post_terms($post->ID, 'genre');
						if ($terms) {
							echo '<li class="list-group-item"> <strong>Genre: </strong>';
							$out = array();
							foreach ($terms as $term) {
								$out[] = '<a class="' .$term->slug .'" href="' .get_term_link( $term->slug, 'genre') .'">' .$term->name .'</a>';
							}
							echo join( ', ', $out ) ."</li>";
						} 
					?>
					<?php $terms = wp_get_post_terms($post->ID, 'year');
						if ($terms) {
							echo '<li class="list-group-item"> <strong>Year: </strong>';
							$out = array();
							foreach ($terms as $term) {
								$out[] = '<a class="' .$term->slug .'" href="' .get_term_link( $term->slug, 'year') .'">' .$term->name .'</a>';
							}
							echo join( ', ', $out ) ."</li>";
						} 
					?>
					<?php $terms = wp_get_post_terms($post->ID, 'actor');
						if ($terms) {
							echo '<li class="list-group-item"> <strong>Actors: </strong>';
							$out = array();
							foreach ($terms as $term) {
								$out[] = '<a class="' .$term->slug .'" href="' .get_term_link( $term->slug, 'actor') .'">' .$term->name .'</a>';
							}
							echo join( ', ', $out ) ."</li>";
						} 
					?>
					<?php if( get_field('ticket_price') ): ?>
						<li class="list-group-item"><strong>Ticket price: </strong><?php the_field('ticket_price'); ?></li>
					<?php endif; ?>
					<?php if( get_field('release_date') ): 
					?>
						<li class="list-group-item"><strong>Release date: </strong><?php  the_field('release_date'); ?></li>
					<?php endif; ?>
				</ul>
			</article><!-- #post-## -->
			<?php unite_post_nav(); ?>
		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	

<?php get_sidebar(); ?>

<?php get_footer(); ?>