// Expand + collapse sections like on People page

function expandCollapse() {
    $(".expand-close").click(function(){
    	$(this).parent().toggleClass("show");
    });
};


// Joke generator used on People page

function randomJoke() {
	$('.jokes button').click(function(){
	    var jokes = new Array(
	    	"A steak pun is a rare medium well done.",
	    	"A man was caught stealing in a supermarket today while balanced on the shoulders of a couple of vampires. He was charged with shoplifting on two counts.",
	    	"The wedding was so beautiful, even the cake was in tiers.",
	    	"Did you hear about the new restaurant on the moon? The food is great, but there’s just no atmosphere.",
	    	"I was thinking about moving to Moscow but there is no point Russian into things.",
	    	"If you’re struggling to think of what to get someone for Christmas... Get them a fridge and watch their face light up when they open it.",
	    	"People are making apocalypse jokes like there’s no tomorrow.",
	    	"Why do crabs never give to charity? Because they’re shellfish.",
	    	"Today a girl said she recognized me from vegetarian club, but I’m sure I’ve never met herbivore.",
	    	"My cat just got sick on the carpet. I don’t think it’s feline well.",
	    	"I dreamed about drowning in an ocean made out of orange soda last night. It took me a while to work out it was just a Fanta sea.",
	    	"I am terrified of elevators. I’m going to start taking steps to avoid them.",
	    	"What’s the advantage of living in Switzerland? Well… the flag is a big plus.",
	    	"A ham sandwich walks into a bar and orders a beer. Bartender says, ‘Sorry we don’t serve food here.",
	    	"What do you call a fake noodle? An Impasta.",
	    	"How does a penguin build its house? Igloos it together.",
	    	"Why did the scarecrow win an award? Because he was outstanding in his field.",
	    	"Why couldn't the bicycle stand up by itself? It was two tired.",
	    	"I went to buy some camouflage trousers the other day but I couldn't find any.",
	    	"The other day I sent my girlfriend a huge pile of snow. I rang her up and said, 'Did you get my drift?'.",
	    	"Four fonts walk into a bar and the bartender says, 'Get out! We don't want your type here!'",
	    	"Where does the king keep his armies? In his sleevies.",
	    	"Last night, I dreamt I was a muffler. I woke up exhausted.",
	    	"Did you hear about the kidnapping at the local elementary school? It’s ok. He woke up."
	    	),
	    	rando = jokes[Math.floor( Math.random() * jokes.length )];
	    $('#joke').text( rando ).show();
	});
};


// Background Videos

function bgVideos() {
	window._wq = window._wq || [];
	_wq.push({ id: "wistia-container", onReady: function(video) {
		video.bind("play", function() {
			// console.log("the video played!");
			$('#auto-video').get(0).pause();
		});
		video.bind("pause", function() {
			// console.log("The video was just paused!");
			$('#auto-video').get(0).play();
		});
	}});
};


// Load functions

window.onload = expandCollapse(), randomJoke(), bgVideos();
