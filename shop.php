<?php
/*
Template Name: Shop
*/
?>

<?php get_header(); ?>
	<div id="primary">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="shop" class="entry">
            	<h1>Museum Shop</h1>
                <?php get_template_part( 'content', 'shop' ); ?>
                <div id="content"><?php the_content(); ?></div>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
         <div class="clear"></div>
		<?php //comments_template(); ?>
		<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>