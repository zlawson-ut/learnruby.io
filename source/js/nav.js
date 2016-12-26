'use strict';

var UX = UX || {};
var navBreak = 1024;
/**
 * Nav class
 *
 * @namespace UX
 * @class Nav
 */
 var Nav = (function ($) {

  /**
   * Constructor for the Nav class
   * @constructor
   * @param {object} options - Optional parameters that can be instantiated by the class
   */
   function Nav(options) {
    /**
     * @property {object} this.options - Combined options object created from any passed in options and any default Class options.
     */
     this.options = $.extend({}, Nav.defaults, options);
     this.init();
   }

  /**
   * @property {object} defaults - The default values
   */
   Nav.defaults = {};

  /**
   * Initialize the Nav and bind the events
   *
   * @method init
   */
   Nav.prototype.init = function () {
    this.navFixed = false;
    this.navVisible = true;
    this.navOpen = false;
    this.mobileNavOpen = false;
    this.position = $(window).scrollTop();
    this.up = true;
    this.navHeight = $('#header').outerHeight();
    this.navWidth = $(window).width();
    this.headerHeight = $('#header-section').outerHeight();
    this.bindEvents();
    this.navHandler();
  };

  /**
   * Bind events to the navigation elements
   *
   * @method bindEvents
   * @return null
   */
   Nav.prototype.bindEvents = function () {

    /**
     * Manages the event when the menu is clicked
     *
     * @event (#nav .menu).click
     */
     var that = this;
     $('#header .menu').on('click', function (e) {
      e.stopPropagation();
      e.preventDefault();
      if (!($('.hot-dog').hasClass('active'))) {
        $('.hot-dog').addClass('active');
      }
        //Closed nav
        // if Nav open and desktop size
        if(that.navOpen && $(window).width() >= 1024) {
          $('html').removeClass('nav-open');
          $('html').addClass('nav-closed');
          that.navOpen = false
          that.navMobileOpen = false
        } 
        //if nav closed and desktop size
        else if (!that.navOpen && $(window).width() >= 1024) {
          $('html').addClass('nav-open');
          $('html').removeClass('nav-closed');
          $('html').removeClass('nav-mobile-closed');
          that.navOpen = true;
        }
        //if nav open and mobile size
        else if (that.navMobileOpen && $(window).width() <= 1023) {
          $('html').removeClass('nav-mobile-open');
          $('html').addClass('nav-mobile-closed');
          that.navMobileOpen = false
        } 
        //if nav closed and mobile size
        else if (!that.navMobileOpen && $(window).width() <= 1023) {
          $('html').addClass('nav-mobile-open');
          $('html').removeClass('nav-mobile-closed');
          $('html').removeClass('nav-closed');
          that.navMobileOpen = true;
        }
        
      });

    /**
     * Shows the main navigation when the mouse reaches the top of the screen
     * if it's scrolled.
     *
     * @event #main-nav.mouseover
     */
     $('#header').mouseover(function () {
      if (this.navFixed) {
        $('#header').addClass('visible');
        this.navVisible = true;
      }
    }.bind(this));

    /**
     * Hides the mobile nav if a link is clicked
     *
     * @event (.mobile-nav .link).click
     */
    //  $('#header .menu').on('click', function (e) {
    //   e.stopPropagation;
    //   if (this.navOpen) {
    //     $('html').removeClass('nav-open');
    //     $('html').addClass('nav-closed');
    //     this.navOpen = false;
    //   }
    // });

    /**
     * Binds open event to any 1st level menu items with children
     *
     * @event (.menu__item .sub-menu-link)
     */
    //  $('.menu__item .sub-menu-link').on('click', function (e) {
    //   e.stopPropagation();
    //   e.preventDefault();
    //   $('.menu__item .sub-menu-link').not(e.target).parent().removeClass('open');
    //   $(e.target).parent().toggleClass('open');
    // });



    // $('li.menu__item.has-children').focusin( function (e) {
    //   if (e.target)
    //   if (!$(this).hasClass('open')) {
    //     $(this).addClass('open');
    //   }
    // });

    // $('li.menu__item.has-children').focusout( function (e) {
    //     $(this).removeClass('open');
    // });

    /**
     * Manages the scroll events for the main navigation
     *
     * @event window.scroll
     */
     $(window).on('scroll', function () {
      window.requestAnimationFrame(this.navHandler.bind(this));
      window.requestAnimationFrame(this.scrollDirection.bind(this));
      if (this.navOpen){
        this.navOpen = false
        $('html').removeClass('nav-open');
        $('html').addClass('nav-closed');
      }


    }.bind(this));

    /**
     * Changes the nav height variale on window resize
     *
     * @event window.resize
     */
     $(window).on('resize', function () {

      if (this.navWidth != $(window).width()){
        this.navWidth = $(window).width();

        if ($('html').hasClass('nav-open')) {
          $('html').removeClass('nav-open');
          $('html').addClass('nav-closed');
        // $('html').removeClass('nav-mobile-open');
      } else if ($('html').hasClass('nav-mobile-open')) {
        $('html').removeClass('nav-mobile-open');
        $('html').addClass('nav-mobile-closed');
      }
      // if ($('html').hasClass('nav-open') || $('html').hasClass('nav-mobile-open')) {
      //   $('html').removeClass('nav-open');
      //   // $('html').removeClass('nav-mobile-open');
      // }
      $('.menu__item .sub-menu-link').parent().removeClass('open')
      this.navOpen = false
      this.navMobileOpen = false
      this.headerHeight = $('#header-section').outerHeight();
      

    }
  }.bind(this));
   };

  /**
   * navHandler takes care of showing and hiding the main navigation
   *
   * @method navHandler
   * @return {this.navFixed} Boolean
   */

   Nav.prototype.navHandler = function () {
    var y = $(window).scrollTop();
    var hm = $('#header');

    if (!this.navOpen && !$('.menu__item .sub-menu-link').parent().hasClass('open')) {

      if ((y >= (this.headerHeight) && !this.navFixed) || (this.navWidth >= 1024)) {
        $('html').addClass('fixed');
        this.navFixed = true;
      }

      if (y == 0 && this.navFixed && !this.navMobileOpen) {
        $('html').removeClass('fixed');
        this.navFixed = false;
      }

      if (y < this.headerHeight && this.up && !this.navVisible && !this.navMobileOpen) {
        $('html').removeClass('fixed');
        this.navFixed = false;
        hm.addClass('visible');
        this.navVisible = true;
      }

      if (y >= this.headerHeight && this.up && !this.navVisible) {
        hm.addClass('visible');
        this.navVisible = true;
      }

      if (y >= this.navHeight && !this.up && this.navVisible && this.navWidth <= 1024 && !this.navMobileOpen) {
        hm.removeClass('visible');
        this.navVisible = false;
      }
      // if (this.navMobileOpen){
      //   $('html').addClass('fixed');
      //   hm.addClass('visible');
      //   this.navFixed = true;
      //   this.navVisible = true;
      // }
    }

    return;

  };



  /**
   * scrollDirection determines the direction of scroll
   *
   * @return { this.position } stores the position of the top of the window until a delta can be resolved
   * @return { this.direction } sets to up or down
   */
   Nav.prototype.scrollDirection = function () {
    var y = $(window).scrollTop();
    
    if (y - this.position > 10) {
      this.position = y;
      this.up = false;
      return;
    }
    if (y - this.position < -10) {
      this.position = y;
      this.up = true;
      return;
    }

    return;

  };

  $("#menu-toggle").hover(function(){
    if($(window).width() > 1024){
      $(".hot-dog").addClass("active");
      $("html").addClass("nav-open");
    }
  });

  $( ".right" ).mouseleave(function() {
    $( "html" ).removeClass( "nav-open" );
  });

  $(document).keydown(function(e) {
    if (e.which == 32 && $(window).width() > 1024) {
      if($( "html" ).hasClass( "nav-open" ) ){
        $( "html" ).removeClass( "nav-open" );
      } else {
        $(".hot-dog").addClass("active");
        $("html").addClass("nav-open");
      }
      return false;
    }
  });


  /**
   * @returns {Object} Navobject
   * @memberof UX.Nav
   */


   return Nav;

 }(jQuery));

jQuery(document).ready(function () {
  UX.Nav = new Nav();
  UX.Nav.navHandler();
});