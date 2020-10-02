jQuery(document).ready(function($) {
 	var myFullpage = new fullpage('#full_page', {
        menu: '#menu',
        anchors: ['sectionHome', 'sectionOurWork', 'sectionProperties', 'sectionApproach', 'sectionAboutUs', 'sectionLetsTalk'],
        autoScrolling: false,
        'navigation': false,
        slidesNavigation: true,
		slidesToSections: true,
		responsiveWidth: 900,
		responsiveSlides: true,
        afterLoad: function(anchorLink, index){
        	var item = index.index;
        	var menu = $('#mainNav').outerHeight();
			if(item == 2){
				$('#properties').find('.image').addClass('animated fadeInLeft slow');
				$('#properties').find('.desc').addClass('animated fadeInRight slow');
			}else if(item == 0){
				$('#mainNav').addClass('transparent');
			}else{
				$('#mainNav').removeClass('transparent');
				$('.section h1').css('padding-top', menu);
			}
		},
		afterRender: function () {
            setInterval(function () {
                myFullpage.moveSlideRight();
            }, 5000);
        }
    });
});