<?php wp_enqueue_script('cycle', get_stylesheet_directory_uri().'/js/jquery.cycle.all.js', array('jquery'), '2.99'); ?>
<?php get_header(); ?>
	<div id="primary">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="entry">
                    <section>
                        <article class="post" id="post-<?php the_ID(); ?>">
                          <div id="container">
                          	<div id="nav"></div>
                            <div id="slider">
                            	<a href="<?php the_field('link1'); ?>"><img src="<?php the_field('img1'); ?>"/></a>
                                <a href="<?php the_field('link2'); ?>"><img src="<?php the_field('img2'); ?>"/></a>
                                <a href="<?php the_field('link3'); ?>"><img src="<?php the_field('img3'); ?>"/></a>
                                <a href="<?php the_field('link4'); ?>"><img src="<?php the_field('img4'); ?>"/></a>
                             </div>
                           </div>
                        </article>
                    </section>
                        <article class="post" id="post-<?php the_ID(); ?>">
                            <div id="hours">
                              <?php the_content(); ?>
                            </div>
                            <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
                            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
                    	</article>
                   <!-- Call to Action -->
                        <?php if (get_field('call')){ ?>
                            <article id="call-to-action">
                            	<span><?php the_field('text'); ?></span>
                                <a href="<?php the_field('btn_link'); ?>"><?php the_field('btn_text'); ?></a>
                            </article>
                        <?php } ?>
                        <article>
                    	<?php query_posts( array ( 'category_name' => 'news-archive', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC' ) );
							global $more;
							$more = 0;
							while (have_posts()) : the_post();
								echo "<h2>News</h2>"; ?>
							<?php the_content('[...]'); ?>
                            <a href="/news/news-archive/" class="more">Read More</a>
							 <?php endwhile;
							wp_reset_query(); ?>
                        </article>
                        <article>
                            <?php query_posts( array ( 'category_name' => 'reception', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'ASC' ) );
                                global $more;
                                $more = 0;
                                while (have_posts()) : the_post();
                                    echo "<h2>Events</h2>"; ?>
                                <?php the_content('[...]'); ?>
                                <a href="/news/events/" class="more">Read More</a>
                                 <?php endwhile;
                                wp_reset_query(); ?>
                        </article>
                        <article>
                            <?php query_posts( array ( 'category_name' => 'events', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'ASC' ) );
                                global $more;
                                $more = 0;
                                while (have_posts()) : the_post();
                                    echo "<h2>Upcoming</h2>"; ?>
                                <?php the_content('[...]'); ?>
                                <a href="/news/events/" class="more">Read More</a>
                                <?php endwhile;
                                wp_reset_query(); ?>
                        </article>
                </div>
        <?php endwhile; endif; ?>
    <div class="clear"></div>
	</div>
    <script>
		jQuery(document).ready(function(){
			var titles = ['<?php the_field('title1'); ?>', '<?php the_field('title2'); ?>', '<?php the_field('title3'); ?>', '<?php the_field('title4'); ?>'];
			jQuery("#slider").cycle({
				fx:'fade',
				timeout: 5000,
				pager: '#nav',
				pagerAnchorBuilder: function (index) {
					return '<a href="#">' + titles[index] + '</a>';
				}
			});
		});
	</script>
<?php get_footer(); ?>