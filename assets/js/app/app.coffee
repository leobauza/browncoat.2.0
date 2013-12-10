define (require) ->
	$ = require('jquery')
	migrate = require('jqueryM')
	markers = require('cs!app/markers')
	helpers = require('cs!app/helpers')
	ui = require('cs!app/ui')
	plugins = require('cs!app/plugins')
	
	helpers.init()
	ui.init()
	
	#log
	# console.log "markers: ", markers
	# console.log "helpers: ", helpers
	# console.log "ui: ", ui
	# console.log "plugins: ", plugins
	
	$(window).resize ->
		markers.win = $(window).width()
		ui.resize()
		