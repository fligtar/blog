<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
?>

<section id="comments">
  <?php // Display current comments ?>
  <?php if (get_comments_number_by_type('comment') > 0 ): ?>
    
    <h2><?php comments_number_by_type('comment', 'no comments yet', '1 comment', '% comments' );?></h2>
    
    <?php wp_list_comments('type=comment&callback=fligtar_comment&end-callback=fligtar_end_comment&style=div'); ?>
  
  <?php else : // no comments so far ?>

    <?php if ('open' == $post->comment_status) : ?>
      <h2>Comments</h2>
    	<p class="notice">(no comments yet)</p>
    <?php endif; ?>
  <?php endif; ?>
  
  <?php // New comment form ?>
  <?php if ('open' == $post->comment_status) : ?>
    
    <section id="respond">
      <h2><?php comment_form_title( 'add a comment', 'reply to %s' ); ?><em class="cancel-reply"><?php cancel_comment_reply_link('cancel reply'); ?></em></h2>

      <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

      <?php if ($user_ID): ?>
        <p>logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">log out &raquo;</a></p>
      <?php else : ?>
                
        <dl class="left">
          <dt><label for="author">name <span class="required">required</span></label></dt>
          <dd><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" aria-required="true" /></dd>

          <dt><label for="email">e-mail address <span class="required">required</span></label></dt>
          <dd><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="3" aria-required="true" />
          <dd class="info">your e-mail address will never be published</dd>
        </dl>

        <dl class="right">
          <dt><label for="url">website <span>optional</span></label></dt>
          <dd><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="2" /></dd>

          <dt>&nbsp;</dt>
          <dd><?php do_action('comment_form', $post->ID); ?></dd>
        </dl>
                
      <?php endif; ?>
                
      <dl class="clear">
          <dt><label for="comment">comment <span class="required">required</span></label></dt>
          <dd><textarea name="comment" id="comment" cols="60" rows="5" tabindex="5"></textarea></dd>
      </dl>

      <p><input name="submit" type="submit" id="submit" tabindex="6" value="submit comment" /></p>
      
      <?php comment_id_fields(); ?>
      
      </form>
    </section>
    
  <?php else: ?>
      <p class="notice">(this post is more than a year old and new comments have been automatically disabled)</p>
  <?php endif; ?>

  <?php // Display pings and tracebacks ?>
  <?php if (get_comments_number_by_type('pings') > 0): ?>
    <p class="show-pings"><a href="#pings" onclick="$('#pings').show(); $(this).hide(); return false;"><?php comments_number_by_type('pings', 'no pings yet', 'show 1 ping', 'show % pings' ); ?></a></p>
    <section id="pings">
    	<h2><?php comments_number_by_type('pings', 'no pings yet', '1 ping', '% pings' );?></h2>
	
    	<?php wp_list_comments('type=pings&callback=fligtar_comment&end-callback=fligtar_end_comment'); ?>
    </section>
  <?php endif; ?>
</section>