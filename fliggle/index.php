<?php
if (is_paged()) {
    // If this isn't the first page, it's not actually the index. Send it off
    require dirname(__FILE__).'/index-archives.php';
    return;
}

get_header();
?>


<?php
if (have_posts()):
    $first_post = true;
    
    while (have_posts()):
        the_post();
        
        if ($first_post):
            $first_post = false;
?>

		<article <?php post_class('index-highlight') ?> id="post-<?php the_ID(); ?>">
		    <span class="flag"><a href="<?php the_permalink() ?>">latest post</a></span>
		    <header>
			    <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			    <time datetime="<?php the_time('Y-m-d\TH:i:sP') ?>" pubdate><?php strtolower(the_time('F jS, Y')) ?></time>
            </header>
            
			<div class="entry">
				<?php the_content('read the rest of this entry &raquo;'); ?>
			</div>
		</article>
		
		<aside id="index-sidebar">
		    <div class="headshot-boxes">
    		    <div class="blue"></div>
    		    <div><img src="<?php bloginfo('template_url'); ?>/images/headshot-sm.jpg" alt="Picture of Justin Scott" /></div>
    		    <div class="green"></div>
    		    <div class="purple"></div>
		    </div>
            <div class="about-me">
                <p>Justin Scott is Add-ons Product Manager at Mozilla. He thinks chicken teriyaki is delicious and plays no musical instruments. <a href="<?php bloginfo('siteurl'); ?>/about-me/">read more</a></p>
            </div>
        
            <ul>
                <li class="subscribe"><a href="<?php bloginfo('rss2_url'); ?>">subscribe</a></li>
                <li class="twitter"><a href="http://www.twitter.com/fligtar">follow me on Twitter</a></li>
            </ul>
            </aside>
		
		<section class="index-recent">
		    <span class="flag"><?php next_posts_link('recent posts') ?></span>
		    <dl class="green-links">

<?php else: ?>
    <dt><time datetime="<?php the_time('Y-m-d\TH:i:sP') ?>" pubdate><?php the_time('M. j') ?></time> <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></dt>
    <dd><?php the_excerpt(); ?></dd>
<?php
        endif;
    endwhile;
?>
        </dl>
        
        <p class="green-links more-link"><?php next_posts_link('more recent posts &raquo;') ?></p>
    </section>

<?php else : ?>
    <h1 class="error">no posts found</h1>
    <h2 class="error">try the navigation options below, or <a href="<?php echo get_option('home'); ?>">start from the beginning</a></h2>
<?php endif; ?>

<?php get_footer(); ?>
