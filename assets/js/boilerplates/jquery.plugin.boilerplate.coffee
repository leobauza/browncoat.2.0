# ;(function ( $, window, document, undefined ) {
# 
# 	var 
# 		pluginName = 'myplugin'
# 	;
# 
# 	function Plugin( element, options ) {
# 		//the modal
# 		this.element = element;
# 		//used to set defaults and have the option of data from markup
# 		var
# 			$plugin = $(this.element),
# 			data = $plugin.data()
# 		;
# 		//default settings :: data comes in plugin overlay event and id
# 		this.options = $.extend( {
# 			'myoption' : (data.myoption) ? data.myoption : 'my default',
# 			'myoption2' : (data.myoptions2) ? data.myoption2 : 'my default 2'
# 		}, options) ;
# 		this._name = pluginName;
# 		this.init(stuff);
# 	}
# 	
# 	Plugin.prototype = {
# 		init : function (stuff) {
# 			//my init code
# 			
# 			//call my methods from init
# 			this.myMethod(stuff);
# 		}
# 		, myMethod : function(stuff) {
# 			//my event
# 		}
# 	}
# 
# 	// A really lightweight plugin wrapper around the constructor, 
# 	// preventing against multiple instantiations
# 	$.fn[pluginName] = function ( options ) {
# 		return this.each(function () {
# 			if (!$.data(this, 'plugin_' + pluginName)) {
# 				$.data(this, 'plugin_' + pluginName, 
# 				new Plugin( this, options ));
# 			}
# 		});
# 	}
# 
# })( jQuery, window, document );

# Reference jQuery
$ = jQuery

# Adds plugin object to jQuery
$.fn.extend
	# Change pluginName to your plugin's name.
	pluginName: (options) ->
		# Default settings
		settings =
			option1: true
			option2: false
			debug: false

		# Merge default settings with options.
		settings = $.extend settings, options

		# Simple logger.
		log = (msg) ->
			console?.log msg if settings.debug
		
		# _Insert magic here._
		return @each ()->
			log "Preparing magic show."
			# You can use your settings in here now.
			log "Option 1 value: #{settings.option1}"



$("body").pluginName
	debug: true

###

OPTIONS DEFAULTS:
'myoption' : (data.myoption) ? data.myoption : 'my default', 
'myoption2' : (data.myoption2) ? data.myoption2 : 'my default 2'	

###

#data api built into plugin
#$('[data-plugin=plugin]').myplugin();
