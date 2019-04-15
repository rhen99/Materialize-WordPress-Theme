<div class="comments">
    <?php

    function my_comments_callback( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
 
    ?>
    <div <?php comment_class('comment'); ?> id="div-comment-<?php comment_ID(); ?>">
	<div class="comment-image">
		<?php echo get_avatar($comment, 25); ?>
	</div>
	<div class="comment-inner">
		<div class="comment-content">
			<div class="comment-meta">
				<h6 class="comment-author"><?php comment_author(); ?></h6>
				<strong><?php comment_date(); ?></strong>
			</div>
			<?php if($comment->comment_approved === '0'): ?>
			    <p class="yellow-text text-darken-3"><?php  _e( 'Your comment is awaiting moderation.' );  ?></p>
			    <?php else: ?>
				    <?php comment_text(); ?>
    			<?php endif;?>
			<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'lagstheme1' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div>
	</div>
    </div>
    <?php
}

     $args = array(
	'callback'          => 'my_comments_callback',
	'max_depth' => 2
);


$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
$fields =  array(
    
	'author' => '<p class="comment-form-author input-field">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="author" name="author" type="text" ' . $aria_req . ' /></p>',
    
	'email'  => '<div class="comment-form-email input-field"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
	'<input id="email" class="validate" name="email" type="text" ' . $aria_req . ' /></div>',
);

$comments_args = array(
	//Fields
	'fields' => $fields,
        // change the title of send button 
        'label_submit'=>'Post Comment',
        // change the title of the reply section
        'title_reply'=>'Write a Reply or Comment',
        // remove "Text or HTML to be displayed after the set of comment fields"
	'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
	'comment_field' => '<div class="comment-form-comment input-field"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true" class="materialize-textarea"></textarea></div>',
	'class_submit' => 'btn pink darken-4'
);

comment_form($comments_args);

wp_list_comments($args, $comments); 
 ?>
</div>