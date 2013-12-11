define (require) ->
	numbers = [1, 5, 10, 15, 2, 4, 6]
	results = numbers.map (x) -> x * .5
	
	
	console.log "numbers: ", results
	
	passengers = [ ["Thomas", "Meeks"], 
	                   ["Gregg", "Pollack"], 
	                   ["Christine", "Wong"], 
	                   ["Dan", "McGaw"] ];
	
	modifiedName = passengers.map (name) ->
		"#{name[0]} #{name[1]}"
	
	console.log "names: ", modifiedName
	
	
	console.log Math.pow 2,3
	
	
	func = (a) ->
		a + 10
	
	console.log func(5)