define(function(require){
	var numbers = [1, 5, 10, 15, 2, 4, 6];
	var results = numbers.map( function(x) { return x * 2 } );
	console.log("results: ", results);

	function func(msg) {
		console.log("my message outside:", msg);
		return function(msg) {
			console.log("my message inside: ", msg);
		}
	}
	
	func("my message")("the message");

	var puzzlers = [
		function ( a ) { return 8*a - 10; }, 
		function ( a ) { return (a-3) * (a-3) * (a-3); }, 
		function ( a ) { return a * a + 4; },
		function ( a ) { return a%3; }	
	];
	var start = 2;
	var applyAndEmpty = function(num, funcs) {
		var length = funcs.length;
		for(var i = 0; i<length; i++){
			// var shifter = funcs.shift();
			// console.log(shifter);
			// num = shifter(num); //funcs.shift()(num);
			num = funcs.shift()(num);
		}
		return num;
	};
	console.log("puzzlers: ", applyAndEmpty(start, puzzlers));



});
