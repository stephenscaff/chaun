/*jshint -W030*/
/*globals feature: false */

/**
 * Global Site inits
 */
var site = {
  
  /**
   * Featured Init
   */
  featureJS: function(){
    //no-js 
    $("html").removeClass("no-js");
    //no-svg 
    if (!feature.svg) {
      $("html").addClass("no-svg");
    }
    //no-flexbox 
    if (!feature.cssFlexbox) {
      $("html").addClass("no-flexbox");
    }
  },


  /**
   * Laxy Load
   * @see js/vendor/_unveil.js
   */
  lazy: function(){
    $(".js-lazy").unveil(10, function() {
      $(this).load(function() {
        //this.style.opacity = 1;
        //$(this).parent().addClass('loaded');
        //$(this).fadeOut(0).fadeIn(400);
      });
    });
  },

  /** 
   * Wow Init
   */
   scrollReveals: function(){

    var wow = new WOW({
      boxClass:     'js-scroll',    
      animateClass: 'animated', 
      offset:       150,         
      mobile:       true,  
      live:         true,
      callback:     function(box) {},
      scrollContainer: null 
    });

    wow.init();
   },

  /** 
   * Plax Init
   */
  plax: function(){
    $('.js-parallax').parallax(6, 'false');
  },

  /** 
   * Work Slider
   * Basic image slider for work pages.
   * Includes index/total count ui
   */
  workSlider: function(){

    // Vars
    var slider = $('.js-slider'),
        displayItems = $('.js-slider-items'),
        displayCurrent = $('.js-slider-current');

    /**
     * Init Owl Slider
     */
    slider.owlCarousel({
      items: 1,
      nav : true, // Show next and prev buttons
      dots:false,
      navpeed : 300,
      paginationSpeed : 400,
      touchDrag: true,
      pullDrag: true,
      singleItem:true,
      loop: false,
      navigationText : false,
      fallbackEasing: "easeInOutCubic",
      responsiveRefreshRate: 0,
      navText: ["<i class='icon-left'></i>","<i class='icon-right'></i>"]
    });

    // Get total number of slides
    var sliderItems = $('.owl-item:not(.cloned)').length;
   
    /**
     * Display Slides total on load
     */
    displayItems.html(sliderItems);

    /** 
     * On Slide, count and display current/index
     */
    slider.on('changed.owl.carousel', function(event) {
      // Get index
      var sliderCurrent = event.item.index + 1;
      // Show Current
      displayCurrent.html(sliderCurrent);
    });
  },
};


/**
 * Doc ready them inits
 */
$(function(){
  // Feature JS
  site.featureJS();
  // Plax
  if($('.js-lazy').length){
    site.lazy();
  }

  if ($('.js-scroll').length){
    site.scrollReveals();
  }
  // Plax
  if($('.js-parallax').length){
    site.plax();
  }

  // Plax
  if($('.js-slider').length){
    site.workSlider();
  }
});
