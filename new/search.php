<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<h1 class="pagetitle">search results for &#147;<?php echo get_search_query(); ?>&#148;</h1>

	<?php while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
	    <header>
		    <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		    <time datetime="<?php the_time('Y-m-d\TH:i:sP') ?>" pubdate><?php the_time('F j<\s\u\p>S</\s\u\p>, Y') ?></time>
      </header>
            
			<div class="entry">
				<?php the_content('continue reading &raquo;'); ?>
			</div>
			
			<footer class="striped"></footer>
		</article>

	<?php endwhile; ?>

	<nav class="page-nav">
		<ul>
		    <li class="left"><?php next_posts_link('&laquo; older posts') ?></li>
		    <li class="right"><?php previous_posts_link('newer posts &raquo;') ?></li>
		</ul>
	</nav>
	
<?php else : ?>
  <div class="error">
    <h1>there's nothing here!</h1>
    <p>try a different search below, or <a href="<?php echo get_option('home'); ?>">start from the beginning</a></p>
    <?php get_search_form(); ?>
  </div>
<?php endif; ?>

<?php get_footer(); ?>