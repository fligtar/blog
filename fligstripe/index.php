<?php get_header(); ?>

<?php if (have_posts()) : ?>

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
    <h1 class="error">no posts found</h1>
    <h2 class="error">try the navigation options below, or <a href="<?php echo get_option('home'); ?>">start from the beginning</a></h2>
<?php endif; ?>

<?php get_footer(); ?>
