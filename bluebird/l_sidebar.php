<!-- begin l_sidebar -->

<div id="l_sidebar">

	<ul id="l_sidebarwidgeted">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>

	
	<li>
            <h5>Categories</h5>
		<ul>
			<?php wp_list_categories('orderby=name&show_count=true&title_li=&exclude=1'); ?>
		</ul>
	</li>
		
	<li>
	    <h5>Tags</h5>
	    	<ul>
			<li style="margin: 0; padding: 0; list-style: none;"><?php wp_tag_cloud(); ?></li>
		</ul>
	</li>

	<li>
	    <h5>Search</h5>
		<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="s" id="s" size="12" />
		<input name="sbutt" type="submit" value="Go" />
		</form>
	</li>
	
	<li>
            <h5>Archives</h5>
		<ul>
			<?php wp_get_archives('type=yearly&show_post_count=true'); ?>
		</ul>
	</li>
        
	<?php endif; ?>
	</ul>
	
</div>

<!-- end l_sidebar -->
