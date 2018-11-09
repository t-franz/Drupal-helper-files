$(document).ready(function(){

  $(".toggle").click(function() {
      $('#nav').toggleClass("expanded");
  });

  $(".menu a").click(function() {
      $('#nav').toggleClass("expanded");
  });
  $('#nav.expanded a').on('click', function(e) {
        $('#nav').toggleClass("expanded");
  });

  // Add scrollspy to <body>
  $("#nav").scrollspy({ offset: -68, animate: true });

  $( "#formular input" ).change(function() {
    $( "#formular").addClass('validate');
  });

});
