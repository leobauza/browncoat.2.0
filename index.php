<?php include('./includes/_header.php'); ?>

<?php

require 'Slim/Slim.php';

$app = new Slim();


$app -> get('/', function() {
	include './views/_home.php' ;
});
$app -> get('/libraries(/)', function() {
	include './views/_libraries.php' ;
});
$app -> get('/css(/)', function() {
	include './views/_css.php';
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
