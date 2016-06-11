$(document).ready(function () {

	$("#header_nav").sticky({topSpacing:0});

	$(".current-menu-item").addClass("active");
    
    $(window).scroll(function() {
        if($(this).scrollTop() !=0) {
            $('#up_button').fadeIn();
        } else {
            $('#up_button').fadeOut();
        }
    });
    $('#up_button').click(function() {
        $('body,html').animate({scrollTop:0},400);
    });

});