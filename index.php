<?php get_header(); ?>
	<div id="main" class="content-area row">
		<div id="content" class="site-content col-xs-8 col-md-8 col-lg-8" role="main">
			<?php if ( have_posts() ) : ?>
				<?php /* The loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
				<?php chictweak_paging_nav(); ?>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
		</div><!-- #content -->
		<?php get_sidebar(); ?>
	</div><!-- #main -->
<?php get_footer();?>