$(document).ready(function() {
  var width = $(window).width()
  var height = $(window).height()

  if (width < 450){
    $('li').removeClass('hvr-pulse-grow');
    $('i').removeClass('hvr-grow-rotate');
  }

  if (height < 768){
    $('li').removeClass('hvr-pulse-grow');
    $('i').removeClass('hvr-grow-rotate');
  }

});
