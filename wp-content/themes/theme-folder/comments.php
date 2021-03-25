<?php // if has pw protect, there's no comments
if (post_password_required()) {
	return;
} ?>

<div id="comments" class="comments-area">

	<?php if (have_comments()) : ?>
		<h2 class="comments-title">
			<?php
				if (1 === get_comments_number()) {
					printf(
						__('One thought on &ldquo;%s&rdquo;', 'custom-theme'),
						'<span>' . get_the_title() . '</span>'
					);
				} else {
					printf(
						_n('%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'custom-theme'),
						number_format_i18n(get_comments_number()),
						'<span>' . get_the_title() . '</span>'
					);
				}
				?>
		</h2>

		<div class="commentlist">
			<?php wp_list_comments(array(
					'style'         => 'div',
					'avatar_size'   => 48,
				)); ?>
		</div><!-- .commentlist -->


		<?php /* comments nav */ if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
			<nav id="comment-nav-below" class="navigation" role="navigation">
				<div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'custom-theme')); ?></div>
				<div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'custom-theme')); ?></div>
			</nav>
		<?php endif; ?>


		<?php /* comments colesd? */ if (!comments_open() && get_comments_number()) :	?>
			<p class="nocomments"><?php _e('Comments are closed.', 'custom-theme'); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() 
	?>

	<?php comment_form(); ?>

</div><!-- #comments .comments-area -->
