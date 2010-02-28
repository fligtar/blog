<div id="sidebar">
  <h2>Search this site</h2>
  <div id="searchdiv">
    <form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="text" name="s" id="s" size="20"/>
      <input name="sbutt" type="submit" value="Go" alt="Submit"  />
    </form>
  </div>
  <ul>
    <?php get_links_list(); ?>
  </ul>
  <h2>
    <?php _e('Categories'); ?>
  </h2>
  <ul>
    <?php list_cats(0, '', 'name', 'asc', '', 1, 0, 0, 1, 1, 1, 0,'','','','','', 0) ?>
  </ul>
  <h2>
    <?php _e('Meta'); ?>
  </h2>
  <ul>
    <?php wp_register(); ?>
    <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>">
      <?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?>
      </a></li>
    <li>
      <?php wp_loginout(); ?>
    </li>
    <?php wp_meta(); ?>
  </ul>
  <div style="text-align: center;">
    <a href="http://www.spreadfirefox.com/?q=affiliates&amp;id=165750&amp;t=305">
      <img border="0" alt="Firefox 3" title="Firefox 3" src="http://sfx-images.mozilla.org/affiliates/Buttons/firefox3/110x32_best-yet.png" />
    </a>
  </div><br />
  <div style="text-align: center;">
    <a href="http://www.makemeamerica.com">
      <img border="0" src="http://i.fligtar.com/makemeamerica.gif" alt="Make Me America" />
    </a>
  </div>
</div>