<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->
		<div class="footer-contact-form flex items-center justify-center">
            <!--
			<div class="contact-box flex-column items-center" style="width: 450px; height: 300px">
				<h1 style="margin: 1em;">Exclusive deals & offers!</h1>
				<input
					placeholder="Email"
					class="contact-input"
				>

				</input>
				<button class="contact-button">Sign me up</button>
			</div>
			-->
            <link rel="stylesheet" href="http://www.chipd.sg/wp-content/plugins/wp-subscription/assets/css/bootstrap.min.css" type="text/css" media="all"/><link rel="stylesheet" href="http://www.chipd.sg/wp-content/plugins/wp-subscription/assets/dist/css/AdminLTE.css"  type="text/css" media="all"/><script type='text/javascript' src='https://code.jquery.com/jquery-2.2.4.min.js'></script><style></style><div class="bootstrap-wrapper support_bs"> <div class="wp_subscription">

                    <h3 class="box-title wp_subscription_title" id="wp_subscription_title1">Exclusive Deals and Offers</h3>

                    <form name="myform1">

                        <div class="wp_subscription_sub_title" id="wp_subscription_sub_title1"></div>
                        <div id="subscribeerrordiv1" class="has-success">
                            <label class="control-label" id="subscribeerror1"></label>
                        </div>
                        <div class="wp_subscription_email form-group">
                            <label for="email1">Email *</label><br>
                            <input type="email" class="form-control" id="email1" name="email" ng-model="email" placeholder="Enter Email" required>
                        </div>
                        <input type="hidden" id="list_id1" name="list_id" value="1">
                        <input type="hidden" id="form1" name="form" value="1">
                        <input type="hidden" id="wp_subscription_token1" name="wp_subscription_token" value="60a707ea870f190525c0ff767e3f225a">

                        <input type="button" id="submit_product1" class="wp_subscription_btn btn btn-primary" name="submit_product" value="Subscribe">

                    </form>
                </div> <script>
                    var $ = jQuery.noConflict();
                    $("#submit_product1").click(function(){
                        var frist_name_ip = $("#frist_name1").val();
                        var last_name_ip = $("#last_name1").val();
                        var email_ip = $("#email1").val();
                        var list_id_ip = $("#list_id1").val();
                        var form_ip = $("#form1").val();
                        var wp_subscription_token = $("#wp_subscription_token1").val();
                        $.ajax({
                            url: 'http://www.chipd.sg/wp-admin/admin-ajax.php?action=wpuser_addsubscriber',
                            data: {
                                frist_name: frist_name_ip,
                                last_name: last_name_ip,
                                email :email_ip,
                                list_id :list_id_ip,
                                form :form_ip,
                                wp_subscription_token :wp_subscription_token
                            },
                            error: function(data) {
                                alert(data['message']);
                            },
                            success: function(data) {
                                var parsed = $.parseJSON(data);
                                $('#subscribeerror1').html(parsed.message);
                                $('#subscribeerrordiv1').removeClass().addClass('has-'+parsed.status);

                                $("#frist_name1").val('');
                                $("#last_name1").val('');
                                $("#email1").val('');
                            },
                            type: 'POST'
                        });
                    });
                </script></div>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				© Chip'd 2016
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>