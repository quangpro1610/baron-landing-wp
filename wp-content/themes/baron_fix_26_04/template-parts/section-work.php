<?php  
	if(function_exists('cs_get_option')){
		$ele_work = cs_get_option('ele_work');
		$work_heading = $ele_work['work_heading'];
		$work_content = $ele_work['work_content'];
		$work_logo = $ele_work['work_logo'];
		$attachment = wp_get_attachment_image_src( $work_logo, 'full' );
		$work_logo_url = $attachment[0];
	}
?>
<section id="work" class="section">
	<div class="container">
		<h1>Our work</h1>
		<div class="content">
			<img src="<?php echo $work_logo_url; ?>" alt="Baron">
			<h2><?php echo $work_heading; ?></h2>
			<p><?php echo $work_content; ?></p>
		</div>
	</div>
</section>