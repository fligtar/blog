<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
	    <header>
		    <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		    <time datetime="<?php the_time('Y-m-d\TH:i:sP') ?>" pubdate><?php the_time('F j, Y') ?></time>
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
    <p><a href="<?php echo get_option('home'); ?>">start from the beginning</a></p>
  </div>
<?php endif; ?>

<?php get_footer(); ?>
