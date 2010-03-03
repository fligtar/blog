    </section> <!-- /#content -->
    
    <?php
        /* Figure out if we're on the index page */
        $on_index = (is_front_page() && !is_paged());
    ?>
    
    <footer id="footer"<?php if ($on_index) { echo ' class="index-footer"'; } ?>>
    <?php if (!$on_index): ?>
        <div>
            <section class="about">
                <h3><a href="<?php bloginfo('siteurl'); ?>/about-me/" class="invisible">about the author</a></h3>
                <div class="about-me">
                    <a href="<?php bloginfo('siteurl'); ?>/about-me/" class="invisible"><img src="<?php bloginfo('template_url'); ?>/images/headshot-sm.jpg" alt="Picture of Justin Scott" /></a>
                    <p>Justin Scott is Add-ons Product Manager at Mozilla. He thinks chicken teriyaki is delicious and plays no musical instruments. <a href="<?php bloginfo('siteurl'); ?>/about-me/">read more</a></p>
                </div>
                
                <ul>
                    <li class="subscribe"><a href="<?php bloginfo('rss2_url'); ?>">subscribe</a></li>
                    <li class="twitter"><a href="http://www.twitter.com/fligtar">follow me on Twitter</a></li>
                </ul>
                
                <h3>search</h3>
                <?php get_search_form(); ?>
            </section>
        
            <section>
                <h3>recent posts</h3>
                <ul>
                <?php wp_get_archives('type=postbypost&limit=5'); ?>
                </ul>
            </section>
        
            <section id="tagcats">
                <h3><a href="#" onclick="$('#tagcats').removeClass('show-tags'); return false;" id="categories-link" class="invisible">categories</a>
                 &amp; 
                <a href="#" onclick="$('#tagcats').addClass('show-tags'); return false;" id="tags-link" class="invisible">tags</a></h3>
                
                <div id="categories">
                    <ul>
                    <?php wp_list_categories('orderby=name&show_count=true&title_li=&exclude=1'); ?>
                    </ul>
                </div>
                
                <div id="tags">
                    <?php wp_tag_cloud(); ?>
                </div>
            </section>
        </div>
        <?php endif; ?>
        <p class="copyright">Unless otherwise noted, this work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-Share Alike 3.0 Unported License</a>.<br />
        powered by <a href="http://www.wordpress.org">WordPress</a> and rainbows</p>
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
