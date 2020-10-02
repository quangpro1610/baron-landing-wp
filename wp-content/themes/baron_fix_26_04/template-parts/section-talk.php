<?php  
	if(function_exists('cs_get_option')){
		$contact_group = cs_get_option('contact_group');
		$list_contact = '';
		foreach ($contact_group as $key => $contact) {
			$list_contact .= '<div class="item">
                            <p><span>'.$contact['contact_name'].' | </span><span>'.$contact['contact_position'].'</span></p>
                            <p>'.$contact['contact_location'].'</p>
                            <a href="mailto:'.$contact['contact_email'].'">'.$contact['contact_email'].'</a>
                        </div>';
		}
	}
?>
<section id="talk" class="section">
    <div class="container">
        <h1>Lets’ talk</h1>
        <p class="subtitle">Contact us with your enquiries and for the latest information on our portfolio</p>
        <div class="contact-form">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <div class="list-contact">
                        <?php echo $list_contact; ?>
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <?php echo do_shortcode('[contact-form-7 id="19" title="Footer Contact Form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
