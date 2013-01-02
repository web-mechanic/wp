/*jslint regexp: true, vars: true, white: true, browser: true */
/*global jQuery, google */

( function( $ ) {
	"use strict";

	//globals

	//methods

	var smoothScroll = function(e){
		var the_id = $(this).attr("href"); 
		$('html, body').animate({  
			scrollTop:$(the_id).offset().top  
		}, 'slow');  
		e.preventDefault();
	};

	var checkIsNotEmpty = function(id, name){
		var name = name ? name : id,
			$field = $("#"+id);
		if( !$field.val().length ){
			$field.after('<p class="errors">le champ '+name+' ne peut pas être vide</p>');
			return false;
		}
		return true;
	};

	var checkIsMailOk = function(id){
		var $field = $("#"+id);
		var reg = new RegExp('[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}', 'i');

		if(!reg.test($field.val())){
			$field.after('<p class="errors">le champ '+id+" n'est pas valide</p>");
			return false;
		}
		return true;
	};

	var checkContactForm = function(e){

		// keep this before the checks to remove the previous error messages
		$('#sendResponse, .errors').remove();

		var $contactForm = $('#contactForm'),
			isNameOk = checkIsNotEmpty('nom'),
			isemailOk = checkIsNotEmpty('email') && checkIsMailOk('email'),
			istextOk = checkIsNotEmpty('texte');

		if( isNameOk && isemailOk && istextOk ){

			$.ajax({
				url: $contactForm.attr('action'),
				type:"post",
				data: $contactForm.serialize(),
				success:function(data){
					$contactForm.append('<span id="sendResponse">'+data+'</span>')[0].reset();
				},
				error:function(data){
					$("#email").after('<p class="errors">'+data.responseText+'</p>');
				}
			});
		}
		e.preventDefault();
	};

	var checkNewsletterForm = function(e){
		var $newsForm = $('#newsLetterForm'),
			isEmailOk = checkIsNotEmpty('e-mail') && checkIsMailOk('e-mail');

		if(isEmailOk){

			$.ajax({
				url:"http://iacuzzo-giovanni.com/mailchimp/mcapi_listSubscribe.php",
				type:"post",
				data: $newsForm.serialize(),
				success:function(data){
					$newsForm.append('<span id="sendResponse">'+data+'</span>')[0].reset();
				},
				error:function(data){
					$("#e-mail").after('<p class="errors">'+data.responseText+'</p>');
				}
			});
		}
		e.preventDefault();
	};

	//loaded pages
	$(function(){
		$('a[href^="#"]').on("click", smoothScroll);
		$('#contactForm').on("submit", checkContactForm);
		$('#newsLetterForm').on("submit", checkNewsletterForm);
	});


}( jQuery ));