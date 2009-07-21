$(document).ready(function(){
  original_height = $('#wrapper').outerHeight();
  body_height();
});
$(window).resize(function(){
  body_height();
});


function body_height(){
  var hg = $(window).height();
  if(hg > original_height) $('#wrapper').css('height', (hg-80)+"px");
}