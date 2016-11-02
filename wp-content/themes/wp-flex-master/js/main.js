/* WordPress Author Script: */
// If you don't want to define another alternative to the jQuery name.
// You really like to use $ and don't care about using another library's $ method
//
// jQuery that comes with WordPress automatically calls the jQuery.noConflict();
// function, which gives control of the $ variable back to whichever library
// that first implemented it.
//
// If you are loading a different copy of jQuery, you'll need to manually call
// jQuery.noConflict();, if necessary, from one of your JavaScript files.
//
// jQuery.noConflict();

// This is most frequently used in the case where you still want the benefits of really
// short jQuery code, but don't want to cause conflicts with other libraries.
$(document).ready( function() {

  // Menu 
    $('.open-menu').on('click', function() {
    $(this).removeClass('active');
    $('.close-menu').addClass('active')
    $('.menu-wrapper').addClass('active');
  });
  $('.close-menu').on('click', function() {
    $(this).removeClass('active');
    $('.open-menu').addClass('active')
    $('.menu-wrapper').removeClass('active');
    $('.menu-backgrounds').find('.active').removeClass('active');
  });  


  // Menu bg change 
  $('.nav-item').on('mouseenter', function () {
    console.log('cool');
    var bgChange = $(this).find('a').attr('title'); 
    console.log(bgChange);
    $('.menu-backgrounds').find('.active').removeClass('active');
    $('.menu-backgrounds').find('.' + bgChange ).addClass('active');
  });


 

  // Home intro
  $('.intro-button').on('click', function() {
    $('.intro-wrapper').addClass('notactive');
    $('.home-container').addClass('active');
    $('.header-wrapper').addClass('active');
  });

  // Home image fade
  var $imgTrigger = $( '.image-trigger' );
  $( '.ha-waypoint' ).each( function(i) {
    var $el = $( this ),
    animClassDown = $el.data( 'animateDown' );

    $el.waypoint( function( direction ) {
      if( direction === 'down' && animClassDown ) {
        $el.addClass("image-active");
      }
    }, { offset: '50%' });
  });

});