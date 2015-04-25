<?php if ( in_category( 'products' )) {
	add_action('wp_print_styles', 'stylesheet');
	function stylesheet(){?>
	<style>
		p{padding: 0 0 3px;}
        #primary {margin-top:40px;}
		h1.page-title{padding:15px 0 22px 185px;}
		.entry{padding-top:10px;border-top: 1px solid #CCC;}
    </style>
<?php }} ?>

<?php get_header(); ?>
	<div id="primary">
    <h1 class="page-title"><?php printf( __( '%s', 'twentyeleven' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="entry">
            	<aside class="featured">
					<?php if ( has_post_thumbnail()) {
                       $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
                       echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
                       echo get_the_post_thumbnail($post->ID, 'medium'); 
                       echo '</a>';
                       echo '<span>' . get_post( get_post_thumbnail_id() )->post_excerpt . '</span>';
                        } ?>
                </aside>
            	<article class="post" id="post-<?php the_ID(); ?>">
					
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php if(get_field('sku')){ ?>
                            <p>SKU: <?php the_field('sku'); ?></p>
                        <?php } ?>
                        <?php if(get_field('product_description')){ ?>
                            <p>Product Description: <?php the_field('product_description'); ?></p>
                        <?php } ?>
                        <?php if(get_field('price')){ ?>
                            <p class="price alt"><?php the_field('price'); ?></p>
                        <?php } ?>
                    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
                </article>
			</div>
         	<div class="clear"></div>
		<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>