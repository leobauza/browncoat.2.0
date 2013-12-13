((root, factory) ->
	if typeof define is 'function' and define.amd
		define(['jquery'], factory)
	else
		factory(root.jQuery, window)

)(this, ($, window) ->

	# set plugin defaults
	defaults = 
		parent: '[data-plugin=dropdown]'
		toggle: '[data-role=toggle]'

	#toggle = '[data-plugin=dropdown] [data-role=toggle]'

	# Define the plugin class
	class Plugin

		constructor: (el, options) ->
			self = @
			@options = $.extend({}, defaults, options)
			@$el = $(el)
			@$el.on 'click.bc.dropdown', (e) -> self.toggle(e, @)
			#console.log "options: ", @options.parent
		
		# Additional plugin methods go here
		toggle: (e, that) ->
			# console.log "toggle"
			# console.log @
			# console.log that
			
			e.preventDefault()
			e.stopPropagation()
			$parent = $(that).closest( @options.parent )
			isActive = $parent.hasClass('open')
			
			if !isActive
				$(that).trigger 'open.bc.dropdown'
				closeDropdowns(e, that)
				$parent.toggleClass('open')
			else
				closeDropdowns()
		
		useOutside: (word) ->
			console.log "public function: ", "#{word} = what you passed into the useOutside method"
		
	
	closeDropdowns = (e, that) ->
		$("#{defaults.parent} #{defaults.toggle}").each (e) ->
			$parent = $(@).closest( defaults.parent )
			if !$parent.hasClass('open') then return
			$parent.not($(that).closest( defaults.parent )).removeClass('open')
			$(@).trigger 'close.bc.dropdown'

	# Define the plugin
	$.fn.extend jdropdown: (option, args...) ->
		@each ->
			$this = $(this)
			data = $this.data('jdropdown')
			if !data
				$this.data 'jdropdown', (data = new Plugin(this, option))
			if typeof option is 'string'
				data[option].apply(data, args)
	


	$(document).on('click.bc.dropdown', closeDropdowns)	
	$("#{defaults.parent} #{defaults.toggle}")
		.on('open.bc.dropdown', -> console.log "dropdown open")
		.on('close.bc.dropdown', -> console.log "dropdown close")
	
	# Allow to be set from the outside
	$.fn.jdropdown.defaults = defaults
	$.fn.jdropdown.Plugin = Plugin

)


