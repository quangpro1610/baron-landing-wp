<?php 
get_header();
?>
<main id="full_page">
	<?php  
		get_template_part('template-parts/section', 'slider');
		get_template_part('template-parts/section', 'work');
		get_template_part('template-parts/section', 'properties');
		get_template_part('template-parts/section', 'approach');
		get_template_part('template-parts/section', 'about');
		get_template_part('template-parts/section', 'talk');
	?>
</main>
<?php
get_footer();
