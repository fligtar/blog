<?php get_header(); ?>

<?php
$post_num = 1;
?>

<?php if (have_posts()) : ?>

	<section class="post-list">

	<?php while (have_posts()) : the_post(); ?>

		<article class="post no-bg-yet<?php if ($post_num == 1) { echo " header-post"; }?>" id="post-<?php the_ID(); ?>">
			<header>
			  <div class="overlay">
			    <div class="container">
			    	<hgroup>
			    		<?php if ($post_num == 1): ?>
				    		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
						 	  <?php /* If this is a category archive */ if (is_category()) { ?>
								<h2>posts categorized as &#147;<?php single_cat_title(); ?>&#148;</h2>
						 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
								<h2>posts tagged with &#147;<?php single_tag_title(); ?>&#148;</h2>
						 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
								<h2>posts on <?php the_time('F jS, Y'); ?></h2>
						 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
								<h2>posts during <?php the_time('F Y'); ?></h2>
						 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
								<h2>posts during <?php the_time('Y'); ?></h2>
							  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
								<h2>posts by author</h2>
						 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
								<h2>post archives</h2>
						 	  <?php } ?>
						 	<?php endif; ?>
			      	<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			      </hgroup>
			    </div>
			  </div>
			</header>

			<section class="content container">

				<div class="metadata">
		    	<time datetime="<?php the_time('Y-m-d\TH:i:sP') ?>" pubdate><?php the_time('F j, Y') ?></time>
		  	</div>

				<div class="entry">
					<?php the_content('Continue reading'); ?>
		    </div>

			</section>
		</article>

	<?php $post_num++; ?>
	<?php endwhile; ?>

	</section>

	<nav class="page-nav container">
		<div class="col-xs-6 left">
		  <?php next_posts_link('older posts') ?>
		</div>
		<div class="col-xs-6 right">
		  <?php previous_posts_link('newer posts') ?>
		</div>
	</nav>

<?php else : ?>
	<article class="post header-post full-page">
	  <header>
	    <div class="overlay">
	      <div class="container">
	      	<hgroup>
	      		<h1>OOPS!</h1>
	      		<h2>There's nothing here!</h2>
	      	</hgroup>
	      </div>
	    </div>
	  </header>
	</article>
<?php endif; ?>

<?php get_footer(); ?>