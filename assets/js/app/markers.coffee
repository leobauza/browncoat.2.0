define (require) ->
	$ = require('jquery')
	helpers = require('cs!app/helpers')
	
	markers =
		win: $(window).width()
		ieVer: helpers.getIeVer()
		