<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<h1 class="pagetitle">search results for &#147;<?php echo get_search_query(); ?>&#148;</h1>

	<?php while (have_posts()) : the_post(); ?>

    	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    	    <header>
    		    <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
    		    <time datetime="<?php the_time('Y-m-d\TH:i:sP') ?>" pubdate><?php strtolower(the_time('F jS, Y')) ?></time>
            </header>
        
    		<div class="entry">
    			<?php the_content('read the rest of this entry &raquo;'); ?>
    		</div>

    		<footer><?php comments_popup_link('no comments &#187;', '1 comment &#187;', '% comments &#187;'); ?></footer>
    	</article>

	<?php endwhile; ?>

	<nav class="page-nav">
		<ul>
		    <li class="left"><?php next_posts_link('&laquo; older posts') ?></li>
		    <li class="right"><?php previous_posts_link('newer posts &raquo;') ?></li>
		</ul>
	</nav>
	
<?php else : ?>
    <h1 class="error">no posts found</h1>
    <h2 class="error">try a different search below, or <a href="<?php echo get_option('home'); ?>">start from the beginning</a></h2>
    <?php get_search_form(); ?>
<?php endif; ?>

<?php get_footer(); ?>