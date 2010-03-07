<?php get_header();
remove_filter ('the_content',  'wpautop'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article class="post single" id="post-<?php the_ID(); ?>">
	    <header>
	        <h1><?php the_title(); ?></h1>
	    </header>
	    
		<div class="entry">
			<?php the_content('<p class="serif">read the rest of this page &raquo;</p>'); ?>
		</div>
	</article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>