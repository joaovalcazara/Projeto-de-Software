$(function() {
    $(window).on("scroll", function() {
        var navegator = document.getElementById("pato");
        if($(window).scrollTop() > 50) {
            $(navegator).addClass("changed");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(navegator).removeClass("changed");
        }
    });
});