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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDYThXrD_BQJQd14YJFWOzv-4HUJ3pAnQo"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js"></script>
<script>
$(window).load(function() {
    var container = document.querySelector('.home-content');
    if ($('.home-content').length) {
      var msnry = new Masonry(container, {
          itemSelector: '.home-content li',
          gutter: 0
      });
    }
});
</script>

<script type="text/javascript">
jQuery(document).ready(function() {
  var locations = [
       ['SWELL HQ', 39.9508394, -75.1584951, 5],
       ['SWELL HQ2', 40.267077, -76.887204, 5],
     ];

     var map = new google.maps.Map(document.getElementById('map'), {
       zoom: 15,
       center: new google.maps.LatLng(),
       mapTypeId: google.maps.MapTypeId.ROADMAP
     });

     var infowindow = new google.maps.InfoWindow();

     var marker, i;
     var markers = new Array();

     for (i = 0; i < locations.length; i++) {
       marker = new google.maps.Marker({
         position: new google.maps.LatLng(locations[i][1], locations[i][2]),
         map: map
       });

       markers.push(marker);

       google.maps.event.addListener(marker, 'click', (function(marker, i) {
         return function() {
           infowindow.setContent(locations[i][0]);
           infowindow.open(map, marker);
         }
       })(marker, i));
     }

     function AutoCenter() {
       //  Create a new viewpoint bound
       var bounds = new google.maps.LatLngBounds();
       //  Go through each...
       $.each(markers, function (index, marker) {
       bounds.extend(marker.position);
       });
       //  Fit these bounds to the map
       map.fitBounds(bounds);
     }
     AutoCenter();

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
