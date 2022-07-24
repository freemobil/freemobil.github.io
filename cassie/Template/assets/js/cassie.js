$(function(){
  'use strict'

  feather.replace();

  const psSidebarBody = new PerfectScrollbar('#dpSidebarBody', {
    suppressScrollX: true
  });

  $('.nav-sidebar .with-sub').on('click', function(e){
    e.preventDefault()

    $(this).parent().toggleClass('show');
    $(this).parent().siblings().removeClass('show');

    psSidebarBody.update();
  })

  $('.burger-menu:first-child').on('click', function(e){
    e.preventDefault();
    $('body').toggleClass('toggle-sidebar');
  })

  $('.header-search .form-control').on('focusin', function(e){
    $(this).parent().addClass('active');
  })

  $('.header-search .form-control').on('focusout', function(e){
    $(this).parent().removeClass('active');
  })

  $(window).scroll(function() {
    if(!$('#themeSkin').length) {
      var scroll = $(window).scrollTop();

      if (scroll >= 100) {
        $('.content-right-components').addClass('scroll-top');
      } else {
        $('.content-right-components').removeClass('scroll-top');
      }
    }
  });

  // set theme skin if it has been set
  var hasSkin = Cookies.get('theme-skin');
  if(hasSkin) {
    $('head').append('<link id="themeSkin" rel="stylesheet" href="../assets/css/skin.'+hasSkin+'.css">');

    $('.card-theme').each(function(){
      var name = $(this).attr('data-title');
      if(name === hasSkin) {
        $(this).addClass('theme-selected');
      } else {
        $(this).removeClass('theme-selected');
      }
    })
  }
})
