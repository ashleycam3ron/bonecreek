<?php query_posts(array('category_name' => 'Products', 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC')); ?>
	<?php while ( have_posts() ) : the_post(); ?>
        <article class="shop" id="post-<?php the_ID(); ?>">
			<?php if ( has_post_thumbnail()) {
               $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
               echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
               echo get_the_post_thumbnail($post->ID, 'thumbnail'); 
               echo '</a>';
               echo '<span>' . get_post( get_post_thumbnail_id() )->post_excerpt . '</span>';
                } ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
            <?php if(get_field('price')){ ?>
            	<p class="price"><?php the_field('price'); ?></p>
            <?php } ?>
            <?php the_field('paypal'); ?>
            
            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
        </article>
<?php endwhile; ?>
<?php wp_reset_query(); ?>