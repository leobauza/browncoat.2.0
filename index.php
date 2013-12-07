<?php

function ih() {
	include './includes/_header.php';
}

require_once 'Slim/Slim.php';

$app = new Slim();


//Landing pages
$app -> get('/', 'ih', function() {
	include './views/_home.php' ;
});
$app -> get('/libraries(/)', 'ih', function() {
	include './views/_libraries.php' ;
});
$app -> get('/css(/)', 'ih', function() {
	include './views/_css.php';
});
$app -> get('/layouts(/)', 'ih', function() {
	include './views/_layouts.php';
});


//Layout subpages
$app -> get('/layouts/:id(/)', 'ih', function($id) {

	if($id == 'fluidrows') {
		include './views/layouts/_fluidRows.php';
	}
	if($id == 'staticsidebar') {
		include './views/layouts/_staticSidebar.php';
	}

	echo '<p><a href="/layouts">back to layouts</a></p>';

});



$app -> get('/test(/)', 'ih', function() {
	include './views/etc/_layoutTest.php';
});



$app -> get('/css/:id(/)', 'ih', function($id) {

	if($id == 'lists') {
		include './views/_lists.php';
	}
	if($id == 'forms') {
		include './views/_forms.php';
	}

});



$app->run();

include './includes/_footer.php';

?>


