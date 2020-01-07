// Import polyfills
import "core-js/stable";
import "regenerator-runtime/runtime";


jQuery(document).ready(function ( $ ) {

  // smooth scroll to ID
  $('.menu-item a[href*="#"]').on('click', function (e) {
    e.preventDefault();

    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top - 120 // choose what you need
    }, 500, 'linear');
  });

});