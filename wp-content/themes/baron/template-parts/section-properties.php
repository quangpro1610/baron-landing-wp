<?php  
	if(function_exists('cs_get_option')){
		$properties_group = cs_get_option('properties_group');
		$property_item = '';
		foreach ($properties_group as $key => $property) {
			$attachment = wp_get_attachment_image_src( $property['image'], 'full' );
			$property_image_url = $attachment[0];
			if($key % 2 == 0){
				$property_item .= '<div class="item"><div class="row">
				                    <div class="col-sm-6 col-12">
				                        <div class="desc">
				                            <h3>'.$property['title'].'</h3>
				                            <span>"'.$property['subtitle'].'"</span>
				                            <p>'.$property['content'].'</p>
				                        </div>
				                    </div>
				                    <div class="col-sm-6 col-12">
				                        <div class="image">
				                            <img src="'.$property_image_url.'" alt="'.$property['title'].'">
				                        </div>
				                    </div>
				                </div></div>';
			}else{
				$property_item .= '<div class="item">
					                <div class="row">
					                    <div class="col-sm-6 col-12">
					                        <div class="image">
					                            <img src="'.$property_image_url.'" alt="'.$property['title'].'">
					                        </div>
					                    </div>
					                    <div class="col-sm-6 col-12">
					                        <div class="desc">
					                            <h3>'.$property['title'].'</h3>
					                            <span>"'.$property['subtitle'].'"</span>
					                            <p>'.$property['content'].'</p>
					                        </div>
					                    </div>
					                </div>
					            </div>';
			}
		}
	}
?>
<section id="properties" class="section">
    <div class="container">
        <h1>Properties</h1>
        <div class="list-articles">
        	<?php echo $property_item; ?>
        </div>
    </div>
</section>
