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

<div id="popup1" class="modal-box">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <header> <a href="#" class="js-modal-close close">×</a></header>
      <div class="modal-body">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/x2kqY43ISPo" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
      </div>
    </div>

  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/wow.min.js"></script>
<script>
  new WOW().init();
</script>

<script>
$(function(){

var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

    $('a[data-modal-id]').click(function(e) {
        e.preventDefault();
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(500, 0.7);
    //$(".js-modalbox").fadeIn(500);
        var modalBox = $(this).attr('data-modal-id');
        $('#'+modalBox).fadeIn($(this).data());
    });  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
    $(".modal-box, .modal-overlay").fadeOut(500, function() {
        $(".modal-overlay").remove();
    });
 
});
 
$(window).resize(function() {
    $(".modal-box").css({
        top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
        left: ($(window).width() - $(".modal-box").outerWidth()) / 2
    });
});
 
$(window).resize();
 
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php wp_footer(); ?>

</body>
</html>
