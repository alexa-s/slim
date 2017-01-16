$(document).ready(function() {
    $('.carousel-item:eq(0)').addClass('active');
    $('#carouselControls').carousel({
        interval: 5000
    });

    $("img").on("contextmenu",function(){
       return false;
    }); 
});