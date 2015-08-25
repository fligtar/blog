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
			    			<h2>search results for &#147;<?php echo get_search_query(); ?>&#148;</h2>
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
