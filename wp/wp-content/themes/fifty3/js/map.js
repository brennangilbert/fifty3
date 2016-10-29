(function ($) {
	'use strict';

	var formData = {
		action: 'ajax-submit',
		fields: {},
		nonce: fifty3_ajax.ajaxNonce
	};
	var activeStates = {};
	var hoverStates = {};
	var states;

	formData.form_name = 'fetch-states';

	$.post(fifty3_ajax.ajaxURL, formData, function (data) {
		data = $.parseJSON(data);
		states = data.states;
		for (var i = 0; i < states.length; i++) {
			activeStates[states[i]] = {fill: '#8C8E90'};
			hoverStates[states[i]] = {fill: '#7FA7AC'};
		}
	}).always(function () {
		$('#map').usmap({
			showLabels: false,
			stateStyles: {fill: '#383839', stroke: '#FFF'},
			stateHoverStyles: {fill: '#383839'},
			stateSpecificStyles: activeStates,
			stateSpecificHoverStyles: hoverStates,
			click: function (event, data) {
				$("#map > svg > path").each(function () {
					$(this).css('fill', '');
				});

				if ($.inArray(data.name, states)) {
					$('#' + data.name).css('fill', '#7FA7AC');
					$('.state-info > div').hide();
					$('#info-' + data.name).show();
				}
			}
		});
	});
})(jQuery);