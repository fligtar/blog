<?php
add_filter('the_content_more_link', 'fligtar_more');

function fligtar_more($text) {
  return '<p class="more-link">'.$text.'</p>';
}


function fligtar_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment;
   if ($depth == 1)
    echo '<div class="thread">';
?>
    <article <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
        <header class="comment-author vcard">
            <?php if ($comment->comment_approved == '0') : ?>
               <em class="awaiting"><?php _e('Your comment is awaiting moderation.') ?></em>
            <?php endif; ?>
            
            <?php echo get_avatar($comment, 32); ?>
         
            <cite><?php echo get_comment_author_link(); ?></cite>
            <span class="metadata">
                <time datetime="<?php comment_date('Y-m-d')?>T<?php comment_time('H:i:sP') ?>" pubdate><?php comment_date('F j, Y') ?> <?php comment_time('g:i a') ?></time>
                <a class="anchor" title="link to this comment" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">#</a>
                <?php 
                if ($comment->comment_type != 'pingback'):
                    comment_reply_link(array_merge( $args, array('reply_text' => 'reply', 'depth' => $depth, 'max_depth' => $args['max_depth'])));
                endif; 
                ?>
            </span>
        </header>
      
      <div class="entry">
          <?php comment_text() ?>
      </div>
    </article>
<?php
}

function fligtar_end_comment($comment, $args, $depth) {
    // Close comment thread
    if ($depth == 0)
        echo '</div>';
}

/**
 * Returns the number of comments on the current post by type.
 * $type can be any of the normal WP comment types:
 *   all, comment, pingback, trackback, pings (pingbacks + trackbacks)
 */
function get_comments_number_by_type($type = 'all') {
	global $id, $wp_query;
	$post_id = (int) $id;
	
    $comments_by_type = &separate_comments($wp_query->comments);

	return count($comments_by_type[$type]);
}

function comments_number_by_type($type = 'all', $zero = false, $one = false, $more = false) {
	$number = get_comments_number_by_type($type);

	if ( $number > 1 )
		$output = str_replace('%', number_format_i18n($number), ( false === $more ) ? __('% Comments') : $more);
	elseif ( $number == 0 )
		$output = ( false === $zero ) ? __('No Comments') : $zero;
	else // must be one
		$output = ( false === $one ) ? __('1 Comment') : $one;

	echo apply_filters('comments_number', $output, $number);
}
?>