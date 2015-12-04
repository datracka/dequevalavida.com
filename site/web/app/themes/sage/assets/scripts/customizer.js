(function($) {
  // Site title
  wp.customize('blogname', function(value) {
    value.bind(function(to) {
      $('.brand').text(to);
    });
  });
})(jQuery);

(function($) {
  //https://jamesflorentino.github.io/nanoScrollerJS/
  jQuery.ready(function() {
    $(".nano").nanoScroller();
  });
})(jQuery);
