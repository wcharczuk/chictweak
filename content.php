<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>
		<?php chictweak_entry_date(); ?>
		<?php if ( is_single() ) : ?>
		<div class="entry-title"><?php the_title(); ?></div>
		<?php else : ?>
		<div class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</div>
		<?php endif; // is_single() ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content('<div class="post-readmore">Read More</div>'); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'chictweak' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->
	
	<div class="entry-meta">
		<?php chictweak_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'chictweak' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-meta -->
	<footer class="post-social">
		<a class="social-share social-share-facebook" target="_blank" href="http://facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"></a>
		<a class="social-share social-share-twitter" target="_blank"href="http://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>"></a>
	</footer>
</article><!-- #post -->
