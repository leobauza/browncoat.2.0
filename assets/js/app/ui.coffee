define (require) ->
	markers = require('cs!app/markers')
	jdrop = require('cs!vendor/jdropdown')
	
	ui = 
		init: ->
			@btnDropdown()
			@navigation()
	
		resize: ->
			@navigation()
	
		btnDropdown: ->
			#console.log jdrop
			#jdrop.useOutside("my word")
		
		navigation: ->
			#go mobile or desktop...also pass the width so we can get more specific in mobile
			if not $('.site-nav .btn-dropdown').length
				$('.site-nav .menu > li.dropdown > a').after '<i class="btn-dropdown">v</i>'
			if markers.win > 1024 then @desktopNav(markers.win) else @mobileNav(markers.win)
	
		desktopNav: (w) ->
			#console.log "desktop nav: ", w
			$('.site-nav .menu > li.dropdown').unbind('click mouseenter mouseleave').mouseenter ->
					$(@).find('.dropdown-menu').show()
			.mouseleave ->
					$(@).find('.dropdown-menu').hide()
	
		mobileNav: (w) ->
			#console.log "mobile nav: ", w
			$('.site-nav .menu > li.dropdown').unbind 'mouseenter mouseleave'
			$('.site-nav .menu > li.dropdown > .btn-dropdown').unbind('click').click (e) ->
				e.preventDefault()
				$(@).toggleClass 'is-active'
				$(@).parent().find('.dropdown-menu').toggle()
	
