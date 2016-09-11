// Animate header on scroll
// http://callmenick.com/post/animated-resizing-header-on-scroll
// Modified to use jQuery

function headerAnimation() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 160
        if ($( "body" ).hasClass("home")) {
            if (distanceY > shrinkOn) {
                $( "header" ).addClass( "normal" );
            } else {
                $( "header" ).removeClass( "normal" );
            }
        }
    });
};


// Mobile Menu

function headerMenu() {
    $("#menu-button").click(function(){
        $("body > header").toggleClass("show");
        $("#header-menu").toggleClass("show");
        // $(this).removeClass("show");
    });
    // $("#menu-close").click(function(){
    //     $("body > header").removeClass("show");
    //     $("#header-menu").removeClass("show");
    //     $("#menu-button").addClass("show");
    // });
};


window.onload = headerAnimation(), headerMenu();