$(document).ready(function(){
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    spaceBetween: 0,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    });
 });

var getDay = $(".week-area").attr("data-getDay");

if(getDay !=""){
    $('.'+getDay+'').addClass("pageactive");
}

var day = $(".week-area").attr("data-gun");
$('li[data-gunayyil='+ day +']').addClass("active");
$('a[data-gunayyil='+ day +']').addClass("active");
          
//$("."+ day +"").addClass("active");data attr ile yapılabilir yapamadım 
