<?php include('./includes/_header.php'); ?>

<?php

require 'Slim/Slim.php';

$app = new Slim();

//Landing pages
$app -> get('/', function() {
	include './views/_home.php' ;
});
$app -> get('/libraries(/)', function() {
	include './views/_libraries.php' ;
});
$app -> get('/css(/)', function() {
	include './views/_css.php';
});
$app -> get('/layouts(/)', function() {
	include './views/_layouts.php';
});


//Layout subpages
$app -> get('/layouts/:id(/)', function($id) {

	if($id == 'fluidrows') {
		include './views/layouts/_fluidRows.php';
	}
	if($id == 'staticsidebar') {
		include './views/layouts/_staticSidebar.php';
	}

	echo '<p><a href="/layouts">back to layouts</a></p>';

});






$app -> get('/css/:id(/)', function($id) {


	if($id == 'lists') {
		include './views/_lists.php';
	}
	if($id == 'forms') {
		include './views/_forms.php';
	}

});



$app->run();

?>

<?php include('./includes/_footer.php'); ?>
