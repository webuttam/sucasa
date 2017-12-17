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

		<footer>
                    <div class="container">
                        <div class="row">
                            <div class="footer-sec">
                                <div class="col-sm-2 pull-left">
                                    <div class="footer-logo">
                                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/images/footer-logo.png" /></a>
                                    </div>
                                </div>

                                <div class="col-sm-8 pull-left">
                                    <div class="footer-menu">
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Buy Ticket</a></li>
                                            <li><a href="#">Line Up</a></li>
                                            <li><a href="#">Info</a></li>
                                            <li><a href="#">News</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-sm-2 pull-right">
                                    <div class="footer-menu social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                            </div>
                        </div>
                    </div>
		</footer><!-- footer -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/wow.min.js"></script>
<script>
  new WOW().init();
</script>
<?php wp_footer(); ?>

</body>
</html>
