<?php get_header(); ?>
	<div id="primary">
        <div class="entry">
            <h1><?php _e('Error 404 - Page Not Found','html5reset'); ?></h1>
            <p>The page you have requested cannot be found. <br>
			Please try searching or use the navigation menu.</p>
            <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
        </div>
     	<div class="clear"></div>
	</div>
<?php get_footer(); ?>