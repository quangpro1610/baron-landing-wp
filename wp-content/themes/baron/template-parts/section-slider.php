<?php  
	
	if(function_exists('cs_get_option')){
		$slider_group = cs_get_option('slider_group');
		
		$slide_item = '';
		foreach ($slider_group as $key => $slide) {
			$attachment = wp_get_attachment_image_src( $slide['image'], 'full' );
			$slide_url = $attachment[0];
            $slide_item .= '<div class="slide" style="background: url('.$slide_url.') no-repeat center;background-size: cover;-webkit-background-size: cover;-o-background-size: cover;-moz-background-size: cover;-ms-background-size: cover;">
					<di class="intro">
						<h1>'.$slide['title'].'</h1>
						<p>'.$slide['subtitle'].'</p>
					</di>
				</div>';
		}
	}
?>
<section id="home" class="section section_banner">
	<?php echo $slide_item; ?>
</section>
