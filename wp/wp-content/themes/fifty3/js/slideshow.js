// $("#slideshow > div:gt(0)").hide();

var uniqueRandoms = [];
var numRandoms = 5;
function makeUniqueRandom() {
    // refill the array if needed
    if (!uniqueRandoms.length) {
        for (var i = 0; i < numRandoms; i++) {
            uniqueRandoms.push(i);
        }
    }
    var index = Math.floor(Math.random() * uniqueRandoms.length);
    var val = uniqueRandoms[index];

    // now remove that value from the array
    uniqueRandoms.splice(index, 1);

    return val;
}

setInterval(function() {
	$("#slideshow .reason").fadeOut(1000);
	var divs = $("#slideshow .reason").get().sort(function(){ 
		return Math.round(Math.random())-0.5; //so we get the right +/- combo
	}).slice(0,1);
	$(divs).fadeIn(1000).removeClass("not-shown");
	// $(divs).appendTo(divs[0].parentNode).show();
	// .next()
	// .end()
	// .appendTo('#slideshow');
}, 4000);
// $("#slideshow .reason").addClass('color-' + (makeUniqueRandom() + 1));


// $(divs).appendTo(divs[0].parentNode).show();