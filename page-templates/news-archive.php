<?php
/*
Template Name: News Archive
*/

?>
<?php get_header();?>
<div id="primary" class="container">
	<div class="entry col-md-8 col-md-offset-2">
		<h1><?php the_title(); ?></h1>
  <?php
	$big = 999999999; // need an unlikely integer

	// set the "paged" parameter (use 'page' if the query is on a static front page)
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	$args = array(
		'post_type' => 'post',
		'category_name' => 'News Archive',
		'posts_per_page' => 5,
		'paged' => $paged,
		'orderby' => 'date',
		'order' => 'DESC' );
	$wp_query = new WP_Query( $args );
	while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

	    <article class="row" id="post-<?php the_ID(); ?>">
			<aside class="featured col-md-3">
			   <?php if ( has_post_thumbnail()) { ?>
	              <a href="<?php the_permalink(); ?>">
	               	<?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
	              </a>
	            <?php } else { ?>
		          <a href="<?php the_permalink(); ?>">
	               	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-default.jpg" width="150" height="150">
	              </a>
	            <?php } ?>
			</aside>
			<div class="col-md-9">
		        <a href="<?php the_permalink(); ?>">
			        <h2><?php the_title(); ?></h2>
			    </a>
			    <p class="date"><?php the_date('F d, Y'); ?></p>
			    <?php the_excerpt(); ?>
			</div>
	    </article>

	<?php endwhile; ?>

	<?php if ($wp_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
	  <?php if (function_exists("wp_bs_pagination")){
         //wp_bs_pagination($the_query->max_num_pages);
         wp_bs_pagination();
		}
		?>
	<?php } ?>

	</div>
</div>
<?php get_footer();?>