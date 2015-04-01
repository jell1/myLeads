$(function() {
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-Token': $('meta[name="_token"]').attr('content')
	    }
	});

	// ********* Changes Selected Buttons  *****************
	// ********* On Nav Tab and Detail Dashboard ***********

	$('#leadDetail-tabs a, .status-buttons button').click(function() {
		var curStatus = '';
		var status_id = '';
		if($(this).hasClass('lead')) {
			curStatus = 'lead';
			status_id = 1;
		} else if($(this).hasClass('opportunity')) {
			curStatus = 'opportunity';
			status_id = 2;
		} else if($(this).hasClass('sold')) {
			curStatus = 'sold';
			status_id = 3;
		} else if($(this).hasClass('contact-in')) {
			curStatus = 'contact-in';
			status_id = 4;
		} else if($(this).hasClass('dnc')) {
			curStatus = 'dnc';
			status_id = 5;
		} 

		$('.status-buttons button').removeClass('selected');
		$('.status-buttons button.' + curStatus).addClass('selected');
		$('#leadDetail-tabs a').removeClass('selected');
		$('#leadDetail-tabs a.' + curStatus).addClass('selected');
	
		var sendData = {
			status: status_id,
			token: $('.token').val()
		};

		var leadID = $('[name="lead-id"]').val();

		$.post('/api/lead/' + leadID, sendData, function(data) {
			console.log(data);
		});

	});

	// ***********************************************************
	// Filters Leads by status
	// ***********************************************************

	$('#lead-tabs a').click(function() {
		$('#lead-tabs a').removeClass('selected');
		$(this).addClass('selected');
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
            text: 'Leads Opps Sold'
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
            name: 'Charlie',
            data: [11, 5, 4]
        }]
    
    });

    $('#leads-by-category').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Lead by Status'
            },
            subtitle: {
                text: 'April 2015'
            },
            xAxis: {
                categories: [
                    'Lead',
                    'Opp',
                    'Sold'
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Quantity'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Charlie',
                data: [12, 20, 6]

            }, {
                name: 'Frank',
                data: [8, 9, 10]

            }, {
                name: 'Janet',
                data: [15, 21, 9]

            }, {
                name: 'Jane',
                data: [2, 4, 1]

            }]
        });


    $('#bar-by-category').highcharts({
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 100
                }
            },
            title: {
                text: 'Leads by Status'
            },
            subtitle: {
                text: 'April 2015'
            },
            plotOptions: {
                pie: {
                    innerSize: 30,
                    depth: 50
                }
            },
            series: [{
                name: 'Charlie',
                data: [
                    ['Leads', 8],
                    ['Opportunities', 3],
                    ['Sold', 1]
                ]
            }]
        });

    $('#line').highcharts({
            title: {
                text: 'Lead by Status',
                x: -20 //center
            },
            subtitle: {
                text: 'April 2015',
                x: -20
            },
            xAxis: {
                categories: ['Lead', 'Opportunity', 'Sold']
            },
            yAxis: {
                title: {
                    text: 'Quantity'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: ''
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                name: 'Charles',
                data: [15, 14, 21]
            }, {
                name: 'Frank',
                data: [11, 3, 2]
            }, {
                name: 'Jane',
                data: [5,21,13]
            }, {
                name: 'Janet',
                data: [7,4,22]
            }]
        });

    $('#bar-chart').highcharts({

            chart: {
                type: 'column',
                options3d: {
                    enabled: true,
                    alpha: 15,
                    beta: 15,
                    viewDistance: 25,
                    depth: 40
                },
                marginTop: 80,
                marginRight: 40
            },

            title: {
                text: 'Leads by Status'
            },

            xAxis: {
                categories: ['Leads', 'Opportunities', 'Sold']
            },

            yAxis: {
                allowDecimals: false,
                min: 0,
                title: {
                    text: 'Quantity'
                }
            },

            tooltip: {
                headerFormat: '<b>{point.key}</b><br>',
                pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} / {point.stackTotal}'
            },

            plotOptions: {
                column: {
                    stacking: 'normal',
                    depth: 40
                }
            },

            series: [{
                name: 'Charlie',
                data: [5, 3, 4],
                stack: 'male'
            }, {
                name: 'Frank',
                data: [3, 4, 4],
                stack: 'male'
            }, {
                name: 'Jane',
                data: [2, 5, 6],
                stack: 'female'
            }, {
                name: 'Janet',
                data: [3, 0, 4],
                stack: 'female'
            }]
        });
	
	$('#goal-chart').highcharts({
	        chart: {
	            type: 'bar'
	        },
	        title: {
	            text: 'Goal Chart'
	        },
	        xAxis: {
	            categories: ['Goal', 'Sold']
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
	            name: 'Charles',
	            data: [5, 3]
	        }, {
	            name: 'Frank',
	            data: [5, 2]
	        }, {
	            name: 'Jane',
	            data: [5, 4]
	        }, {
	            name: 'Janet',
	            data: [5,5]
	        }]
	    });


});