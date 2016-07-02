<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jp
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div>

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2>
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'jp' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav role="navigation">
			<h2><?php esc_html_e( 'Comment navigation', 'jp' ); ?></h2>
			<div>

				<div><?php previous_comments_link( esc_html__( 'Older Comments', 'jp' ) ); ?></div>
				<div><?php next_comments_link( esc_html__( 'Newer Comments', 'jp' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ul class="c-comments-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size' => 64
				) );
			?>
		</ul><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav role="navigation">
			<h2><?php esc_html_e( 'Comment navigation', 'jp' ); ?></h2>
			<div>

				<div><?php previous_comments_link( esc_html__( 'Older Comments', 'jp' ) ); ?></div>
				<div><?php next_comments_link( esc_html__( 'Newer Comments', 'jp' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p><?php esc_html_e( 'Comments are closed.', 'jp' ); ?></p>
	<?php
	endif;

	$jp_comment_args = array(
		'class_submit'		=> 'c-form__submit c-button u-float-none',
		'comment_field'		=> '<p class="c-form__field"><label for="comment">' . _x( 'Comment', 'noun' ) .
    '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
    '</textarea></p>',
	);?>

	<div class="c-form">
		<?php comment_form($jp_comment_args); ?>
	</div>

</div><!-- #comments -->
