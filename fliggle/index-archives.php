<?php
get_header();

if (have_posts()):
    while (have_posts()):
        the_post();
?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		    <header>
			    <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			    <time datetime="<?php the_time('Y-m-d\TH:i:sP') ?>" pubdate><?php strtolower(the_time('F jS, Y')) ?></time>
            </header>
            
			<div class="entry">
				<?php the_content('read the rest of this entry &raquo;'); ?>
			</div>

			<footer><?php comments_popup_link('no comments &#187;', '1 comment &#187;', '% comments &#187;', 'comments-link', 'comments closed'); ?></footer>
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
