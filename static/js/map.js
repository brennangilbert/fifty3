$(document).ready(function() {
	$('#map').usmap({
		showLabels: false,
		stateStyles: {fill: '#383839', stroke: '#FFF'},
		stateHoverStyles: {fill: '#383839'},
		stateSpecificStyles: {
			'AL': {fill: '#8C8E90'},
			'AZ': {fill: '#8C8E90'},
			'CA': {fill: '#8C8E90'},
			'CO': {fill: '#8C8E90'},
			'FL': {fill: '#8C8E90'},
			'GA': {fill: '#8C8E90'},
			'ID': {fill: '#8C8E90'},
			'IL': {fill: '#8C8E90'},
			'IN': {fill: '#8C8E90'},
			'LA': {fill: '#8C8E90'},
			'MA': {fill: '#8C8E90'},
			'MD': {fill: '#8C8E90'},
			'MN': {fill: '#8C8E90'},
			'MO': {fill: '#8C8E90'},
			'MS': {fill: '#8C8E90'},
			'NC': {fill: '#8C8E90'},
			'OK': {fill: '#8C8E90'},
			'TX': {fill: '#8C8E90'},
			'WI': {fill: '#8C8E90'}
		},
		stateSpecificHoverStyles: {
			'AL': {fill: '#7FA7AC'},
			'AZ': {fill: '#7FA7AC'},
			'CA': {fill: '#7FA7AC'},
			'CO': {fill: '#7FA7AC'},
			'FL': {fill: '#7FA7AC'},
			'GA': {fill: '#7FA7AC'},
			'ID': {fill: '#7FA7AC'},
			'IL': {fill: '#7FA7AC'},
			'IN': {fill: '#7FA7AC'},
			'LA': {fill: '#7FA7AC'},
			'MA': {fill: '#7FA7AC'},
			'MD': {fill: '#7FA7AC'},
			'MN': {fill: '#7FA7AC'},
			'MO': {fill: '#7FA7AC'},
			'MS': {fill: '#7FA7AC'},
			'NC': {fill: '#7FA7AC'},
			'OK': {fill: '#7FA7AC'},
			'TX': {fill: '#7FA7AC'},
			'WI': {fill: '#7FA7AC'}
		},
		click: function(event, data) {
			$("#map > svg > path").each(function(){
				$(this).css('fill', '');
			});
			if( (data.name == 'AL') || (data.name == 'AZ') || (data.name == 'CA') || (data.name == 'CO') || (data.name == 'FL') || (data.name == 'GA') || (data.name == 'ID') || (data.name == 'IL') || (data.name == 'IN') || (data.name == 'LA') || (data.name == 'MA') || (data.name == 'MD') || (data.name == 'MN') || (data.name == 'MO') || (data.name == 'MS') || (data.name == 'NC') || (data.name == 'OK') || (data.name == 'TX') || (data.name == 'WI') ) {
				$('#' + data.name).css('fill', '#7FA7AC');

				// If you want to scroll down a bit, but fires everytime :/
				
				// $('html, body').animate({
				// 	scrollTop: $(window).scrollTop() + 300
				// }, 1000);

				$('.state-info > div').hide();
				$('#info-' + data.name).show();
			}
    	}
	});
});