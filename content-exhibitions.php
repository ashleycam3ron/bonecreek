<?php 
	if (is_page('current-exhibitions')) {
		query_posts(array('category_name' => 'Current', 'posts_per_page' => -1,'orderby' => 'date', 'order' => 'ASC')); 
		} 
	if (is_page('upcoming-exhibitions')) {
		query_posts(array('category_name' => 'Upcoming', 'posts_per_page' => -1,'orderby' => 'date', 'order' => 'ASC')); 
		}
	if (is_page('past-exhibitions')) {
		query_posts(array('category_name' => 'Past', 'posts_per_page' => -1,'orderby' => 'date', 'order' => 'DESC')); 
		}
	while ( have_posts() ) : the_post(); ?>
    <article class="post" id="post-<?php the_ID(); ?>">
        <aside class="featured">
            <?php if ( has_post_thumbnail()) {
               $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
               echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
               echo get_the_post_thumbnail($post->ID, 'medium'); 
               echo '</a>';
               echo '<span>' . get_post( get_post_thumbnail_id() )->post_excerpt . '</span>';
                } ?>
        </aside>
        <?php echo '<h2>'; the_title(); echo '</h2>';
        the_content(); ?>
        <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
    </article>
<?php endwhile; ?>
<?php wp_reset_query(); ?>