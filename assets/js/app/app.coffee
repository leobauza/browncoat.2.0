define (require) ->
	$ = require('jquery')
	migrate = require('jqueryM')
	helpers = require('cs!app/helpers')
	markers = require('cs!app/markers')
	appui = require('cs!app/ui')
	
	helpers.init()
	appui.init()
	console.log "markers: ", markers
	console.log "helpers: ", helpers
	console.log "ui: ", appui
	
	$(window).resize ->
		markers.win = $(window).width()
		appui.resize()
		