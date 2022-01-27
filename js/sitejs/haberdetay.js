$(document) .ready (function () { 
    $(window) .scroll (function () { 
        if ($ (this) .scrollTop ()> 310) { 
            $ ('.sosyalLinkler').addClass ('sabit'); 
        } else {
            $('.sosyalLinkler').removeClass('sabit');
        }
    });
});

$(function(){
	
  $(".haberTitleKisalt").pKisalt({limit: 35, goster: false});
  $(".ustmaptitle").pKisalt({limit: 50, goster: false});
  $(".oncekihaber").pKisalt({limit: 10, goster: false});
  $(".sonrakihaber").pKisalt({limit: 10, goster: false});
});