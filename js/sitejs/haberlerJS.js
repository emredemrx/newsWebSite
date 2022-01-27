/* Demo purposes only */
$(".hover").mouseleave(
    function() {
      $(this).removeClass("hover");
    }
  );
$(function(){
	$(".newsNewstitle").pKisalt({limit: 180, goster: false});
  $(".haberTitleKisalt").pKisalt({limit: 50, goster: false});
  
});