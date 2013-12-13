#wrapper function for AMD usage
((root, factory) ->
		if typeof define is 'function' and define.amd
			define(['jquery'], factory)
		else
			factory(root.jQuery, window)
)(this, ($, window) ->
 
	# Define the plugin class
	class MyPlugin

		# REPLACED these with $.fn.myPlugin.defaults
		defaults:
			paramA: 'foo'
			paramB: 'bar'

		constructor: (el, options) ->
			#console.log @defaults
			#@options = $.extend({}, @defaults, options)
			@options = $.extend({}, $.fn.myPlugin.defaults, options)
			@$el = $(el)

		# Additional plugin methods go here
		myMethod: (echo) ->
			console.log @options
			@$el.html(@options.paramA + ': ' + echo)

	# Define the plugin
	$.fn.extend myPlugin: (option, args...) ->
		@each ->
			$this = $(this)
			data = $this.data('myPlugin')
			if !data
				$this.data 'myPlugin', (data = new MyPlugin(this, option))
			if typeof option == 'string'
				data[option].apply(data, args)
		
	# Allow to be set from the outside
	$.fn.myPlugin.defaults =
		paramA: "foo"
		paramB: "bar" 

)


# $.fn.myPlugin.defaults.paramB = "not-bar"
# $('h1').myPlugin({
# 	paramA: "not-foo"
# })
# $('h1').myPlugin('myMethod', 'stuff')
