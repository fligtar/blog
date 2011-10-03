<?php get_header(); ?>

<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h1 class="pagetitle">posts categorized as &#147;<?php single_cat_title(); ?>&#148;</h1>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h1 class="pagetitle">posts tagged with &#147;<?php single_tag_title(); ?>&#148;</h1>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1 class="pagetitle">posts on <?php the_time('F jS, Y'); ?></h1>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1 class="pagetitle">posts during <?php the_time('F Y'); ?></h1>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h1 class="pagetitle">posts during <?php the_time('Y'); ?></h1>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1 class="pagetitle">posts by author</h1>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1 class="pagetitle">post archives</h1>
 	  <?php } ?>

		<?php while (have_posts()) : the_post(); ?>
  		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
  	    <header>
  		    <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
  		    <time datetime="<?php the_time('Y-m-d\TH:i:sP') ?>" pubdate><?php the_time('F j, Y') ?></time>
        </header>

  			<div class="entry">
  				<?php the_content('continue reading &raquo;'); ?>
  			</div>

  			<footer></footer>
  		</article>

		<?php endwhile; ?>

		<nav class="page-nav">
			<ul>
			    <li class="left"><?php next_posts_link('&laquo; older posts') ?></li>
			    <li class="right"><?php previous_posts_link('newer posts &raquo;') ?></li>
			</ul>
		</nav>
<?php else: ?>
  <div class="error">
    <h1>there's nothing here!</h1>
  </div>
<?php endif; ?>

<?php get_footer(); ?>
