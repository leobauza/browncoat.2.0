define (require) ->
	$ = require('jquery')
	migrate = require('jqueryM')

	$('body').addClass 'coffee'
	console.log "at app"