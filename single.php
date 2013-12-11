<?php get_header();  ?>
	<div id="primary" class="content-area row">
		<div id="content" class="site-content col-xs-8 col-md-8 col-lg-8" role="main">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php chictweak_post_nav(); ?>
			<?php endwhile; ?>
		</div><!-- #content -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->
<?php get_footer(); ?>