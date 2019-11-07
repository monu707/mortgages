// custom js

// main navigation hide close
function openNav() {
	document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
}


// A $( document ).ready() block.
$( document ).ready(function() {

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


	// accordian code
	$(".toggle-accordion").on("click", function() {
		var accordionId = $(this).attr("accordion-id"),
		numPanelOpen = $(accordionId + ' .collapse.in').length;

		$(this).toggleClass("active");

		if (numPanelOpen == 0) {
			openAllPanels(accordionId);
		} else {
			closeAllPanels(accordionId);
		}
	})

	openAllPanels = function(aId) {
		console.log("setAllPanelOpen");
		$(aId + ' .panel-collapse:not(".in")').collapse('show');
	}
	closeAllPanels = function(aId) {
		console.log("setAllPanelclose");
		$(aId + ' .panel-collapse.in').collapse('hide');
	}



    //document ready close
});

