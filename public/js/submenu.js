$(".five li ul").hide();
$(".five li:has('.submenu')").hover(
  function(){
  $(".five li ul").stop().fadeToggle(300);}
);
