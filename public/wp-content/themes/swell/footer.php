<div class="global-footer">
    <p>
        <a title="Follow us on Facebook" href="https://www.facebook.com/swellbook" target="_blank"><img src="images/footer-facebook.png"></a>
        <a title="Follow us on Instagram" href="https://instagram.com/swell_phl" target="_blank"><img src="images/footer-insta.png"></a>
        <a title="Email Us" href="mailto:talktous@swellstart.com"><img src="images/icon-email.png"></a>
    </p>
</div>
<?php wp_footer(); ?>
<!-- ./wp_footer -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="/wp-content/themes/swell/dist/js/site.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js"></script>
<script>
$(window).load(function() {
    var container = document.querySelector('.home-content');
    var msnry = new Masonry(container, {
        // options

        itemSelector: '.home-content li',
        gutter: 0
    });
});
</script>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-33459013-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
</body>
</html>
