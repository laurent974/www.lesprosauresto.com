$(document).ready(function() {

  $('a').on('click touchstart', function(e) {
    var el = $(this);
    var link = el.attr('href');
    window.location = link;
  });

});
