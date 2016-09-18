// Filter JS from: https://codepen.io/creotip/pen/dfjeF

$(function() {
	var selectedClass = "";

	$(".fil-cat").click(function(){
		$(".fil-cat").removeClass('active');
		selectedClass = $(this).attr("data-rel");
		$(this).addClass('active'); 

		$("#portfolio").fadeTo(100, 0.1);
		$("#portfolio a").not("."+selectedClass).fadeOut().removeClass('scale-anm');

		setTimeout(function() {
			$("."+selectedClass).fadeIn().addClass('scale-anm');
			$("#portfolio").fadeTo(300, 1);
		}, 300); 

	});
});