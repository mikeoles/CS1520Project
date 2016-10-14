$(document).ready(function(){

  $('nav ul li').hover(function(){
    $(this).css('background-color','darkblue');
    $(this).children('a').css('color','white');
  }, function(){
    $(this).css('background-color','white');
    $(this).children('a').css('color','darkblue');
  });

});
