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
		
		<aside id="index-sidebar" class="rounded-box">
		    <div class="headshot">
		        <img src="<?php bloginfo('template_url'); ?>/images/headshot-annotated.jpg" alt="Picture of Justin Scott" />
	        </div>
		    
            <div class="about-me">
                <p class="intro">I'm <strong>Justin Scott</strong> and I work on <a href="https://addons.mozilla.org">add-ons</a> at <a href="http://www.mozilla.com">Mozilla</a>.</p>
                
                <p class="details">I opened my first IHOP franchise at age 12, rode a bucking Giant Seahorse for 7.6 seconds, often go by the pseudonym <em>Gaston du Circus</em>, and compulsively lie in mini-bios.</p>
                
                <p class="more"><a href="<?php bloginfo('siteurl'); ?>/about-me/">more about me</a></p>
            </div>
        
            <ul class="links">
                <li class="subscribe"><a href="<?php bloginfo('rss2_url'); ?>">subscribe</a></li>
                <li class="twitter"><a href="http://www.twitter.com/fligtar">my Twitter follower count seems inadequate</a></li>
            </ul>
        </aside>
		
		<section id="index-recent" class="rounded-box green-box">
		    <span class="flag"><?php next_posts_link('recent posts') ?></span>
		    <dl>

<?php else: ?>
    <dt><time datetime="<?php the_time('Y-m-d\TH:i:sP') ?>" pubdate><?php the_time('M. j') ?></time> <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></dt>
    <dd><?php the_excerpt(); ?></dd>
<?php
        endif;
    endwhile;
?>
        </dl>
        
        <p class="more-link"><?php next_posts_link('more recent posts &raquo;') ?></p>
    </section>
    
    <section id="index-all" class="rounded-box purple-box">
        <span class="flag"><a>all posts</a></span>
        
        <div>
            <div class="categories">
                <h3>categories</h3>
                <ul>
                <?php wp_list_categories('orderby=name&show_count=true&title_li=&exclude=1'); ?>
                </ul>
            </div>
        
            <div class="tags">
                <h3>tags</h3>
                <?php wp_tag_cloud(array('unit' => 'em', 'smallest' => '0.5', 'largest' => '1.5', 'number' => 40)); ?>
            </div>
        </div>
        
        <div class="archives">
            <h3>archives &amp; search</h3>
            <select onchange="window.location.href = this.value;">
            <?php wp_get_archives(array('type' => 'monthly', 'format' => 'option', 'show_post_count' => true)); ?>
            </select>
            
            <?php get_search_form(); ?>
        </div>
    </section>

<?php else : ?>
    <h1 class="error">no posts found</h1>
    <h2 class="error">try the navigation options below, or <a href="<?php echo get_option('home'); ?>">start from the beginning</a></h2>
<?php endif; ?>

<?php get_footer(); ?>
