<?php  
	if(function_exists('cs_get_option')){
		$approach_group = cs_get_option('approach_group');
		$approach_item = '';
		foreach ($approach_group as $key => $approach) {
			$approach_item .= '<div class="col-sm-3 col-12">
				                    <div class="approach__item">
				                        <span class="big-number">'.$key.'</span>
				                        <h4>'.$approach['approach_title'].'</h4>
				                        <p>'.$approach['approach_content'].'</p>
				                    </div>
				                </div>';
		}
	}
?>
<section id="approach" class="section">
    <div class="container">
        <h1>Approach</h1>
        <div class="content">
            <div class="row">
            	<?php echo $approach_item; ?>
            </div>
        </div>
    </div>
</section>
