#write a dropdown plugin here
define (require) ->
	jdrop = ->
		console.log 'jdrop'
		$('[data-plugin=dropdown] [data-role=toggle]').click (e) ->
			e.preventDefault()
			if $('.dropdown-group.open').not($(@).closest('[data-plugin=dropdown]')).length then $('.dropdown-group.open').removeClass('open')
			$(@).closest('[data-plugin=dropdown]').toggleClass('open')
