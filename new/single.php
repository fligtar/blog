<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article <?php post_class('single') ?> id="post-<?php the_ID(); ?>">
    <header>
    	<h1><?php the_title(); ?></h1>
    	<time datetime="<?php the_time('Y-m-d\TH:i:sP') ?>" pubdate><?php the_time('F j, Y') ?></time>
    </header>

		<div class="entry">
			<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
    </div>
        
    <footer>
        <a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-via="fligtar">Tweet</a>
    	<ul class="tags"><?php the_tags( '<li class="tag"><span></span>', '</li><li class="tag"><span></span>', '</li>'); ?></ul>
    	<?php edit_post_link('edit post, yo!'); ?>
    </footer>
	</article>
	
	<nav class="post-nav">
		<ul>
		  <li class="left"><?php previous_post_link('<span>&laquo; previous:</span> %link') ?></li>
		  <li class="right"><?php next_post_link('<span>next:</span> %link <span>&raquo;</span>') ?></li>
	  </ul>
	</nav>
  
	<?php comments_template(); ?>
	
	<footer>
	  <p class="copyright">This post is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-Share Alike 3.0 Unported License</a>.</p>
	</footer>
	
<?php endwhile; else: ?>

    <div class="error">
      <h1>there's nothing here!</h1>
    </div>

<?php endif; ?>

<?php get_footer(); ?>
