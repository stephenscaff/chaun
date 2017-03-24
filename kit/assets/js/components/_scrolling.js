/**
 * Wow Inits
 *
 * Currently used inside a signup modal.
 *
 * @see scss/components/_signup.scss
 * @see scss/components/_modals.scss
 * @see js/vendor/_wow.js
 */

var wow = new WOW(
  {
    boxClass:     'js-scroll',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       150,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null // optional scroll container selector, otherwise use window
  }
);
wow.init();


/**
 * Refresh/Rerun our animation
 */
// refreshAnimation: function(){
//   settings.mast.removeClass(settings.animateClass);
//   mast.offsetWidth = mast.offsetWidth;  
//   settings.mast.addClass(settings.animateClass);
// }