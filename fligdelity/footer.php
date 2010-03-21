    </section> <!-- /#content -->
    
    <?php
        /* Figure out if we're on the index page or about page*/
        $big_footer = !is_page('16');
    ?>
    
    <footer id="footer"<?php if (!$big_footer) { echo ' class="small-footer"'; } ?>>
    <?php if ($big_footer): ?>
        <div>
            <section class="about">
                <h3><a href="<?php bloginfo('siteurl'); ?>/about-me/" class="invisible">about me</a></h3>
                <div class="about-me">
                    <a href="<?php bloginfo('siteurl'); ?>/about-me/" class="invisible"><img src="<?php bloginfo('template_url'); ?>/images/headshot-sm.jpg" alt="Picture of Justin Scott" /></a>
                    <p>I'm <strong>Justin Scott</strong>, and I work on <a href="https://addons.mozilla.org">add-ons</a> at <a href="http://www.mozilla.com">Mozilla</a>. I love chicken teriyaki and was a huge Betty White fan long before it became popular to be a Betty White fan.</p>
                    
                    <p class="more"><a href="<?php bloginfo('siteurl'); ?>/about-me/">more about me &raquo;</a></p>
                </div>
                
                <ul>
                    <li class="subscribe"><a href="<?php bloginfo('rss2_url'); ?>">subscribe to feed</a></li>
                    <li class="twitter"><a href="http://www.twitter.com/fligtar">my Twitter follower count seems inadequate</a></li>
                </ul>
            </section>
        
            <section>
                <h3>recent posts</h3>
                <ul>
                <?php wp_get_archives('type=postbypost&limit=5'); ?>
                </ul>
                
                <h3 class="search">search</h3>
                <?php get_search_form(); ?>
            </section>
        
            <section id="archives" class="show-category">
                <h3><strong>posts by </strong><a href="#" onclick="$('#archives').removeClass('show-tags show-date').addClass('show-category'); return false;" id="categories-link" class="invisible">category</a>, 
                <a href="#" onclick="$('#archives').removeClass('show-category show-date').addClass('show-tags'); return false;" id="tags-link" class="invisible">tag</a>, or
                <a href="#" onclick="$('#archives').removeClass('show-tags show-category').addClass('show-date'); return false;" id="date-link" class="invisible">date</a></h3>
                
                <div id="categories">
                    <ul>
                    <?php wp_list_categories('orderby=name&show_count=true&title_li=&exclude=1'); ?>
                    </ul>
                </div>
                
                <div id="tags">
                    <?php wp_tag_cloud(array('unit' => 'em', 'smallest' => '0.8', 'largest' => '1.5', 'number' => 35)); ?>
                </div>
                
                <div id="date">
                    <p>select a month: 
                    <select onchange="window.location.href = this.value;">
                    <?php wp_get_archives(array('type' => 'monthly', 'format' => 'option', 'show_post_count' => true)); ?>
                    </select>
                    </p>
                </div>
            </section>
        </div>
        <?php endif; ?>
        <p class="copyright">Unless otherwise noted, this work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-Share Alike 3.0 Unported License</a>.<br />
        powered by <a href="http://www.wordpress.org">WordPress</a> and <a href="#" onclick="$('body').toggleClass('rainbow'); return false;">rainbows</a></p>
    </footer>
    
    
    <!-- Google Analytics -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-3232120-2']);
        _gaq.push(['_trackPageview']);

        (function() {
        var ga = document.createElement('script');
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 
            'http://www') + '.google-analytics.com/ga.js';
        ga.setAttribute('async', 'true');
        document.documentElement.firstChild.appendChild(ga);
        })();
    </script>
    
    <script type="text/javascript" src="http://g.fligtar.com/jquery.js"></script>
</body>
</html>
