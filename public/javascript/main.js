$(function() {
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-Token': $('meta[name="_token"]').attr('content')
	    }
	});

	// ********* Changes Selected Buttons  *****************
	// ********* On Nav Tab and Detail Dashboard ***********

	$('#leadDetail-tabs a').click(function() {
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
		$('#leadDetail-tabs a').removeClass('selected');
		$('#leadDetail-tabs a.' + curStatus).addClass('selected');
		console.log(curStatus);
	
		var sendData = {
			status: curStatus,
			token: $('.token').val()
		};

		var leadID = $('[name="lead-id"]').val();

		$.post('/api/lead/' + leadID, sendData, function(data) {
			console.log('data');
		});

	});

	$('#lead-tabs a').click(function() {
		var status = '';

		if($(this).hasClass('1')) {
			status = '1';
		} else if($(this).hasClass('2')) {
			status = '2';
		} else if($(this).hasClass('3')) {
			status = '3';
		} else if($(this).hasClass('4')) {
			status = '4';
		} else if($(this).hasClass('5')) {
			status = '5';
		} 
		console.log(status);


		for (var i = 1; i <= 5; i++) {
			rows = $('tr[status-id="'+ i + '"]');
			if (i == status) {
				rows.removeClass('hidden');
			} else {
				rows.addClass('hidden');
			}	
		}

	});

	
	$('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Leads * Opps * Sold'
        },
        xAxis: {
            categories: ['Leads', 'Opps', 'Sold']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total'
            }
        },
        legend: {
            reversed: true
        },
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: '',
            data: [5, 3, $('tr:visible').length-1]
        }]
    
    });





});