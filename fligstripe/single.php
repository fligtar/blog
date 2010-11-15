<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article <?php post_class('single') ?> id="post-<?php the_ID(); ?>">
    <header>
    	<h1><?php the_title(); ?></h1>
    	<time datetime="<?php the_time('Y-m-d\TH:i:sP') ?>" pubdate><?php the_time('F j<\s\u\p>S</\s\u\p>, Y') ?></time>
    </header>

		<div class="entry">
			<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
    </div>
        
    <footer>
    	<ul class="tags"><?php the_tags( '<li class="tag"><span></span>', '</li><li class="tag"><span></span>', '</li>'); ?></ul>
    	<?php edit_post_link('edit post, yo!'); ?>
    	<div class="striped"></div>
    </footer>
	</article>
	
	<nav class="post-nav">
		<ul>
		  <li class="left"><?php previous_post_link('<span>&laquo; previous:</span> %link') ?></li>
		  <li class="right"><?php next_post_link('<span>next:</span> %link <span>&raquo;</span>') ?></li>
	  </ul>
	</nav>
  
	<?php comments_template(); ?>
	
<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php get_footer(); ?>
