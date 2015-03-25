$(function() {

	// ********* Changes Selected Buttons  *****************
	// ********* On Nav Tab and Detail Dashboard ***********

	$(document).on('click', 'nav a', function() {
		$('nav a').removeClass('selected');
		$(this).addClass('selected');

		var curStatus = '';
			if($(this).hasClass('lead')) {
				curStatus = 'lead';
			} else if($(this).hasClass('opportunity')) {
				curStatus = 'opportunity';
			} else if($(this).hasClass('sold')) {
				curStatus = 'sold';
			} else if($(this).hasClass('contact-in')) {
				curStatus = 'contact-in';
			} else if($(this).hasClass('dnc')) {
				curStatus = 'dnc';
			} 

			$('.status-buttons button').removeClass('selected');
			$('.status-buttons button.' + curStatus).addClass('selected');

		})

	$(document).on('click', '.status-buttons button', function() {
		$('.status-buttons button').removeClass('selected');
		$(this).addClass('selected');
		console.log(this);
		console.log('nav a');

		var curStatus = '';
			if($(this).hasClass('lead')) {
				curStatus = 'lead';
			} else if($(this).hasClass('opportunity')) {
				curStatus = 'opportunity';
			} else if($(this).hasClass('sold')) {
				curStatus = 'sold';
			} else if($(this).hasClass('contact-in')) {
				curStatus = 'contact-in';
			} else if($(this).hasClass('dnc')) {
				curStatus = 'dnc';
			} 

			$('nav a').removeClass('selected');
			$('nav a.' + curStatus).addClass('selected');
			console.log('nav a');
		})

})