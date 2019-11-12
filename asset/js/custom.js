// custom js

// main navigation hide close
function openNav() {
	document.getElementById("mySidenav").style.height = "100%";
}

function closeNav() {
	document.getElementById("mySidenav").style.height = "0";
}


// A $( document ).ready() block.
$( document ).ready(function() {
	// if($( ".menu-sec ul.menu-bx li" ).has( "ul.sub-menu" )){
	// 	$(".menu-sec ul.menu-bx > li > a").after('<span class="icon-toggle"><i class="fa fa-angle-right" aria-hidden="true"></i></span>');
	// }
	// if($(".menu-sec ul.menu-bx>li" ).children("ul.sub-menu").length){
	// 	$(this).children('a').after('<span class="icon-toggle"><i class="fa fa-angle-right" aria-hidden="true"></i></span>');
	// }
	
	$(".menu-sec ul.menu-bx > li > a").after('<span class="icon-toggle"><i class="fa fa-angle-right" aria-hidden="true"></i></span>');
	
	$(".icon-toggle").on("click", function(){
		$(this).parent().find('.sub-menu').slideToggle(100);
		//$(this).parent().find('.sub-menu').toggleClass('open-menu',300);
		$(this).toggleClass('open');
		$(this).parent().siblings().find('.sub-menu').css('display', 'none');
		$(this).parent().siblings().find('.icon-toggle').removeClass('open');
	});

	$("#contact-form").submit(function (event){
		var f_name = $("#f_name").val();
		var l_name = $("#l_name").val();
		var email = $("#email").val();
		var subject = $("#subject").val();
		var message = $("#message").val();

		var regex_name = /^[a-zA-Z]+$/;
		var regex_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;

		$('.error').remove();
		if(!f_name.match(regex_name) || f_name == ''){
			$(this).find('#f_name').after('<span class="error">Please Insert First Name</span>');
		}
		if(!l_name.match(regex_name) || l_name == ''){
			$(this).find('#l_name').after('<span class="error">Please Insert Last Name</span>');
		}
		if(!email.match(regex_email) || email == ''){
			$(this).find('#email').after('<span class="error">Please Insert Valid Email Address</span>');
		}
		if(subject == ''){
			$(this).find('#subject').after('<span class="error">Please Insert Valid Email Address</span>');
		}

		if($('.error').length < 1){
			return true;
		}else{
			return false;
		}
	});


	
	$('.testimonial-txt-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		asNavFor: '.testimonial-image-slider'
	});
	$('.testimonial-image-slider').slick({
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.testimonial-txt-slider',
		dots: false,
		arrows: false,
		centerMode: true,
		focusOnSelect: true
	});



    //document ready close
});

