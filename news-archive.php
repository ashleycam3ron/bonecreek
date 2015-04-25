<?php if (is_page('news-archive')) {
	query_posts(array('category_name' => 'News Archive', 'posts_per_page' => -1,'orderby' => 'date', 'order' => 'DESC'));
		while ( have_posts() ) : the_post(); ?>
        <article class="post" id="post-<?php the_ID(); ?>">
            <!--<aside class="featured">
                <?php /* if ( has_post_thumbnail()) {
                   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
                   echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
                   echo get_the_post_thumbnail($post->ID, 'medium'); 
                   echo '</a>';
                    }*/ ?>
            </aside>-->
            <a style="float:left;clear:left;" target="_blank" href="<?php the_permalink(); ?>"><?php the_date('F d, Y'); echo " - "; the_title(); ?></a>
        </article>
<?php endwhile; ?>
<?php wp_reset_query(); } ?>