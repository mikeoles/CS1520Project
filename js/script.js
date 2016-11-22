$(document).ready(function(){

  $('nav ul li').hover(function(){
    $(this).css('background-color','darkblue');
    $(this).children('a').css('color','white');
  }, function(){
    $(this).css('background-color','white');
    $(this).children('a').css('color','darkblue');
  });

  $('.signup-form').hide();

  $('#altFormTitle').hide();

  $('#formTitle').click(function(){
    $('.signup-form').show();
  });

  $('#formTitle').click(function () {
      $('html, body').animate({scrollTop:$(document).height()}, 'slow');
      return false;
  });

  $('#formTitle').click(function () {
    $('#contactSection').hide();
  });

  $('#formTitle').click(function () {
    $(this).hide();
  });

  $('#formTitle').click(function () {
    $('#altFormTitle').show();
  });

  $('#altFormTitle').click(function() {
      location.reload();
  });

  $(window).scroll(function() {
    $(".appear").each(function() {
      var objectBottom = $(this).offset().top + $(this).outerHeight();
      var windowBottom = $(window).scrollTop() + $(window).innerHeight();
      if (objectBottom < windowBottom) {
        if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
      } else {
        if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
      }
    });
  }); $(window).scroll(); 

});
