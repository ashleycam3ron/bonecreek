<?php wp_enqueue_script('cycle', get_stylesheet_directory_uri().'/js/jquery.cycle.all.js', array('jquery'), '2.99'); ?>

<?php get_header(); ?>
	<div id="primary" class="container-fluid">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="entry row">
                    <div id="container">
                      	<div id="nav" class="col-md-3 col-md-offset-1"></div>
                        <div id="slider" class="col-md-8">
                        	<a href="<?php the_field('link1'); ?>"><img src="<?php the_field('img1'); ?>"/></a>
                            <a href="<?php the_field('link2'); ?>"><img src="<?php the_field('img2'); ?>"/></a>
                            <a href="<?php the_field('link3'); ?>"><img src="<?php the_field('img3'); ?>"/></a>
                            <a href="<?php the_field('link4'); ?>"><img src="<?php the_field('img4'); ?>"/></a>
                         </div>
                         <div class="clearfix"></div>
                    </div>
					<div class="container">
                    <div class="col-md-3">
                        <div id="hours">
                          <?php the_content(); ?>
                        </div>
                        <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
                        <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
                	</div>
               <!-- Call to Action -->
                    <?php if (get_field('call')){ ?>
                        <div id="call-to-action">
                        	<span><?php the_field('text'); ?></span>
                            <p><a class="btn-default" href="<?php the_field('btn_link'); ?>"><?php the_field('btn_text'); ?></a></p>
                        </div>
                    <?php } ?>
                    <div class="col-md-3">
                	<?php query_posts( array ( 'category_name' => 'news-archive', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC' ) );
						global $more;
						$more = 0;
						while (have_posts()) : the_post();
							echo "<h2>News</h2>"; ?>
						<?php the_content('[...]'); ?>
                        <p><a class="btn-default" href="/news/news-archive/" class="more">Read More</a></p>
						 <?php endwhile;
						wp_reset_query(); ?>
                    </div>
                    <div class="col-md-3">
                        <?php query_posts( array ( 'category_name' => 'reception', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'ASC' ) );
                            global $more;
                            $more = 0;
                            while (have_posts()) : the_post();
                                echo "<h2>Events</h2>"; ?>
                            <?php the_content('[...]'); ?>
                             <p><a class="btn-default" href="/news/events/" class="more">Read More</a></p>
                             <?php endwhile;
                            wp_reset_query(); ?>
                    </div>
                    <div class="col-md-3">
                        <?php query_posts( array ( 'category_name' => 'events', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'ASC' ) );
                            global $more;
                            $more = 0;
                            while (have_posts()) : the_post();
                                echo "<h2>Upcoming</h2>"; ?>
                            <?php the_content('[...]'); ?>
                             <p><a class="btn-default" href="/news/events/" class="more">Read More</a></p>
                            <?php endwhile;
                            wp_reset_query(); ?>
                    </div>
                </div>
                <div class="clearfix"></div>
                </div>
        <?php endwhile; endif; ?>
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