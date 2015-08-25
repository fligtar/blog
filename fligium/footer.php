    </section> <!-- /#content -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <?php wp_footer(); ?>

    <script type="text/javascript">
        var bg_dir = "<?php echo bloginfo('stylesheet_directory'); ?>/images/backgrounds/";
        var bg_images = [
            {
                'image': 'tree',
                'position': '47%'
            },
            {
                'image': 'doublearch',
                'position':'0%'
            },
            {
                'image': 'rice',
                'position':'49%'
            },
            {
                'image': 'chicago',
                'position':'40%'
            },
            {
                'image': 'muirwoods',
                'position':'60%'
            },
            {
                'image': 'bixby',
                'position':'40%'
            },
            {
                'image': 'bumpasshell',
                'position':'40%'
            },
            {
                'image': 'fortpoint',
                'position':'27%'
            },
            {
                'image': 'machupicchu',
                'position':'70%'
            },
            {
                'image': 'oceanbeach',
                'position':'80%'
            },
            {
                'image': 'seattlelibrary',
                'position':'80%'
            }
        ];
        var bg_colors = [
            'blue',
            'green',
            'purple'
        ];

        var bg_num = getRandomInt(0, bg_images.length);
        var color_num = getRandomInt(0, bg_colors.length);

        $(document).ready(function() {
            updatePostBackgrounds();
        });

        function updatePostBackgrounds() {
            $('.post.no-bg-yet header').each(function(i, el) {
                $(el).css('background-image', 'url(' + bg_dir + bg_images[bg_num]['image'] + '.jpg)');
                $(el).css('background-position', '50% ' + bg_images[bg_num]['position']);
                $(el).find('.overlay').addClass('bg-' + bg_colors[color_num]);
                $(el).parent().removeClass('no-bg-yet');

                color_num++;
                if (color_num >= bg_colors.length) color_num = 0;

                bg_num++;
                if (bg_num >= bg_images.length) bg_num = 0;
            });
        }

        function getRandomInt(min, max) {
          return Math.floor(Math.random() * (max - min)) + min;
        }
    </script>

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
