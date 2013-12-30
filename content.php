<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'chictweak' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'chictweak' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>
	
	<div class="entry-meta">
		<?php chictweak_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'chictweak' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-meta -->
	<footer class="post-social">
		<a class="social-share social-share-facebook" target="_blank" href="http://facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"></a>
		<a class="social-share social-share-twitter" target="_blank"href="http://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>"></a>
		<!--<a class="social-share social-share-tumblr" target="_blank" href="http://tumblr.com/"></a>-->
		<!--<a class="social-share social-share-pinterest" target="_blank" href="http://pinterest.com/"></a>-->
	</footer>
</article><!-- #post -->
