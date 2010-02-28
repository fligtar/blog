<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <header>
    	    <h1><?php the_title(); ?></h1>
    	    <time datetime="<?php the_time('Y-m-d\TH:i:sP') ?>" pubdate><?php strtolower(the_time('F jS, Y')) ?></time>
        </header>

		<div class="entry">
			<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
        </div>
        
        <footer>
            <ul class="footer-meta chrome">
        		<?php
        		$alt_title = get_post_meta(get_the_ID(), 'alternate_title');
        		if (!empty($alt_title[0])) {
        		?>
        		<li class="rejected"><span>rejected title:</span> <?php echo $alt_title[0]; ?></li>
        		<?php } ?>
    			<li class="tags"><span>tags:</span> <?php the_tags( '', ', ', ''); ?></li>
    			<li class="categories"><span>categories:</span> <?php the_category( ', '); ?></li>
    			<li class="edit"><?php edit_post_link('edit post, yo!'); ?></li>
    		</ul>
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
