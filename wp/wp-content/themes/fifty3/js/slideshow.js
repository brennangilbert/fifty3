// Randomly show reasons
setInterval(function() {
	$("#slideshow .reason").fadeOut(1000);
	var divs = $("#slideshow .reason.not-shown").get().sort(function(){
		return Math.round(Math.random())-0.5; //so we get the right +/- combo
	}).slice(0,1);
	$(divs).fadeIn(1000).removeClass("not-shown");
}, 4000);