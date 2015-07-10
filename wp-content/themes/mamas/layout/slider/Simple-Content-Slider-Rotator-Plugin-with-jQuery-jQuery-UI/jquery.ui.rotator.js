/*! jquery.ui.rotator.js
 *
 * URL: http://corydorning.com/projects/multimenu
 *
 * @author: Cory Dorning
 * @modified: 08/12/2014
 *
 * dependencies: jQuery 1.9+, jQuery UI 1.9+
 *
 * rotator is a jQuery UI widget that cycles through
 * any number of ads, content or images.
 *
 */


;(function($) {
  "use strict";

  $.widget('ui.rotator', {
    _version: "v1.0.0",

    version: function() { return this._version; },

    // default options
    options: {
      auto: true,
      effect: 'fade',
      delay: 5000,
      selector: '> *',
      enter: {
        direction: 'right', // default for 'slide', not used by 'fade'
        duration: 1000
      },
      exit: {
        direction: 'left', // default for 'slide', not used by 'fade'
        duration: 1000
      }
    },

    _create: function() {
      // create a unique namespace for events that the widget
      // factory cannot unbind automatically.
      this._namespaceID = this.eventNamespace;

      // set options via HTML5 data
      $.extend(this.options, this.element.data('options'));

      var self = this,
        o = self.options,
        $el = self.element,

        // get rotators
        $rotators = self.$rotators = $el.find(o.selector).wrapAll('<div class="ui-rotator-content"/>').hide(),

        // create a toggler
        $toggler = self.$toggler = $('<ul/>').addClass('ui-rotator-toggler');


      // loop through rotators
      $.each($rotators, function(i) {
        var $rotator = $(this),

            // create toggle for this rotator
            $toggle = $('<li/>')
              // add css hooks
              .addClass('ui-rotator-toggle ui-state-default')

              // save associated rotator
              .data('ui-rotator', $rotator);

        // add classes for css hooks
        $rotator.addClass('ui-widget-content ui-rotator ui-rotator-' + (i +1));

        // append toggle for each rotator to the toggler
        $toggler.append($toggle)
      });

      $el
        // add classes for css hooks
        .addClass('ui-rotators ui-widget')

        // append toggler
        .append($toggler);

      // display first rotator
      self._rotatorHeight($rotators.first().show());
      self._togglerState($toggler.children().first());

      // add event handlers
      self._bindEvents();

      // start auto rotation
      if (self.options.auto) {
        self._setInterval();
      }
    }, // _create method


    // set rotator height
    _rotatorHeight: function($rotator) {
      $rotator
        .parent()
        .height($rotator.outerHeight());
    },

    // set toggler states
    _togglerState: function($currToggle) {
      var self = this;

      self.$toggler.children()
        .removeClass('ui-state-active')
        .filter($currToggle)
        .addClass('ui-state-active');
    },


    _bindEvents: function() {
      var self = this,
          $toggler = self.$toggler;

      $toggler
        // hover state
        .on('mouseenter mouseleave', '.ui-rotator-toggle',  function() {
          $(this).toggleClass('ui-state-default ui-state-hover');
        })

        // activate rotator
        .on('click', '.ui-rotator-toggle:not(.ui-state-active)', function(ev) {
          var $this = $(this),
              $rotator = $this.data('ui-rotator');

          // set toggler state and rotator height
          self._togglerState($this);
          self._rotatorHeight($rotator);

          // actual mouse click
          if (!ev.triggered) {
            // stop auto rotate
            clearInterval(self._uiRotatorInterval);
          }

          // run transition
          self.rotate($rotator);

        });
    },

    // rotation setInterval ID
    _uiRotatorInterval: null,

    // auto rotate function
    _setInterval: function() {
      var self = this,
        delay = self.options.delay,
        $togglers = self.$toggler.children(),

      // keep track of rotator
        rotator = 0,

      // trigger next rotator
        nextRotator = function() {
          $togglers
            .eq(rotator)
            .trigger({type: 'click', triggered: true});

          if (rotator < $togglers.length - 1) {
            rotator++;
          } else {
            rotator = 0;
          }
        };

      // start the rotation
      self._uiRotatorInterval = setInterval(nextRotator, delay);

    },

    rotate: function($rotator) {
      var self = this,
          effect = self.options.effect,
          enter = self.options.enter,
          exit = self.options.exit,
          $rotators = self.$rotators,
          $prev = $rotators.filter(':visible');

      // show current
      $rotator
        .stop(true, true)
        .toggle(effect, enter);

      // hide previous
      $prev
        .stop(true, true)
        .toggle(effect, exit)
        ;
    }

  }); // $.widget('rotator')
})(jQuery);
// end rotator