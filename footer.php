<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->
        <?php if ( is_home() &&  is_front_page() ) : ?>
        <div id="googleMap" style="width:100%;height:300px;"></div>
        <?php endif; ?>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
                <div class="row">
                    <div class="col">
                        <h3><i class="fa fa-home" aria-hidden="true"></i> &nbsp;Contact Us</h3>
                        <h6><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;CBNO Building, Libertad St., Dumaguete City</h6>
                        <h3><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;Call Us</h3>
                        <h6><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;(035) 225-1708, 422-6931</h6>
                    </div>
                    <div class="col">
                        <div class="col">
                            <h6><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;BSP Certificate of  Authority: MBR No. 182, dated March 5, 1993CDA Registration  No.QC-029-FCB </h6>
                            <h6><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;Cooperative Bank of Negros Oriental @2017</h6>
                        </div>
                    </div>
                    <div class="col">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
                    </div>
                </div>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
<?php if ( is_home() &&  is_front_page() ) : ?>
<script>
    function initMap() {
        var myLatLng = {lat: 9.306259, lng: 123.304281};

        var map = new google.maps.Map(document.getElementById('googleMap'), {
            zoom: 19,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrTV0B6mOFeCBw9Rz7kKj17jSEA4cQ9Yg&callback=initMap"></script>
<?php endif; ?>
</body>
</html>
