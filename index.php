<?php get_header(); ?>
	<div id="main" class="content-area row">
		<div id="content" class="site-content col-xs-8 col-md-9 col-lg-9" role="main">
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
<script type="text/javascript">
	/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	var disqus_shortname = 'chictweak'; // required: replace example with your forum shortname

	/* * * DON'T EDIT BELOW THIS LINE * * */
	(function () {
	    var s = document.createElement('script'); s.async = true;
	    s.type = 'text/javascript';
	    s.src = '//' + disqus_shortname + '.disqus.com/count.js';
	    (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
	}());
</script>