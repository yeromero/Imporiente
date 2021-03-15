jQuery(document).ready(listo);

function listo(){
    jQuery(".menu").click(function(e){
        e.preventDefault();
        jQuery("header .contenedor nav").toggleClass("open");
        jQuery(".menu i").toggleClass("fa-times");
    })
    jQuery("header .contenedor nav a").click(function(){
        jQuery("header .contenedor nav").removeClass("open");
        jQuery(".menu i").removeClass("fa-times");
        var dev = jQuery(this).attr("href");
        jQuery("html,body").animate({
            "scrollTop": jQuery(dev).offset().top -76
        })
    })
}
$(document).ready(function(){
    $('.slider').bxSlider({
        slideMargin:10
    });
  });