/**
 *  Offcanvas Menu Nav
 *  Menu interaction for mobile or mobile-styled navs
 *  @author stephen scaff
 */
(function($) {
  var s,
  menuNav = {
    settings: {
      body: $('body'),
      menuToggle: $(".js-menu-toggle"),
    },
    init: function() {
      s = this.settings;
      this.bindEvents();
    },
    bindEvents: function(){
      s.menuToggle.click(function(e) {
          e.preventDefault();
          menuNav.toggleMenu();
        });
      $(document).keyup(function(e) {
        if ($("body").hasClass("js-menu--is-open") && e.which === 27) {
          menuNav.toggleMenu();
        }
      });
    },
    toggleMenu: function(){
      s.body.toggleClass("js-menu--is-open");
    },
    closeMenu: function(){
      $(".js-menu--is-open").removeClass("js-menu--is-open");
    },
  };
  menuNav.init();
})(jQuery);

