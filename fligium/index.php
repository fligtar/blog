<?php get_header(); ?>

<?php
$expanded_posts = 5;
$post_num = 1;
?>

<?php if (have_posts()) : ?>

	<section class="post-list">

	<?php while (have_posts()) : the_post(); ?>

	<?php if (true || $post_num <= $expanded_posts): ?>

		<?php
		$custom_fields = get_post_custom($post->ID);
		$bg_position = $custom_fields['bg_position'];
		$bg_color = $custom_fields['bg_color'];
		?>

		<article id="post-<?php the_ID(); ?>" class="post <?php if ($post_num == 1) { echo " header-post"; }?><?php echo has_post_thumbnail() ? "" : " no-bg-yet"; ?>">
		  <?php if (has_post_thumbnail()): ?>
		  <header style="background-image: url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>); background-position: 50% <?php echo (!empty($bg_position[0])) ? $bg_position[0] : "40%" ?>;">
		  <?php else: ?>
		  <header>
		  <?php endif; ?>
		    <div class="overlay<?php echo (!empty($bg_color[0])) ? " bg-{$bg_color[0]}" : ""?>">
			    <div class="container">
			    	<hgroup>
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

		<?php else: // mini post format discontinued ?>

			<?php if ($post_num == $expanded_posts + 1): ?>
				<section class="mini-post-list">
			<?php endif; ?>

			<a href="<?php the_permalink() ?>" rel="bookmark" class="mini-post">
				<div class="container">
					<span><?php the_title(); ?></span>
					<time datetime="<?php the_time('Y-m-d\TH:i:sP') ?>" pubdate><?php the_time('F j, Y') ?></time>
				</div>
			</a>

		<?php endif; ?>

	<?php $post_num++; ?>
	<?php endwhile; ?>

	<?php if ($post_num > $expanded_posts): ?>
		</section>
	<?php endif; ?>

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
