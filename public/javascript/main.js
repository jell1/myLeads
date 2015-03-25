$(function() {

	// ********* Changes Selected Buttons  *****************
	// ********* On Nav Tab and Detail Dashboard ***********

	$('.status-buttons button, nav a').click(function() {
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
		$('nav a').removeClass('selected');
		$('nav a.' + curStatus).addClass('selected');
	
		var sendData = {
			status: curStatus
		};

		// .post('/api/lead/{lead_id}', sendData, function(data) {
		// 	console.log(data);
		// });
	});

})