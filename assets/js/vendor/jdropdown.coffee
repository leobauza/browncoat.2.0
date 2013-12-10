#write a dropdown plugin here
define (require) ->

	toggle = '[data-plugin=dropdown] [data-role=toggle]'
	class Dropdown
		constructor: (el) ->
			$(el).on('click.bc.dropdown', @.toggle)
		
		toggle: (e) ->
			e.preventDefault()
			e.stopPropagation()
			$parent = $(@).closest('[data-plugin=dropdown]')
			isActive = $parent.hasClass('open')
			
			if !isActive 
				$(@).trigger 'open.bc.dropdown'
				closeDropdowns(e, @)
				$parent.toggleClass('open')
			else
				closeDropdowns()
		
		useOutside: (word) ->
			console.log word
		

	closeDropdowns = (e ,that) ->
		$(toggle).each (e) ->
			$parent = $(@).closest('[data-plugin=dropdown]')
			if !$parent.hasClass('open') then return
			#console.log @
			$parent.not($(that).closest('[data-plugin=dropdown]')).removeClass('open')		
			$(@).trigger 'close.bc.dropdown'
	
		
	$(document).on('click.bc.dropdown', closeDropdowns)	
	$(toggle).on('open.bc.dropdown', -> console.log "dropdown open")
	$(toggle).on('close.bc.dropdown', -> console.log "dropdown close")
	
	dropdown = new Dropdown(toggle)