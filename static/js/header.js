// Animate header on scroll
// http://callmenick.com/post/animated-resizing-header-on-scroll
// Modified to use jQuery

function headerAnimation() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 200
        if ($( "body" ).hasClass("home")) {
            if (distanceY > shrinkOn) {
                $( "header" ).addClass( "normal" );
            } else {
                $( "header" ).removeClass( "normal" );
            }
        }
    });
}
window.onload = headerAnimation();