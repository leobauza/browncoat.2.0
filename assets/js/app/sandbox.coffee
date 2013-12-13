define (require) ->
	sandbox = require('cs!vendor/sandbox')
	#sandboxjs = require('vendor/sandboxjs')
	boilerplate = require('cs!boilerplates/amd.jquery.plugin.boilerplate')
	
	sandbox =
		init: ->
			console.warn "using the sandbox"
			@boilerplate()
		
		boilerplate: ->
			console.log "boilerplate returns this: ", boilerplate
			console.warn "boilerplate use example in sandbox"
			$('h1').myPlugin {
				paramA: "Param A"
			}
			$('h1').myPlugin('myMethod', 'This is in my h1')

			#console.log jdrop
			#jdrop.useOutside("my word")
		
	