<?php query_posts(array('category_name' => 'Products', 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC')); ?>
	<?php while ( have_posts() ) : the_post(); ?>
        <article class="col-sm-4 col-md-3" id="post-<?php the_ID(); ?>">
	        <div class="inner">
		  <?php if ( has_post_thumbnail()) { ?>
              <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
               echo '<a class="fancybox" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
               echo get_the_post_thumbnail($post->ID, 'medium');
               echo '</a>'; ?>
            <?php } ?>
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

            <?php if(get_field('price')){ ?>
            	<p class="price"><?php the_field('price'); ?></p>
            <?php } ?>
            <?php the_field('paypal'); ?>

            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	        </div>
        </article>
<?php endwhile; ?>
<?php wp_reset_query(); ?>