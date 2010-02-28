<!-- begin r_sidebar -->

<div id="r_sidebar">

	<ul id="r_sidebarwidgeted">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>

	
	<li>
            <h5>About</h5>
	    <p>This is the personal blog of Justin Scott, likely to contain posts about Mozilla, Firefox add-ons, PHP, and web development.</p>
	</li>
	
        <li>
            <div class="feedarea"><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"> Subscribe to my blog</a></div>
	</li>

	<li>
	    <h5>Status</h5>
	    <ul id="twitter_update_list">
	    	<!-- woo, validation. -->
	    	<li style="display: none;"></li>
	    </ul>
	</li>

	<?php wp_list_bookmarks('title_before=<h5>&title_after=</h5>'); ?>

        <li>
            <h5>Meta</h5>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<?php wp_meta(); ?>
		</ul>
        </li>
	<?php endif; ?>
	
        <li>
            <a href="http://www.spreadfirefox.com/?q=affiliates&amp;id=165750&amp;t=305">
              <img border="0" alt="Firefox 3" title="Firefox 3" src="http://sfx-images.mozilla.org/affiliates/Buttons/firefox3/110x32_best-yet.png" />
            </a>
        </li>
    </ul>
</div>

<!-- end r_sidebar -->
