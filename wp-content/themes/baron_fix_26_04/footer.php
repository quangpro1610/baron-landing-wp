<?php 
	if(function_exists('cs_get_option')){
		$baron_facebook = cs_get_option('baron_facebook'); 
		$baron_google   = cs_get_option('baron_google'); 
		$baron_twitter  = cs_get_option('baron_twitter'); 
		$baron_youtube  = cs_get_option('baron_youtube'); 

		$footer_logo = cs_get_option('footer_log');
		$attachment = wp_get_attachment_image_src( $footer_logo, 'full' );
		$footer_logo_url = $attachment[0];
	}
?>
<footer>
	<div class="container">
		<div class="footer-inner">
			<div class="row">
				<div class="col-sm-6 col-12">
					<img src="<?php echo $footer_logo_url; ?>" alt="baron">
					<p>BARON Leisure &copy; <?php echo date('Y'); ?>. All Rights Reserved</p>
					<p>Cayman Islands General Registry No. 323799, 8th June 2017</p>
				</div>
				<div class="col-sm-6 col-12">
					<div class="social-list">
						<p>Stay in touch</p>
						<div class="social-links">
							<a href="<?php echo $baron_facebook; ?>" class="icon icon_facebook" target="_blank" title="Visit to Facebook"></a>
							<a href="<?php echo $baron_google; ?>" class="icon icon_google" target="_blank" title="Visit to Google"></a>
							<a href="<?php echo $baron_twitter; ?>" class="icon icon_twitter" target="_blank" title="Visit to Twitter"></a>
							<a href="<?php echo $baron_youtube; ?>" class="icon icon_youtube" target="_blank" title="Visit to Youtube"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
<!-- <script>new WOW().init();</script> -->
</body>
</html>