<?php
	if (is_page('current-exhibitions')) {
		query_posts(array('category_name' => 'Current', 'posts_per_page' => -1,'orderby' => 'date', 'order' => 'ASC'));
		}
	if (is_page('upcoming-exhibitions')) {
		query_posts(array('category_name' => 'Upcoming', 'posts_per_page' => -1,'orderby' => 'date', 'order' => 'ASC'));
		}
	if (is_page('past-exhibitions')) {
		query_posts(array('category_name' => 'Past', 'posts_per_page' => -1,'orderby' => 'date', 'order' => 'DESC', 'status' => 'publish'));
		}
	while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>">

      <?php if ( has_post_thumbnail()) { ?>
        <aside class="featured col-md-3">
           <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
               echo '<a class="fancybox" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
               echo get_the_post_thumbnail($post->ID, 'medium');
               echo '</a>';
               echo '<span>' . get_post( get_post_thumbnail_id() )->post_excerpt . '</span>'; ?>
        </aside>
        <div class="col-md-9">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php edit_post_link( __( 'Edit', 'bonecreek' ), '<p class="edit-link"><span class="glyphicon glyphicon-pencil"></span>', '</p>' ); ?>
		</div>
		<?php } else { ?>
		<div class="col-md-12">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php edit_post_link( __( 'Edit', 'bonecreek' ), '<p class="edit-link"><span class="glyphicon glyphicon-pencil"></span>', '</p>' ); ?>
		</div>
		<?php } ?>
    </article>
<?php endwhile; ?>
<?php wp_reset_query(); ?>