<?php  
	if(function_exists('cs_get_option')){
		$ele_about = cs_get_option('ele_about');
		$about_heading = $ele_about['about_heading'];
		$about_content = $ele_about['about_content'];
		$about_image = $ele_about['about_image'];
		$attachment = wp_get_attachment_image_src( $about_image, 'full' );
		$about_image_url = $attachment[0];
	}
?>
<section id="about" class="section">
    <div class="container">
        <h1>About us</h1>
        <div class="content">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <img src="<?php echo $about_image_url; ?>" alt="About us">
                </div>
                <div class="col-sm-6 col-12">
                    <h3><?php echo $about_heading; ?></h3>
                    <p><?php echo $about_content; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
