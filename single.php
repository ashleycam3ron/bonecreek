<?php get_header(); ?>
	<div id="primary">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="entry  col-md-8 col-md-offset-2">
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<aside class="featured col-md-3">
					<?php if ( has_post_thumbnail()) { ?>
                       <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
                       echo '<a class="fancybox" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
                       echo get_the_post_thumbnail($post->ID, 'medium');
                       echo '</a>';
                       echo '<span>' . get_post( get_post_thumbnail_id() )->post_excerpt . '</span>';
                         ?>
					<?php } ?>
				</aside>

                <div class="col-md-9">
	            	<h1><?php the_title(); ?></h1>
	                <div class="entry-content">
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
                </div>
                <?php
					wp_link_pages( array(
						'before'            => '<div class="page-links">'.__( 'Pages:', 'dazzling' ),
						'after'             => '</div>',
						'link_before'       => '<span>',
						'link_after'        => '</span>',
						'pagelink'          => '%',
						'echo'              => 1
		       		) );
		    	?>
				<?php edit_post_link( __( 'Edit', 'bonecreek' ), '<p class="edit-link"><span class="glyphicon glyphicon-pencil"></span>', '</p>' ); ?>
				<div class="clearfix"></div>
            </article>
         </div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>