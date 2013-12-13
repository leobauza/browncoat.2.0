// Generated by CoffeeScript 1.6.3
var __slice = [].slice;

(function($, window) {
  var MyPlugin;
  MyPlugin = (function() {
    function MyPlugin(el, options) {
      this.options = $.extend({}, $.fn.myPlugin.defaults, options);
      this.$el = $(el);
    }

    MyPlugin.prototype.myMethod = function(echo) {
      console.log(this.options);
      return this.$el.html(this.options.paramA + ': ' + echo);
    };

    return MyPlugin;

  })();
  $.fn.extend({
    myPlugin: function() {
      var args, option;
      option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
      return this.each(function() {
        var $this, data;
        $this = $(this);
        data = $this.data('myPlugin');
        if (!data) {
          $this.data('myPlugin', (data = new MyPlugin(this, option)));
        }
        if (typeof option === 'string') {
          return data[option].apply(data, args);
        }
      });
    }
  });
  return $.fn.myPlugin.defaults = {
    paramA: "foo",
    paramB: "bar"
  };
})(window.jQuery, window);

console.log($.fn.myPlugin.defaults);

$.fn.myPlugin.defaults.paramA = "something";

console.log($.fn.myPlugin.defaults);

$('h1').myPlugin({
  paramA: 'something elsier'
});

$('h1').myPlugin('myMethod', 'poop');
