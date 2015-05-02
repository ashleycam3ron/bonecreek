<?php get_header(); ?>
	<div id="primary" class="container">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="entry col-md-10 col-md-offset-1">

            	<?php if ( $post->post_parent == '68' ){ ?>
            		<aside class="featured col-md-3">
						<?php echo get_the_post_thumbnail($post->ID, 'medium');?>
					</aside>
				<?php } else { ?>

				<?php if ( has_post_thumbnail()) { ?>
					<aside class="featured col-md-3">
                       <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
                       echo '<a class="fancybox" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
                       echo get_the_post_thumbnail($post->ID, 'medium');
                       echo '</a>';
                       echo '<span>' . get_post( get_post_thumbnail_id() )->post_excerpt . '</span>';
                       } ?>
					</aside>
                <?php } ?>

                <?php if (is_page(1844)){ ?>
                    <div id="sponsor-buttons">
						<a class="btn" href="http://bonecreek.org/join/membership/sponsorship-levels-benefits/" target="_blank" style="background:#c5942e;">Sponsorship Levels</a>
						<a class="btn" href="http://bonecreek.org/join/membership/sponsor-an-exhibition/" target="_blank" style="background:#618fa9;">Exhibit Sponsorship</a>
						<a class="btn" href="http://bonecreek.org/join/membership/sponsor-an-education-program/" target="_blank" style="background:#999999;">Education Sponsorship</a>
						<a class="btn" href="http://bonecreek.org/contact-us/" target="_blank" style="background:#867f4b;">Contact Us</a>
                    </div>
				<?php } ?>

                <?php if ( has_post_thumbnail()) { ?>
                <div class="col-md-9">
	                <?php } else { ?>
                <div class="col-md-11">
	            <?php } ?>
	            	<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
	                <?php if (is_page('collection')) {
							get_template_part( 'content', 'collection' );
						} if (is_page('events') || is_page('news')) {
							get_template_part( 'content', 'news' );
						} if (is_page('education')) {
							get_template_part( 'content', 'education' );
						} if (is_page('current-exhibitions') || is_page('upcoming-exhibitions') || is_page('past-exhibitions')) {
							get_template_part( 'content', 'exhibitions' );
						} if (is_page(952)) {
							get_template_part( 'content', 'members' );
						} ?>
					<?php
						wp_link_pages( array(
							'before'            => '<div class="page-links">'.__( 'Pages:', 'dazzling' ),
							'after'             => '</div>',
							'link_before'       => '<span>',
							'link_after'        => '</span>',
							'pagelink'          => '%',
							'echo'              => 1
			       		));
			    	?>
					<?php edit_post_link( __( 'Edit', 'bonecreek' ), '<p class="edit-link"><span class="glyphicon glyphicon-pencil"></span>', '</p>' ); ?>
                </div>
			</div>
         <div class="clear"></div>
		<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>