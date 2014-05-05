<?php
/*
Template Name: Slider Page
*/
?>
<?php get_header(); ?>

<section class="content">

	<?php get_template_part('inc/page-title'); ?>
	
	<div class="pad group">
		
		
		
		<?php while ( have_posts() ): the_post(); ?>
		
			<article <?php post_class('group'); ?>>
				
				<?php get_template_part('inc/page-image'); ?>
				
				<div class="entry">
					<?php the_content(); ?>
					<div class="clear"></div>
				</div><!--/.entry-->
				
			</article>
			<?php if (is_active_sidebar('home-left')) : ?>
				<div class="s2 customHome">
					<?php dynamic_sidebar('home-left'); ?>
				</div>
			<?php endif; ?>
			<?php if (is_active_sidebar('home-right')) : ?>
				<div class="s2 customHome">
					<?php dynamic_sidebar('home-right'); ?>
				</div>
			<?php endif; ?>

			
			<?php if ( ot_get_option('page-comments') != '' ) { comments_template('/comments.php',true); } ?>
			
		<?php endwhile; ?>
		
	</div><!--/.pad-->
	
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>