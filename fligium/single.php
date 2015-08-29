<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
$custom_fields = get_post_custom($post->ID);
$bg_position = $custom_fields['bg_position'];
$bg_color = $custom_fields['bg_color'];
if (has_post_thumbnail()) {
  $custom_bg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
}
?>

<article id="post-<?php the_ID(); ?>" class="post header-post<?php echo has_post_thumbnail() ? "" : " no-bg-yet"; ?>">
  <?php if (has_post_thumbnail()): ?>
  <header style="background-image: url(<?php echo $custom_bg[0]; ?>); background-position: 50% <?php echo (!empty($bg_position[0])) ? $bg_position[0] : "40%" ?>;">
  <?php else: ?>
  <header>
  <?php endif; ?>
    <div class="overlay<?php echo (!empty($bg_color[0])) ? " bg-{$bg_color[0]}" : ""?>">
      <div class="container">
        <hgroup>
          <h1><?php the_title(); ?></h1>
        </hgroup>
      </div>
    </div>
  </header>

  <section class="content container">

    <div class="metadata">
      <time datetime="<?php the_time('Y-m-d\TH:i:sP') ?>" pubdate><?php the_time('F j, Y') ?></time>
      <?php edit_post_link('&mdash; edit'); ?>
    </div>

    <div class="entry">
      <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
    </div>

  </section>
</article>

<section id="after-post">
  <nav class="post-nav container">
  	<div class="col-xs-12 col-sm-6 left">
      <?php previous_post_link('<span>Previous Post:</span>%link') ?>
    </div>
    <div class="col-xs-12 col-sm-6 right">
  	  <?php next_post_link('<span>Next Post:</span>%link') ?>
    </div>
  </nav>

  <div id="comments" class="container">
    <?php comments_template(); ?>
  </div>
</section>
	
<?php endwhile; else: ?>

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
