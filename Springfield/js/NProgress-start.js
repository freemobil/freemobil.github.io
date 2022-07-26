$('body').show();
NProgress.start();

$(window).load(function() {
  // Animate loader off screen
  NProgress.done();
  setTimeout(function() { $('.hider').fadeOut(); }, 600);
});
$('.blank').addClass('hider');