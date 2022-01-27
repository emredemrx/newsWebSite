$(document).ready(function(){
    $('#nav-icon4').click(function(){
        $(this).toggleClass('open');
    });
});
function ac(){
        
    setTimeout(function(){$(".nav").css("width","100%");},200);
    /*    setTimeout(function(){ $("#nav").show(); },200);  */
    $("#na").toggle(300);
    setTimeout(function(){$('#nav-iconkapali').toggleClass('open');},300);
   
    setTimeout(function(){$("#logoid").toggleClass('logorota');},300);
}
function kapat(){
   
    $(".nav").css("width","0");
    $('#nav-icon4').removeClass('open');
    /*setTimeout(function(){ $("#nav").hide(); },200); */ 
    $("#na").toggle(200);
    setTimeout(function(){$('#nav-iconkapali').toggleClass('open'); },100);
      
}

function canliyayinAcKapa(){
    $("#c").toggleClass("canlikapat");
    $("#c").
    setTimeout(function(){ document.getElementById("v").innerHTML = '<iframe loading="lazy" style="position: absolute;" src="https://player.artiyerelmedya.com/guneytv" scrolling="auto" allowfullscreen="allowfullscreen" width="100%" height="100%" frameborder="0"></iframe>'; }, 500);
}

// polyfill
window.requestAnimationFrame = (function(){
return  window.requestAnimationFrame       ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame    ||
    function( callback ){
        window.setTimeout(callback, 950 / 60);
    };
})();

var speed = 7000;
(function currencySlide(){
    var currencyPairWidth = $('span:first-child').outerWidth();
    $(".marquee").animate({marginLeft:-currencyPairWidth},speed, 'linear', function(){
    $(this).css({marginLeft:0}).find("span:last").after($(this).find("span:first"));
        });
        requestAnimationFrame(currencySlide);
})();

