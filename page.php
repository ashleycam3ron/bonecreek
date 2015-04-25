<?php get_header(); ?>
	<div id="primary">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="entry">
            	<aside class="featured">
            	
            		<?php if ( $post->post_parent == '68' ){ 
						echo get_the_post_thumbnail($post->ID, 'medium'); 
            	
					} else { ?>
					<?php if ( has_post_thumbnail()) {
                       $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
                       echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
                       echo get_the_post_thumbnail($post->ID, 'medium'); 
                       echo '</a>';
                       echo '<span>' . get_post( get_post_thumbnail_id() )->post_excerpt . '</span>';
                        }
                      } ?>
                        
                  <?php if (is_page(1844)){ ?>
                    <div id="sponsor-buttons">
						<a class="btn" href="http://bonecreek.org/join/membership/sponsorship-levels-benefits/" target="_blank" style="background:#c5942e;">Sponsorship Levels</a>
						<a class="btn" href="http://bonecreek.org/join/membership/sponsor-an-exhibition/" target="_blank" style="background:#618fa9;">Exhibit Sponsorship</a>
						<a class="btn" href="http://bonecreek.org/join/membership/sponsor-an-education-program/" target="_blank" style="background:#999999;">Education Sponsorship</a>
						<a class="btn" href="http://bonecreek.org/contact-us/" target="_blank" style="background:#867f4b;">Contact Us</a>	
                    </div>	 
				  <?php } ?>
                </aside>
            	<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
                <?php if (is_page('collection')) {
						get_template_part( 'content', 'collection' );
					} if (is_page('news-archive')) {
						get_template_part( 'news', 'archive' );
					} if (is_page('events') || is_page('news')) {
						get_template_part( 'content', 'news' );
					} if (is_page('education')) {
						get_template_part( 'content', 'education' ); 
					} if (is_page('current-exhibitions') || is_page('upcoming-exhibitions') || is_page('past-exhibitions')) {
						get_template_part( 'content', 'exhibitions' ); 
					} if (is_page(952)) {
						get_template_part( 'content', 'members' );
					} ?>
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
         <div class="clear"></div>
		<?php //comments_template(); ?>
		<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>