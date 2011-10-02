  </section> <!-- /#content -->

  <script type="text/javascript" src="http://g.fligtar.com/jquery.js"></script>
  <?php wp_footer(); ?>
  
  <?php if ( is_singular() ): ?>
  <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
  <?php endif; ?>
  
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
</body>
</html>
