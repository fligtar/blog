<?php get_header(); ?>

<?php
$post_num = 1;
?>

<?php if (have_posts()) : ?>

	<section class="post-list">

	<?php while (have_posts()) : the_post(); ?>

		<?php
		$custom_fields = get_post_custom($post->ID);
		$bg_position = $custom_fields['bg_position'];
		$bg_color = $custom_fields['bg_color'];
		if (has_post_thumbnail()) {
			$custom_bg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		}
		?>

		<article id="post-<?php the_ID(); ?>" class="post <?php if ($post_num == 1) { echo " header-post"; }?><?php echo has_post_thumbnail() ? "" : " no-bg-yet"; ?>">
		  <?php if (has_post_thumbnail()): ?>
		  <header style="background-image: url(<?php echo $custom_bg[0]; ?>); background-position: 50% <?php echo (!empty($bg_position[0])) ? $bg_position[0] : "40%" ?>;">
		  <?php else: ?>
		  <header>
		  <?php endif; ?>
		    <div class="overlay<?php echo (!empty($bg_color[0])) ? " bg-{$bg_color[0]}" : ""?>">
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
