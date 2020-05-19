<?php
// My custom comments output html
function better_comments( $comment, $args, $depth ) {
// Get correct tag used for the comments
if ( 'div' === $args['style'] ) {
	$tag       = 'div';
	$add_below = 'comment';
} else {
	$tag       = 'li';
	$add_below = 'div-comment';
}
echo $tag;
comment_class( empty( $args['has_children'] ) ? '' : 'parent' );
echo 'id="comment-';
comment_ID();
echo '">'.PHP_EOL;
// Switch between different comment types
switch ( $comment->comment_type ) :
case 'pingback' :
case 'trackback' :
echo '<div class="pingback-entry"><span class="pingback-heading">';
esc_html_e( 'Pingback:', 'textdomain' ); 
echo '</span>'; 
comment_author_link(); 
echo '</div>';
break;
default :
if ( 'div' != $args['style'] ) {
echo '<div id="div-comment-<?php comment_ID() ?>" class="comment-body">'.PHP_EOL;
}
echo '<div class="comment-author vcard">'.PHP_EOL;
// Display avatar unless size is set to 0
if ( $args['avatar_size'] != 0 ) {
$avatar_size = ! empty( $args['avatar_size'] ) ? $args['avatar_size'] : 70; // set default avatar size
echo get_avatar( $comment, $avatar_size );
}
// Display author name
printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>', 'textdomain' ), get_comment_author_link() );
echo '</div>'.PHP_EOL;
echo '<div class="comment-details">'.PHP_EOL;
echo '<div class="comment-meta commentmetadata">'.PHP_EOL;
echo '<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">'.PHP_EOL;
printf(
__( '%1$s at %2$s', 'textdomain' ),
get_comment_date(),
get_comment_time()
);
echo '</a>'.PHP_EOL;
edit_comment_link( __( '(Edit)', 'textdomain' ), '  ', '' );
echo '</div>'.PHP_EOL;
echo '<div class="comment-text">'.PHP_EOL;
comment_text();
echo '</div>'.PHP_EOL;
// Display comment moderation text
if ( $comment->comment_approved == '0' ) {
echo '<em class="comment-awaiting-moderation">';
_e( 'Your comment is awaiting moderation.', 'textdomain' );
echo '</em><br/>'.PHP_EOL;
}
echo '<div class="reply">'.PHP_EOL;
// Display comment reply link
comment_reply_link( array_merge( $args, array(
'add_below' => $add_below,
'depth'     => $depth,
'max_depth' => $args['max_depth']
) ) );
echo '</div>'.PHP_EOL;
echo '</div>'.PHP_EOL;
if ( 'div' != $args['style'] ) {
echo '</div>'.PHP_EOL;
}
// IMPORTANT: Note that we do NOT close the opening tag, WordPress does this for us
break;
endswitch; // End comment_type check.
}
