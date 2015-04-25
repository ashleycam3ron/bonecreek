<?php if ( in_category( 'products' )) {
	add_action('wp_print_styles', 'stylesheet');
	function stylesheet(){?>
	<style>p{padding: 0 0 3px;}</style>
<?php }} ?>

<?php get_header(); ?>
	<div id="primary">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="entry">
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
            	<aside class="featured">
					<?php if ( has_post_thumbnail()) {
                       $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
                       echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
                       echo get_the_post_thumbnail($post->ID, 'medium'); 
                       echo '</a>';
                       echo '<span>' . get_post( get_post_thumbnail_id() )->post_excerpt . '</span>';
                        } ?>
                </aside>     
                <h1 class="entry-title"><?php the_title(); ?></h1>    
                <div class="entry-content">
                	<?php if($post->post_parent === 'news-archive') {
						echo "<h3>";
						the_date('F d, Y');
						echo "</h3>";
						} ?>  
                    <?php if ( in_category( 'products' )) { ?>
                    	 <?php if(get_field('sku')){ ?>
                            <p>SKU: <?php the_field('sku'); ?></p>
                        <?php } ?>
                        <?php if(get_field('product_description')){ ?>
                            <p>Product Description: <?php the_field('product_description'); ?></p>
                        <?php } ?>
                        <?php if(get_field('price')){ ?>
                            <p class="price alt"><?php the_field('price'); ?></p>
                        <?php } ?>
                        <?php the_field('paypal'); ?>
                    
					<?php } ?>              
                    <?php the_content(); ?>   
                    <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
                </div>            
                <?php edit_post_link('Edit this entry','','.'); ?>
            </article>
         </div>
	<?php endwhile; endif; ?>
	<div class="clear"></div>
</div>
<?php get_footer(); ?>