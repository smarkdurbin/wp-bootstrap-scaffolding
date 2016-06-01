<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage renda
 * @since 2016
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
<hr>
<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();
				if ( 1 === $comments_number ) {
					/* translators: %s: post title */
					printf( 'One thought on &ldquo;%s&rdquo;', get_the_title() );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						
							'%1$s thoughts on &ldquo;%2$s&rdquo;'
						,
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
			?>
		</h2>
		<div class="clearfix"></div>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list list-unstyled">
			<?php
			
			    require_once('inc/helpers/wp_bootstrap_comment_walker.php');
			
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 42,
					'walker'      => new Walker_Comment_Ranger(),
					'format'            => 'html5',
					'max_depth'	  => '2',
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>
		
		

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php 'Comments are closed.'; ?></p>
	<?php endif; ?>

    <?php
    
        $commenter = wp_get_current_commenter();
        $req = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        
        $fields =  array(
         
          'author' =>
            '<p class="comment-form-author"><div class="form-group"><label for="author">' . 'Name' . '</label> ' .
            ( $req ? '<span class="required">*</span>' : '' ) .
            '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
            '" ' . $aria_req . ' /></div></p>',
         
          'email' =>
            '<p class="comment-form-email"><div class="form-group"><label for="email">' . 'Email' . '</label> ' .
            ( $req ? '<span class="required">*</span>' : '' ) .
            '<input id="email" name="email" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
            '" ' . $aria_req . ' /></div></p>',
         
          'url' =>
            '<p class="comment-form-url"><div class="form-group"><label for="url">' . 'Website' . '</label>' .
            '<input id="url" name="url" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
            '"   /></div></p>',
        );
            $comments_args = array(
         
                'class_submit' => 'btn btn-default',
                'fields' => apply_filters( 'comment_form_default_fields', $fields ),
                'comment_field' =>  '<p class="comment-form-comment"><div class="form-group"><label for="comment">' . 'Comment' .
                    '</label><textarea id="comment" name="comment" class="form-control"  rows="8" aria-required="true">' .
                    '</textarea></div></p>',
                     'comment_notes_after' => ' ',
                'cancel_reply_link' => '<span class="pull-right fa fa-close"></span>',
                'title_reply'       => 'Reply',
                // 'title_reply_to'    => 'Reply to %s',
            );
    
        comment_form($comments_args);
        
    ?>

</div><!-- .comments-area -->