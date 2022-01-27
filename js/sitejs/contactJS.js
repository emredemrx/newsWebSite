
/* VanillaTilt.init(document.querySelectorAll(".box"), {
    max: 1,
    speed: 1,
    easing:"cubic-bezier(.03,.98,.52,.99)",
    perspective:300,
    transition:true
});
import "../jquery-3.6.0.min.js";
 */

//-------form yenileme-------

$("#contactName").val("");
$("#contactEmail").val("");
$("#contactKonu").val("");
$("#contactMessage").val("");

//------------ form animasyonu ------------
$('.contact-form').find('.form-control').each(function() {
    var targetItem = $(this).parent();
    if ($(this).val()) {
      $(targetItem).find('label').css({
        'top': '10px',
        'fontSize': '14px'
      });
    }
  });
  $('.contact-form').find('.form-control').focus(function() {
    $(this).parent('.input-block').addClass('focus');
    $(this).parent().find('label').animate({
      'top': '10px',
      'fontSize': '14px'
    }, 300);
  });
  $('.contact-form').find('.form-control').blur(function() {
    if ($(this).val().length == 0) {
      $(this).parent('.input-block').removeClass('focus');
      $(this).parent().find('label').animate({
        'top': '25px',
        'fontSize': '18px'
      }, 300);
    }
  });
  //-------------------------------------


  $( "#contactMessage" ).keydown(function() {
    var emre = $("#contactMessage").val();
    document.getElementById("harfsayisi").innerHTML = emre.length;
     if(emre.length == 0){
      document.getElementById("harfsayisi").innerHTML = 0;
    }
  });